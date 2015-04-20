<?php 
require_once '../db-config.php';
$settingvalue = $_GET['settingvalue'];

DB::Query("update options set settingvalue=%s where id = 1", $settingvalue);
