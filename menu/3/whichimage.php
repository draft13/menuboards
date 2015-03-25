<?php
error_reporting(E_ALL ^ E_NOTICE);
  include('../../db-config.php');
  $mode = DB::Query("select settingvalue from menuboards.options where settingname = 'displaymode';");

  if ($mode[0][settingvalue] == 'Special Event') {
    echo 'td2.png';
  } else {
    echo 'menu3.jpg';
  }

?>
