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
    <meta name="description" content="Menuboard App">
    <meta name="author" content="Robert Johnson">

    <title>Menuboard System</title>

    <!-- Need to download these files to the local server -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo $boottheme ?>">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1><a href="/">Menuboard System</a></h1>
           <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Edit Item — Name</h3>
              </div>
              <div class="panel-body">


                <form>
                  <div class="form-group">
                    <label for="shortDesc">Short Description (Item Name)</label>
                    <input type="text" class="form-control" id="shortDesc" placeholder="Item Name">
                  </div>
                  <div class="form-group">
                    <label for="longDesc">Long Description (Ingredients)</label>
                    <textarea class="form-control" rows="3" placeholder="Ingredients"></textarea>
                  </div>

                  <span id="helpBlock" class="help-block">Check the following if they are true for this item. </span>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="breakfast"> Breakfast?
                    </label>
                  </div>
                  <div class="checkbox" id="salad">
                    <label>
                      <input type="checkbox"> Salad?
                    </label>
                  </div>
                  <div class="checkbox" id="soup">
                    <label>
                      <input type="checkbox"> Soup?
                    </label>
                  </div>
                  <div class="checkbox" id="special">
                    <label>
                      <input type="checkbox"> On Special?
                    </label>
                  </div>
                  <div class="checkbox" id="enabled">
                    <label>
                      <input type="checkbox"> Enabled? <small><mark>If unchecked, this item won't show on menuboard.</mark></small>
                    </label>
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>


              </div>
            </div>


          </div>
      </div>
    </div>

  </body>
</html>
