<?php
namespace ExternalModules;

require_once __DIR__ . '/Project.php';
require_once __DIR__ . '/Records.php';
require_once __DIR__ . '/ProjectChild.php';
require_once __DIR__ . '/Form.php';
require_once __DIR__ . '/Field.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/pseudo-queries/AbstractPseudoQuery.php';
require_once __DIR__ . "/pseudo-queries/LogPseudoQuery.php";
require_once __DIR__ . '/pseudo-queries/DataPseudoQuery.php';

use Exception;
use UIState;
use InvalidArgumentException;
use PHPSQLParser\PHPSQLParser;
use PHPSQLParser\PHPSQLCreator;

class Framework
{
    const NESTED_REPEATABLE_SETTING_FIX_FRAMEWORK_VERSION = 9;
	const LOGGING_IMPROVEMENTS_FRAMEWORK_VERSION = 11;
    const HIDDEN_SETTING_FIX_FRAMEWORK_VERSION = 13;

    const REDCAP_PAGE_PREFIX = "<!DOCTYPE HTML>";
	const LOGIN_PAGE_EXCERPT = "<input type='hidden' id='redcap_login_a38us_09i85' name='redcap_login_a38us_09i85'";
	
    private static $CSRF_DOUBLE_SUBMIT_COOKIE = null;
    private static $removeLogsLimit = null;

	/**
	 * The framework version
	 */
	private $VERSION;

	/**
	 * The module for which the framework is initialized
	 */
	private $module;
	public $records;
	
	private $recordId;
	private $userBasedSettingPermissions = true;

	/**
	 * Constructor
	 * @param AbstractExternalModule $module The module for which the framework is initialized.
	 */
	function __construct($module){
        if(!($module instanceof AbstractExternalModule)){
			throw new Exception(ExternalModules::tt("em_errors_70")); //= Initializing the framework requires a module instance.
        }

        $this->module = $module;
        $this->initialize();

		// Initialize language support (parse language files etc.).
        ExternalModules::initializeLocalizationSupport($module->PREFIX, $module->VERSION);
        
        $this->records = new Records($module);

		/**
		 * Disallow invalid configuration options at module instantiation (and enable) time.
		 * We don't want to perform these checks at getConfig() time, because it will break
		 * the list of modules available to enable.
		 */
		$this->checkSettings();
    }
    
    // This method is used by unit testing.
    /**
     * @return void
     */
    private function initialize(){
        $frameworkVersion = ExternalModules::getFrameworkVersion($this->getModuleInstance());
        if($frameworkVersion > ExternalModules::getMaxSupportedFrameworkVersion()){
            throw new Exception(ExternalModules::tt('em_errors_130', $frameworkVersion));
        }
        else if($frameworkVersion > 1){
            $this->getModuleInstance()->framework = $this;
        }

		$this->VERSION = $frameworkVersion;
    }

    function __call($methodName, $args){
        /**
         * Forwards to the Project object are restricted to v7 forward to avoid the following scenario:
         * - A developer utilizes this feature and releases a module update.
         * - Someone installs that module update on an older REDCap version that does not yet include this forward code.
         * - The module crashes with a method not found error.
         */
        if($this->shouldForwardToProject($methodName)){
            return call_user_func_array([$this->getProject(), $methodName], $args);
        }

        throw new \Exception("Call to undefined method: $methodName");
    }

    /**
     * @return bool
     */
    function shouldForwardToProject($methodName){
        return $this->VERSION >= 7 && method_exists(Project::class, $methodName);
    }

	/**
	 * @return void
	 */
	function checkSettings()
	{
		$config = $this->getConfig();
		$systemSettings = $config['system-settings'] ?? null;
		$projectSettings = $config['project-settings'] ?? null;

		$hiddenReservedSettingKeys = [];
		foreach(ExternalModules::getReservedSettings() as $setting){
			if(($setting['hidden'] ?? null) === true){
				$hiddenReservedSettingKeys[$setting['key']] = true;
			}
		}

		$settingKeys = [];
		$checkSettings = function($settings) use ($hiddenReservedSettingKeys, &$settingKeys, &$checkSettings): void{
			if($settings === null){
				return;
			}

			$keysToRemove = [];
			foreach($settings as $details) {
				$key = $details['key'] ?? null;
				if(!$this->isSettingKeyValid($key)){
					//= The '{0}' module has a setting named '{1}' that contains invalid characters. Only lowercase characters, numbers, and dashes are allowed.
					throw new Exception(ExternalModules::tt("em_errors_62", $this->getPrefix(), $key)); 
				}

				if (isset($settingKeys[$key]) || isset($hiddenReservedSettingKeys[$key])) {
					if(ExternalModules::isReservedSettingKey($key)){
						//= The '{0}' setting key is reserved for internal use.  Please use a different setting key in your module.
						throw new Exception(ExternalModules::tt("em_errors_6", $key));
					} else {
						//= The '{0}' module defines the '{1}' setting multiple times!
						throw new Exception(ExternalModules::tt("em_errors_61", $this->getPrefix(), $key)); 
					}
				} else {
					$settingKeys[$key] = true;

					if(($details['allow-project-overrides'] ?? null) === true){
						$keysToRemove[] = $key;
					}
				}

				if(($details['type'] ?? null) === 'sub_settings'){
					$checkSettings($details['sub_settings']);
				}
			}

			foreach($keysToRemove as $key){
				unset($settingKeys[$key]);
			}
		};

		$checkSettings($systemSettings);
		$checkSettings($projectSettings);
	}

	/**
	 * @return bool
	 */
	function isSettingKeyValid($key)
	{
		// Only allow lowercase characters, numbers, dashes, and underscores to ensure consistency between modules (and so we don't have to worry about escaping).
		return !preg_match("/[^a-z0-9-_]/", $key ?? '');
	}

    private function getPrefix(){
        return $this->getModuleInstance()->PREFIX;
    }

	//region Language features

	/**
	 * Returns the translation for the given language file key.
	 * 
	 * @param string $key The language file key.
	 * 
	 * Note: Any further arguments are used for interpolation. When the first additional parameter is an array, it's members will be used and any further parameters ignored. 
	 * 
	 * @return string The translation (with interpolations).
	 */
	public function tt($key) {
		// Get all arguments and send off for processing.
		return ExternalModules::tt_process(func_get_args(), $this->getPrefix(), false);
	}

	/**
	 * Transfers one (interpolated) or many strings (without interpolation) to the module's JavaScript object.
	 *
	 * @param mixed $key (optional) The language key or an array of language keys.

	 * Note: When a single language key is given, any number of arguments can be supplied and these will be used for interpolation. When an array of keys is passed, then any further arguments will be ignored and the language strings will be transfered without interpolation. If no key or null is passed, all language strings will be transferred.
	 *
	 * @return void
	 */
	public function tt_transferToJavascriptModuleObject($key = null) {
		// Get all arguments and send off for processing.
		ExternalModules::tt_prepareTransfer(func_get_args(), $this->getPrefix());
	}

	/**
	 * Adds a key/value pair directly to the language store for use in the JavaScript module object. 
	 * Value can be anything (string, boolean, array).
	 *
	 * @param string $key The language key.
	 * @param mixed $value The corresponding value.
	 *
	 * @return void
	 */
	public function tt_addToJavascriptModuleObject($key, $value) {
		ExternalModules::tt_addToJSLanguageStore($key, $value, $this->getPrefix(), $key);
	}

	//endregion

	/**
	 * Gets all project settings as an array. Useful for cases when you may
	 * be creating a custom config page for the external module in a project. 
	 * Each setting is formatted as: [ 'yourkey' => 'value' ]
	 * (in case of repeating settings, value will be an array).
	 * This return value can be used as input for setProjectSettings().
	 * 
	 * @param int|null $pid
	 * @return array containing settings
	 */
    function getProjectSettings($pid = null)
	{
        $pid = self::requireProjectId($pid);
        $prefix = $this->getPrefix();

		if ($this->VERSION < 5) {
		    return ExternalModules::getProjectSettingsAsArray($prefix, $pid);
		}
		
		$vSettings = ExternalModules::getProjectSettingsAsArray($prefix, $pid, false);
		// Transform settings to match the output from ExternalModules::formatRawSettings,
		// i.e. remove 'value' keys, preserving the project values "one level up"
		$settings = array();
		foreach ($vSettings as $key => $values) {
			$settings[$key] = $values["value"];
		}
		return $settings;
	}

	/**
	 * Saves all project settings (to be used with getProjectSettings). Useful
	 * for cases when you may create a custom config page or need to overwrite all
	 * project settings for an external module.
	 *
	 * @param array $settings Array of project-specific settings
	 * @param int|null $pid
	 *
	 * @return void
	 */
	function setProjectSettings($settings, $pid = null)
	{
		$pid = self::requireProjectId($pid);
		if ($this->VERSION >= 5) {
			ExternalModules::saveProjectSettings($this->getPrefix(), $pid, $settings);
		}
		else{
			// In older framework versions, this method existed but did nothing (besides require the $pid).
		}
	}

