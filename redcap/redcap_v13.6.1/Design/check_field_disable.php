<?php


require_once dirname(dirname(__FILE__)) . '/Config/init_project.php';

// Render 1 if exists in metadata table, and 0 if not
$sql = "select count(1) from redcap_metadata where project_id = $project_id and field_name = '".db_escape($_GET['field_name'])."'";
print db_result(db_query($sql), 0);
