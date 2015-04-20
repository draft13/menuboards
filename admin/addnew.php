<?php error_reporting(E_ALL ^ E_NOTICE);
  require_once '../db-config.php';

  $special    = (isset($_POST['special'])) ? 1 : 0;
  $breakfast  = (isset($_POST['breakfast'])) ? 1 : 0;
  $soup       = (isset($_POST['soup'])) ? 1 : 0;
  $salad      = (isset($_POST['salad'])) ? 1 : 0;
  $enabled    = (isset($_POST['enabled'])) ? 1 : 0;

  DB::query("insert into menuitems (shortdesc, longdesc, price, pricesml, onspecial, isbreakfast, issoup, issalad, enabled)
    VALUES(%s0, %s1, %d2, %d3, %i4, %i5, %i6, %i7, %i8);", $_POST['shortDesc'], $_POST['longDesc'], $_POST['price'], $_POST['pricesml'], $special, $breakfast, $soup, $salad, $enabled);

  header("Location: new.php?success=true");
