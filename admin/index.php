<?php require '../db-config.php'; ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nature's Table Menuboard App">
    <meta name="author" content="Robert Johnson">

    <title>Menuboard System</title>

    <!-- Need to download these files to the local server -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <style media="screen">
			body { padding-top: 80px; }
		</style>
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="navbar-brand">Menuboard System</span>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li class="active"><a href="/admin/">Menu Administration</a></li>
            <li><a href="/admin/new.php">Add New Item</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <p class="text-right">
            <a href="savechanges.php" class="btn btn-danger">Save Changes</a>
          </p>


          <?php
            ///////    Soup Items.
            $soups = DB::query("SELECT * FROM menuitems where issoup = 1;");
          ?>
           <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Soups</h3>
              </div>
              <div class="panel-body">
                <p>
                  <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Item</th>
                        <th>Description (Ingredients)</th>
                        <th>Price (Reg/Lrg)</th>
                        <th>Price (Small)</th>
                        <th>Enabled&#8199;&#8199;&#8199;</th>
                      </tr>
                    </thead>
                    <?php
                      foreach ($soups as $item) {
                        $smallprice = ($item['pricesml'] == 0.00) ? "—" : '$'.$item['pricesml'];
                        echo '<tr><td>' . $item['shortdesc'] . '</td><td>' . $item['longdesc'] . '</td><td>' . '$'. $item['price'] . '</td><td>' .  $smallprice  . '</td><td>';
                        echo '<div class="btn-group btn-toggle">';
                        if ($item['enabled'] == '1') {
                          echo '<button class="btn btn-xs btn-success">YES</button>';
                          echo '<button class="btn btn-xs btn-default">NO</button>';
                        } else {
                          echo '<button class="btn btn-xs btn-default">YES</button>';
                          echo '<button class="btn btn-xs btn-success">NO</button>';
                        }
                        echo '</div>';
                        echo '</td></tr>';
                      }
                    ?>
                  </table>
                </div>
                </p>
              </div>
            </div>



            <?php
              ///////    Salad Items.
              $salads = DB::query("SELECT * FROM menuitems where issalad = 1;");
            ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Salads</h3>
              </div>
              <div class="panel-body">
                <p>
                  <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Item</th>
                        <th>Description (Ingredients)</th>
                        <th>Price (Reg/Lrg)</th>
                        <th>Price (Small)</th>
                        <th>Enabled&#8199;&#8199;&#8199;</th>
                      </tr>
                    </thead>
                    <?php
                      foreach ($salads as $item) {
                        $smallprice = ($item['pricesml'] == 0.00) ? "—" : '$'.$item['pricesml'];
                        echo '<tr><td>' . $item['shortdesc'] . '</td><td>' . $item['longdesc'] . '</td><td>' . '$'. $item['price'] . '</td><td>' .  $smallprice  . '</td><td>';
                        echo '<div class="btn-group btn-toggle">';
                        if ($item['enabled'] == '1') {
                          echo '<button class="btn btn-xs btn-success">YES</button>';
                          echo '<button class="btn btn-xs btn-default">NO</button>';
                        } else {
                          echo '<button class="btn btn-xs btn-default">YES</button>';
                          echo '<button class="btn btn-xs btn-success">NO</button>';
                        }
                        echo '</div>';
                        echo '</td></tr>';
                      }
                    ?>
                  </table>
                </div>
                </p>
              </div>
            </div>


            <?php
              ///////    Specials.
              $specials = DB::query("SELECT * FROM menuitems where onspecial = 1;");
            ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Specials</h3>
              </div>
              <div class="panel-body">
                <p>
                  <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Item</th>
                        <th>Description (Ingredients)</th>
                        <th>Price (Reg/Lrg)</th>
                        <th>Price (Small)</th>
                        <th>Enabled&#8199;&#8199;&#8199;</th>
                      </tr>
                    </thead>
                    <?php
                      foreach ($specials as $item) {
                        $smallprice = ($item['pricesml'] == 0.00) ? "—" : '$'.$item['pricesml'];
                        echo '<tr><td>' . $item['shortdesc'] . '</td><td>' . $item['longdesc'] . '</td><td>' . '$'. $item['price'] . '</td><td>' .  $smallprice  . '</td><td>';
                        echo '<div class="btn-group btn-toggle">';
                        if ($item['enabled'] == '1') {
                          echo '<button class="btn btn-xs btn-success">YES</button>';
                          echo '<button class="btn btn-xs btn-default">NO</button>';
                        } else {
                          echo '<button class="btn btn-xs btn-default">YES</button>';
                          echo '<button class="btn btn-xs btn-success">NO</button>';
                        }
                        echo '</div>';
                        echo '</td></tr>';
                      }
                    ?>
                  </table>
                </div>
                </p>
              </div>
            </div>

            <?php
              ///////    Breakfast Items.
              $breakfastitems = DB::query("SELECT * FROM menuitems where isbreakfast = 1;");
            ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Breakfast</h3>
              </div>
              <div class="panel-body">
                <p>
                  <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Item</th>
                        <th>Description (Ingredients)</th>
                        <th>Price (Reg/Lrg)</th>
                        <th>Price (Small)</th>
                        <th>Enabled&#8199;&#8199;&#8199;</th>
                      </tr>
                    </thead>
                    <?php
                      foreach ($breakfastitems as $item) {
                        $smallprice = ($item['pricesml'] == 0.00) ? "—" : '$'.$item['pricesml'];
                        echo '<tr><td>' . $item['shortdesc'] . '</td><td>' . $item['longdesc'] . '</td><td>' . '$'. $item['price'] . '</td><td>' .  $smallprice  . '</td><td>';
                        echo '<div class="btn-group btn-toggle">';
                        if ($item['enabled'] == '1') {
                          echo '<button class="btn btn-xs btn-success">YES</button>';
                          echo '<button class="btn btn-xs btn-default">NO</button>';
                        } else {
                          echo '<button class="btn btn-xs btn-default">YES</button>';
                          echo '<button class="btn btn-xs btn-success">NO</button>';
                        }
                        echo '</div>';
                        echo '</td></tr>';
                      }
                    ?>
                  </table>
                </div>
                </p>
              </div>
            </div>
          </div>
      </div>
    </div>
    <script charset="utf-8">
      $('.btn-toggle').click(function() {
        $(this).find('.btn').toggleClass('active');

        if ($(this).find('.btn-primary').size()>0) {
           $(this).find('.btn').toggleClass('btn-primary');
        }
        if ($(this).find('.btn-danger').size()>0) {
          $(this).find('.btn').toggleClass('btn-danger');
        }
        if ($(this).find('.btn-success').size()>0) {
          $(this).find('.btn').toggleClass('btn-success');
        }
        if ($(this).find('.btn-info').size()>0) {
          $(this).find('.btn').toggleClass('btn-info');
        }
        $(this).find('.btn').toggleClass('btn-default');
      });
    </script>
  </body>
</html>
