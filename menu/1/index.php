<?php error_reporting(E_ALL ^ E_NOTICE);
  include('../../db-config.php');
  $breakfastitems = DB::Query("SELECT * FROM menuboards.menuitems where isbreakfast = 1 and enabled = 1;");
  $saladitems = DB::Query("SELECT * FROM menuboards.menuitems where issalad = 1 and enabled = 1;");
  $soupitems = DB::Query("SELECT * FROM menuboards.menuitems where issoup = 1 and enabled = 1;");
  $mode = DB::Query("SELECT settingvalue FROM menuboards.options where settingname = 'displaymode';");
?>
<html>
  <head>
    <title>Menu 1</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

    <div id="mainbody">
      loading...
    </div>
    <script charset="utf-8">

      $(document).ready(function() {
          var $div = $('#mainbody');

          setInterval(function() {
              $.get('whichmenu.php', function(data) {
                  $div.html(data);
                  if($div.complete) {
                      $div.trigger('load');
                  }
              });
          }, 1000);
      });

    </script>
  </body>
</html>
