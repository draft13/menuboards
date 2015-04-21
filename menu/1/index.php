<?php error_reporting(E_ALL ^ E_NOTICE);
  include('../../db-config.php');
?>
<html>
  <head>
    <title>Menu 1</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

    <div id="mainbody">
      <h1 style="font-variant:small-caps;">loading...</h1>
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
