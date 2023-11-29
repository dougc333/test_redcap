<?php

require_once dirname(dirname(__FILE__)) . '/Config/init_project.php';
// Default response
$response = '0';

// If project is in production, do not allow instant editing (draft the changes using metadata_temp table instead)
$metadata_table = ($status > 0) ? "redcap_metadata_temp" : "redcap_metadata";

$fields = array_reverse(explode(",", str_replace(" ", "", json_decode($_POST['field']))));
$field_exists = array();
$fields_labels = array();
$movedFieldForm = array();
$targetFieldForm = array();
$changedForm = array();
$targetFieldFormLabel = array();
foreach ($fields as $index => $field) {
    // Check if we have all values needed
    if (!(isset($field) && isset($_POST['action']) && isset($_POST['grid_name']) && preg_match("/^[a-z0-9_]+$/", $field))) {
        exit('0');
    }

    // Validate field name
    array_push($fields_labels, ($status > 0) ? $Proj->metadata_temp[$field]['element_label'] : $Proj->metadata[$field]['element_label']);
    array_push($field_exists, ($status > 0) ? isset($Proj->metadata_temp[$field]) : isset($Proj->metadata[$field]));

    // Was the matrix moved to another form?
    array_push($movedFieldForm, ($status > 0) ? $Proj->metadata_temp[$field]['form_name'] : $Proj->metadata[$field]['form_name']);
    if (!isset($_POST['move_after_field'])) {
		array_push($targetFieldForm, "");
		array_push($targetFieldFormLabel, "");
	} else {
		array_push($targetFieldForm, ($status > 0) ? $Proj->metadata_temp[$_POST['move_after_field']]['form_name'] : $Proj->metadata[$_POST['move_after_field']]['form_name']);
		array_push($targetFieldFormLabel, ($status > 0) ? $Proj->forms_temp[$targetFieldForm[$index]]['menu'] : $Proj->forms[$targetFieldForm[$index]]['menu']);
	}
	array_push($changedForm, ($movedFieldForm[$index] != $targetFieldForm[$index]));
}

// Validate grid_name
$grid_name = trim($_POST['grid_name']);
if ($grid_name != '') {
	$grid_name_exists = ($status > 0) ? isset($Proj->matrixGroupNamesTemp[$grid_name]) : isset($Proj->matrixGroupNames[$grid_name]);
	if (!$grid_name_exists) exit('0');
}

// Get arrays of all fields and all fields in all grids, etc.
$all_fields = ($status > 0) ? $Proj->metadata_temp : $Proj->metadata;
$num_forms  = ($status > 0) ? $Proj->numFormsTemp  : $Proj->numForms;
$allFieldsInGrids = ($status > 0) ? $Proj->matrixGroupNamesTemp : $Proj->matrixGroupNames;
// Get array of fields in grid being moved (if moving a matrix)
$fieldsInGrid = array();
if ($grid_name != '') {
	$fieldsInGrid = ($status > 0) ? $allFieldsInGrids[$grid_name] : $allFieldsInGrids[$grid_name];
}

