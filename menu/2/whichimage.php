<?php

  include('../../db-config.php');
  $mode = DB::Query("select settingvalue from menuboards.options where settingname = 'displaymode';");

  if ($mode[0][settingvalue] == 'Special Event') {
    echo 'td1.png';
  } else {
    echo 'menu2.jpg';
  }

?>
