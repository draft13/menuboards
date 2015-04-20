<?php
error_reporting(E_ALL ^ E_NOTICE);
  include('../../db-config.php');
  $mode = DB::Query("select settingvalue from menuboards.options where settingname = 'displaymode';");

  if ($mode[0][settingvalue] == 'Special Event') {
    echo 'menu1.jpg';
  } else {
    echo 'menu4.jpg';
  }

?>
