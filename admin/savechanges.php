<?php error_reporting(E_ALL ^ E_NOTICE);
  require_once '../db-config.php';

  // get info from post
  // store values in to variables
  $id = $_GET['id'];
// echo "<pre>";
//
//   print_r($id);
//   echo PHP_EOL;
//   var_dump($id);
//
// echo "</pre>";

  // execute update script
  DB::Query("update menuitems set enabled = !enabled where id = %i", $id);
