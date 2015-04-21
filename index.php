<?php error_reporting(E_ALL ^ E_NOTICE);
	require_once 'db-config.php';
	require_once 'libs/vars.php';

	$displaymode = DB::Query("select settingvalue from options where settingname = 'displaymode'");
	$displaymodevalue = $displaymode['0']['settingvalue'];

 ?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Menuboard App">
		<meta name="author" content="Robert Johnson">

		<title>Nature's Table Menuboard</title>

		<!-- Need to download these files to the local server -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link rel="stylesheet" href="<?php echo $boottheme ?>">
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"> -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
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
            <li><a href="/admin/new.php">Add New Item</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Menuboard Status</h3>
							</div>
							<div class="panel-body">
								<p class="alert alert-success" role="alert">
									The current menuboard mode:<br><span style="font-size:24px;font-weight:bold;"><?php echo $displaymodevalue ?></span>
								</p>


								<?php
									///////    Specials.
									$specials = DB::query("SELECT * FROM menuitems where onspecial = 1 and enabled = 1;");
								?>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Today's Special</h3>
									</div>
									<div class="panel-body">
											<div class="table-responsive">
											<table class="table table-striped">
												<?php
													foreach ($specials as $item) {
														$smallprice = ($item['pricesml'] == 0.00) ? "—" : '$'.$item['pricesml'];
														echo '<tr><td>' . $item['shortdesc'] . '</td></tr>';
													}
												?>
											</table>
										</div>

									</div>
								</div>

								<?php
									///////    Breakfast Items.
									$breakfastitems = DB::query("SELECT * FROM menuitems where isbreakfast = 1 and enabled = 1;");
								?>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Breakfast</h3>
									</div>
									<div class="panel-body">
											<div class="table-responsive">
											<table class="table table-striped">
												<?php
													foreach ($breakfastitems as $item) {
														$smallprice = ($item['pricesml'] == 0.00) ? "—" : '$'.$item['pricesml'];
														echo '<tr><td>' . $item['shortdesc'] . '</td></tr>';
													}
												?>
											</table>
										</div>
									</div>
								</div>



								<?php
			            ///////    Soup Items.
			            $soups = DB::query("SELECT * FROM menuitems where issoup = 1 and enabled = 1;");
			          ?>

			           <div class="panel panel-default">
			              <div class="panel-heading">
			                <h3 class="panel-title">Soups</h3>
			              </div>
			              <div class="panel-body">
			                  <div class="table-responsive">
			                  <table class="table table-striped">
			                    <?php
			                      foreach ($soups as $item) {
			                        $smallprice = ($item['pricesml'] == 0.00) ? "—" : '$'.$item['pricesml'];
			                        echo '<tr><td>' . $item['shortdesc'] . '</td></tr>';
			                      }
			                    ?>
			                  </table>
			                </div>
			              </div>
			            </div>



			            <?php
			              ///////    Salad Items.
			              $salads = DB::query("SELECT * FROM menuitems where issalad = 1 and enabled = 1;");
			            ?>
			            <div class="panel panel-default">
			              <div class="panel-heading">
			                <h3 class="panel-title">Salads</h3>
			              </div>
			              <div class="panel-body">
			                  <div class="table-responsive">
			                  <table class="table table-striped">
			                    <?php
			                      foreach ($salads as $item) {
			                        $smallprice = ($item['pricesml'] == 0.00) ? "—" : '$'.$item['pricesml'];
			                        echo '<tr><td>' . $item['shortdesc'] . '</td></tr>';
			                      }
			                    ?>
			                  </table>
			                </div>
			              </div>
			            </div>



							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Administration</h3>
							</div>
							<div class="panel-body">
								<p>
									<a href="admin" class="btn btn-default" role="button">Menu Administration</a>
								</p>
								<p>
									<a href="admin/new.php" class="btn btn-default" role="button">Add a New Menu Item</a>
								</p>
								</div>
							</div>
  					</div>
				</div>
			</div>
		</div>

	</body>
</html>
