<?php error_reporting(E_ALL ^ E_NOTICE);
  require_once '../db-config.php';
  require_once '../libs/vars.php';
  ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Nature's Table Menuboard App">
    <meta name="author" content="Robert Johnson">

    <title>Add New Item — Menuboard System</title>

    <!-- Need to download these files to the local server -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo $boottheme ?>">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script charset="utf-8">
    $(document).ready(function() {
       window.setTimeout("fadeMyDiv();", 2000); //call fade in 3 seconds
        }
      )

      function fadeMyDiv() {
       $(".fadeaway").fadeOut('slow');
      }
    </script>
    <style media="screen">
			body { padding-top: 80px; }
		</style>
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="navbar-brand"><a href="/"><img alt="Brand" src="../menu.png" height="20" width="20"></a></span>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/admin/">Menu Administration</a></li>
            <li class="active"><a href="/admin/new.php">Add New Item</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Add a New Item!</h3>
              </div>
              <div class="panel-body">


                <form method="POST" action="addnew.php">

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Item Type</h3>
                    </div>
                    <div class="panel-body">
                      <span id="helpBlock" class="help-block">Check the following if they are true for this item. </span>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="breakfast"> Breakfast Item?
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="salad"> Featured Salad?
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="soup"> Featured Soup?
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="special"> For Daily Special?
                        </label>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="shortDesc">Short Description (Item Name)</label>
                    <input type="text" class="form-control" name="shortDesc" placeholder="Item Name">
                  </div>
                  <div class="form-group">
                    <label for="longDesc">Long Description (Ingredients)</label>
                    <textarea class="form-control" rows="3" name="longDesc" placeholder="Ingredients"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="price">Price (Regular or Large Size) <small><mark>Don't enter a $ sign.</mark></small></label>
                    <input type="text" class="form-control" name="price" placeholder="0.00">
                  </div>
                  <div class="form-group">
                    <label for="pricesml">Price (Small Size) <small><mark>Don't enter a $ sign.</mark></small></label>
                    <input type="text" class="form-control" name="pricesml" placeholder="0.00">
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="enabled" checked> Enabled? <small><mark>If unchecked, this item won't show on menuboard.</mark></small>
                    </label>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>

                </form>

                <?php
                    if ($_GET['success'] == true) {
                      echo "<p class=\"fadeaway\">";
                      echo "<div id=\"successdiv\" class=\"alert alert-success fadeaway\" role=\"alert\">Item has been added.</div>";
                      echo "</p>";
                    }
                ?>


              </div> <!-- main panel-body div -->
            </div> <!-- main panel div -->

          </div>
      </div>
    </div>

  </body>
</html>
