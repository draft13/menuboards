<?php

  include('../../db-config.php');
  $mode = DB::Query("select settingvalue from menuboards.options where settingname = 'displaymode';");

  if ($mode[0][settingvalue] == 'Special Event') {
    echo 'td3.png';
  } else {
    echo 'menu4.jpg';
  }

?>
