<?php error_reporting(E_ALL ^ E_NOTICE);
  include('../../db-config.php');
  $breakfastitems = DB::Query("SELECT * FROM menuboards.menuitems where isbreakfast = 1 and enabled = 1;");
  $saladitems = DB::Query("SELECT * FROM menuboards.menuitems where issalad = 1 and enabled = 1;");
  $soupitems = DB::Query("SELECT * FROM menuboards.menuitems where issoup = 1 and enabled = 1;");
?>
<html>
  <head>
    <title>Menu 1</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
      body {
        margin:0;
        padding:0;
      }
      img#logo{
        padding: 15px 0 0 420px;
        margin: 0;
      }
      #menuboard {
        position:absolute;
        top:0px;
        left:0px;
        z-index: -1;
      }
      h2 {
        font-family: 'Hess Gothic Round NF', sans-serif;
        color: #aa1836;
        font-size: 34px;
        margin: 0px;
        padding: 0px;
        letter-spacing: .05em;
        font-kerning: normal;
      }
      div#title {
        font-family: 'Hess Gothic Round NF', sans-serif;
        color: white;
        font-size: 43px;
        margin: 0;
        letter-spacing: .05em;
        font-kerning: normal;
        font-weight: bold;
        width: 1394px;
        background-color: #488214;
        position: absolute;
        top:325px;
        left:0px;
      }
      div#title span {
        display:table;
        margin:0 auto;
        align: center;
        padding: 3px 0 0 0;
      }
      div#menuitems {
        position:absolute;
        top: 421px;
        left: 55px;
        margin: 0px;
        padding: 0px;
        height: 600px;
        width: 1270px;
        /*border: solid 1px red;*/
        column-width: 505px;
        -webkit-column-width: 505px;
      }
      div.menuitem {
        margin: 0px;
        padding: 0px;
        width: 600px;
        /*border: solid 1px blue;*/
      }
      p.ingredients {
        font-family: "Gill Sans MT", sans-serif;
        font-size: 24px;
        margin: 0px;
        padding: 0 0 60px 0;
      }
      p small {
        color: gray;
      }


      div#sidemenu {
        position: absolute;
        top: 0px;
        left: 1394px;
      }
      div#sidemenu h2 {
        margin: 23px 0 20px 0;
        padding: 2px 0 0 35px;
        background-color: #aa1836;
        color: white;
        font-size: 48px;
        width: 491px;
      }
      div.sideitem {
        font-family: "Hess Gothic Round NF", sans-serif;
        color: #aa1836;
        font-size: 28px;
        font-weight: bold;
        padding: 0 0 25px 35px;
      }

      span.price {
        font-family: "Gill Sans MT", sans-serif;
        display:table;
        margin:0 auto;
        font-size: 24px;
        align: center;
      }
    </style>
  </head>
  <body>
    <img src='breakfast.png' id='menuboard' />
    <img src='logo.png' id='logo' />
    <div id="title">
      <span>BREAKFAST MENU</span>
    </div>

    <div id="menuitems">
      <?php
        foreach ($breakfastitems as $item) {
          echo '<div class="menuitem">' . PHP_EOL;
          echo '<h2>' . $item['shortdesc'] . '</h2>' . PHP_EOL;
          echo '<p class="ingredients">' . PHP_EOL;
          echo $item['longdesc'] . '&#160;&#160;' . $item['price'] . PHP_EOL;
          echo '</p>' . PHP_EOL;
          echo '</div>' . PHP_EOL;
        }
      ?>

    </div>



    <div id="sidemenu">

      <h2>TODAY'S SOUPS</h2>

      <?php
        foreach ($soupitems as $item) {
          echo '<div class="sideitem">' . PHP_EOL;
          echo $item['shortdesc'] . '&#160;&#160;' . PHP_EOL;
          echo '</div>' . PHP_EOL;
        }

      ?>

      <span class="price">Cup 2.99 &mdash; Bowl 4.19</span>


      <h2>FEATURED SALADS</h2>

      <?php
        foreach ($saladitems as $item) {
          echo '<div class="sideitem">' . PHP_EOL;
          echo $item['shortdesc'] . '&#160;&#160;' . PHP_EOL;
          echo '</div>' . PHP_EOL;
        }

      ?>

      <span class="price">Small 2.99 &mdash; Large 3.79</span>

    </div>

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
          }, 5000);
      });

    </script>


  </body>


</html>