## DISPLAY INSTRUCTIONS
if ($_POST['action'] == 'view')
{
	// Create array of all fields in all grids WITHOUT the last field in each grid (because when building the field drop-down,
	// we don't want to display fields in the middle of a grid but only the last field in the grid).
	$fieldsInGridsMinusLast = array();
	foreach ($allFieldsInGrids as $thisgrid=>$thesefields) {
		array_pop($thesefields);
		$fieldsInGridsMinusLast = array_merge($fieldsInGridsMinusLast, $thesefields);
	}

	global $myCapProj;
	// Build field drop-down list
	$all_fields_dd = "<select id='move_after_field' style='font-weight:normal;width:100%;'>
						<option value=''>-- {$lang['random_02']} --</option>";
	$prevform = '';
	foreach ($all_fields as $thisfield=>$attr) {
		// Get current form
		$thisform = $attr['form_name'];

		// Exclude if this form is active task added for MyCap
        if ($myCapProj->tasks[$thisform]['is_active_task'] == 1)    continue;

		// If we're beginning a new form, then display form menu label as optgroup label
		if ($num_forms > 1 && $thisform != $prevform) {
			// Close previous optgroup
			if ($prevform != '') $all_fields_dd .= "</optgroup>";
			// Add optgroup
			$all_fields_dd .= "<optgroup label='" . RCView::escape($attr['form_menu_description']) . "'>";
		}
		// Highlight the location of the current field being moved (to give perspective)
        foreach ($fields as $field) {
            if ($thisfield == $field) {
                $all_fields_dd .= "</optgroup><optgroup label='" . RCView::escape($lang['design_364']) . "'>";
            }
        }
        // Do not include the field/matrix we're moving OR Form Status fields OR any fields in a matrix except the last one in the group
        if ($thisfield != $thisform.'_complete' && !in_array($thisfield, $fieldsInGridsMinusLast) &&
            (($grid_name == '' && !in_array($thisfield, $fields)) ||
                ($grid_name != '' && !in_array($thisfield, $fieldsInGrid))))
        {
            // Add option
            $label = strip_tags(label_decode($attr['element_label']));
            $label = (mb_strlen($attr['element_label']) > 60) ? mb_substr($label, 0, 58)."..." : $label;
            $all_fields_dd .= "<option value='$thisfield'>$thisfield " . RCView::SP . RCView::escape('"' . $label . '"') . "</option>";
        }

		// Set for next loop
		$prevform = $thisform;
	}
	// Add closing optgroup and close select list
	$all_fields_dd .= "</optgroup>";
	$all_fields_dd .= "</select>";

	// Set variables for displayed text
	if ($grid_name == '') {
		// Single field
		$text1 = $lang['design_336'];
		$text2 = $lang['design_335'];
		$text3 = $lang['design_337'];
		$title = $lang['design_333'];
		$varToBeMoved = implode(", ",$fields);
		$varToBeMovedLabel = implode(", ", $fields_labels);
	} else {
		// Matrix of fields
		$text1 = $lang['design_344'];
		$text2 = $lang['design_343'];
		$text3 = $lang['design_345'];
		$title = $lang['design_334'];
		$varToBeMoved = $grid_name;
		$varToBeMovedLabel = "";
	}

	$title_confirm = "";
	foreach ($fields as $index => $field){
        $padding = '';
	    if($index != 0){
	        $padding = 'padding-left:125px;';
        }
	    $title_confirm .= RCView::span(array('style'=>'color:#800000;font-weight:bold;font-family:verdana;'.$padding), $field) . RCView::SP . RCView::SP .
            ($fields_labels[$index] == '' ? '' : RCView::span(array('style'=>'color:#800000;'), '"' . RCView::escape(trim(strip_tags($fields_labels[$index]))) . '"')).RCView::br();
    }
	// Popup content
	$html = RCView::div('',
				RCView::p('', $text1) .
				RCView::div(array('style'=>'font-size:13px;width:95%;margin-top:15px;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;'),
                    RCView::b($text2) . RCView::SP . RCView::SP .$title_confirm ).
				RCView::div(array('style'=>'line-height:1.6em;margin:20px 0;font-weight:bold;background-color:#f5f5f5;border:1px solid #ccc;padding:10px;width:95%;'),
					$text3 . RCView::br() . $all_fields_dd
				)
			);

	// Output JSON
    header("Content-Type: application/json");
	print json_encode_rc(array('payload'=>$html, 'title'=>$title));
	exit;
}


