<?php error_reporting(E_ALL ^ E_NOTICE);
  include('../../db-config.php');
  $saladitems = DB::Query("SELECT * FROM menuboards.menuitems where issalad = 1 and enabled = 1;");
  $soupitems = DB::Query("SELECT * FROM menuboards.menuitems where issoup = 1 and enabled = 1;");
?>
<img src='none.png' id='menuboard' />

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
