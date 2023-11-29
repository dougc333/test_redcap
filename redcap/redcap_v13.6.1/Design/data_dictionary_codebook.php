<?php

use MultiLanguageManagement\MultiLanguage;
use REDCap\Context;

require_once dirname(dirname(__FILE__)) . '/Config/init_project.php';

// Display the project header
require_once APP_PATH_DOCROOT . 'ProjectGeneral/header.php';

// Concertina button text
addLangToJS(array(
    "design_774", //= Expand
    "design_775", //= Expand all instruments
    "design_776", //= Collapse
    "design_777", //= Collapse all instruments
    "design_990", //= [collapsed]
));

if (isset($_GET['popup'])) {
	?>
    <style type="text/css">
        #west, #footer, #subheader, #sub-nav, #codebook-instructions { display: none !important; }
    </style>
    <?php
}

// Build JSON data for auto-complete field selection
$fieldChoices = Form::getFieldDropdownOptions(false, false, false, false, null, false, false, true, null);
$fieldChoicesData = [];
foreach ($fieldChoices as $val=>$label) {
    $fieldChoicesData[$val] = ['value'=>$val, 'label'=>$label];
}
unset($fieldChoices);

// Enable an auto-appearing button to allow users to scroll to top of page
outputButtonScrollToTop();

// MLM project settings
$mlm_ps = MultiLanguage::getProjectSettings($Proj->project_id);
$mlm_meta = MultiLanguage::getProjectMetadata($Proj->project_id);
$mlm_active = !$mlm_ps["disabled"] && count($mlm_ps["langs"]);
$mlm_langs = MultiLanguage::sortLanguages($mlm_ps["langs"]);
$mlm_context = Context::Builder()->project_id($Proj->project_id)->Build();
$mlm_fallback_override = "???";
$mlm_bordertop_style = "border-top:1px dashed #CCCCCC;";
$mlm_langs_param = $_GET["langs"] ?? $mlm_ps["refLang"];
$mlm_displayed_langs = array_intersect($mlm_langs, explode(",", $mlm_langs_param));