## MOVE AND SAVE IN NEW POSITION
elseif ($_POST['action'] == 'save' && isset($_POST['move_after_field']) && isset($all_fields[$_POST['move_after_field']]))
{
	$sql_all = array();

	// Message if field's SH got merged with another SH
	$mergedSHmsg = "";
    $response = array();
	$fieldCount = count($fields);
    foreach ($fields as $index => $field)
    {
    	// If we're processing multiple fields, reset the metadata in the Project object to keep it updated for the next loop
		if ($fieldCount > 1 && $index > 0) {
			if ($status > 0) {
				$Proj->loadMetadataTemp();
			} else {
				$Proj->loadMetadata();
			}
		}

	// Move single field
	if ($grid_name == '') {

		// If had a SH, then leave the SH on the field that originally followed the moved field
		$fieldSH = ($status > 0) ? $Proj->metadata_temp[$field]['element_preceding_header'] : $Proj->metadata[$field]['element_preceding_header'];

		if ($fieldSH != "") {
			// Remove SH from moved field
			$sql = $sql_all[] = "update $metadata_table set element_preceding_header = null
						 where project_id = $project_id and field_name = '" . db_escape($field) . "'";
			db_query($sql);

			// Add SH to field that follows moved field in its original location
			$formFields = ($status > 0) ? $Proj->forms_temp[$movedFieldForm[$index]]['fields'] : $Proj->forms[$movedFieldForm[$index]]['fields'];
			$origFieldAfterMovedField = "";
			$getNextField = false;
			foreach (array_keys($formFields) as $thisfield) {
				if ($thisfield == $field) {
					$getNextField = true;
				} elseif ($getNextField) {
					$origFieldAfterMovedField = $thisfield;
					break;
				}
			}
			// Now that we have field directly after moved field, add moved field's SH to it
			if ($origFieldAfterMovedField != "") {
				// See if this field already has a SH before we add this new SH to it (if so, merge both SH together)
				$fieldAfterMovedFieldSH = ($status > 0) ? $Proj->metadata_temp[$origFieldAfterMovedField]['element_preceding_header'] : $Proj->metadata[$origFieldAfterMovedField]['element_preceding_header'];
				// Set flag
				$resurrectSH = true;
				// Message if field's SH got merged with another SH
				if ($fieldAfterMovedFieldSH != "") {
					if ($origFieldAfterMovedField == $movedFieldForm[$index] . "_complete") {
						// Cannot merge SH with a Form Status field's SH, so give msg that SH was lost
						$mergedSHmsgContent = "<b>{$lang['design_362']}</b><br><br>{$lang['design_363']}";
						// Set flag NOT to resurrect the SH
						$resurrectSH = false;
					} else {
						// Merge SH with following field's SH
						$mergedSHmsgContent = "<b>{$lang['design_360']}</b><br><br>{$lang['design_361']}";
					}
					// Set msg HTML
					$mergedSHmsg = RCView::div(array('class' => 'yellow', 'style' => 'margin-top:20px;font-size:12px;'),
						$mergedSHmsgContent
					);
				}
				if ($resurrectSH) {
					// Set the new SH text
					$fieldAfterMovedFieldSH = label_decode($fieldSH) . ($fieldAfterMovedFieldSH == "" ? "" : "\n\n" . label_decode($fieldAfterMovedFieldSH));
					// Add SH to field
					$sql = $sql_all[] = "update $metadata_table set element_preceding_header = " . checkNull($fieldAfterMovedFieldSH) . "
								 where project_id = $project_id and field_name = '" . db_escape($origFieldAfterMovedField) . "'";
					db_query($sql);
				}
			}
		}

		// Remove Form Title from moved field
		$sql = $sql_all[] = "update $metadata_table set form_menu_description = null
					 where project_id = $project_id and field_name = '" . db_escape($field) . "'";
		db_query($sql);

		// First get all existing fields and their order and put in array so that we only update those whose field order changed
		$currentFieldOrder = array();
		$all_fields_names = array();
		$sql = "select field_name, field_order from $metadata_table where project_id = $project_id order by field_order";
		$q = db_query($sql);
		while ($row = db_fetch_assoc($q)) {
			$currentFieldOrder[$row['field_name']] = $row['field_order'];
			array_push($all_fields_names,$row['field_name']);
		}

		// Loop through ALL field names and create array of them all, then insert matrix fields at desired target spot
		$fieldsNewOrder = array();
		foreach ($all_fields_names as $thisfield) {
			// Add field to array (only if not the field being moved)
			if ($thisfield != $field) {
				$fieldsNewOrder[] = $thisfield;
			}
			// If this field is our target field, add the matrix fields here
			if ($thisfield == $_POST['move_after_field']) {
				$fieldsNewOrder[] = $field;
			}
		}
		// Double check to make sure the counts add up
		if (count($all_fields_names) != count($fieldsNewOrder)) exit('0');

		// Now loop through ALL fields and set new field_order as such
		$field_order = 1;
		$errors = 0;
		foreach ($fieldsNewOrder as $thisfield) {
			// Only do update if field order number changed
			if ($currentFieldOrder[$thisfield] != $field_order) {
				// If field was moved to another form, don't forget to also change its form_name
				$form_name_sql = "";
				if ($changedForm[$index] && $thisfield == $field) {
					// Set sql to set form_name to target form for moved field
					$form_name_sql = ", form_name = '" . db_escape($targetFieldForm[$index]) . "'";
				}
				// Set new field order
				$sql = $sql_all[] = "update $metadata_table set field_order = $field_order $form_name_sql
							 where project_id = $project_id and field_name = '" . db_escape($thisfield) . "'";
				if (!db_query($sql)) $errors++;
			}
			// Increment field order
			$field_order++;
		}

		if ($errors > 0) exit('0');
		// Set HTML response
		$response[] = RCView::div('',
			RCView::b($field . $lang['colon']." ") . $lang['design_347'] . " " .
			($changedForm[$index]
				? $lang['design_350'] . " \"<a href='" . APP_PATH_WEBROOT . "Design/online_designer.php?pid=$project_id&page=$targetFieldForm[$index]' style='text-decoration:underline;'>$targetFieldFormLabel[$index]</a>\"" . $lang['period'] .
				RCView::div(array('style' => 'margin-top:15px;'),
					"<a href='" . APP_PATH_WEBROOT . "Design/online_designer.php?pid=$project_id&page=$targetFieldForm[$index]#{$field}-tr' style='text-decoration:underline;'>{$lang['design_351']}</a>"
				)
				: $lang['design_349']) .
			$mergedSHmsg
		);

		// Add note if Record ID field changed (because it itself was moved)
		if (Design::recordIdFieldChanged()) {
			$sql = "select field_name from $metadata_table where project_id = $project_id order by field_order limit 1";
			$current_table_pk = db_result(db_query($sql), 0);
			$response[] = RCView::div(array('class' => 'red', 'style' => 'margin-top:20px;font-size:12px;'),
				"<b>{$lang['design_353']}</b><br><br>
					<b>{$lang['update_pk_07']}</b> {$lang['update_pk_02']} {$lang['update_pk_08']} \"<b>$current_table_pk</b>\"{$lang['period']}
					{$lang['update_pk_05']}<br><br>
					<b>{$lang['update_pk_03']}</b><br>" . ($status < 1 ? $lang['update_pk_10'] : $lang['update_pk_11'])
			);
		}
	} // Move whole matrix (w/ possible SH)
	else {
		// First get all existing fields and their order and put in array so that we only update those whose field order changed
		$currentFieldOrder = array();
		$all_fields_names = array();
		$sql = "select field_name, field_order from $metadata_table where project_id = $project_id order by field_order";
		$q = db_query($sql);
		while ($row = db_fetch_assoc($q)) {
			$currentFieldOrder[$row['field_name']] = $row['field_order'];
			array_push($all_fields_names,$row['field_name']);
		}

		// Loop through ALL field names and create array of them all, then insert matrix fields at desired target spot
		$fieldsNewOrder = array();
		foreach ($all_fields_names as $thisfield) {
			// Add field to array (only if not in matrix being moved)
			if (!in_array($thisfield, $fieldsInGrid)) {
				$fieldsNewOrder[] = $thisfield;
			}
			// If this field is our target field, add the matrix fields here
			if ($thisfield == $_POST['move_after_field']) {
				$fieldsNewOrder = array_merge($fieldsNewOrder, $fieldsInGrid);
			}
		}
		// Double check to make sure the counts add up
		if (count($all_fields_names) != count($fieldsNewOrder)) exit('0');

		// Now loop through ALL fields and set new field_order as such
		$field_order = 1;
		$sql_all = array();
		$errors = 0;
		foreach ($fieldsNewOrder as $thisfield) {
			// Only do update if field order number changed
			if ($currentFieldOrder[$thisfield] != $field_order) {
				// If field was moved to another form, don't forget to also change its form_name
				$form_name_sql = "";
				// For fields that are moved, may need to change the form name as well
				if ($changedForm && in_array($thisfield, $fieldsInGrid)) {
					// Set sql to set form_name to target form for moved field
					$form_name_sql = ", form_name = '" . db_escape($targetFieldForm[$index]) . "'";
				}
				// Set new field order
				$sql = $sql_all[] = "update $metadata_table set field_order = $field_order $form_name_sql
								 where project_id = $project_id and field_name = '" . db_escape($thisfield) . "'";
				if (!db_query($sql)) $errors++;
			}
			// Increment field order
			$field_order++;
		}
		if ($errors > 0) exit('0');
		// Set HTML response
		$response[] = RCView::div('',
			$lang['design_348'] . " " .
			($changedForm[$index]
				? $lang['design_350'] . " \"<a href='" . APP_PATH_WEBROOT . "Design/online_designer.php?pid=$project_id&page=$targetFieldForm[$index]' style='font-weight:bold;text-decoration:underline;'>$targetFieldFormLabel[$index]</a>\"" . $lang['period'] .
				RCView::div(array('style' => 'margin-top:15px;'),
					"<a href='" . APP_PATH_WEBROOT . "Design/online_designer.php?pid=$project_id&page=$targetFieldForm[$index]#{$field}-tr' style='text-decoration:underline;'>{$lang['design_352']}</a>"
				)
				: $lang['design_349'])
		);
	}

	## Check if moved to beginning of a form. If so, deal with form menu description
	Design::fixFormLabels();

	// Log this event
	$fieldNamesLog = ($grid_name == '' ? "field_name = '$field'" : "grid_name = '$grid_name'\nfield_name = '" . implode("'\nfield_name = '", $fieldsInGrid) . "'");
	$descrLog = ($grid_name == '') ? "Move project field" : "Move matrix of project fields";
	Logging::logEvent(implode(";\n", $sql_all), $metadata_table, "MANAGE", $grid_name, $fieldNamesLog, $descrLog);

    }
	// Return successful response
	$response = implode("", array_reverse($response));
	exit($response);
}

## ERROR
exit('0');
