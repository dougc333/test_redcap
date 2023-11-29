<?php

use Vanderbilt\REDCap\Classes\ProjectDesigner;

require_once dirname(dirname(__FILE__)) . '/Config/init_project.php';

// If project is in production and another user just changed its draft_mode status, don't allow any actions here if not in draft mode
if ($status > 0 && $draft_mode != '1') exit("ERROR");

$projectDesigner = new ProjectDesigner($Proj);
print $projectDesigner->deleteField($_GET['field_name'], $_GET['form_name'], $_GET['section_header']);