?>
<style type="text/css">
#mlm-reload-page-btn:disabled {
	color: #a0a0a0;
	background-color: #f9f9f9;
    border: 1px solid #f9f9f9;
}
#mlm-reload-page-btn:disabled:hover {
	outline: none;
}
table.ReportTableWithBorder {
	border-right:1px solid black;
	border-bottom:1px solid black;
}
table.ReportTableWithBorder th, table.ReportTableWithBorder td {
	border-top: 1px solid black;
	border-left: 1px solid black;
	padding: 4px 5px;
}
table.ReportTableWithBorder th { font-weight:bold;  }
td.vwrap {word-wrap:break-word;word-break:break-all;}
th.codebook-form-header {
    position: sticky;
    top: 0; /* Don't forget this, required for the stickiness */
    box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);
    color:#444;
    background-color:#cccccc;
    padding:8px 10px 0 10px;
}
@media print {
	#sub-nav { display: none; }
    th.codebook-form-header { background: none; }
}
.ui-menu-item code { font-size: 12px; color: #C00000; margin-right: 3px; }
</style>
<?php

// TABS
include APP_PATH_DOCROOT . "ProjectSetup/tabs.php";

// Place all html in variables
$html = $table = "";

#region Instructions
$html .= 
    RCView::p(
        array(
            'class' => 'd-print-none', 
            'id' => 'codebook-instructions', 
            'style' => 'margin:5px 0 5px;max-width:95%;',
        ),
        RCView::tt("design_483")
    );
if ($mlm_active) $html .=
    RCView::p(
        array(
            'class' => 'd-print-none', 
            'id' => 'mlm-instructions', 
            'style' => 'margin:5px 0 5px;max-width:95%;',
        ),
        RCView::tt_i("multilang_226", [$mlm_fallback_override])
    );
#endregion

#region PRINT PAGE button, today's date, and page header
$html .= 
    RCView::table(
        array(
            'cellspacing' => 0, 
            'style' => 'width:99%;table-layout:fixed;margin:20px 0 20px;',
        ),
        RCView::tr(array(),
            RCView::td(
                array(
                    'style' => 'width:150px;'.(isset($_GET['popup']) ? "visibility:hidden;" : ""),
                ),
                RCView::button(
                    array(
                        'class' => 'jqbuttonmed invisible_in_print', 
                        'onclick' => 'window.print();',
                    ),
                    RCView::img(array('src'=>'printer.png')) .
                    RCView::tt("graphical_view_15")
                )
            ) .
            RCView::td(
                array(
                    'style' => 'text-align:center;font-size:18px;font-weight:bold;',
                ),
                '<i class="fas fa-book" style="font-size:16px;"></i> ' .
                RCView::tt("global_116")
            ) .
            RCView::td(
                array(
                    'style' => 'text-align:right;width:130px;color:#666;', 
                ),
                RCView::span(
                    array(
                        'class' => 'visible_in_print_only',
                    ),
                    DateTimeRC::format_ts_from_ymd(NOW)
                )
            )
        ).
        // Auto-complete field search
        RCView::tr(['class'=>'invisible_in_print'],
            RCView::td(['class'=>'pt-4 pb-0', 'colspan'=>3],
                RCView::span(['class'=>'font-weight-bold me-2'], $lang['global_246']) .
                RCView::text([
                    'class' => 'x-form-text x-form-field',
                    'style' => 'width:350px;max-width:350px;',
                    'id' => 'field-search',
                    'placeholder' => $lang['global_245']
                ])
            )
        )
    );
#endregion

#region Missing data codes
$missingDataCodesTable = "";
if (!empty($missingDataCodes)) {
    $missingDataRows = RCView::tr(array(),
        RCView::th(
            array(
                'scope' => 'col', 
                'class' => 'p-1 boldish', 
                'style' => 'background-color:#e8e8e8;',
            ),
            RCView::tt("dataqueries_308")
        ) .
        RCView::th(
            array(
                'scope' => 'col', 
                'class' => 'p-1 boldish', 
                'style' => 'background-color:#e8e8e8;',
            ),
            RCView::tt("data_comp_tool_26")
        )
    );
    foreach ($missingDataCodes as $this_code=>$this_label) {
        $missingDataRows .=
            RCView::tr(array(),
                RCView::td(
                    array(
                        'class' => 'p-1',
                    ),
                    filter_tags($this_code)
                ) .
                RCView::td(
                    array(
                        'class' => 'p-1',
                        'data-mlm-type' => 'mdc-label',
                        'data-mlm-name' => js_escape($this_code),
                    ),
                    filter_tags($this_label)
                )
            );
        if ($mlm_active) foreach($mlm_displayed_langs as $this_lang_id) {
            if ($this_lang_id == $mlm_ps["refLang"]) continue; // Skip default language
            $this_context = Context::Builder($mlm_context)->lang_id($this_lang_id)->Build();
            $mdc_translation = MultiLanguage::getDDTranslation($this_context, "mdc-label", $this_code, "", $mlm_fallback_override);
            $missingDataRows .= 
                RCView::tr(
                    array(
                        "data-mlm-lang-toggle" => $this_lang_id,
                    ),
                    RCView::td(
                        array(
                            'class' => 'p-1',
                            'style' => 'text-align:right;color:#777;border-top:none;padding-top:0 !important;',
                        ),
                        "<i>[{$this_lang_id}]</i>"
                    ) .
                    RCView::td(
                        array(
                            'class' => 'p-1',
                            "style" => "border-top:none;padding-top:0 !important;",
                        ),
                        filter_tags($mdc_translation)
                    )
                );
        }
    }
    $missingDataCodesTable = 
        RCView::table(
            array(
                'class' => 'table fs11 float-start', 
                'style' => 'max-width:300px;border:1px solid #dee2e6;',
            ),
            RCView::thead(array(),
                RCView::tr(array(),
                    RCView::th(
                        array(
                            'colspan' => 2, 
                            'scope' => 'col', 
                            'class' => 'p-1 font-weight-bold', 
                            'style' => 'border:1px solid #aaa;background-color:#ddd;'
                        ),
                        RCView::tt("dataqueries_307")
                    )
                )
            ).
            RCView::tbody(array(), $missingDataRows)
        );
}
#endregion

#region Languages table (MLM)
$mlmTable = "";
if ($mlm_active) {
    $mlm_rows = RCView::tr(array(),
        RCView::th(
            array(
                'scope' => 'col', 
                'class' => 'p-1 boldish', 
                'style' => 'background-color:#e8e8e8;',
            ),
            RCView::tt("multilang_73")
        ) .
        RCView::th(
            array(
                'scope' => 'col', 
                'class' => 'p-1 boldish', 
                'style' => 'background-color:#e8e8e8;width:20px;',
            ),
            "<input type=\"checkbox\" id=\"mlm-check-all\" style=\"vertical-align:text-bottom;\" class=\"d-print-none\">"
        ) .
        RCView::th(
            array(
                'scope' => 'col', 
                'class' => 'p-1 boldish', 
                'style' => 'background-color:#e8e8e8;',
            ),
            RCView::tt("multilang_25")
        )
    );
    foreach ($mlm_langs as $this_lang_id) {
        $this_lang = $mlm_ps["langs"][$this_lang_id];
        $this_lang_is_default = $this_lang_id == $mlm_ps["refLang"];
        $this_lang_default = $this_lang_is_default ? (" <b>". RCView::tt("multilang_225") ."</b>") : "";
        $this_lang_attr = "data-mlm-lang=\"{$this_lang_id}\"" . ($this_lang_is_default ? " disabled" : "");
        $this_lang_attr .= in_array($this_lang_id, $mlm_displayed_langs, true) ? " checked" : "";
        $mlm_rows .=
            RCView::tr(array(),
                RCView::td(
                    array(
                        'class' => 'p-1',
                    ),
                    filter_tags($this_lang_id)
                ) .
                RCView::td(
                    array(
                        'class' => 'p-1',
                    ),
                    "<input type=\"checkbox\" style=\"vertical-align:text-bottom;\" {$this_lang_attr}>"
                ) .
                RCView::td(
                    array(
                        'class' => 'p-1',
                    ),
                    filter_tags($this_lang["display"]) . $this_lang_default
                )
            );
    }
    // Add Refresh button
    $mlm_rows .= RCView::tr(array(
            'class' => 'invisible_in_print',
        ),
        RCView::td(array(
                'class' => 'p-1',
                'colspan' => "3",
            ),
            RCView::button(array(
                    'id' => 'mlm-reload-page-btn',
                    'class' => 'jqbuttonmed', 
                    'onclick' => 'mlm_reload_with_langs(false);',
                ),
                RCView::i(array('class'=>'fas fa-redo')) . " " .
                RCView::tt("rights_238") // Reload page
            )
        )
    );
    $mlmTable = 
        RCView::table(
            array(
                'class' => 'table fs11 float-start ms-2', 
                'style' => 'max-width:300px;border:1px solid #dee2e6;',
            ),
            RCView::thead(array(),
                RCView::tr(array(),
                    RCView::th(
                        array(
                            'colspan' => 3, 
                            'scope' => 'col', 
                            'class' => 'p-1 font-weight-bold', 
                            'style' => 'border:1px solid #aaa;background-color:#ddd;'
                        ),
                        RCView::tt("multilang_67") //= Languages
                    )
                )
            ).
            RCView::tbody(array(), $mlm_rows)
        );
}
$html .= RCView::div(
    array(
        'class' => 'clearfix', 
        'style' => 'max-width:850px;',
    ),
    $missingDataCodesTable . $mlmTable
);
#endregion

// Determine if we will allow navigation to Online Designer via pencil icon
$allow_edit = ($user_rights['design'] && ($status == '0' || ($status == '1' && $draft_mode == '1')));
$th_edit = $allow_edit ? RCView::th(array('style'=>'text-align:center;background-color:#ddd;width:28px;'), '') : '';

// Table headers
$table .= RCView::tr(array(
                "class" => "codebook-table-header",
            ),
            $th_edit .
            RCView::th(array('style'=>'text-align:center;background-color:#ddd;width:4%;'), '#') .
            RCView::th(array('style'=>'background-color:#ddd;width:20%;'), RCView::tt("design_484")) .
            RCView::th(array('style'=>'background-color:#ddd;'), RCView::tt("global_40") . RCView::div(array('style'=>'color:#666;font-size:11px;'), "<i>".RCView::tt("database_mods_69")."</i>")) .
            RCView::th(array('style'=>'background-color:#ddd;width:35%;'), RCView::tt("design_494"))
        );

foreach ($Proj->metadata as $attr) {
    $print_label = "";
    $mc_choices_array = ($attr['element_enum'] == '') ? array() : parseEnum($attr['element_enum']);
    $this_element_label = nl2br(strip_tags(label_decode($attr['element_label'])));
    $print_field_name = "<code class='fs12'><span style='color:#aaa;margin-right:1px;'>[</span><span class='text-dangerrc'>{$attr['field_name']}</span><span style='color:#aaa;margin-left:1px;'>]</span></code>";
    if ($attr['branching_logic'] != "" ) {
        $print_field_name .= RCView::div(array('style'=>'margin-top:10px;'),
                                RCView::div(array('style'=>'color:#777;margin-right:5px;'), RCView::tt("design_485")) .
                                $attr['branching_logic']
                                );
    }
    if ($attr['element_preceding_header'] != "") {
        $print_label .= RCView::div(array('style'=>'margin-bottom:6px;font-size:11px;'),
                            RCView::tt("global_127") . "<i style='color:#666;'>" . RCView::escape(strip_tags(label_decode($attr['element_preceding_header']))) . "</i>"
                        );
    }
    if ($attr['element_type'] == 'slider') {
        if ($attr['element_validation_min'] == "") $attr['element_validation_min'] = "0";
        if ($attr['element_validation_max'] == "") $attr['element_validation_max'] = "100";
    }
    $print_label .= $this_element_label ;
    if ($attr['element_note'] != "") {
        $print_label .= RCView::div(array('style'=>'color:#666;font-size:11px;'),
                            "<i>" . RCView::escape(strip_tags(label_decode($attr['element_note']))) . "</i>"
                        );
    }
    if ($attr['element_type'] == 'select') $attr['element_type'] = 'dropdown';
    elseif ($attr['element_type'] == 'textarea') $attr['element_type'] = 'notes';
    $print_type = $attr['element_type'];
    if ($attr['element_validation_type'] != "" || ($attr['element_type'] == 'slider' && ($attr['element_validation_min'] != "" || $attr['element_validation_max'] != ""))) {
        if ($attr['element_validation_type'] == 'int') $attr['element_validation_type'] = 'integer';
        elseif ($attr['element_validation_type'] == 'float') $attr['element_validation_type'] = 'number';
        elseif (in_array($attr['element_validation_type'], array('date', 'datetime', 'datetime_seconds'))) $attr['element_validation_type'] .= '_ymd';
        $print_type .= " (" . ($attr['element_validation_type'] == '' ? '' : $attr['element_validation_type']);
        if ($attr['element_validation_min'] != "" ) {
            $print_type .= ($attr['element_validation_type'] == '' ? '' : ', ').RCView::tt("design_486")." ".$attr['element_validation_min'];
        }
        if ($attr['element_validation_max'] != "" ) {
            $print_type .= (($attr['element_validation_min'] == '' && $attr['element_validation_type'] == '') ? '' : ', ').RCView::tt("design_487")." ".$attr['element_validation_max'];
        }
        $print_type .= ")";
    }
    if ($attr['element_type'] == 'radio' && $attr['grid_name'] != '') {
        $print_type .= " (".RCView::tt("design_502");
        if ($attr['grid_rank'] == '1') {
            $print_type .= " ".RCView::tt("design_503");
        }
        $print_type .= ")";
    }
    if ($attr['field_req'] == '1') { $print_type .= ", Required"; }
    if ($attr['field_phi'] == '1') { $print_type .= ", Identifier"; }
    if ($attr['element_enum'] != "" && $attr['element_type'] != "descriptive") {
        if ($attr['element_type'] == 'slider' ) {
            $print_type .= "<br />".RCView::tt("design_488")." ".implode(", ", Form::parseSliderLabels($attr['element_enum']));
        } elseif ($attr['element_type'] == 'calc') {
            $print_type .= "<br />".RCView::tt("design_489")." ".$attr['element_enum'];
        } elseif ( $attr['element_type'] == 'sql' ) {
            $print_type .= '<table border="1" cellpadding="2" cellspacing="0" class="ReportTableWithBorder"><tr><td>' . $attr['element_enum'] . '</td></tr></table>';
        } else {
            $print_type .= '<table border="1" cellpadding="2" cellspacing="0" class="ReportTableWithBorder">';
            foreach ($mc_choices_array as $val=>$label) {
                $print_type .= '<tr valign="top">';
                if ($attr['element_type'] == 'checkbox' ) {
                    $print_type .= '<td>' . $val . '</td>';
                    $val = (Project::getExtendedCheckboxCodeFormatted($val));
                    $print_type .= '<td>' . $attr['field_name'] . '___' . $val . '</td>';
                } else {
                    $print_type .= '<td>' . $val . '</td>';
                }
                $print_type .= '<td>' . trim(RCView::escape(strip_tags2($label." "))) . '</td>';
                $print_type .= '</tr>';
            }
            $print_type .= '</table>';
        }
    }
    if ($attr['custom_alignment'] != "") {
        $print_type .= "<br />".RCView::tt("design_490")." ".$attr['custom_alignment'];
    }
    if ($attr['question_num'] != "") {
        $print_type .= "<br />".RCView::tt("design_491")." ".RCView::escape($attr['question_num']);
    }
    if ($attr['misc'] != "") {
        $print_type .= "<br />".RCView::tt("design_527").": ".RCView::escape($attr['misc'], false);
    }
    if ($attr['stop_actions'] != "") {
        // Make sure that all stop actions still exist as a valid choice and remove any that are invalid
        $stop_actions_array = array();
        foreach (explode(",", $attr['stop_actions']) as $code) {
            if (isset($mc_choices_array[$code])) {
                $stop_actions_array[] = $code;
            }
        }
        // Display stop action choices
        if (!empty($stop_actions_array)) {
            $print_type .= "<br />".RCView::tt("design_492")." " . implode(", ", $stop_actions_array);
        }
    }
    #region Instrument name, if there is one
    if ($attr['form_menu_description'] != "") {
        $colspan = $allow_edit ? 5 : 4;
        $translations = array();
        $form_languages = "";
        $form_active_languages = array();
        $survey_active_languages = array();
        if ($mlm_active) {
            foreach ($mlm_langs as $this_lang_id) {
                if (isset($mlm_ps["langs"][$this_lang_id]["dd"]["form-active"][$attr["form_name"]])) {
                    $form_active_languages[] = $this_lang_id;
                }
                if (isset($mlm_ps["langs"][$this_lang_id]["dd"]["survey-active"][$attr["form_name"]])) {
                    $survey_active_languages[] = $this_lang_id;
                }
                if ($this_lang_id == $mlm_ps["refLang"]) continue; // Skip default language
                $this_context = Context::Builder($mlm_context)->lang_id($this_lang_id)->Build();
                $translations[] = RCView::span(array(
                        "class" => "me-1",
                        "style" => "display:none;",
                        "data-mlm-lang-toggle" => $this_lang_id,
                    ),
                    "<br><i style=\"color:#444\">[{$this_lang_id}]</i> ".MultiLanguage::getDDTranslation($this_context, "form-name", $attr["form_name"], "", $mlm_fallback_override)
                );
            }
            $form_languages = RCView::tt_i(
                isset($Proj->forms[$attr['form_name']]['survey_id']) ? "multilang_228" : "multilang_227", 
                array(
                    count($form_active_languages) ? join(", ", $form_active_languages) : RCView::tt("global_75"),
                    count($survey_active_languages) ? join(", ", $survey_active_languages) : RCView::tt("global_75"),
                ), 
                false
            );
        }
        $table .= RCView::tr(array(),
                    RCView::th(array(
                            'class' => 'codebook-form-header',
                            'data-form-name' => $attr["form_name"],
                            'colspan' => $colspan
                        ),
                        RCView::tt("design_493") .
                        RCView::span(array('style'=>'font-size:120%;font-weight:bold;margin-left:7px;color:#000;'),
                            RCView::escape($attr['form_menu_description'])
                        ) .
                        RCView::span(array('style'=>'margin-left:10px;color:#444;'),
                            "(". $attr['form_name'].")"
                        ) .
                        (!isset($Proj->forms[$attr['form_name']]['survey_id']) ? '' :
                            '<font style="color:green;margin-left:30px;"><i class="fas fa-chalkboard-teacher"></i> ' . RCView::tt("design_789") . '</font>'
                        )
                    )
                );
        if ($mlm_active) $table .= RCView::tr(array(),
                    RCView::td(
                        array(
                            'colspan'=>$colspan, 
                            'style'=>'color:#444;background-color:#cccccc;padding-left:100px;border-top:none;'
                        ),
                        $form_languages . 
                        join("", $translations)
                    )
                );
    }
    #endregion

    #region Skip "complete" fields and users without design rights
    $td_edit = "";
    if ($allow_edit) {
        $edit_field = "&nbsp;";
        $edit_branch = "";
        // Make sure field is editable
        if ($attr['field_name'] != $attr['form_name'] . '_complete' &&
            (($status == '0' && isset($Proj->metadata[$attr['field_name']])) || ($status == '1' && isset($Proj->metadata_temp[$attr['field_name']]))))
        {
            switch( $attr['element_type'] )
            {
                case 'dropdown':
                    $et = 'select';
                    break;
                case 'notes':
                    $et = 'textarea';
                    break;
                default:
                    $et = $attr['element_type'];
            }
            $matrix = $attr['grid_name'] == '' ? '' : '&matrix=1';
            $edit_field = RCView::a(array('class'=>'d-print-none', 'href'=>APP_PATH_WEBROOT.'Design/online_designer.php?pid=' . $project_id . '&page=' . $attr['form_name'] .
                            '&field=' . $attr['field_name'] . $matrix),
                            RCView::img(array('src'=>'pencil.png', 'title'=>RCView::tt_attr("design_616")))
                        );
            if ($attr['field_name'] != $table_pk) {
                $edit_branch = RCView::a(array('class'=>'d-print-none', 'href'=>APP_PATH_WEBROOT.'Design/online_designer.php?pid=' . $project_id . '&page=' . $attr['form_name'] .
                                '&field=' . $attr['field_name'] . '&branching=1'),
                                RCView::img(array('src'=>'arrow_branch_side.png', 'title'=>RCView::tt("design_619")))
                            );
            }
        }
        $td_edit = 	RCView::td(array('style'=>'text-align:center;width:28px;'),
                        $edit_field .
                        RCView::div(array('style'=>'margin-top:5px;'), $edit_branch)
                    );
    }
    #endregion

    // Print the information about the field
    $table .= RCView::tr(
                array(
                    'valign' => 'top',
                    "data-form" => $attr["form_name"],
                    "data-field" => $attr["field_name"],
                ),
                $td_edit .
                RCView::td(array('style'=>'text-align:center;'), $attr['field_order']) .
                RCView::td(array('class'=>'vwrap'), $print_field_name) .
                RCView::td(array(), $print_label) .
                RCView::td(array(), $print_type)
            );
    // Add a row with translations for each language (unless the field is excluded from translation)
    if ($mlm_active && !array_key_exists($attr["field_name"], $mlm_ps["excludedFields"])) {
        foreach ($mlm_displayed_langs as $this_lang_id) {
            if ($this_lang_id == $mlm_ps["refLang"]) continue; // Skip default language
            $this_context = Context::Builder($mlm_context)->lang_id($this_lang_id)->Build();
            $this_field = $attr["field_name"];
            $this_lang = $mlm_ps["langs"][$this_lang_id];
            // Translated header, label, note
            $translated_element_label = nl2br(strip_tags(label_decode(MultiLanguage::getDDTranslation($this_context, "field-label", $this_field, "", $mlm_fallback_override))));
            if ($translated_element_label != $mlm_fallback_override) {
                // Truncate label if long
                $translated_label_length = mb_strlen($translated_element_label);
                $translated_shortened_label = $translated_label_length > 65 ?
                    (trim(mb_substr($translated_element_label, 0, 47)) . "... " . trim(mb_substr($translated_element_label, -15))) : $translated_element_label;
                $translation_separator = (mb_strlen($fieldChoicesData[$this_field]["label"]) + min(65, $translated_label_length) > 80) ? "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" : " | ";
                $fieldChoicesData[$this_field]["label"] = "{$fieldChoicesData[$this_field]["label"]}{$translation_separator}\"{$translated_shortened_label}\"";
            }
            $translated_label_col = "";
            if ($attr['element_preceding_header'] != "") {
                $translated_label_col .= RCView::div(array('style'=>'margin-bottom:6px;font-size:11px;'),
                                    RCView::tt("global_127") . "<i style='color:#666;'>" . RCView::escape(strip_tags(label_decode(MultiLanguage::getDDTranslation($this_context, "field-header", $this_field, "", $mlm_fallback_override)))) . "</i>"
                                );
            }
            $translated_label_col .= $translated_element_label ;
            if ($attr['element_note'] != "") {
                $translated_label_col .= RCView::div(array('style'=>'color:#666;font-size:11px;'),
                                    "<i>" . RCView::escape(strip_tags(label_decode(MultiLanguage::getDDTranslation($this_context, "field-note", $this_field, "", $mlm_fallback_override)))) . "</i>"
                                );
            }
            // Translated slider labels, choices
            $translated_type_col = "";
            $choices = array();
            if ($attr['element_type'] == 'slider' ) {
                foreach (["left","middle","right"] as $this_index) {
                    $choices[] = MultiLanguage::getDDTranslation($this_context, "field-enum", $this_field, $this_index, $mlm_fallback_override);
                }
                $translated_type_col .= RCView::tt("design_488")." ".implode(", ", $choices);
            }
            else if ($attr['element_enum'] != "" && !in_array($attr['element_type'], ["descriptive","calc","sql"], true)) {
                $translated_type_col .= '<table border="1" cellpadding="2" cellspacing="0" class="ReportTableWithBorder">';
                foreach ($mc_choices_array as $val => $_) {
                    $choice_type = "field-enum";
                    $choice_field = $this_field;
                    if (isset($attr["grid_name"]) && strlen($attr["grid_name"])) {
                        $choice_type = "matrix-enum";
                        $choice_field = $attr["grid_name"];
                    }
                    $choice_label = MultiLanguage::getDDTranslation($this_context, $choice_type, $choice_field, $val, $mlm_fallback_override);
                    $translated_type_col .= '<tr valign="top">';
                    if ($attr['element_type'] == 'checkbox' ) {
                        $translated_type_col .= '<td>' . $val . '</td>';
                        $val = (Project::getExtendedCheckboxCodeFormatted($val));
                        $translated_type_col .= '<td>' . $this_field . '___' . $val . '</td>';
                    } else {
                        $translated_type_col .= '<td>' . $val . '</td>';
                    }
                    $translated_type_col .= '<td>' . trim(RCView::escape(strip_tags2($choice_label." "))) . '</td>';
                    $translated_type_col .= '</tr>';
                }
                $translated_type_col .= '</table>';
            }
            // Actiontags
            $mlm_field_meta = $mlm_meta["fields"][$this_field];
            if (isset($mlm_field_meta["field-actiontag"])) {
                $actiontags = [];
                foreach($mlm_field_meta["field-actiontag"] as $this_at_id => $this_at) {
                    $at_translation = MultiLanguage::getDDTranslation($this_context, "field-actiontag", $this_field, $this_at_id, $mlm_fallback_override);
                    $actiontags[] = "<i>{$this_at["tag"]}:</i> {$at_translation}";
                }
                $translated_type_col .= "\n" . join("<br>", $actiontags);
            }

            $table .= RCView::tr(
                array(
                    "data-mlm-lang-toggle" => $this_lang_id,
                    "data-form" => $attr["form_name"],
                    "data-field" => $attr["field_name"],
                ),
                // Edit column (which might not be there)
                (strlen($td_edit) ? "<td style='{$mlm_bordertop_style}'></td>" : "") . 
                // Number column remains empty
                RCView::td(array("style" => "{$mlm_bordertop_style}")) . 
                // Field label - this shows the language id
                RCView::td(array(
                    "style" => "text-align:right;color:#777;vertical-align:top;{$mlm_bordertop_style}"
                ), RCView::i(array(), "[{$this_lang_id}]")) .
                // Field label and note
                RCView::td(array(
                    "style" => "vertical-align:top;{$mlm_bordertop_style}"
                ), $translated_label_col) .
                // Choices and (translatable) action tags
                RCView::td(array(
                    "style" => "vertical-align:top;{$mlm_bordertop_style}"
                ), $translated_type_col)
            );
        }
    }
}
$html .= RCView::table(
    array(
        'style' => 'width:99%;table-layout:fixed;', 
        'class' => 'ReportTableWithBorder',
        'id' => "codebook-table",
        'border' => "1",
    ),
    $table
);
// Output html
print $html;
// Output Javascript
$fieldChoicesData = json_encode_rc(array_values($fieldChoicesData));
?>
<script type='text/javascript'>
    (function(window, document, $) {
        $(document).ready(function() {
            // Hide a few things from printouts
            $('#psBtnGroupDrop1').parent('div').addClass('d-print-none')
            $('#sub-nav').addClass('d-print-none')
            var defaultVisibility = 1;
            var icons = ['down', 'up'];
            var btnLbl = [ window.lang.design_774, window.lang.design_776 ];
            var btnLblAll = [ window.lang.design_775, window.lang.design_777 ];
            var collapsedToggle = [ 'addClass', 'removeClass' ];
            var toggleAction = [ 'show', 'hide' ];
            var currentForm = '';

            function btnLblText(visibility) {
                return '<i class="fas fa-chevron-'+icons[visibility]+'"></i>&nbsp;'+btnLbl[visibility];
            }

            function btnLblAllText(visibility) {
                return '<i class="fas fa-chevron-'+icons[visibility]+'"></i>&nbsp;'+btnLblAll[visibility];
            }

            var toggleRows = function() {
                const $this = $(this);
                const formName = $this.attr('data-toggle-form');
                const visible = btnLbl.indexOf($this.text().trim()); // visible when button says "Collapse"
                // Toggle and switch button label
                $this.html(btnLblText(1-visible));
                $('#codebook-table tr[data-form="' + formName + '"]')[toggleAction[visible]]();
                $('#'+formName+'-collapsed')[collapsedToggle[visible]]('d-print-none')
            };

            var toggleAllRows = function() {
                var $this = $(this);
                var toggleType = btnLblAll.indexOf($this.text().trim());
                // trigger click on all buttons with text corresponding to the visibility e.g. if Collapse all, all the Collapse buttons
                $('table.ReportTableWithBorder button.toggle-rows:contains("'+btnLbl[toggleType]+'")').trigger('click');
                $this.html(btnLblAllText((toggleType)?0:1));
            };

            $('#codebook-table .codebook-form-header').each(function() {
                const $this = $(this);
                const form = $this.attr('data-form-name');
                const $btn = $('<button type="button" data-toggle-form="'+form+'" class="btn btn-xs btn-primaryrc toggle-rows d-print-none" style="float:right;" data-toggle="button">'+btnLblText(defaultVisibility)+'</button>');
                $btn.on('click', toggleRows);
                const $collapsed = $('<span id="'+form+'-collapsed" class="visible_in_print_only d-print-none" style="float:right;padding-right:5px;">'+window.lang.design_990+'</span>');
                $this.append($btn)
                $this.append($collapsed);
            });

            $('<button type="button" id="toggle-all-forms" class="btn btn-xs btn-primaryrc mb-2 me-3 d-print-none" style="float:right;margin:5px;" data-toggle="button">'+btnLblAllText(defaultVisibility)+'</button>')
                .on('click', toggleAllRows)
                .insertBefore('table.ReportTableWithBorder:first');

            // MLM
            $('#mlm-check-all').on('click', function() {
                const checked = $('#mlm-check-all').prop('checked');
                $('input[data-mlm-lang]:not(:disabled)').prop('checked', checked).trigger('change');
            });
            $('#mlm-reload-page-btn').prop('disabled', !mlm_reload_with_langs(true));
            $('input[data-mlm-lang]').on('change', function() {
                $('#mlm-reload-page-btn').prop('disabled', !mlm_reload_with_langs(true));
            });
            // Auto-complete field search
            $("#field-search").autocomplete({
                source: <?=$fieldChoicesData?>,
                minLength: 1,
                select: function (event, ui) {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $("tr[data-field='"+ui.item.value+"'").offset().top - 32
                    }, 300);
                    setTimeout(function(){
                        highlightTableRowOb($("tr[data-field='"+ui.item.value+"'"), 2500);
                        $("#field-search").val('');
                    }, 300);
                }
            })
            .data("ui-autocomplete")._renderItem = function(ul, item) {
                var match = new RegExp(this.term, "ig");
                var key = item.label.replace(match, '<b>' + this.term + '</b>');

                // Apply styling to result "key" appended in li
                var key_label = key.split(" ");
                key_label[0] = '<code>'+key_label[0]+'</code>';
                key = key_label.join(" ");

                return $("<li></li>")
                    .data("item", item)
                    .append("<a>"+key+"</a>")
                    .appendTo(ul);
            };
        });
    })(window, document, jQuery);
    // MLM
    function mlm_reload_with_langs(checkOnly) {
        const langs = [ ];
        const checked = $('input[data-mlm-lang]:checked').each(function() {
            langs.push($(this).attr('data-mlm-lang'));
        });
        const langsParam = langs.join(',');
        const url = new URL(window.location);
        const currentLangsParam = url.searchParams.get('langs') ?? <?=json_encode($mlm_ps["refLang"])?>;
        const changed = currentLangsParam != langsParam;
        if (checkOnly) {
            return changed;
        }
        else if (changed) {
            url.searchParams.set('langs', langsParam);
            window.location = url.href;
        }
    }
</script>
<?php
// Display the project footer
require_once APP_PATH_DOCROOT . 'ProjectGeneral/footer.php';
