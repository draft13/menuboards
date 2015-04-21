<html>
  <head>
    <title>Menu 4</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
      body {
        margin:0;
        padding:0;
      }
    </style>
  </head>
  <body>
    <img src='menu4.jpg' id='menuboard' />

    <script charset="utf-8">

      $(document).ready(function() {
          var $img = $('#menuboard');
          setInterval(function() {
              $.get('whichimage.php', function(data) {
                  var $loader = $(document.createElement('img'));
                  $loader.one('load', function() {
                      $img.attr('src', $loader.attr('src'));
                  });
                  $loader.attr('src', data);
                  if($loader.complete) {
                      $loader.trigger('load');
                  }
              });
          }, 1000);
      });

    </script>


  </body>


</html>