	/**
	 * @return array
	 */
	function getProjectsWithModuleEnabled(){
		$results = $this->query("SELECT CAST(s.project_id AS CHAR) AS project_id
								FROM redcap_external_modules m
								JOIN redcap_external_module_settings s
									ON m.external_module_id = s.external_module_id
								JOIN redcap_projects p
									ON s.project_id = p.project_id
								WHERE
									m.directory_prefix = ?
									AND s.value = 'true'
									AND s.key = ?
									AND p.date_deleted IS NULL
									AND p.status IN (0,1) 
									AND p.completed_time IS NULL
		", [$this->getPrefix(), ExternalModules::KEY_ENABLED]);

		$pids = [];
		while($row = $results->fetch_assoc()) {
			$pids[] = $row['project_id'];
		}

		return $pids;
	}

	function callFromModuleInstance($name, $arguments){
        if($this->isSafeToForwardMethodToFramework($name)) {
            if(
                ($name === 'getSubSettings' && $this->VERSION < 5)
                ||
                ($name === 'getData' && $this->VERSION < 7)
            ){
                $name .= '_v1';
            }

			return call_user_func_array([$this, $name], $arguments);
		}

		//= The following method does not exist: {0}
		throw new Exception(ExternalModules::tt("em_errors_69", $name)); 
	}

	/**
	 * @return array
	 */
	function getSubSettings($key, $pid = null)
	{
		$settingsAsArray = ExternalModules::getProjectSettingsAsArray($this->getPrefix(), $this->requireProjectId($pid));

		$settingConfig = $this->getSettingConfig($key);

		return $this->getSubSettings_internal($settingsAsArray, $settingConfig);
	}

	/**
	 * @return array
	 *
	 * @param array[] $settingsAsArray
	 */
	private function getSubSettings_internal($settingsAsArray, $settingConfig)
	{
		$subSettings = [];
		foreach($settingConfig['sub_settings'] as $subSettingConfig){
			$subSettingKey = $subSettingConfig['key'];

			if(($subSettingConfig['type'] ?? null) === 'sub_settings'){
				// Handle nested sub_settings recursively
				$values = $this->getSubSettings_internal($settingsAsArray, $subSettingConfig);

				$recursionCheck = function($value): bool{
					// We already know the value must be an array.
					// Recurse until we're two levels away from the leaves, then wrap in $subSettingKey.
					// If index '0' is not defined, we know it's a leaf since only setting key names will be used as array keys (not numeric indexes).
					return isset($value[0][0]);
				};
			}
			else{
				$values = $settingsAsArray[$this->getModuleInstance()->prefixSettingKey($subSettingKey)]['value'] ?? null;
				if($values === null){
					continue;
				}
				else if (!is_array($values)){
					/**
					 * This setting was likely moved from a plain old setting into sub-settings.
					 * Preserve the existing value as if it was saved under the current setting configuration.
					 */
					$values = [$values];
				}

				$recursionCheck = function($value) use ($subSettingConfig): bool{
					// Only recurse if this is an array, and not a leaf.
					// If index '0' is not defined, we know it's a leaf since only setting key names will be used as array keys (not numeric indexes).
					// Using array_key_exists() instead of isset() is important since there could be a null value set.
					return
                        is_array($value)
                        &&
                        array_key_exists(0, (array) $value)
                        &&
                        !(
                            ($subSettingConfig['repeatable'] ?? null)
                            &&
                            (
                                $this->VERSION < static::NESTED_REPEATABLE_SETTING_FIX_FRAMEWORK_VERSION
                                ||
                                !is_array($value[0])
                            )
                        );
				};
			}

			$formatValues = function($values) use ($subSettingConfig, $subSettingKey, $recursionCheck, &$formatValues){
				for($i=0; $i<count($values); $i++){
					$value = $values[$i];
					
					if($recursionCheck($value)){
						$values[$i] = $formatValues($value);
					}
					else{
						$values[$i] = [
							$subSettingKey => $value
						];
					}
				}

				return $values;
			};

			$values = $formatValues($values);

			$subSettings = ExternalModules::array_merge_recursive_distinct($subSettings, $values);
		}

		return $subSettings;
    }
    
    // This method is not in the main method documentation, but does exist in the docs for v5,
    // and should remain supported long term for backward compatibility.
    /**
     * @return array[]
     */
    function getSubSettings_v1($key, $pid = null)
	{
		$keys = [];
		$config = $this->getSettingConfig($key);
		foreach($config['sub_settings'] as $subSetting){
			$keys[] = $this->getModuleInstance()->prefixSettingKey($subSetting['key']);
		}

		$rawSettings = ExternalModules::getProjectSettingsAsArray($this->getPrefix(), self::requireProjectId($pid));

		$subSettings = [];
		foreach($keys as $key){
            $values = $rawSettings[$key]['value'] ?? null;
            if($values === null){
                continue;
            }

			for($i=0; $i<count($values); $i++){
				$value = $values[$i];
				$subSettings[$i][$key] = $value;
			}
		}

		return $subSettings;
	}

	function getSQLInClause($columnName, $values){
        if($this->VERSION >= 4){
            throw new Exception(ExternalModules::tt('em_errors_122'));
        }
        
        return ExternalModules::getSQLInClause($columnName, $values);
	}

	/**
	 * @return User
	 */
	function getUser($username = null){
		if(empty($username)){
            $username = ExternalModules::getUsername();
			if($username === null){
				//= A username was not specified and could not be automatically detected.
				throw new Exception(ExternalModules::tt("em_errors_71")); 
			}
		}

		return new User($this, $username);
	}

	/**
	 * @return Project
	 */
	function getProject($project_id = null){
        $project_id = $this->requireProjectId($project_id);
		return new Project($this, $project_id);
	}

	/**
	 * @return int
	 */
	function requireInteger($mixed){
		return ExternalModules::requireInteger($mixed);
	}

	/**
	 * @return string
	 */
	function getJavascriptModuleObjectName(){
		return ExternalModules::getJavascriptModuleObjectName($this->getModuleInstance());
	}

	/**
	 * @return bool
	 */
	function isRoute($routeName){
		return ExternalModules::isRoute($routeName);
	}

	/**
	 * @return (int|string)|null
	 */
	function getRecordIdField($pid = null){
        return $this->getProject($pid)->getRecordIdField();
	}

	/**
	 * @return array
	 */
	function getRepeatingForms($eventId = null, $projectId = null){
		if($eventId === null){
			$eventId = $this->getEventId($projectId);
		}

        $result = $this->query('select * from redcap_events_repeat where event_id = ?', $eventId);

        $forms = [];
        while($row = $result->fetch_assoc()){
            $forms[] = $row['form_name'];
        }

        return $forms;
    }

	/**
	 * @return Query
	 */
	function createQuery(){
		return ExternalModules::createQuery();
	}

	function getEventId($projectId = null){
        if(!$projectId){
            $eventId = $_GET['event_id'] ?? null;
            if($eventId){
                return $eventId;
            }
        }
        
        return $this->getProject($projectId)->getEventId();
    }

	/**
	 * @return string
	 */
	function getSafePath($path, $root=null){
		$moduleDirectory = $this->getModulePath();
		if(!$root){
			$root = $moduleDirectory;
		}
		else if(!file_exists($root)){
			$moduleDirectory = rtrim($moduleDirectory, '/\\');
			$root = $moduleDirectory . DIRECTORY_SEPARATOR . $root;
		}

		return ExternalModules::getSafePath($path, $root);
	}

	function convertIntsToStrings($row){
		return ExternalModules::convertIntsToStrings($row);
	}

	/**
	 * @return bool
	 */
	function isPage($path){
        $path = APP_PATH_WEBROOT . $path;
        return strpos($_SERVER['REQUEST_URI'], $path) === 0;
    }

    function createProject($title, $purpose, $project_note=null){
        $userid = ExternalModules::getUsername();
        $userInfo = \User::getUserInfo($userid);
        if (!($userInfo['allow_create_db'] ?? false)) throw new Exception("ERROR: You do not have Create Project privileges!");

        return ExternalModules::createProject($title, $purpose, $project_note);
    }

    /**
     * @return void
     */
    function importDataDictionary($project_id,$path){
        $dictionary_array = $this->dataDictionaryCSVToMetadataArray($path, 'array');

        if(!defined('PROJECT_ID')){
            // Do nothing.  This 'if' statement was added for PHP 8 compatibility during unit testing.
        }
        else{
            //Return warnings and errors from file (and fix any correctable errors)
            list ($errors_array, $warnings_array, $dictionary_array) = \MetaData::error_checking($dictionary_array);
        }

        // Save data dictionary in metadata table
        $sql_errors = $this->saveMetadataCSV($dictionary_array,$project_id);

        // Display any failed queries to Super Users, but only give minimal info of error to regular users
        if (count($sql_errors) > 0) {
            throw new Exception("There was an error importing ".$path." Data Dictionary");
        }
    }

    /**
     * @return (false|null|string)[][]|false
     *
     * @param null|string $returnType
     */
    function dataDictionaryCSVToMetadataArray($csvFilePath, $returnType = null)
    {
        $dd_column_var = array("0" => "field_name", "1" => "form_name","2" => "section_header", "3" => "field_type",
            "4" => "field_label", "5" => "select_choices_or_calculations","6" => "field_note", "7" => "text_validation_type_or_show_slider_number",
            "8" => "text_validation_min", "9" => "text_validation_max","10" => "identifier", "11" => "branching_logic",
            "12" => "required_field", "13" => "custom_alignment","14" => "question_number", "15" => "matrix_group_name",
            "16" => "matrix_ranking", "17" => "field_annotation"
        );

        // Set up array to switch out Excel column letters
        $cols = \MetaData::getCsvColNames();

        // Extract data from CSV file and rearrange it in a temp array
        $newdata_temp = array();
        $i = 1;

        // Set commas as default delimiter (if can't find comma, it will revert to tab delimited)
        $delimiter 	  = ",";
        $removeQuotes = false;

        if (($handle = fopen($csvFilePath, "rb")) !== false)
        {
            // Loop through each row
            while (($row = fgetcsv($handle, 0, $delimiter)) !== false)
            {
                // Skip row 1
                if ($i == 1)
                {
                    ## CHECK DELIMITER
                    // Determine if comma- or tab-delimited (if can't find comma, it will revert to tab delimited)
                    $firstLine = implode(",", $row);
                    // If we find X number of tab characters, then we can safely assume the file is tab delimited
                    $numTabs = 6;
                    if (substr_count($firstLine, "\t") > $numTabs)
                    {
                        // Set new delimiter
                        $delimiter = "\t";
                        // Fix the $row array with new delimiter
                        $row = explode($delimiter, $firstLine);
                        // Check if quotes need to be replaced (added via CSV convention) by checking for quotes in the first line
                        // If quotes exist in the first line, then remove surrounding quotes and convert double double quotes with just a double quote
                        $removeQuotes = (substr_count($firstLine, '"') > 0);
                    }
                    // Increment counter
                    $i++;
                    // Check if legacy column Field Units exists. If so, tell user to remove it (by returning false).
                    // It is no longer supported but old values defined prior to 4.0 will be preserved.
                    if (strpos(strtolower($row[2]), "units") !== false)
                    {
                        return false;
                    }
                    continue;
                }
                if($returnType == null){
                    // Loop through each row and create array
                    $json_aux = array();
                    foreach ($row as $key => $value){
                        $json_aux[$dd_column_var[$key]] = $value;
                    }
                    $newdata_temp[$json_aux['field_name']] = $json_aux;
                }else if($returnType == 'array'){
                    // Loop through each column in this row
                    for ($j = 0; $j < count($row); $j++) {
                        // If tab delimited, compensate sightly
                        if ($delimiter == "\t") {
                            // Replace characters
                            $row[$j] = str_replace("\0", "", $row[$j]);
                            // If first column, remove new line character from beginning
                            if ($j == 0) {
                                $row[$j] = str_replace("\n", "", ($row[$j]));
                            }
                            // If the string is UTF-8, force convert it to UTF-8 anyway, which will fix some of the characters
                            if (function_exists('mb_detect_encoding') && mb_detect_encoding($row[$j]) == "UTF-8") {
				$row[$j] = mb_convert_encoding($row[$j], 'UTF-8', mb_list_encodings());
                            }
                            // Check if any double quotes need to be removed due to CSV convention
                            if ($removeQuotes) {
                                // Remove surrounding quotes, if exist
                                if (substr($row[$j], 0, 1) == '"' && substr($row[$j], -1) == '"') {
                                    $row[$j] = substr($row[$j], 1, -1);
                                }
                                // Remove any double double quotes
                                $row[$j] = str_replace("\"\"", "\"", $row[$j]);
                            }
                        }
                        // Add to array
                        $newdata_temp[$cols[$j + 1]][$i] = $row[$j];
                    }
                }
                $i++;
            }
            fclose($handle);
        } else {
            // ERROR: File is missing
            throw new Exception("ERROR. File is missing!");
        }

        // If file was tab delimited, then check if it left an empty row on the end (typically happens)
        if ($delimiter == "\t" && $newdata_temp['A'][$i-1] == "")
        {
            // Remove the last row from each column
            foreach (array_keys($newdata_temp) as $this_col)
            {
                unset($newdata_temp[$this_col][$i-1]);
            }
        }

        // Return array with data dictionary values
        return $newdata_temp;

    }

    // Save metadata when in DD array format
    /**
     * @return string[]
     */
    private function saveMetadataCSV($dictionary_array, $project_id, $appendFields=false, $preventLogging=false)
    {
        $status = 0;
        $Proj = ExternalModules::getREDCapProjectObject($project_id);

        // If project is in production, do not allow instant editing (draft the changes using metadata_temp table instead)
        $metadata_table = ($status > 0) ? "redcap_metadata_temp" : "redcap_metadata";

        // DEV ONLY: Only run the following actions (change rights level, events designation) if in Development
        if ($status < 1)
        {
            // If new forms are being added, give all users "read-write" access to this new form
            $existing_form_names = array();
            if (!$appendFields) {
                $results = $this->query("select distinct form_name from ".$metadata_table." where project_id = ?",[$project_id]);
                while ($row = $results->fetch_assoc()) {
                    $existing_form_names[] = $row['form_name'];
                }
            }
            $newforms = array();
            foreach (array_unique($dictionary_array['B']) as $new_form) {
                if (!in_array($new_form, $existing_form_names)) {
                    //Add rights for EVERY user for this new form
                    $newforms[] = $new_form;
                    //Add all new forms to redcap_events_forms table
                    $this->query("insert into redcap_events_forms (event_id, form_name) select m.event_id, ?
                                                              from redcap_events_arms a, redcap_events_metadata m
                                                              where a.project_id = ? and a.arm_id = m.arm_id",[$new_form,$project_id]);

                }
            }
            if(!empty($newforms)){
                //Add new forms to rights table
                $data_entry = "[".implode(",1][",$newforms).",1]";
                $this->query("update redcap_user_rights set data_entry = concat(data_entry,?) where project_id = ? ",[$data_entry,$project_id]);
            }

            //Also delete form-level user rights for any forms deleted (as clean-up)
            if (!$appendFields) {
                foreach (array_diff($existing_form_names, array_unique($dictionary_array['B'])) as $deleted_form) {
                    //Loop through all 3 data_entry rights level states to catch all instances
                    for ($i = 0; $i <= 2; $i++) {
                        $deleted_form_sql = '['.$deleted_form.','.$i.']';
                        $this->query("update redcap_user_rights set data_entry = replace(data_entry,?,'') where project_id = ? ",[$deleted_form_sql,$project_id]);
                    }
                    //Delete all instances in redcap_events_forms
                    $this->query("delete from redcap_events_forms where event_id in
							(select m.event_id from redcap_events_arms a, redcap_events_metadata m, redcap_projects p where a.arm_id = m.arm_id
							and p.project_id = a.project_id and p.project_id = ?) and form_name = ?",[$project_id,$deleted_form]);
                }
            }

            ## CHANGE FOR MULTIPLE SURVEYS????? (Should we ALWAYS assume that if first form is a survey that we should preserve first form as survey?)
            // If using first form as survey and form is renamed in DD, then change form_name in redcap_surveys table to the new form name
            if (!$appendFields && isset($Proj->forms[$Proj->firstForm]['survey_id']))
            {
                $columnB = array_unique($dictionary_array['B']);
                $newFirstForm = array_shift($columnB);
                unset($columnB);
                // Do not rename in table if the new first form is ALSO a survey (assuming it even exists)
                if ($newFirstForm != '' && $Proj->firstForm != $newFirstForm && !isset($Proj->forms[$newFirstForm]['survey_id']))
                {
                    // Change form_name of survey to the new first form name
                    $this->query("update redcap_surveys set form_name = ? where survey_id = ?",[$newFirstForm,$Proj->forms[$Proj->firstForm]['survey_id']]);
                }
            }
        }

        // Build array of existing form names and their menu names to try and preserve any existing menu names
        $q = $this->query("select form_name, form_menu_description from $metadata_table where project_id = ? and form_menu_description is not null",[$project_id]);
        $existing_form_menus = array();
        while ($row = $q->fetch_assoc()) {
            $existing_form_menus[$row['form_name']] = $row['form_menu_description'];
        }

        // Before wiping out current metadata, obtain values in table not contained in data dictionary to preserve during carryover (e.g., edoc_id)
        $q = $this->query("select field_name, edoc_id, edoc_display_img, stop_actions, field_units, video_url, video_display_inline
				from $metadata_table where project_id = ?
				and (edoc_id is not null or stop_actions is not null or field_units is not null or video_url is not null)",[$project_id]);
        $extra_values = array();
        while ($row = $q->fetch_assoc())
        {
            if (!empty($row['edoc_id'])) {
                // Preserve edoc values
                $extra_values[$row['field_name']]['edoc_id'] = $row['edoc_id'];
                $extra_values[$row['field_name']]['edoc_display_img'] = $row['edoc_display_img'];
            }
            if ($row['stop_actions'] != "") {
                // Preserve stop_actions value
                $extra_values[$row['field_name']]['stop_actions'] = $row['stop_actions'];
            }
            if ($row['field_units'] != "") {
                // Preserve field_units value (no longer included in data dictionary but will be preserved if defined before 4.0)
                $extra_values[$row['field_name']]['field_units'] = $row['field_units'];
            }
            if ($row['video_url'] != "") {
                // Preserve video_url value
                $extra_values[$row['field_name']]['video_url'] = $row['video_url'];
                $extra_values[$row['field_name']]['video_display_inline'] = $row['video_display_inline'];
            }
        }

        // Determine if we need to replace ALL fields or append to existing fields
        if ($appendFields) {
            // Only append new fields to existing metadata (as opposed to replacing them all)
            $q = $this->query("select max(field_order)+1 from $metadata_table where project_id = ?",[$project_id]);
            $field_order = $q;
        } else {
            // Default field order value
            $field_order = 1;
            // Delete all instances of metadata for this project to clean out before adding new
            $this->query("delete from $metadata_table where project_id = ?", [$project_id]);
        }

        // Capture any SQL errors
        $sql_errors = array();
        // Create array to keep track of form names for building form_menu_description logic
        $form_names = array();
        // Set up exchange values for replacing legacy back-end values
        $convertValType = array("integer"=>"int", "number"=>"float");
        $convertFldType = array("notes"=>"textarea", "dropdown"=>"select", "drop-down"=>"select");

        // Loop through data dictionary array and save into metadata table
        foreach (array_keys($dictionary_array['A']) as $i)
        {
            // If this is the first field of a form, generate form menu description for upcoming form
            // If form menu description already exists, it may have been customized, so keep old value
            $form_menu = "";
            if (!in_array($dictionary_array['B'][$i], $form_names)) {
                if (isset($existing_form_menus[$dictionary_array['B'][$i]])) {
                    // Use existing value if form existed previously
                    $form_menu = $existing_form_menus[$dictionary_array['B'][$i]];
                } else {
                    // Create menu name on the fly
                    $form_menu = ucwords(str_replace("_", " ", $dictionary_array['B'][$i]));
                }
            }
            // Deal with hard/soft validation checktype for text fields
            $valchecktype = ($dictionary_array['D'][$i] == "text") ? "'soft_typed'" : "NULL";
            // Swap out Identifier "y" with "1"
            $dictionary_array['K'][$i] = (strtolower(trim($dictionary_array['K'][$i])) == "y") ? "'1'" : "NULL";
            // Swap out Required Field "y" with "1"	(else "0")
            $dictionary_array['M'][$i] = (strtolower(trim($dictionary_array['M'][$i])) == "y") ? "'1'" : "'0'";
            // Format multiple choices
            if ($dictionary_array['F'][$i] != "" && $dictionary_array['D'][$i] != "calc" && $dictionary_array['D'][$i] != "slider" && $dictionary_array['D'][$i] != "sql") {
                $dictionary_array['F'][$i] = str_replace(array("|","\n"), array("\\n"," \\n "), $dictionary_array['F'][$i]);
            }
            // Do replacement of front-end values with back-end equivalents
            if (isset($convertFldType[$dictionary_array['D'][$i]])) {
                $dictionary_array['D'][$i] = $convertFldType[$dictionary_array['D'][$i]];
            }
            if ($dictionary_array['H'][$i] != "" && $dictionary_array['D'][$i] != "slider") {
                // Replace with legacy/back-end values
                if (isset($convertValType[$dictionary_array['H'][$i]])) {
                    $dictionary_array['H'][$i] = $convertValType[$dictionary_array['H'][$i]];
                }
            } elseif ($dictionary_array['D'][$i] == "slider" && $dictionary_array['H'][$i] != "" && $dictionary_array['H'][$i] != "number") {
                // Ensure sliders only have validation type of "" or "number" (to display number value or not)
                $dictionary_array['H'][$i] = "";
            }
            // Make sure question_num is 10 characters or less
            if (strlen($dictionary_array['O'][$i]) > 10) $dictionary_array['O'][$i] = substr($dictionary_array['O'][$i], 0, 10);
            // Swap out Matrix Rank "y" with "1" (else "0")
            $dictionary_array['Q'][$i] = (strtolower(trim($dictionary_array['Q'][$i])) == "y") ? "'1'" : "'0'";
            // Remove any hex'ed double-CR characters in field labels, etc.
            $dictionary_array['E'][$i] = str_replace("\x0d\x0d", "\n\n", $dictionary_array['E'][$i]);
            $dictionary_array['C'][$i] = str_replace("\x0d\x0d", "\n\n", $dictionary_array['C'][$i]);
            $dictionary_array['F'][$i] = str_replace("\x0d\x0d", "\n\n", $dictionary_array['F'][$i]);
            // Insert edoc_id and slider display values that should be preserved
            $edoc_id 		  = isset($extra_values[$dictionary_array['A'][$i]]['edoc_id']) ? $extra_values[$dictionary_array['A'][$i]]['edoc_id'] : NULL;
            $edoc_display_img = isset($extra_values[$dictionary_array['A'][$i]]['edoc_display_img']) ? $extra_values[$dictionary_array['A'][$i]]['edoc_display_img'] : "0";
            $stop_actions 	  = isset($extra_values[$dictionary_array['A'][$i]]['stop_actions']) ? $extra_values[$dictionary_array['A'][$i]]['stop_actions'] : "";
            $field_units	  = isset($extra_values[$dictionary_array['A'][$i]]['field_units']) ? $extra_values[$dictionary_array['A'][$i]]['field_units'] : "";
            $video_url	  	  = isset($extra_values[$dictionary_array['A'][$i]]['video_url']) ? $extra_values[$dictionary_array['A'][$i]]['video_url'] : "";
            $video_display_inline = isset($extra_values[$dictionary_array['A'][$i]]['video_display_inline']) ? $extra_values[$dictionary_array['A'][$i]]['video_display_inline'] : "0";

            $sql = "insert into $metadata_table (project_id, field_name, form_name, field_units, element_preceding_header, "
                . "element_type, element_label, element_enum, element_note, element_validation_type, element_validation_min, "
                . "element_validation_max, field_phi, branching_logic, element_validation_checktype, form_menu_description, "
                . "field_order, field_req, edoc_id, edoc_display_img, custom_alignment, stop_actions, question_num, "
                . "grid_name, grid_rank, misc, video_url, video_display_inline) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $q = $this->query($sql,
                [
                    $project_id,
                    $this->checkNull($dictionary_array['A'][$i]),
                    $this->checkNull($dictionary_array['B'][$i]),
                    $this->checkNull($field_units),
                    $this->checkNull($dictionary_array['C'][$i]),
                    $this->checkNull($dictionary_array['D'][$i]),
                    $this->checkNull($dictionary_array['E'][$i]),
                    $this->checkNull($dictionary_array['F'][$i]),
                    $this->checkNull($dictionary_array['G'][$i]),
                    $this->checkNull($dictionary_array['H'][$i]),
                    $this->checkNull($dictionary_array['I'][$i]),
                    $this->checkNull($dictionary_array['J'][$i]),
                    $dictionary_array['K'][$i],
                    $this->checkNull($dictionary_array['L'][$i]),
                    $valchecktype,
                    $this->checkNull($form_menu),
                    $field_order,
                    $dictionary_array['M'][$i],
                    $edoc_id,
                    $edoc_display_img,
                    $this->checkNull($dictionary_array['N'][$i]),
                    $this->checkNull($stop_actions),
                    $this->checkNull($dictionary_array['O'][$i]),
                    $this->checkNull($dictionary_array['P'][$i]),
                    $dictionary_array['Q'][$i],
                    $this->checkNull(isset($dictionary_array['R']) ? $dictionary_array['R'][$i] : null),
                    $this->checkNull($video_url),
                    "'".$video_display_inline."'"
                ]
            );
            //Insert into table
            if ($q) {
                // Increment field order
                $field_order++;
            } else {
                //Log this error
                $sql_errors[] = $sql;
            }


            //Add Form Status field if we're on the last field of a form
            if (isset($dictionary_array['B'][$i]) && $dictionary_array['B'][$i] != ($dictionary_array['B'][$i+1] ?? null)) {
                $form_name = $dictionary_array['B'][$i];
                $q = $this->insertFormStatusField($metadata_table, $project_id, $form_name, $field_order);
                //Insert into table
                if ($q) {
                    // Increment field order
                    $field_order++;
                } else {
                    //Log this error
                    // $sql_errors[] = $sql;
                }
            }

            //Add form name to array for later checking for form_menu_description
            $form_names[] = $dictionary_array['B'][$i];

        }

        // Logging
        if (!$appendFields && !$preventLogging) {
            \Logging::logEvent("",$metadata_table,"MANAGE",$project_id,"project_id = ".$project_id,"Upload data dictionary");
        }
        // Return any SQL errors
        return $sql_errors;
    }

    /**
     * @return true
     */
    private function isDataDictionaryFormatCorrect($metadata){
        if(empty($metadata)){
            throw new Exception("The Metadata is empty");
        }else{
            $dd_column_var = array("0" => "field_name", "1" => "form_name","2" => "section_header", "3" => "field_type",
                "4" => "field_label", "5" => "select_choices_or_calculations","6" => "field_note", "7" => "text_validation_type_or_show_slider_number",
                "8" => "text_validation_min", "9" => "text_validation_max","10" => "identifier", "11" => "branching_logic",
                "12" => "required_field", "13" => "custom_alignment","14" => "question_number", "15" => "matrix_group_name",
                "16" => "matrix_ranking", "17" => "field_annotation"
            );
            foreach ($metadata as $dd){
                foreach ($dd as $dd_field => $value){
                    $found = false;
                    foreach ($dd_column_var as $field){
                        if($field == $dd_field){
                            $found = true;
                        }
                    }
                    if(!$found){
                        throw new Exception("Some fields are missing in the Metadata.");
                    }
                }
            }
        }
        return true;
    }

    /**
     * @return null|string[]
     */
    function saveMetadata($project_id, $metadata, $preventLogging=false) {
	    if($this->isDataDictionaryFormatCorrect($metadata)){
            $status = 0;
            $Proj = ExternalModules::getREDCapProjectObject($project_id);

            // If project is in production, do not allow instant editing (draft the changes using metadata_temp table instead)
            $metadata_table = ($status > 0) ? "redcap_metadata_temp" : "redcap_metadata";

            // DEV ONLY: Only run the following actions (change rights level, events designation) if in Development
            if ($status < 1)
            {
                // If new forms are being added, give all users "read-write" access to this new form
                $existing_form_names = array();
                $results = $this->query("select distinct form_name from " . $metadata_table . " where project_id = ?", [$project_id]);
                while ($row = $results->fetch_assoc()) {
                    $existing_form_names[] = $row['form_name'];
                }

                $newforms = array();
                $allforms = array();
                foreach ($metadata as $dd) {
                    array_push($allforms,$dd['form_name']);
                    if (!in_array($dd['form_name'], $existing_form_names)) {
                        //Add rights for EVERY user for this new form
                        $newforms[] = $dd['form_name'];
                        //Add all new forms to redcap_events_forms table
                        $this->query("insert into redcap_events_forms (event_id, form_name) select m.event_id, ?
                                                                  from redcap_events_arms a, redcap_events_metadata m
                                                                  where a.project_id = ? and a.arm_id = m.arm_id",[$dd['form_name'],$project_id]);

                    }
                }
                if(!empty($newforms)){
                    //Add new forms to rights table
                    $data_entry = "[".implode(",1][",$newforms).",1]";
                    $this->query("update redcap_user_rights set data_entry = concat(data_entry,?) where project_id = ? ",[$data_entry,$project_id]);
                }

                //Also delete form-level user rights for any forms deleted (as clean-up)
                foreach (array_diff($existing_form_names, array_unique($allforms)) as $deleted_form) {
                    //Loop through all 3 data_entry rights level states to catch all instances
                    for ($i = 0; $i <= 2; $i++) {
                        $deleted_form_sql = '['.$deleted_form.','.$i.']';
                        $this->query("update redcap_user_rights set data_entry = replace(data_entry,?,'') where project_id = ? ",[$deleted_form_sql,$project_id]);
                    }
                    //Delete all instances in redcap_events_forms
                    $this->query("delete from redcap_events_forms where event_id in
                            (select m.event_id from redcap_events_arms a, redcap_events_metadata m, redcap_projects p where a.arm_id = m.arm_id
                            and p.project_id = a.project_id and p.project_id = ?) and form_name = ?",[$project_id,$deleted_form]);
                }

                ## CHANGE FOR MULTIPLE SURVEYS????? (Should we ALWAYS assume that if first form is a survey that we should preserve first form as survey?)
                // If using first form as survey and form is renamed in DD, then change form_name in redcap_surveys table to the new form name
                if (isset($Proj->forms[$Proj->firstForm]['survey_id']))
                {
                    $columnB = $allforms;
                    $columnBUnique = array_unique($columnB);
                    $newFirstForm = array_shift($columnBUnique);
                    unset($columnB);
                    // Do not rename in table if the new first form is ALSO a survey (assuming it even exists)
                    if ($newFirstForm != '' && $Proj->firstForm != $newFirstForm && !isset($Proj->forms[$newFirstForm]['survey_id']))
                    {
                        // Change form_name of survey to the new first form name
                        $this->query("update redcap_surveys set form_name = ? where survey_id = ?",[$newFirstForm,$Proj->forms[$Proj->firstForm]['survey_id']]);
                    }
                }
            }

            // Build array of existing form names and their menu names to try and preserve any existing menu names
            $q = $this->query("select form_name, form_menu_description from $metadata_table where project_id = ? and form_menu_description is not null",[$project_id]);
            $existing_form_menus = array();
            while ($row = $q->fetch_assoc()) {
                $existing_form_menus[$row['form_name']] = $row['form_menu_description'];
            }

            // Before wiping out current metadata, obtain values in table not contained in data dictionary to preserve during carryover (e.g., edoc_id)
            $q = $this->query("select field_name, edoc_id, edoc_display_img, stop_actions, field_units, video_url, video_display_inline
                    from $metadata_table where project_id = ?
                    and (edoc_id is not null or stop_actions is not null or field_units is not null or video_url is not null)",[$project_id]);
            $extra_values = array();
            while ($row = $q->fetch_assoc())
            {
                if (!empty($row['edoc_id'])) {
                    // Preserve edoc values
                    $extra_values[$row['field_name']]['edoc_id'] = $row['edoc_id'];
                    $extra_values[$row['field_name']]['edoc_display_img'] = $row['edoc_display_img'];
                }
                if ($row['stop_actions'] != "") {
                    // Preserve stop_actions value
                    $extra_values[$row['field_name']]['stop_actions'] = $row['stop_actions'];
                }
                if ($row['field_units'] != "") {
                    // Preserve field_units value (no longer included in data dictionary but will be preserved if defined before 4.0)
                    $extra_values[$row['field_name']]['field_units'] = $row['field_units'];
                }
                if ($row['video_url'] != "") {
                    // Preserve video_url value
                    $extra_values[$row['field_name']]['video_url'] = $row['video_url'];
                    $extra_values[$row['field_name']]['video_display_inline'] = $row['video_display_inline'];
                }
            }

            // Replace ALL fields
            // Default field order value
            $field_order = 1;
            // Delete all instances of metadata for this project to clean out before adding new
            $this->query("delete from $metadata_table where project_id = ?", [$project_id]);

            // Capture any SQL errors
            $sql_errors = array();
            // Create array to keep track of form names for building form_menu_description logic
            $form_names = array();
            // Set up exchange values for replacing legacy back-end values
            $convertValType = array("integer"=>"int", "number"=>"float");
            $convertFldType = array("notes"=>"textarea", "dropdown"=>"select", "drop-down"=>"select");

            // Loop through data dictionary array and save into metadata table
            foreach ($metadata as $i => $metadata){
                // If this is the first field of a form, generate form menu description for upcoming form
                // If form menu description already exists, it may have been customized, so keep old value
                $form_menu = "";
                if (!in_array($metadata['form_name'], $form_names)) {
                    if (isset($existing_form_menus[$metadata['form_name']])) {
                        // Use existing value if form existed previously
                        $form_menu = $existing_form_menus[$metadata['form_name']];
                    } else {
                        // Create menu name on the fly
                        $form_menu = ucwords(str_replace("_", " ", $metadata['form_name']));
                    }
                }
                // Deal with hard/soft validation checktype for text fields
                $valchecktype = ($metadata[$i]['field_type'] == "text") ? "'soft_typed'" : "NULL";
                // Swap out Identifier "y" with "1"
                $metadata[$i]['identifier'] = (strtolower(trim($metadata[$i]['identifier'])) == "y") ? "'1'" : "NULL";
                // Swap out Required Field "y" with "1"	(else "0")
                $metadata[$i]['required_field'] = (strtolower(trim($metadata[$i]['required_field'])) == "y") ? "'1'" : "'0'";
                // Format multiple choices
                if ($metadata[$i]['select_choices_or_calculations'] != "" && $metadata[$i]['field_type'] != "calc" && $metadata[$i]['field_type'] != "slider" && $metadata[$i]['field_type'] != "sql") {
                    $metadata[$i]['select_choices_or_calculations'] = str_replace(array("|","\n"), array("\\n"," \\n "), $metadata[$i]['select_choices_or_calculations']);
                }
                // Do replacement of front-end values with back-end equivalents
                if (isset($convertFldType[$metadata[$i]['field_type']])) {
                    $metadata[$i]['field_type'] = $convertFldType[$metadata[$i]['field_type']];
                }
                if ($metadata[$i]['text_validation_type_or_show_slider_number'] != "" && $metadata[$i]['field_type'] != "slider") {
                    // Replace with legacy/back-end values
                    if (isset($convertValType[$metadata[$i]['text_validation_type_or_show_slider_number']])) {
                        $metadata[$i]['text_validation_type_or_show_slider_number'] = $convertValType[$metadata[$i]['text_validation_type_or_show_slider_number']];
                    }
                } elseif ($metadata[$i]['field_type'] == "slider" && $metadata[$i]['text_validation_type_or_show_slider_number'] != "" && $metadata[$i]['text_validation_type_or_show_slider_number'] != "number") {
                    // Ensure sliders only have validation type of "" or "number" (to display number value or not)
                    $metadata[$i]['text_validation_type_or_show_slider_number'] = "";
                }
                // Make sure question_num is 10 characters or less
                if (strlen($metadata[$i]['question_number']) > 10) $metadata[$i]['question_number'] = substr($metadata[$i]['question_number'], 0, 10);
                // Swap out Matrix Rank "y" with "1" (else "0")
                $metadata[$i]['matrix_ranking'] = (strtolower(trim($metadata[$i]['matrix_ranking'])) == "y") ? "'1'" : "'0'";
                // Remove any hex'ed double-CR characters in field labels, etc.
                $metadata[$i]['field_label'] = str_replace("\x0d\x0d", "\n\n", $metadata[$i]['field_label']);
                $metadata[$i]['section_header'] = str_replace("\x0d\x0d", "\n\n", $metadata[$i]['section_header']);
                $metadata[$i]['select_choices_or_calculations'] = str_replace("\x0d\x0d", "\n\n", $metadata[$i]['select_choices_or_calculations']);
                // Insert edoc_id and slider display values that should be preserved
                $edoc_id 		  = isset($extra_values[$metadata[$i]['field_name']]['edoc_id']) ? $extra_values[$metadata[$i]['field_name']]['edoc_id'] : NULL;
                $edoc_display_img = isset($extra_values[$metadata[$i]['field_name']]['edoc_display_img']) ? $extra_values[$metadata[$i]['field_name']]['edoc_display_img'] : "0";
                $stop_actions 	  = isset($extra_values[$metadata[$i]['field_name']]['stop_actions']) ? $extra_values[$metadata[$i]['field_name']]['stop_actions'] : "";
                $field_units	  = isset($extra_values[$metadata[$i]['field_name']]['field_units']) ? $extra_values[$metadata[$i]['field_name']]['field_units'] : "";
                $video_url	  	  = isset($extra_values[$metadata[$i]['field_name']]['video_url']) ? $extra_values[$metadata[$i]['field_name']]['video_url'] : "";
                $video_display_inline = isset($extra_values[$metadata[$i]['field_name']]['video_display_inline']) ? $extra_values[$metadata[$i]['field_name']]['video_display_inline'] : "0";

                $sql = "insert into $metadata_table (project_id, field_name, form_name, field_units, element_preceding_header, "
                    . "element_type, element_label, element_enum, element_note, element_validation_type, element_validation_min, "
                    . "element_validation_max, field_phi, branching_logic, element_validation_checktype, form_menu_description, "
                    . "field_order, field_req, edoc_id, edoc_display_img, custom_alignment, stop_actions, question_num, "
                    . "grid_name, grid_rank, misc, video_url, video_display_inline) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

                $q = $this->query($sql,
                    [
                        $project_id,
                        $this->checkNull($metadata[$i]['field_name']),
                        $this->checkNull($metadata[$i]['form_name']),
                        $this->checkNull($field_units),
                        $this->checkNull($metadata[$i]['section_header']),
                        $this->checkNull($metadata[$i]['field_type']),
                        $this->checkNull($metadata[$i]['field_label']),
                        $this->checkNull($metadata[$i]['select_choices_or_calculations']),
                        $this->checkNull($metadata[$i]['field_note']),
                        $this->checkNull($metadata[$i]['text_validation_type_or_show_slider_number']),
                        $this->checkNull($metadata[$i]['text_validation_min']),
                        $this->checkNull($metadata[$i]['text_validation_max']),
                        $metadata[$i]['identifier'],
                        $this->checkNull($metadata[$i]['branching_logic']),
                        $valchecktype,
                        $this->checkNull($form_menu),
                        $field_order,
                        $metadata[$i]['required_field'],
                        $edoc_id,
                        $edoc_display_img,
                        $this->checkNull($metadata[$i]['custom_alignment']),
                        $this->checkNull($stop_actions),
                        $this->checkNull($metadata[$i]['question_number']),
                        $this->checkNull($metadata[$i]['matrix_group_name']),
                        $metadata[$i]['matrix_ranking'],
                        $this->checkNull(isset($metadata[$i]['field_annotation']) ? $metadata[$i]['field_annotation'] : null),
                        $this->checkNull($video_url),
                        "'".$video_display_inline."'"
                    ]
                );
                //Insert into table
                if ($q) {
                    // Increment field order
                    $field_order++;
                } else {
                    //Log this error
                    $sql_errors[] = $sql;
                }


                //Add Form Status field if we're on the last field of a form
                if (isset($metadata[$i]['form_name']) && $metadata[$i]['form_name'] != $metadata[$i+1]['form_name']) {
                    $form_name = $metadata[$i]['form_name'];
                    $q = $this->insertFormStatusField($metadata_table, $project_id, $form_name, $field_order);
                    //Insert into table
                    if ($q) {
                        // Increment field order
                        $field_order++;
                    } else {
                        //Log this error
                        // $sql_errors[] = $sql;
                    }
                }

                //Add form name to array for later checking for form_menu_description
                $form_names[] = $metadata[$i]['form_name'];

            }

            // Logging
            if (!$preventLogging) {
                \Logging::logEvent("",$metadata_table,"MANAGE",$project_id,"project_id = ".$project_id,"Upload data dictionary");
            }
            // Return any SQL errors
            return $sql_errors;
	    }
    }

    /**
     * @param string $metadata_table
     * @param int $field_order
     */
    private function insertFormStatusField($metadata_table, $project_id, $form_name, $field_order){
        return $this->query("insert into $metadata_table (project_id, field_name, form_name, field_order, element_type, "
        . "element_label, element_enum, element_preceding_header) values (?,?,?,?,?,?,?,?)"
        ,[$project_id,$form_name . "_complete",$form_name,$field_order,'select', 'Complete?', '0, Incomplete \\n 1, Unverified \\n 2, Complete', 'Form Status']);
    }

    /*
	** Give null value if equals "" (used inside queries)
	*/
    /**
     * @param string $value
     *
     * @return null|string
     */
    private function checkNull($value) {
        if ($value === "" || $value === null || $value === false) {
            return NULL;
        }
        return $value;
    }

    /**
     * @param string $whereClause
     * @param (false|mixed|string)[] $parameters
     */
    public function countLogs($whereClause, $parameters){
        $result = $this->queryLogs("select count(*) where $whereClause", $parameters);
        $row = $result->fetch_row();
        return $row[0];
    }

    // Pass through for any method was added in framework version 5 or greater.
    // We initially allowed pass through for any method without a framework version, but this caused problems when deploying modules using
    // the new/shorter syntax to older REDCap systems that didn't support it.
    // Requiring framework version 5 ensures that module authors write code compatible with older REDCap versions if their module is on an
    // older framework version (even if their REDCap instance supports the new syntax).
    /**
     * @return bool
     */
    public function isSafeToForwardMethodToFramework($name){
        if(
            !$this->shouldForwardToProject($name)
            &&
            !method_exists($this, $name)
        ){
            return false;
        }

        if(
            $this->VERSION >= 5
            ||
            method_exists($this->getModuleInstance(), $name) // For methods that have always been accessible from the module object prior to v5.
            ||
            /**
             * This method has always been callable from the module instance via __call(),
             * but cannot be defined as a method like the others since it conflicts with a
             * static var by the same name defined by one module.
             */
            $name === 'log'
        ){
            return true;
        }

        /**
         * These method have always been callable from AbstractExternalModule::__call(),
         * even though they never existed on that class as explicit methods.
         * They exist here rather than as method stubs in AbstractExternalModule
         * to prevent potential conflicts with existing modules.
         */
        return in_array($name, [
            'tt',
            'tt_transferToJavascriptModuleObject',
            'tt_addToJavascriptModuleObject',
        ]);
    }

    /**
     * @return void
     */
    function enableModule($pid, $prefix = null){
        if(empty($pid)){
            // TODO - tt
            throw new Exception("A project ID must be specified on which to enable the module.");
        }
        if($prefix === null){
            $prefix = $this->getPrefix();
        }
        $version = ExternalModules::getEnabledVersion($prefix);
        ExternalModules::enableForProject($prefix, $version, $pid);
    }

    function disableModule($pid, $prefix = null){
        if(empty($pid)){
            // TODO - tt
            throw new Exception("A project ID must be specified for which to disable the module.");
        }
        if($prefix === null){
            $prefix = $this->getPrefix();
        }
        ExternalModules::setProjectSetting($prefix, $pid, ExternalModules::KEY_ENABLED, false);
    }

    /**
     * Checks whether a project id is valid.
     * 
     * Additional conditions can be via a second argument:
     *  - TRUE: The project must actually exist (with any status).
     *  - "DEV": The project must be in development mode.
     *  - "PROD": The project must be in production mode.
     *  - "AC": The project must be in analysis/cleanup mode.
     *  - "DONE": The project must be completed.
     *  - An array containing any of the states listed, e.g. ["DEV","PROD"]
     * 
     * @param string|int $pid The project id to check.
     * @param bool|string|array $condition Performs additional checks depending on the value (default: false).
     * @return bool True/False depending on whether the project id is valid or not.
     */
    public function isValidProjectId($pid, $condition = false) {
        return ExternalModules::isValidProjectId($pid, $condition);
    }

	/**
    * Checks whether a module is enabled for a project or on the system.
    *
    * @param string $prefix A unique module prefix.
    * @param string $projectId A project id (optional).
    * @return mixed False if the module is not enabled, otherwise the enabled version of the module (string).
    * @throws InvalidArgumentException
    **/
    public function isModuleEnabled($prefix, $pid = null) {
        return ExternalModules::isModuleEnabled($prefix, $pid);
    }

    /**
    * Gets a list of enabled modules for a project or on the system.
    *
    * @param string $pid A project id (optional).
    * @return array An associative array listing the enabled modules, with module prefix as key and version as value.
    * @throws InvalidArgumentException
    **/
    public function getEnabledModules($pid = null) {
        if ($pid !== null && !ExternalModules::isValidProjectId($pid)) {
            throw new InvalidArgumentException(ExternalModules::tt("em_errors_131")); //= Invalid value for project id!
        }
        return ExternalModules::getEnabledModules($pid);
    }

    /**
     * Gets the status of the current or given project.
     * 
     * Status can be one of the following:
     * - DEV: Development mode
     * - PROD: Production mode
     * - AC: Analysis/Cleanup mode
     * - DONE: Completed
     * 
     * @param int|string|null $pid The project id (when omitted, the project id is determined from context).
     * @return string|null The status of the project (or NULL in case the project does not exist).
     */
    public function getProjectStatus($pid = null) {
        $pid = $this->requireProjectId($pid);
        return ExternalModules::getProjectStatus($pid);
    }

    public function getModuleInstance(){
        return $this->module;
    }
    
    public function getFieldNames($formName, $pid = null){
        return $this->getProject($pid)->getForm($formName)->getFieldNames();
    }

    function addOrUpdateInstances($newInstances, $uniqueInstanceField){
        return $this->getProject()->addOrUpdateInstances($newInstances, $uniqueInstanceField);
    }

    /**
     * @return void
     */
    public function setData($record, $fieldName, $values){
		$pid = self::requireProjectId();
		$eventId = $this->getEventId();

		if(!is_array($values)){
			$values = [$values];
		}

		$this->query("SET AUTOCOMMIT=0", []);
		$this->query("BEGIN", []);

		$this->query(
			"DELETE FROM redcap_data where project_id = ? and event_id = ? and record = ? and field_name = ?",
			[$pid, $eventId, $record, $fieldName]
		);

		foreach($values as $value){
			$this->query(
				"INSERT INTO redcap_data (project_id, event_id, record, field_name, value) VALUES (?, ?, ?, ?, ?)",
				[$pid, $eventId, $record, $fieldName, $value]
			);
		}

		$this->query("COMMIT", []);
		$this->query("SET AUTOCOMMIT=1", []);
	}
    
    /**
     * @return bool
     *
     * @param string $requiredVersion
     */
    private function isPHPGreaterThan($requiredVersion){
		return version_compare(PHP_VERSION, $requiredVersion, '>=');
    }
    
    public function getDAG($recordId){
        $pid = self::requireProjectId();
        $eventId = $this->getEventId();

        // The limit is added simply for faster querying.  There should never be more than one matching result.
        $result = $this->query('select value from redcap_data where project_id = ? and event_id = ? and record = ? and field_name = ? limit 1', [$pid, $eventId, $recordId, '__GROUPID__']);
        $row = $result->fetch_assoc();
        return $row['value'] ?? null;
    }

	/**
	 * @param string $sql
	 * @param (false|mixed|string)[]|null $parameters
     * @psalm-taint-sink sql $sql
     * @return \mysqli_result
	 */
	public function queryLogs($sql, $parameters = null){
        if($parameters === null && $this->VERSION < 6){
            // Allow the parameters argument to be omitted.
            $parameters = [];
        }

		return $this->query($this->getQueryLogsSql($sql), $parameters);
    }

    public function removeLogs($sql, $parameters = null){
        if(empty($sql)){
			throw new Exception('You must specify a where clause.');
		}

        if($parameters === null){
            if($this->VERSION < 6){
                // Allow the parameters argument to be omitted.
                $parameters = [];
            }
            else{
                throw new Exception(ExternalModules::tt('em_errors_117'));
            }
        }

        $sql = $this->getQueryLogsSql("select log_id where $sql");
        $parsed = (new PHPSQLParser())->parse($sql);
        $limitAdded = !isset($parsed['LIMIT']);
        $parsed = $this->addRemoveLogsLimit($parsed);
        
		$sql = (new PHPSQLCreator())->create($parsed);

        /**
         * We use an inner join to select which rows to delete based on ID because
         * delete queries with joins do not allow a LIMIT clause.
         * The inner query's join is required to include parameter values in the where clause.
         * 
         * If we ever refactor this behavior, we should consider avoiding any use of ORDER BY
         * per a case Flight Tracker ran into at Northwestern where a DELETE...ORDER BY log_id LIMIT 1
         * query took 20 minutes when the table contains 187 million rows.  This query seemed to work
         * fine on other systems with that many rows.  It is still unclear why it was so slow in
         * Northwestern's case.
         */
        $sql = "
            delete redcap_external_modules_log
            from redcap_external_modules_log
            inner join ($sql) redcap_external_modules_log_selection
                on redcap_external_modules_log.log_id = redcap_external_modules_log_selection.log_id
        ";

		if(strpos($sql, AbstractExternalModule::EXTERNAL_MODULE_ID_STANDARD_WHERE_CLAUSE_PREFIX) === false) {
			// An external_module_id must have been specified in the where clause, preventing the standard clause from being included.
			// This check also make sure that a bug in the framework doesn't remove logs for all modules (especially important when developing changes to log methods).
			throw new Exception("Specifying an 'external_module_id' in the where clause for removeLogs() is not allowed to prevent modules from accidentally removing logs for other modules.");
		}
        else if(strpos($sql, 'redcap_external_modules_log.project_id') === false){
            throw new Exception(ExternalModules::tt('em_errors_162'));
        }

        $query = $this->createQuery();
        $query->add($sql, $parameters);
        
        $totalAffectedRows = 0;
        do{
            $query->execute();
            $totalAffectedRows += $query->affected_rows;
        }
        while($limitAdded && $query->affected_rows === (int) $parsed['LIMIT']['rowcount']);

        if($this->VERSION <= 9){
            return true;
        }
        else{ // > 9
            return $totalAffectedRows;
        }
    }

    public function addRemoveLogsLimit($parsed){
        if(!isset($parsed['LIMIT'])){
            /**
             * Delete time grows exponentially with the number of rows deleted at once.
             * We ensure delete log queries contain a LIMIT clause to prevent this.
             * This could be considered a bug/limitation of MySQL/InnoDB.
             * We saw a case where the Flight Tracker module was hanging indefinitely
             * while attempting to delete 187 million log rows, and preventing inserts
             * to the log table from other modules in the meantime.
             * In that case deleting 50k rows took 1 second, while deleting 75k took 8 seconds.
             * We semi-arbitrarily choose 10k rows below.
             */
            $parsed['LIMIT'] = $this->parseSQLClause('LIMIT', static::$removeLogsLimit ?? 10000);
        }

        return $parsed;
    }

    private function parseSQLClause($type, $content){
        return (new PHPSQLParser())->parse("select 1 $type $content")[$type];
    }

    public static function setRemoveLogsLimit($limit){
        static::$removeLogsLimit = $limit;
    }
    
    public function getCSRFToken(){
        if(!ExternalModules::shouldUseCookieforCSRFToken()){
            return \System::getCsrfToken();
        }

        if(static::$CSRF_DOUBLE_SUBMIT_COOKIE === null){
            /**
             * This code to set the cookie exists inside getCSRFToken() to ensure that the cookie is ONLY changed
             * on requests full page load requests (when getCSRFToken() is called).
             * See the "Test module.ajax() After Legacy AJAX GET" example for a case that did not work until
             * we moved CSRF cookie saving to this location.
             */
            
            // Set up the token for the next request (or requests if using ajax).
            $newToken = bin2hex(random_bytes(40));
    
            savecookie('redcap_external_module_csrf_token', $newToken, 0, true);
    
            static::$CSRF_DOUBLE_SUBMIT_COOKIE = $newToken;
        }

        return static::$CSRF_DOUBLE_SUBMIT_COOKIE;
    }

    /**
     * @return void
     */
    public function checkCSRFToken($page){
		if(in_array($page, $this->getConfig()['no-csrf-pages'])){
			// Specifying an old framework version here is the simplest way to bypass CSRF checking,
			// while still making sure the $_POST var gets removed.
			$frameworkVersion = 1;
		}
        else{
            $frameworkVersion = $this->VERSION;
        }

        ExternalModules::checkCSRFToken($frameworkVersion);
    }

    /**
     * @return string
     *
     * @param string $sql
     * 
     * @psalm-taint-sink sql $sql
     */
    public function getQueryLogsSql($sql){
        $query = new LogPseudoQuery($this);
        return $query->getActualSQL($sql);
    }

    public function getData_v1($projectId,$recordId,$eventId="",$format="array") {
        $data = \REDCap::getData($projectId,$format,$recordId);
        
        if($eventId != "") {
            return $data[$recordId][$eventId];
        }
        return $data;
    }

    /**
     * @return false|string
     */
    public function getData($projectId, $returnFormat, $records = null, $fields = null, $events = null, $groups = null, $combineCheckboxValues = null, $exportDataAccessGroups = null, $exportSurveyFields = null, $filterLogic = null){
        if($returnFormat !== 'json'){
            throw new Exception(ExternalModules::tt('em_errors_147'));
        }

        $ensureArray = function($value): array{
            if(!is_array($value)){
                $value = [$value];
            }

            return $value;
        };

        $escapeFieldNames = function($strings) use ($ensureArray): array{
            $strings = $ensureArray($strings);

            $newStrings = [];
            foreach($strings as $string){
                if(preg_match('/[^a-z0-9_]/', $string) === 1){
                    throw new Exception(ExternalModules::tt('em_errors_153', $string));
                }

                // db_escape() should do nothing here, but let's leave it in for good measure.
                $newStrings[] = db_escape($string);
            }
            
            return $newStrings;
        };

        $recordIdFieldName = $this->getRecordIdField($projectId);

        $whereClauses = [];
        $parameters = [];
        if(!empty($records)){
            $records = $ensureArray($records);
            
            $questionMarks = [];
            foreach($records as $record){
                $questionMarks[] = '?';
                $parameters[] = $record;
            }

            $whereClauses[] = "$recordIdFieldName in (" . implode(',', $questionMarks) . ")";
        }

        if(empty($fields)){
            throw new Exception(ExternalModules::tt('em_errors_148'));
        }
        else{
            $fields = $escapeFieldNames($fields);
        }

        $unsupportedArgs = [
            'events' => null,
            'groups' => null,
            'combineCheckboxValues' => false,
            'exportDataAccessGroups' => false,
            'exportSurveyFields' => false,
        ];

        foreach($unsupportedArgs as $arg=>$expectedValue){
            if($$arg !== $expectedValue){
                $expectedValueString = json_encode($expectedValue);
                throw new Exception(ExternalModules::tt('em_errors_149', $expectedValueString, $arg));
            }
        }

        if(!empty($filterLogic)){
            // Wrap in parenthesis so any "OR" clauses don't cause the other top-level clauses to be ignored.
            $whereClauses[] = "($filterLogic)";

            // Verify that the logic can be parsed without exception (bad logic will behave as if there is no logic in REDCap::getData()).
			$parser = new \LogicParser();
			$parser->parse($filterLogic);
        }

        $filterLogicFields = getBracketedFields($filterLogic);
        if(isset($filterLogicFields[$recordIdFieldName])){
            throw new Exception(ExternalModules::tt('em_errors_150'));
        }

        // This is commented out because it's not quite right.
        // We just excluded form completion values from unit tests for now.
        // $recordIdOnlyArray = [$this->getRecordIdField($projectId)];
        // $filterLogicFields = array_keys(getBracketedFields($filterLogic));
        // if($fields === $recordIdOnlyArray && $filterLogicFields === $recordIdOnlyArray){
        //     $forms = $this->getRepeatingForms();
        //     foreach($forms as $form){
        //         $fields[] = $form . '_complete';
        //     }
        // }

        $sql = "select " . implode(',', $fields);
        if(!empty($whereClauses)){
            $sql .= " where " . implode(' and ', $whereClauses);
        }

        $query = new DataPseudoQuery($this->getProject($projectId));
        $query->setGetDataCompatible(true);
        $sql = $query->getActualSQL($sql);
        $result = $this->query($sql, $parameters);
        
        $rows = [];
        while($row = $result->fetch_assoc()){
            if(!empty($row['redcap_repeat_instrument'])){
                $instance = @$row['redcap_repeat_instance'];
                if($instance !== ''){
                    $instance = (int) $instance;
                }

                $row['redcap_repeat_instance'] = $instance;
            }
            
            $rows[] = $row;
        }
        
        return json_encode($rows);
    }

    // private function isExtraneousRow($expectedRow, $actualRow, $recordIdFieldName){
    //     if($expectedRow[$recordIdFieldName] !== $actualRow[$recordIdFieldName]
    //         ||
    //         $expectedRow['redcap_repeat_index'] !== ''
    //         ||
    //         $actualRow['redcap_repeat_index'] === ''
    //     ){
    //         return false;
    //     }

    //     foreach($expectedRow as $fieldName => $value){
    //         if($fieldName === $recordIdFieldName){
    //             continue;
    //         }

    //         if($value !== ''){
    //             return false;
    //         }
    //     }

    //     return true;
    // }

    /**
     * @return ((float|mixed|string)[]|bool)[]
     */
    public function compareGetDataImplementations($projectId, $returnFormat, $records = null, $fields = null, $events = null, $groups = null, $combineCheckboxValues = null, $exportDataAccessGroups = null, $exportSurveyFields = null, $filterLogic = null){
        $args = [$projectId, $returnFormat, $records, $fields, null, null, false, false, false, $filterLogic];
        
        $result = [];
        $execute = function($target) use ($args): array{
            $startMemory = memory_get_usage();
            $startMemoryPeak = memory_get_peak_usage();
            $startTime = microtime(true);
            $results = call_user_func_array([$target, 'getData'], $args);
            $executionTime = microtime(true) - $startTime;
            $memoryPeakIncrease = memory_get_peak_usage() - $startMemoryPeak;
            
            gc_collect_cycles();
            $memoryLeaked = memory_get_usage() - $startMemory;

            return [
                'results' => json_decode($results, true),
                'execution-time' => $executionTime,
                'memory-peak-increase' => $memoryPeakIncrease/1024/1024 . ' MB',
                'memory-leaked' => $memoryLeaked/1024/1024 . ' MB'
            ];
        };
        
        $result['sql'] = $execute($this);
        $result['php'] = $execute('REDCap');

        $expected = &$result['php']['results'];
        $actual = &$result['sql']['results'];

		$completeSuffix = '_complete';
		for($i=0; $i<count($expected); $i++){
			foreach(array_keys($expected[$i]) as $field){
				if(isset($actual[$i][$field])){
					continue;
				}

				if(substr($field, -strlen($completeSuffix)) === $completeSuffix){
					// This is likely a form completion field, which have some quirks.  Remove them for now.
					// It may be better to fix the quirks in REDCap::getData() rather than re-introduce those quirks to this new implementation.
					unset($expected[$i][$field]);
				}
			}
        }
        
        // $expectedIndex = 0;
        // $actualIndex = 0;
        // $identical = true;
        // $identicalExceptExtraneousRows = true;
        // while($expectedIndex < count($expected) && $actualIndex < count($actual)){
        //     $expectedRow = $actual[$expectedIndex];
        //     $actualRow = $actual[$actualIndex];

        //     if($this->isExtraneousRow($expectedRow, $actualRow, $recordIdFieldName)){
        //         $identical = false;
        //         $nonRepeatingResultsMissingFromNewImplementation[] = $expectedRow;
        //         $expectedIndex++;
        //         $expectedRow = $actual[$expectedIndex];
        //     }

        //     if($actualRow !== $expectedRow){
        //         $identical = false;
        //         $identicalExceptExtraneousRows = false;
        //         break;
        //     }

        //     $expectedIndex++;
        //     $actualIndex++;
        // }

        // if($identical !== ($expected === $actual)){
        //     var_export([
        //         'args' => $args,
        //         'php results' => $expected,
        //         'sql results' => $actual
        //     ]);
        //     throw new Exception('Inconsistent identical checks detected!');
        // }

        $result['identical'] = $expected === $actual;
        // $result['identical-excluding-extraneous-rows'] = $identicalExceptExtraneousRows;
        
        return $result;
    }

    /**
     * Function that returns the label name from checkboxes, radio buttons, etc instead of the value
     * @param $params, associative array
     * @param null $value, (to support the old version)
     * @param null $pid, (to support the old version)
     * @return mixed|string, label
     */
    public function getChoiceLabel($params, $value=null, $pid=null)
    {

        if(!is_array($params)) {
            $params = array('field_name'=>$params, 'value'=>$value, 'project_id'=>$pid);
        }

        //In case it's for a different project
        if ($params['project_id'] != "")
        {
            $pid = $params['project_id'];
        }else{
            $pid = $this->requireProjectId();
        }

        $fieldName = str_replace('[', '', $params['field_name'] ?? '');
        $fieldName = str_replace(']', '', $fieldName);

        $dateFormats = [
            "date_dmy" => "d-m-Y",
            "date_mdy" => "m-d-Y",
            "date_ymd" => "Y-m-d",
            "datetime_dmy" => "d-m-Y h:i",
            "datetime_mdy" => "m-d-Y h:i",
            "datetime_ymd" => "Y-m-d h:i",
            "datetime_seconds_dmy" => "d-m-Y h:i:s",
            "datetime_seconds_mdy" => "m-d-Y h:i:s",
            "datetime_seconds_ymd" => "Y-m-d  h:i:s"
        ];

        $recordId = $params['record_id'] ?? null;
        $eventId = $params['event_id'] ?? null;
        $value = $params['value'] ?? null;

        if(isset($recordId)){
            /**
             * This feature is considered deprecated.  It pulls a lot more data than necessary, and modules should do their own data lookups anyway.
             * This function should really only check metadata, however, we've left this in place since Email Alerts and potentially other modules
             * are still using this old feature.
             */
           
            $data = \REDCap::getData($pid, "array", $recordId);

            if (array_key_exists('repeat_instances', $data[$recordId] ?? [])) {
                if (
			isset($data[$recordId]['repeat_instances'][$eventId][$params['survey_form']][$params['instance']][$fieldName])
			&& $data[$recordId]['repeat_instances'][$eventId][$params['survey_form']][$params['instance']][$fieldName] != ""
		) {
                    //Repeat instruments
                    $data_event = $data[$recordId]['repeat_instances'][$eventId][$params['survey_form']][$params['instance']];
                } else if (
			isset($data[$recordId]['repeat_instances'][$eventId][''][$params['instance']][$fieldName])
			&& $data[$recordId]['repeat_instances'][$eventId][''][$params['instance']][$fieldName] != "") {
                    //Repeat events
                    $data_event = $data[$recordId]['repeat_instances'][$eventId][''][$params['instance']];
                } else {
                    $data_event = $data[$recordId][$eventId];
                }
            } else {
                $data_event = $data[$recordId][$eventId] ?? null;
            }
        }

        $metadata = \REDCap::getDataDictionary($pid, 'array', false, $fieldName);
        $type = $metadata[$fieldName]['field_type'] ?? null;

        //event arm is defined
        if (empty($metadata)) {
            preg_match_all("/\[[^\]]*\]/", $fieldName, $matches);
            $event_name = str_replace('[', '', $matches[0][0]);
            $event_name = str_replace(']', '', $event_name);

            $fieldName = str_replace('[', '', $matches[0][1]);
            $fieldName = str_replace(']', '', $fieldName);
            $metadata = \REDCap::getDataDictionary($pid, 'array', false, $fieldName);
        }
        $label = "";
        if ($type == 'checkbox' || $type == 'dropdown' || $type == 'radio') {
            $project = ExternalModules::getREDCapProjectObject($pid);
            $other_event_id = $project->getEventIdUsingUniqueEventName($event_name ?? null);
            $choices = preg_split("/\s*\|\s*/", $metadata[$fieldName]['select_choices_or_calculations']);
            foreach ($choices as $choice) {
                $option_value = preg_split("/,/", $choice)[0];
                if ($value != "") {
                    if (is_array($data_event[$fieldName] ?? null)) {
                        foreach ($data_event[$fieldName] as $choiceValue => $multipleChoice) {
                            if ($multipleChoice === "1" && $choiceValue == $option_value) {
                                $label .= trim(preg_split("/^(.+?),/", $choice)[1]) . ", ";
                            }
                        }
                    } else if ($value === $option_value) {
                        $label = trim(preg_split("/^(.+?),/", $choice)[1]);
                    }
                } else if ($value === $option_value) {
                    $label = trim(preg_split("/^(.+?),/", $choice)[1]);
                    break;
                } else if ($value == "" && $type == 'checkbox') {
                    //Checkboxes for event_arms
                    if ($other_event_id == "") {
                        $other_event_id = $eventId;
                    }
                    if (isset($recordId) && $data[$recordId][$other_event_id][$fieldName][$option_value] == "1") {
                        $label .= trim(preg_split("/^(.+?),/", $choice)[1]) . ", ";
                    }
                }
            }
            //we delete the last comma and space
            $label = rtrim($label, ", ");
        } else if ($type == 'truefalse') {
            if ($value == '1') {
                $label = "True";
            } else  if ($value == '0'){
                $label = "False";
            }
        } else if ($type == 'yesno') {
            if ($value == '1') {
                $label = "Yes";
            } else  if ($value == '0'){
                $label = "No";
            }
        } else if ($type == 'sql') {
            if (!empty($value)) {
                $q = $this->query($metadata[$fieldName]['select_choices_or_calculations'], []);

                while ($row = $q->fetch_row()) {
                    if ($row[0] == $value) {
                        $label = $row[1];
                        break;
                    }
                }
            }
        } else if (in_array($metadata[$fieldName]['text_validation_type_or_show_slider_number'] ?? null, array_keys($dateFormats)) && $value != "") {
            $label = date($dateFormats[$metadata[$fieldName]['text_validation_type_or_show_slider_number']], strtotime($value));
        }
        return $label;
    }

    /**
     * @return string[]
     */
    public function getChoiceLabels($fieldName, $pid = null){
		// Caching could be easily added to this method to improve performance on repeat calls.

		$pid = $this->requireProjectId($pid);

		$dictionary = \REDCap::getDataDictionary($pid, 'array', false, [$fieldName]);
		$choices = explode('|', $dictionary[$fieldName]['select_choices_or_calculations']);
		$choicesById = [];
		foreach($choices as $choice){
			$parts = explode(', ', $choice);
			$id = trim($parts[0]);
			$label = trim(substr($choice,strpos($choice,",")+1));
			$choicesById[$id] = $label;
		}

		return $choicesById;
    }

    private function getRecordIdOrTemporaryRecordId()
	{
		$recordId = $this->getRecordId();
		if(empty($recordId)){
			// Use the temporary record id if it exists.
			$recordId = ExternalModules::getTemporaryRecordId();
		}

		return $recordId;
	}


    #region JSMO Ajax Requests

    /**
     * This sections implements a general purpose AJAX request mechanism for external modules.
     * A ajax(action, payload) method is added to the JavascriptObjectModule (see Framework.php).
     * Calls to this method will initiate a call to the server that will be handled by the
     * corresponding module's implementation of the redcap_module_ajax hook.
     * The framework will ensure that context is preserved and that basic security is taken
     * care of (such as spoofing module prefixes, project ids, etc.).
     */

    /** Name of the config.json setting required for making AJAX log calls */
    const MODULE_ENABLE_AJAX_LOGGING_SETTING = "enable-ajax-logging";

    /** Name of the config.json setting required for logging in a no-auth context */
    const MODULE_ENABLE_NOAUTH_LOGGING_SETTING = "enable-no-auth-logging";

    /**
     * Checks whether AJAX logging is allowed in the module settings (config.json)
     * Note: This will return true for framework < 11 modules
     * @return bool 
     */
    public function isAjaxLoggingEnabled() {
        $config = $this->getConfig();
        $setting_name = self::MODULE_ENABLE_AJAX_LOGGING_SETTING;
        $enabled = isset($config[$setting_name]) && is_bool($config[$setting_name]) && $config[$setting_name] == true;
        return $enabled;
    }

    /**
     * Checks whether no-auth logging is allowed in the module settings (config.json)
     * @param AbstractExternalModule $module 
     * @return bool 
     */
    public function requireNoAuthLoggingEnabled() {
        $config = $this->getConfig();
        $setting_name = self::MODULE_ENABLE_NOAUTH_LOGGING_SETTING;
        $enabled = isset($config[$setting_name]) && is_bool($config[$setting_name]) && $config[$setting_name] == true;
        if(!$enabled){
            throw new Exception("The config.json setting '" . self::MODULE_ENABLE_NOAUTH_LOGGING_SETTING ."' must be set to 'true' in order to perform logging in a non-authenticated context.");
        }
    }

    /**
     * Creates the settings necessary for the ajax() method of the JavascriptModuleObjects (i.e. the
     * data that must be available inside the JSMO to initiate and "authenticate" callbacks to the 
     * server).
     * 
     * The returned array will have three items: 
     * - verification: Encrypted context data used to verify an ajax request and to provide context
     * - endpoint: The endpoint that should be called by the ajax() method
     * - csrfToken: A standard REDCap CSRF token
     * 
     * @return array{verification:string,endpoint:string,csrfToken:string} JSMO ajax settings
     */
    public function getAjaxSettings() {
        $module = $this->module;
        $project_id = $this->getProjectId();
        $record = $this->getRecordIdOrTemporaryRecordId();
        $survey_hash = $this->getSurveyHash();
        $survey_queue_hash = $this->getSurveyQueueHash();
        $crypto = ExternalModules::initAjaxCrypto($this->getCSRFToken());
        // Gather context info
        if (ExternalModules::isNoAuth()) {
            // Non-auth REDCap page, but not a survey
            // Other than that there is no further context
            $user = null;
            $record = null;
            $instrument = null;
            $event_id = null;
            $group_id = null;
            $response_id = "";
            $repeat_instance = 1;
        }
        else if (!empty($survey_hash)) {
            // Survey
            $user = null; // Use null here to avoid [survey respondent], which we won't get in the ajax request
            // This is taken from Surveys/index.php (redcap_survey_page hook insertion point)
            $response_id = isset($_POST["__response_id__"]) ? $_POST["__response_id__"] : "";
            $instrument = $_GET["page"] ?? null;
            $event_id = $_GET["event_id"] ?? null;
            $group_id = (empty($GLOBALS["Proj"]->groups)) ? null : \Records::getRecordGroupId($project_id, $record);
            if (!is_numeric($group_id)) $group_id = null;
            $repeat_instance = $_GET["instance"] ?? 1;
        }
        else if (!empty($survey_queue_hash)) {
            // Survey Queue
            $user = null; // Use null here to avoid [survey respondent], which we won't get in the ajax request
            $response_id = "";
            list ($sq_pid, $record) = \Survey::checkSurveyQueueHash($survey_queue_hash);
            if ($project_id != $sq_pid) {
                throw new \Exception("Survey queue hash does not match project id!");
            }
            $instrument = null;
            $event_id = null;
            $group_id = null;
            $repeat_instance = 1;
        }
        else {
            // Authenticated REDCap page, inside or outside of a project context
            $user = ExternalModules::getUsername();
            // This is taken from DataEntry/index.php (redcap_data_entry_form hook injection point)
            $instrument = $_GET["page"] ?? null;
            $event_id = $_GET["event_id"] ?? null;
            $group_id = (empty($GLOBALS["Proj"]->groups)) ? null : \Records::getRecordGroupId($project_id, $record);
            if (!is_numeric($group_id)) $group_id = null;
            $response_id = "";
            $repeat_instance = $_GET["instance"] ?? 1;
        }

        // Build verification (and context) data; prefix, project id / survey_hash, and user will be used for verification in the AJAX handler
        $verification_data = array(
            // Random value and timestamp - to ensure each encrypted verfication blob will be unique
            "random" => $crypto->genKey(),
            "timestamp" => time(),
            // Module id
            "prefix" => $module->PREFIX,
            "version" => $module->VERSION,
            // User info
            "user" => $user,
            // Context information
            "project_id" => $project_id,
            "record" => $record,
            "instrument" => $instrument,
            "event_id" => $event_id,
            "group_id" => $group_id,
            "survey_hash" => $survey_hash,
            "survey_queue_hash" => $survey_queue_hash,
            "response_id" => $response_id,
            "repeat_instance" => $repeat_instance,
            "page" => defined("PAGE") ? PAGE : null,
            "page_full" => defined("PAGE_FULL") ? PAGE_FULL : null,
        );
        // Determine the AJAX endpoint to use
        // For surveys, use the survey endpoint; otherwise, use jsmo-ajax.php
        if (self::isSurveyPage()) {
            $ajax_endpoint = APP_PATH_SURVEY_FULL . "?__passthru=ExternalModules&prefix={$module->PREFIX}&ajax=1";
            if (!empty($survey_hash)) {
                $ajax_endpoint .= "&s={$survey_hash}";
            }
            else if (!empty($survey_queue_hash)) {
                $ajax_endpoint .= "&sq={$survey_queue_hash}";
            }
        }
        else {
            $ajax_endpoint = APP_URL_EXTMOD . "module-ajax/jsmo-ajax.php?prefix={$module->PREFIX}";

            if (!empty($project_id)) {
                $ajax_endpoint .= "&pid={$project_id}";
            }

            if(ExternalModules::isNoAuth()){
                $ajax_endpoint .= "&NOAUTH";
            }
        }
        return array(
            "verification" => $crypto->encrypt($verification_data),
            "endpoint" => $ajax_endpoint,
            // Enable ajax logging only when enabled via enable-ajax-logging flag (framework v11+) and not in a no-auth context
            // unless the enable-no-auth-logging flag is set (all framework versions). This is used to signal failure without
            // issuing a server request (this will still be checked server-side).
        );
    }

    #endregion

	/**
	 * @return void
	 */
	public function initializeJavascriptModuleObject()
	{
		global $lang;

		$jsObject = ExternalModules::getJavascriptModuleObjectName($this->getModuleInstance());

		ExternalModules::tt_initializeJSLanguageStore();

		$pageUrlPlaceholder = 'some-page-path-that-would-not-ever-really-exist';

        try{
            // Setup endpoint and context/verification data for JSMO ajax
            $ajax_settings = $this->getAjaxSettings();
        }
        catch(\Throwable $t){
            /**
             * We ran into a scenario where the 'redcap_module_import_page_top' hook
             * failed for the 'vanderbilt_cron_record_piping' module with the
             * following error: "A token must be specified for ajax encryption".
             * The exact cause could not be determined, but this try/catch was added to
             * prevent any AJAX related issues from breaking other functionality.
             */
            ExternalModules::errorLog($t->__toString());
            $ajax_settings = [];
        }

		?>
		<script>
			(function(){
				// Create the module object, and any missing parent objects.
				var parent = window
				;<?=json_encode($jsObject)?>.split('.').forEach(function(part){
					if(parent[part] === undefined){
						parent[part] = {}
					}

					parent = parent[part]
				})

				// Shorthand for the external module object.
				const module = <?=$jsObject?>

                // Settings for JSMO.ajax() calls
                const ajaxSettings = <?=json_encode($ajax_settings, JSON_FORCE_OBJECT)?>

				// Adapted from here: https://onlinecode.org/javascript-equivalent-or-alternative-to-jquery-ready/
				const onReady = function(action){
					if (document.readyState !== 'loading'){
						action()
					} else {
						document.addEventListener('DOMContentLoaded', function(){
							// The action is not passed directly to prevent the event from getting passed into it
							action()
						})
					}
				}

				/** @var {Array} */
				const afterRenderQueue = []
				/** @var {bool} */
				var documentReady = false
				// We need to know whether the document ready event already occurred, because some actions need to be deferred until then
				onReady(function() {
					documentReady = true
					// Register any afterRender actions
					while (afterRenderQueue.length) {
						const action = afterRenderQueue.shift()
						module.afterRender(action)
					}
				})

				const csrfToken = <?=json_encode($this->getCSRFToken())?>;

				// Add methods.

                /**
                 * Executes an AJAX request against the EM Framework. The module calling this from the JSMO
                 * must implement the redcap_module_ajax method (otherwise, an 'Invalid request' response
                 * will be sent back). While the EM Framework will ensure basic security, modules should carefully
                 * inspect/validate any data received before acting on them).
                 * @param {string} action The action to be carried out (i.e. a name/identifier to distinguish the type of request) [required]
                 * @param {any} payload A custom payload [optional]
                 * @returns {Promise} A promise. The `then` and `catch` blocks should be implemented. The `then` callback will be called with the return value of the redcap_module_ajax method as argument.
                 */
                module.ajax = function(action, payload) {
                    if (typeof action !== 'string' || action == '') {
                        throw 'Invalid parameter: action must be a non-empty string'
                    }
                    if (typeof payload == 'undefined') {
                        payload = null
                    }

                    const parseResponse = (response) => {
                        try{
                            return JSON.parse(response)
                        }
                        catch(error){
                            if(
                                response.startsWith(<?=json_encode(static::REDCAP_PAGE_PREFIX)?>)
                                &&
                                response.includes(<?=json_encode(static::LOGIN_PAGE_EXCERPT)?>)
                            ){
                                error = <?=json_encode(ExternalModules::tt('em_errors_171'))?>
                            }

                            throw error
                        }
                    }

                    return new Promise(function(resolve, reject) {
                        const handleError = (error) => {
                            if (action == <?=json_encode(ExternalModules::MODULE_AJAX_LOGGING_ACTION)?>) {
                                console.error('Module LOG request error for <?=$this->getPrefix()?>_<?=$this->module->VERSION?> - Error:', error, ', Message:', payload.msg, ', Parameters:', payload.params)
                            }
                            else {
                                console.error('Module AJAX request error for <?=$this->getPrefix()?>_<?=$this->module->VERSION?> - Error:', error, ', Action:', action, ', Payload:', payload)
                            }

                            reject(error)
                        }

                        const formData = new FormData()
                        formData.append('verification', ajaxSettings.verification)
                        formData.append('action', action)
                        formData.append('payload', JSON.stringify(payload))

                        /**
                         * This is required because REDCap core erases 'redcap_csrf_token' on __passthru requests.
                         */
                        formData.append('redcap_external_module_csrf_token', csrfToken)

                        /**
                         * This is required for non-__passthru ajax requests.
                         */
                        formData.append('redcap_csrf_token', csrfToken)

                        fetch(ajaxSettings.endpoint, {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.text())
                        .then(response => {
                            response = parseResponse(response)

                            if (response['success'] === true) {
                                ajaxSettings.verification = response['verification']
                                resolve(response.payload ?? null)
                            }
                            else {
                                handleError(response.error)
                            }
                        })
                        .catch(err => {
                            handleError(err)
                        })
                    })
                }

                /** 
                 * @param {string} message The message to log
                 * @param {object} parameters (Optional) parameters
                 * @returns {Promise<Number>} A promise. The `then` and `catch` blocks should be implemented. The `then` callback will be called with the log id of the newly created log entry.
                 */
                module.log = function(message, parameters) {
                    return module.ajax('<?=ExternalModules::MODULE_AJAX_LOGGING_ACTION?>', {
                        msg: message,
                        params: parameters,
                    })
                }

				module.getUrl = function(path, noAuth){
					var url = <?=json_encode($this->getUrl("$pageUrlPlaceholder.php", false, true))?>;
					url = url.replace(<?=json_encode($pageUrlPlaceholder)?>, path)

					if(noAuth === true){
						url += '&NOAUTH'
					}

					return url;
				}

				module.getUrlParameters = function(){
					var search = location.search
					if(location.search[0] !== '?'){
						// There aren't any URL parameters
						return null
					}

					// Remove the leading question mark
					search = search.substring(1)

					var params = []
					var parts = search.split('&')
					parts.forEach(function(part){
						var innerParts = part.split('=')
						var name = innerParts[0]
						var value = null

						if(innerParts.length === 2){
							value = innerParts[1]
						}

						params[name] = value
					})

					return params
				}

				module.getUrlParameter = function(name){
					var params = this.getUrlParameters()
					return params[name]
				}

				module.isRoute = function(routeName){
					return this.getUrlParameter('route') === routeName
				}

				module.isImportPage = function(){
					return this.isRoute('DataImportController:index')
				}

				module.isImportReviewPage = function(){
					if(!this.isImportPage()){
						return false
					}

					return $('table#comptable').length === 1
				}

				module.isImportSuccessPage = function(){
					if(!this.isImportPage()){
						return false
					}
					var successMessage = $('#center > .green > b').text()
					return successMessage === <?=json_encode($lang["data_import_tool_133"])?> // 'Import Successful!'
				}

				/**
				 * Constructs the full language key for an EM-scoped key.
				 * @private
				 * @param {string} key The EM-scoped key.
				 * @returns {string} The full key for use in $lang.
				 */
				module._constructLanguageKey = function(key) {
					return <?=json_encode(ExternalModules::EM_LANG_PREFIX . $this->getPrefix())?> + '_' + key
				}
				
				/**
				 * Gets and interpolate a translation.
				 * @param {string} key The key for the string.
				 * Note: Any further arguments after key will be used for interpolation. If the first such argument is an array, it will be used as the interpolation source.
				 * @returns {string} The interpolated string.
				 */
				module.tt = function (key) {
					var argArray = Array.prototype.slice.call(arguments)
					argArray[0] = this._constructLanguageKey(key)
					var lang = window.ExternalModules.$lang
					return lang.tt.apply(lang, argArray)
				}
				/**
				 * Adds a key/value pair to the language store.
				 * @param {string} key The key.
				 * @param {string} value The string value to add.
				 */
				module.tt_add = function(key, value) {
					key = this._constructLanguageKey(key)
					window.ExternalModules.$lang.add(key, value)
				}

				/**
				 * Registers a callback with MLM's onLangChanged event.
				 * In case MLM is not active, the action is called once (after the DOM is ready).
				 * @param {function(string,bool)} action The callback function.
				 */
				module.afterRender = function(action){
					if (documentReady) {
						// Determine whether MLM is in play
						if (typeof window.REDCap == 'undefined' || typeof window.REDCap.MultiLanguage == 'undefined' || typeof window.REDCap.MultiLanguage.isInitialized == 'undefined') {
							// MLM is inactive
							action()
						}
						else {
							// MLM is active
							const MLM = window.REDCap.MultiLanguage
							const alreadyInitialized = MLM.isInitialized()
							// Register the callback. MLM will call it each time it updates the page
							MLM.onLangChanged(action)
							// In case MLM was already initialized, call action now. Otherwise, MLM will do it
							if (alreadyInitialized) {
								action()
							}
						}
					}
					else {
						// Too early yet. Queue request for later
						if (!afterRenderQueue.includes(action)) {
							afterRenderQueue.push(action)
						}
					}
				}
			})()
		</script>
		<?php
	}

	public function getFirstEventId($pid = null){
		$pid = $this->requireProjectId($pid);
		$results = $this->query("
			select event_id
			from redcap_events_arms a
			join redcap_events_metadata m
				on a.arm_id = m.arm_id
			where a.project_id = ?
			order by event_id
		", [$pid]);

		$row = $results->fetch_assoc();
		return $row['event_id'];
    }
    
    function log($message, $parameters = []) {
        // Is the no-auth logging enabled in config.json? This is required for calls to log in a no-auth context for framework version 11+.
        if ($this->VERSION >= static::LOGGING_IMPROVEMENTS_FRAMEWORK_VERSION && ExternalModules::isNoAuth()) {
            $this->requireNoAuthLoggingEnabled();
        }

		if (empty($message)) {
			throw new Exception("A message is required for log entries");
		}
        else if(mb_strlen($message, '8bit') > ExternalModules::LOG_MESSAGE_SIZE_LIMIT){
            throw new Exception(ExternalModules::tt('em_errors_159', ExternalModules::LOG_MESSAGE_SIZE_LIMIT));
        }

		if(!is_array($parameters)){
			throw new Exception("The second argument to the log() method must be an array of parameters. A '" . gettype($parameters) . "' was given instead.");
		}

		foreach ($parameters as $name => $value) {
            $type = gettype($value);
			if(!in_array($type, ['boolean', 'integer', 'double', 'string', 'NULL'])){
				throw new Exception("The type '$type' for the '$name' parameter is not supported.");
			}
			else if (isset(AbstractExternalModule::$RESERVED_LOG_PARAMETER_NAMES_FLIPPED[$name])) {
				throw new Exception("The '$name' parameter name is set automatically and cannot be overridden.");
			}
			else if($value === null){
				// There's no point in storing null values in the database.
				// If a parameter is missing, queries will return null for it anyway.
				unset($parameters[$name]);
			}
			else if(strpos($name, "'") !== false){
				throw new Exception("Single quotes are not allowed in parameter names.");
			}
            else if(mb_strlen($name, '8bit') > ExternalModules::LOG_PARAM_NAME_SIZE_LIMIT){
				throw new Exception(ExternalModules::tt('em_errors_160', ExternalModules::LOG_PARAM_NAME_SIZE_LIMIT));
			}
            else if(mb_strlen($value, '8bit') > ExternalModules::LOG_PARAM_VALUE_SIZE_LIMIT){
				throw new Exception(ExternalModules::tt('em_errors_161', ExternalModules::LOG_PARAM_VALUE_SIZE_LIMIT));
			}
		}

		$projectId = $parameters['project_id'] ?? null;
		if (empty($projectId)) {
			$projectId = $this->getProjectId();

			if (empty($projectId)) {
				$projectId = null;
			}
		}

		$username = $parameters['username'] ?? null;
		if(empty($username)){
			$username = ExternalModules::getUsername();;
		}

		if(isset($parameters['record'])){
			$recordId = $parameters['record'];
		}
        else{
			$recordId = $this->getRecordIdOrTemporaryRecordId();
		}

		if (empty($recordId)) {
			$recordId = null;
		}

		$timestamp = $parameters['timestamp'] ?? null;
		$ip = $this->getIP($parameters['ip'] ?? null);

		// Remove parameter values that will be stored on the main log table,
		// so they are not also stored in the parameter table
		foreach(AbstractExternalModule::$OVERRIDABLE_LOG_PARAMETERS_ON_MAIN_TABLE as $paramName){
			unset($parameters[$paramName]);
		}

		$query = ExternalModules::createQuery();
		$query->add("
			insert into redcap_external_modules_log
				(
					timestamp,
					ui_id,
					ip,
					external_module_id,
					project_id,
					record,
					message
				)
			values
		");

		$query->add('(');

		if(empty($timestamp)){
			$query->add('now()');
		}
		else{
			$query->add('?', $timestamp);
		}


		$query->add("
			,
			(select ui_id from redcap_user_information where username = ?),
			?,
			(select external_module_id from redcap_external_modules where directory_prefix = ?),
			?,
			?,
			?
		", [$username, $ip, $this->getPrefix(), $projectId, $recordId, $message]);

		$query->add(')');

		$query->execute();

		$logId = db_insert_id();
		if (!empty($parameters)) {
			$this->insertLogParameters($logId, $parameters);
		}

		return $logId;
    }
    
    private function getIP($ip)
	{
		$username = ExternalModules::getUsername();
		
		if(
			empty($ip)
			&& !empty($username) // Only log the ip if a user is currently logged in
			&& !$this->isSurveyPage() // Don't log IPs for surveys
		){
			// The IP could contain multiple comma separated addresses (if proxies are used).
			// To accommodated at least three IPv4 addresses, the DB field is 100 chars long like the redcap_log_event table.
			$ip = \System::clientIpAddress();
		}

		if (empty($ip)) {
			$ip = null;
		}

		return $ip;
	}

	/**
	 * @return void
	 *
	 * @param array $parameters
	 */
	private function insertLogParameters($logId, $parameters)
	{
		$query = ExternalModules::createQuery();

		$query->add('insert into redcap_external_modules_log_parameters (log_id, name, value) VALUES');

		$addComma = false;
		foreach ($parameters as $name => $value) {
			if (!$addComma) {
				$addComma = true;
			}
			else{
				$query->add(',');
			}

			if(empty($name)){
				throw new Exception(ExternalModules::tt('em_errors_116'));
			}

			// Limit allowed characters to prevent SQL injection when logs are queried later.
			ExternalModules::checkForInvalidLogParameterNameCharacters($name);

			$query->add('(?, ?, ?)', [$logId, $name, $value]);
		}

		$query->execute();
    }
    
	/**
	 * @return bool
	 */
	public function isSurveyPage(){
		return ExternalModules::isSurveyPage();
    }
    
    function getPublicSurveyHash($pid=null){
        $sql ="
			select p.hash 
            from redcap_surveys s
            join redcap_surveys_participants p
            on s.survey_id = p.survey_id
            join redcap_metadata  m
            on m.project_id = s.project_id and m.form_name = s.form_name
            where p.participant_email is null and m.field_order = 1 and s.project_id = ?
		";

        $result = $this->query($sql, [$pid]);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $hash = @$row['hash'];
        }else{
            $hash = null;
        }

        return $hash;
    }

    /**
     * @return null|string
     */
    public function getPublicSurveyUrl($pid=null){

        if(empty($pid)){
            $pid = $this->getProjectId();
        }

        $hash = $this->getPublicSurveyHash($pid);

        $link = APP_PATH_SURVEY_FULL . "?s=$hash";
        if($hash == null){
            $link = null;
        }
        return $link;
    }

	/**
	 * @return void
	 */
	public function exitAfterHook(){
		ExternalModules::exitAfterHook();
    }

    /**
     * Applies trusted context and checks overrides, then calls the log() method
     * @param mixed $message Log message
     * @param mixed $parameters Additional parameters (including overrides)
     * @param mixed $verified_context Context
     * @return int The id of the created log entry
     */
    public function logAjax($message, $parameters, $verified_context)
    {
        // Apply overrides 
        foreach($parameters as $name => $value){
            if(
                $name === 'record'
                &&
                (
                    // Allow record IDs when authenticated.
                    $verified_context["user"] != null
                    ||
                    // Allow when it is identical to verified context data
                    $value == $verified_context["record"]
                )
            ){
                continue;
            }
            if(in_array($name, AbstractExternalModule::$OVERRIDABLE_LOG_PARAMETERS_ON_MAIN_TABLE)){
                $subject = "External Module Log Request Failure ({$verified_context["prefix"]})";
                $body = "For security reasons, the '$name' parameter cannot be overridden via AJAX log requests. It can only be overridden by PHP log requests. You might want use the _JavaScript Module Object_'s ajax() method and implement your own logging in the '" . ExternalModules::MODULE_AJAX_HOOK_NAME . "' hook. If you do that, make sure to add security checking so that logs are only allowed in appropriate contexts.";

                $body .= "\n\n POST: " . json_encode(array(
                    "message" => $message,
                    "parameters" => $parameters,
                ), JSON_PRETTY_PRINT);

                ExternalModules::sendAdminEmail($subject, $body);

                throw new Exception($body);
            }
        }

        // Add some verified context parameters
        $parameters["username"] = $verified_context["user"];
        $parameters["project_id"] = $verified_context["project_id"];
        if (!isset($parameters["record"]) && !empty($verified_context["record"])) {
            $parameters["record"] = $verified_context["record"];
        }

        return $this->log($message, $parameters);
    }

    /**
     * @return array|false
     */
    public function resetSurveyAndGetCodes($projectId,$recordId,$surveyFormName = "", $eventId = "") {
		list($surveyId,$surveyFormName) = $this->getSurveyId($projectId,$surveyFormName);

		## Validate surveyId and surveyFormName were found
		if($surveyId == "" || $surveyFormName == "") return false;

		## Find valid event ID for form if it wasn't passed in
		if($eventId == "") {
			$eventId = $this->getValidFormEventId($surveyFormName,$projectId);

			if(!$eventId) return false;
		}

		## Search for a participant and response id for the given survey and record
		list($participantId,$responseId) = $this->getParticipantAndResponseId($surveyId,$recordId,$eventId);

		## Create participant and return code if doesn't exist yet
		if($participantId == "" || $responseId == "") {
			$hash = self::generateUniqueRandomSurveyHash();

			$participantId = ExternalModules::addSurveyParticipant($surveyId, $eventId, $hash);
			
			## Insert a response row for this survey and record
			$returnCode = generateRandomHash();
			$responseId = ExternalModules::addSurveyResponse($participantId, $recordId, $returnCode);
		}
		## Reset response status if it already exists
		else {
			$sql = "SELECT CAST(p.participant_id as CHAR) as participant_id, p.hash, r.return_code, CAST(r.response_id as CHAR) as response_id, COALESCE(p.participant_email,'NULL') as participant_email
					FROM redcap_surveys_participants p, redcap_surveys_response r
					WHERE p.survey_id = ?
						AND p.participant_id = r.participant_id
						AND r.record = ?
						AND p.event_id = ?";

			$q = self::query($sql, [$surveyId, $recordId, $eventId]);
			$rows = [];
			while($row = $q->fetch_assoc()) {
				$rows[] = $row;
			}

			## If more than one exists, delete any that are responses to public survey links
			if($q->num_rows > 1) {
				foreach($rows as $thisRow) {
					if($thisRow["participant_email"] == "NULL" && $thisRow["response_id"] != "") {
						self::query("DELETE FROM redcap_surveys_response
								WHERE response_id = ?", $thisRow["response_id"]);
					}
					else {
						$row = $thisRow;
					}
				}
			}
			else {
				$row = $rows[0];
			}
			$returnCode = $row['return_code'];
			$hash = $row['hash'];
			$participantId = "";

			if($returnCode == "") {
				$returnCode = generateRandomHash();
			}

			## If this is only as a public survey link, generate new participant row
			if($row["participant_email"] == "NULL") {
				$hash = self::generateUniqueRandomSurveyHash();
				$participantId = ExternalModules::addSurveyParticipant($surveyId, $eventId, $hash);
			}

			// Set the response as incomplete in the response table, update participantId if on public survey link
			$q = ExternalModules::createQuery();
			$q->add("UPDATE redcap_surveys_participants p, redcap_surveys_response r
					SET r.completion_time = null,
						r.first_submit_time = '".date('Y-m-d H:i:s')."',
						r.return_code = ?", $returnCode);

			if($participantId != ""){
				$q->add(", r.participant_id = ?", $participantId);
			}

			$q->add("WHERE p.survey_id = ?
						AND p.event_id = ?
						AND r.participant_id = p.participant_id
						AND r.record = ?", [$surveyId, $eventId, $recordId]);
			
			$q->execute();
		}

		list($q, $r) = ExternalModules::setRecordCompleteStatus($projectId, $recordId, $eventId, $surveyFormName, 0);

		// Log the event (if value changed)
		if ($r && $q->affected_rows > 0) {
			if(function_exists("log_event")) {
				\log_event($sql,"redcap_data","UPDATE",$recordId,"{$surveyFormName}_complete = '0'","Update record");
			}
			else {
				\Logging::logEvent($sql,"redcap_data","UPDATE",$recordId,"{$surveyFormName}_complete = '0'","Update record");
			}
		}

		return array("hash" => $hash, "return_code" => $returnCode);
	}

	/**
	 * @return false
	 */
	public function createPassthruForm($projectId,$recordId,$surveyFormName = "", $eventId = "") {
		$codeDetails = $this->resetSurveyAndGetCodes($projectId,$recordId,$surveyFormName,$eventId);

		$hash = $codeDetails["hash"];
		$returnCode = $codeDetails["return_code"];

		$surveyLink = APP_PATH_SURVEY_FULL . "?s=$hash";

		## Build invisible self-submitting HTML form to get the user to the survey
		echo "<html><body>
				<form name='passthruform' action='$surveyLink' method='post' enctype='multipart/form-data'>
				".($returnCode == "NULL" ? "" : "<input type='hidden' value='".$returnCode."' name='__code'/>")."
				<input type='hidden' value='1' name='__prefill' />
				</form>
				<script type='text/javascript'>
					document.passthruform.submit();
				</script>
				</body>
				</html>";
		return false;
	}

	public function getValidFormEventId($formName,$projectId) {
		if(!is_numeric($projectId) || $projectId == "") return false;

		$projectDetails = $this->getProjectDetails($projectId);

		if($projectDetails["repeatforms"] == 0) {
			$sql = "SELECT CAST(e.event_id as CHAR) as event_id
					FROM redcap_events_metadata e, redcap_events_arms a
					WHERE a.project_id = ?
						AND a.arm_id = e.arm_id
					ORDER BY e.event_id ASC
					LIMIT 1";

			$q = ExternalModules::query($sql, [$projectId]);

			if($row = $q->fetch_assoc()) {
				return $row['event_id'];
			}
		}
		else {
			$sql = "SELECT CAST(f.event_id as CHAR) as event_id
					FROM redcap_events_forms f, redcap_events_metadata m, redcap_events_arms a
					WHERE a.project_id = ?
						AND a.arm_id = m.arm_id
						AND m.event_id = f.event_id
						AND f.form_name = ?
					ORDER BY f.event_id ASC
					LIMIT 1";

			$q = ExternalModules::query($sql, [$projectId, $formName]);

			if($row = $q->fetch_assoc()) {
				return $row['event_id'];
			}
		}

		return false;
	}

	/**
	 * @return (mixed|null)[]
	 */
	public function getSurveyId($projectId,$surveyFormName = "") {
		// Get survey_id, form status field, and save and return setting
		$query = ExternalModules::createQuery();
		$query->add("
			SELECT CAST(s.survey_id as CHAR) as survey_id, s.form_name, CAST(s.save_and_return as CHAR) as save_and_return
			FROM redcap_projects p, redcap_surveys s, redcap_metadata m
			WHERE p.project_id = ?
				AND p.project_id = s.project_id
				AND m.project_id = p.project_id
				AND s.form_name = m.form_name
		", [$projectId]);

		if($surveyFormName != ""){
			if(is_numeric($surveyFormName)){
				$query->add("AND s.survey_id = ?", $surveyFormName);
			}
			else{
				$query->add("AND s.form_name = ?", $surveyFormName);
			}
		}
		
		$query->add("
			ORDER BY s.survey_id ASC
			LIMIT 1
		");

		$r = $query->execute();
		$row = $r->fetch_assoc();

		$surveyId = $row['survey_id'] ?? null;
		$surveyFormName = $row['form_name'] ?? null;

		return [$surveyId,$surveyFormName];
	}

	public function getRecordId(){
		return $this->recordId;
    }
    
    /**
     * @return void
     */
    public function setRecordId($recordId){
		$this->recordId = $recordId;
    }

	/**
	 * @return null|numeric-string
	 */
	public function getProjectId()
	{
        return ExternalModules::getProjectId();
    }
    
    /**
     * @param string $sql
     * @param array|null $parameters
     * 
     * @psalm-taint-sink sql $sql
     * @return \mysqli_result
     */
    public function query($sql, $parameters = null){
		if($parameters === null && $this->VERSION < 4){
			// Allow queries without parameters.
			$parameters = [];
		}

		return ExternalModules::query($sql, $parameters);
    }

	# function to enforce that a pid is required for a particular function
	/**
	 * @param int|null|string $pid
	 */
	public function requireProjectId($pid = null)
	{
		return ExternalModules::requireProjectId($pid);
    }
    
	/**
	 * @param numeric $projectId
	 */
	public function getProjectDetails($projectId) {
		$sql = "SELECT *
				FROM redcap_projects
				WHERE project_id = ?";

		$q = ExternalModules::query($sql, $projectId);

		$row = ExternalModules::convertIntsToStrings($q->fetch_assoc());
		
		return $row;
	}

    //change this to match what FHIR Services really needs!?!?!?

    /**
	 * This was never a supported/documented method, but a couple of modules are using it on the Vanderbilt test server as of 2/26/21.
	 *
	 * @return (null|string)[]
	 */
	public function getParticipantAndResponseId($surveyId,$recordId,$eventId = null) {
        $result = $this->query('select project_id, form_name from redcap_surveys where survey_id = ?', $surveyId);
        $survey = $result->fetch_assoc();
        
        $responses = $this->getSurveyResponses([
            'pid' => $survey['project_id'] ?? null,
            'form' => $survey['form_name'] ?? null,
            'record' => $recordId,
            'event' => $eventId
        ]);

        $row = $responses->fetch_assoc();
        if($row === null){
            return [null, null];
        }

        $participantId = (string) $row['participant_id'];
        $responseId = (string) $row['response_id'];

		return [$participantId,$responseId];
    }

	public function generateUniqueRandomSurveyHash() {
		## Generate a random hash and verify it's unique
		do {
			$hash = generateRandomHash(10);

			$sql = "SELECT p.hash
						FROM redcap_surveys_participants p
						WHERE p.hash = ?";

			$result = self::query($sql, $hash);
			$hashExists = ($result->num_rows > 0);
		} while($hashExists);

		return $hash;
    }

	/**
	 * @return string
	 */
	public function getModulePath()
	{
		return ExternalModules::getModuleDirectoryPath($this->getPrefix(), $this->getModuleVersion()) . DS;
	}

	function getSettingConfig($key)
	{
		$config = $this->getConfig();
		foreach(['project-settings', 'system-settings'] as $type) {
			foreach ($config[$type] as $setting) {
				if ($key == $setting['key']) {
					return $setting;
				}
			}
		}

		return null;
    }
    
    /**
	 * Return a value from the UI state config. Return null if key doesn't exist.
	 * @param int/string $key key
	 * @return mixed - value if exists, else return null
	 */
	public function getUserSetting($key)
	{
		return UIState::getUIStateValue($this->getProjectId(), AbstractExternalModule::UI_STATE_OBJECT_PREFIX . $this->getPrefix(), $key);
	}
	
	/**
	 * Save a value in the UI state config
	 *
	 * @param int/string $key key
	 * @param mixed $value value for key
	 *
	 * @return void
	 */
	public function setUserSetting($key, $value)
	{
		UIState::saveUIStateValue($this->getProjectId(), AbstractExternalModule::UI_STATE_OBJECT_PREFIX . $this->getPrefix(), $key, $value);
	}
	
	/**
	 * Remove key-value from the UI state config
	 *
	 * @param int/string $key key
	 *
	 * @return void
	 */
	public function removeUserSetting($key)
	{
		UIState::removeUIStateValue($this->getProjectId(), AbstractExternalModule::UI_STATE_OBJECT_PREFIX . $this->getPrefix(), $key);
    }
    
	/**
	 * @return int
	 */
	public function addAutoNumberedRecord($pid = null){
		$pid = $this->requireProjectId($pid);

		// The actual id passed to saveData() doesn't matter, since autonumbering will overwrite it.
		$importRecordId = 1;

		$data = [
			[
				ExternalModules::getRecordIdField($pid) => $importRecordId,
			]
		];

		$results = \REDCap::saveData(
			$pid,
			'json',
			json_encode($data),
			'normal',
			'YMD',
			'flat',
			null,
			true,
			true,
			true,
			false,
			true,
			[],
			false,
			true,
			false,
			true // Use auto numbering
		);

		if(!empty($results['errors'])){
			throw new Exception("Error calling " . __METHOD__ . "(): " . json_encode($results, JSON_PRETTY_PRINT));
		}

		if(!empty($results['warnings'])){
			ExternalModules::errorLog("Warnings occurred while calling " . __METHOD__ . "().  These should likely be ignored.  In fact, this error message could potentially be removed:" . json_encode($results, JSON_PRETTY_PRINT));
		}

		return (int) $results['ids'][$importRecordId];
    }

	public function areSettingPermissionsUserBased(){
		return $this->userBasedSettingPermissions;
	}

	/**
	 * @return void
	 */
	public function disableUserBasedSettingPermissions(){
		$this->userBasedSettingPermissions = false;
	}

	/**
	 * @return void
	 */
	public function setDAG($record, $groupId){
        // We don't use REDCap::saveData() because it has some (perhaps erroneous) limitations for super users around setting DAGs on records that are already in DAGs.
		// It also doesn't seem to be aware of DAGs that were just added in the same hook call (likely because DAGs are cached before the hook is called).
		// Specifying a "redcap_data_access_group" parameter for REDCap::saveData() doesn't work either, since that parameter only accepts the auto generated names (not ids or full names).

		\Records::assignRecordToDag($record, $groupId, $this->getProjectId());
	}

	/**
	 * @return void
	 */
	public function renameDAG($dagId, $dagName){
		$this->query(
			"update redcap_data_access_groups set group_name = ? where project_id = ? and group_id = ?",
			[$dagName, $this->requireProjectId(), $dagId]
		);
	}

    /**
     * @return void
     */
    public function deleteDAG($dagId){
        $this->deleteAllDAGRecords($dagId);
		$this->deleteAllDAGUsers($dagId);
		
        $this->query(
			"DELETE FROM redcap_data_access_groups where project_id = ? and group_id = ?",
			[$this->requireProjectId(), $dagId]
		);
    }

    /**
     * @return void
     */
    private function deleteAllDAGRecords($dagId){
		$pid = $this->requireProjectId();

        $records = $this->query(
			"SELECT record FROM redcap_data where project_id = ? and field_name = '__GROUPID__' and value = ?",
			[$pid, $dagId]
		);

        while ($row = $records->fetch_assoc()){
            $record = $row['record'];
            $this->query("DELETE FROM redcap_data where project_id = ? and record = ?", [$pid, $record]);
		}
		
        $this->query("DELETE FROM redcap_data where project_id = ? and field_name = '__GROUPID__' and value = ?", [$pid, $dagId]);
    }

    /**
     * @return void
     */
    private function deleteAllDAGUsers($dagId){
        $this->query("DELETE FROM redcap_user_rights where project_id = ? and group_id = ?", [$this->requireProjectId(), $dagId]);
    }

	public function createDAG($dagName){
		$this->query(
			"insert into redcap_data_access_groups (project_id, group_name) values (?, ?)",
			[$this->requireProjectId(), $dagName]
		);
		return db_insert_id();
	}

	public function getFieldLabel($fieldName){
		$pid = $this->requireProjectId();
		$dictionary = \REDCap::getDataDictionary($pid, 'array', false, [$fieldName]);
		return $dictionary[$fieldName]['field_label'];
	}

    /**
     * @return void
     */
    public function sendAdminEmail($subject, $message){
        ExternalModules::sendAdminEmail($subject, $message, $this->getPrefix());
    }

	public function saveFile($path, $pid = null){
		$pid = $this->requireProjectId($pid);

		$file = [];
		$file['name'] = basename($path);
		$file['tmp_name'] = $path;
		$file['size'] = filesize($path);

		return \Files::uploadFile($file, $pid);
	}

    private function getModuleVersion(){
        return $this->getModuleInstance()->VERSION;
    }

	# pushes the execution of the module to the end of the queue
	# helpful to wait for data to be processed by other modules
	# execution of the module will be restarted from the beginning
	# For example:
	# 	if ($data['field'] === "") {
	#		delayModuleExecution();
	#		return;       // the module will be restarted from the beginning
	#	}
	public function delayModuleExecution() {
		return ExternalModules::delayModuleExecution($this->getPrefix(), $this->getModuleVersion());
	}

	# checks whether the current External Module has permission for $permissionName
	/**
	 * @return bool
	 */
	function hasPermission($permissionName)
	{
		return ExternalModules::hasPermission($this->getPrefix(), $this->getModuleVersion(), $permissionName);
	}

	# get the config for the current External Module
	# consists of config.json and filled-in values
	function getConfig()
	{
		return ExternalModules::getConfig($this->getPrefix(), $this->getModuleVersion(), $this->getProjectId(), true);
    }

	# get the directory name of the current external module
	/**
	 * @return string
	 */
	function getModuleDirectoryName()
	{
		return ExternalModules::getModuleDirectoryName($this->getModuleInstance());
	}

    function prefixSettingKey($key){
        return $this->getModuleInstance()->prefixSettingKey($key);
    }

	# a SYSTEM setting is a value to be used on all projects. It can be overridden by a particular project
	# a PROJECT setting is a value set by each project. It may be a value that overrides a system setting
	#      or it may be a value set for that project alone with no suggested System-level value.
	#      the project_id corresponds to the value in REDCap
	#      if a project_id (pid) is null, then it becomes a system value

	# Set the setting specified by the key to the specified value
	# systemwide (shared by all projects).
	/**
	 * @return void
	 */
	function setSystemSetting($key, $value)
	{
		$key = $this->prefixSettingKey($key);
		ExternalModules::setSystemSetting($this->getPrefix(), $key, $value);
	}

	# Get the value stored systemwide for the specified key.
	function getSystemSetting($key)
	{
		$key = $this->prefixSettingKey($key);
		return ExternalModules::getSystemSetting($this->getPrefix(), $key);
	}

	/**
	 * Gets all system settings as an array. Does not include project settings. Each setting
	 * is formatted as: [ 'yourkey' => ['system_value' => 'foo', 'value' => 'bar'] ]
	 *
	 * @return array
	 */
	function getSystemSettings()
	{
	    return ExternalModules::getSystemSettingsAsArray($this->getPrefix());
	}

	# Remove the value stored systemwide for the specified key.
	/**
	 * @return void
	 */
	function removeSystemSetting($key)
	{
		$key = $this->prefixSettingKey($key);
		ExternalModules::removeSystemSetting($this->getPrefix(), $key);
	}

	# Set the setting specified by the key to the specified value for
	# this project (override the system setting).  In most cases
	# the project id can be detected automatically, but it can
	# optionaly be specified as the third parameter instead.
	/**
	 * @return void
	 */
	function setProjectSetting($key, $value, $pid = null)
	{
		$pid = $this->requireProjectId($pid);
		$key = $this->prefixSettingKey($key);
		ExternalModules::setProjectSetting($this->getPrefix(), $pid, $key, $value);
	}

	# Returns the value stored for the specified key for the current
	# project if it exists.  If this setting key is not set (overriden)
	# for the current project, the system value for this key is
	# returned.  In most cases the project id can be detected
	# automatically, but it can optionally be specified as the third
	# parameter instead.
	function getProjectSetting($key, $pid = null)
	{
		$pid = $this->requireProjectId($pid);
		$key = $this->prefixSettingKey($key);
		return ExternalModules::getProjectSetting($this->getPrefix(), $pid, $key);
	}

	# Remove the value stored for this project and the specified key.
	# In most cases the project id can be detected automatically, but
	# it can optionally be specified as the third parameter instead.
	/**
	 * @return void
	 */
	function removeProjectSetting($key, $pid = null)
	{
		$pid = $this->requireProjectId($pid);
		$key = $this->prefixSettingKey($key);
		ExternalModules::removeProjectSetting($this->getPrefix(), $pid, $key);
	}

	/**
	 * @return string
	 *
	 * @param string $path
	 * @param bool $noAuth
	 * @param bool $useApiEndpoint
	 */
	function getUrl($path, $noAuth = false, $useApiEndpoint = false)
	{
		$pid = $this->getProjectId();
		return ExternalModules::getUrl($this->getPrefix(), $path, $pid, $noAuth, $useApiEndpoint);
    }
    
    /**
     * @return string
     */
    function getLinkIconHtml($link){
        return ExternalModules::getLinkIconHtml($link, $this->VERSION >= 3, $this);
	}

	public function getModuleName()
	{
		return $this->getConfig()['name'];
	}

	public function getProjectAndRecordFromHashes($surveyHash, $returnCode) {
		$sql = "SELECT
					CAST(s.project_id as CHAR) as projectId,
					r.record as recordId,
					s.form_name as surveyForm,
					CAST(p.event_id as CHAR) as eventId
				FROM redcap_surveys_participants p, redcap_surveys_response r, redcap_surveys s
				WHERE p.hash = ?
					AND p.survey_id = s.survey_id
					AND p.participant_id = r.participant_id
					AND r.return_code = ?";

		$q = $this->query($sql, [$surveyHash, $returnCode]);

		$row = $q->fetch_assoc();

		if($row) {
			return $row;
		}

		return false;
	}

	public function getMetadata($projectId,$forms = NULL) {
		return ExternalModules::getMetadata($projectId, $forms);
	}

	public function saveData($projectId,$recordId,$eventId,$data) {
		return \REDCap::saveData($projectId,"array",[$recordId => [$eventId =>$data]]);
	}

	/**
	 * @param $projectId
	 * @param $recordId
	 * @param $eventId
	 * @param $formName
	 * @param $data array This must be in [instance => [field => value]] format
	 * @return array
	 */
	public function saveInstanceData($projectId,$recordId,$eventId,$formName,$data) {
		return \REDCap::saveData($projectId,"array",[$recordId => [$eventId => [$formName => $data]]]);
	}
    /**
     * It'd be great if we could add the examples in the slack message to the docs (maybe after we stop using markdown):
     * https://victr.slack.com/archives/C2JM4HCJE/p1605564911257800
     *
     * @return bool
     */
    function throttle($sql, $parameters, $seconds, $maxOccurrences){
        if(!is_array($parameters)){
            $parameters = [$parameters];
        }

        $startTime = date('Y-m-d H:i:s', time() - $seconds);
        array_unshift($parameters, $startTime);
        
        $recentOccurrences = $this->countLogs('timestamp > ? and ' . $sql, $parameters);
        return $recentOccurrences >= $maxOccurrences;
    }

    /**
     * @param (mixed|null)[] $args
     */
    function getSurveyResponses($args) {
        $args = array_merge([
            'pid' => $this->getProjectId()
        ], $args);

        $pid = $args['pid'] ?? null;
        $event = $args['event'] ?? null;
        $form = $args['form'] ?? null;
        $record = $args['record'] ?? null;
        $instance = $args['instance'] ?? null;

        $query = $this->createQuery();
		$query->add("
			select *
            from redcap_surveys s
            join redcap_surveys_participants p
                on p.survey_id = s.survey_id
            join redcap_surveys_response r
                on r.participant_id = p.participant_id 
		");

        $clauses = [];
        $params = [];

        if($pid !== null){
            $clauses[] = "project_id = ?";
            $params[] = $pid;
		}

		if($event !== null){
            $clauses[] = "p.event_id = ?";
            $params[] = $event;
		}

        if($form !== null){
            $clauses[] = "form_name = ?";
            $params[] = $form;
		}

        if($record !== null){
            $clauses[] = "r.record = ?";
            $params[] = $record;
		}

        if($instance !== null){
            $clauses[] = "r.instance = ?";
            $params[] = $instance;
		}

        $query->add(" where " . implode(' and ', $clauses), $params);

        /**
         * Ordering by participant_id is important since getParticipantAndResponseId() expects
         * the first row returned to be the first participant.
         * Keep in mind that there are sometimes two participants for a given event, record, & instance,
         * due to a quirk of the way REDCap manages participants.  Here's Rob's explanation:
         * Public surveys can have 1 or 2 rows. But other surveys in the project should not
         * (unless they *used* to be the public survey at some point in the past).
         * Each row in your join would correspond to a particular survey link/hash AND response,
         * and public surveys occupy one row themselves while a private/unique survey link
         * (after the record has been created) can occupy another row.
         * In certain situations, either row may not exist, but in some situations, both exist.
         * It’s not ideal, and has caused some issues over time because of this complexity.
         * It is sort of a weird thing due to the evolution of surveys in REDCap over time
         * (originally REDCap only allowed for one survey per project – i.e., the public survey).
         * We probably wouldn’t design it that way if we re-built it all today.
         */
        $query->add('
            order by p.participant_id asc
        ');

		return $query->execute();
	}

    /**
     * @return string
     */
    function getSurveyHash(){
        return ExternalModules::getSurveyHash();
    }

    /**
     * @return string
     */
    function getSurveyQueueHash(){
        return ExternalModules::getSurveyQueueHash();
    }

    /**
     * @return false|string
     */
    function createTempFile(){
        return ExternalModules::createTempFile();
    }

    /**
     * @return false|string
     */
    function createTempDir(){
        return ExternalModules::createTempDir();
    }

    /**
     * @psalm-taint-escape html
     * @psalm-taint-escape has_quotes
     *
     * @return null|string
     */
    function sanitizeAPIToken($token){
        return preg_replace('/[^\dABCDEF]/', '', $token ?? '');
    }

    function escape($value){
        return ExternalModules::escape($value);
    }

    function isSuperUser(){
        return ExternalModules::isSuperUser();
    }

    function setProjectId($pid){
        ExternalModules::setProjectId($pid);
    }

    function isAuthenticated(){
        return !ExternalModules::isNoAuth() && ExternalModules::getUsername() !== null;
    }
}
