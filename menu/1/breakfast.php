<?php error_reporting(E_ALL ^ E_NOTICE);
  include('../../db-config.php');
  $breakfastitems = DB::Query("SELECT * FROM menuboards.menuitems where isbreakfast = 1 and enabled = 1;");
  $saladitems = DB::Query("SELECT * FROM menuboards.menuitems where issalad = 1 and enabled = 1;");
  $soupitems = DB::Query("SELECT * FROM menuboards.menuitems where issoup = 1 and enabled = 1;");
?>

<img src='bg.png' id='menuboard' />
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
  <span class="price">Cup 3.29 &mdash; Bowl 4.29</span>
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
