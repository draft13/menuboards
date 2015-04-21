<?php error_reporting(E_ALL ^ E_NOTICE);
  include('../../db-config.php');
  $specialitems = DB::Query("SELECT * FROM menuboards.menuitems where onspecial = 1 and enabled = 1;");
  $saladitems = DB::Query("SELECT * FROM menuboards.menuitems where issalad = 1 and enabled = 1;");
  $soupitems = DB::Query("SELECT * FROM menuboards.menuitems where issoup = 1 and enabled = 1;");
?>
<img src='bg.png' id='menuboard' />
<img src='logo.png' id='logo' />
<div id="title">
  <span>DAILY SPECIAL</span>
</div>


  <div id="special">
    <?php
      foreach ($specialitems as $item) {
        echo '<h2>' . $item['shortdesc'] . '</h2>';
        echo '<p class="ingredients">';
        echo $item['longdesc'];
        echo '</p>';
        echo '<p class="price">';
        echo $item['price'];
        echo '</p>';
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
