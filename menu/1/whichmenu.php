<?php error_reporting(E_ALL ^ E_NOTICE);
  include('../../db-config.php');
  $mode = DB::Query("select settingvalue from menuboards.options where settingname = 'displaymode';");

  switch ($mode[0][settingvalue]) {
      case 'Special Event':
          include 'event.php';
          break;
      case 'Breakfast Menu':
          include 'breakfast.php';
          break;
      case 'Daily Special':
          include 'daily.php';
          break;
      case 'No Special':
          include 'none.php';
          break;
  }

?>
