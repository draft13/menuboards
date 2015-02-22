<?php
	require_once 'db-config.php';
	require_once 'libs/vars.php';

	$displaymode = DB::Query("select settingvalue from options where settingname = 'displaymode'");
	$displaymodevalue = $displaymode['0']['settingvalue'];

	function	returnButtons($menutype) {

		switch ($menutype) {
			case 'Breakfast Menu':
				echo "<button type=\"button\" class=\"btn btn-default active\">Break</button>" . PHP_EOL;
				echo "<button type=\"button\" class=\"btn btn-default\" onClick=\"httpGet('libs/changemenu.php?settingvalue=Daily Special');location.reload();\">Daily</button>" . PHP_EOL;
				echo "<button type=\"button\" class=\"btn btn-default\" onClick=\"httpGet('libs/changemenu.php?settingvalue=No Special');location.reload();\">None</button>" . PHP_EOL;
				echo "<button type=\"button\" class=\"btn btn-default\" onClick=\"httpGet('libs/changemenu.php?settingvalue=Special Event');location.reload();\">Event</button>" . PHP_EOL;
				break;

			case 'Daily Special':
				echo "<button type=\"button\" class=\"btn btn-default\" onClick=\"httpGet('libs/changemenu.php?settingvalue=Breakfast Menu');location.reload();\">Break</button>" . PHP_EOL;
				echo "<button type=\"button\" class=\"btn btn-default active\">Daily</button>" . PHP_EOL;
				echo "<button type=\"button\" class=\"btn btn-default\" onClick=\"httpGet('libs/changemenu.php?settingvalue=No Special');location.reload();\">None</button>" . PHP_EOL;
				echo "<button type=\"button\" class=\"btn btn-default\" onClick=\"httpGet('libs/changemenu.php?settingvalue=Special Event');location.reload();\">Event</button>" . PHP_EOL;
				break;

			case 'No Special':
				echo "<button type=\"button\" class=\"btn btn-default\" onClick=\"httpGet('libs/changemenu.php?settingvalue=Breakfast Menu');location.reload();\">Break</button>" . PHP_EOL;
				echo "<button type=\"button\" class=\"btn btn-default\" onClick=\"httpGet('libs/changemenu.php?settingvalue=Daily Special');location.reload();\">Daily</button>" . PHP_EOL;
				echo "<button type=\"button\" class=\"btn btn-default active\">None</button>" . PHP_EOL;
				echo "<button type=\"button\" class=\"btn btn-default\" onClick=\"httpGet('libs/changemenu.php?settingvalue=Special Event');location.reload();\">Event</button>" . PHP_EOL;
				break;

			default:
				echo "<button type=\"button\" class=\"btn btn-default\" onClick=\"httpGet('libs/changemenu.php?settingvalue=Breakfast Menu');location.reload();\">Break</button>" . PHP_EOL;
				echo "<button type=\"button\" class=\"btn btn-default\" onClick=\"httpGet('libs/changemenu.php?settingvalue=Daily Special');location.reload();\">Daily</button>" . PHP_EOL;
				echo "<button type=\"button\" class=\"btn btn-default\" onClick=\"httpGet('libs/changemenu.php?settingvalue=No Special');location.reload();\">None</button>" . PHP_EOL;
				echo "<button type=\"button\" class=\"btn btn-default active\">Event</button>" . PHP_EOL;
				break;
		}
	}

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
		<script charset="utf-8">
			function httpGet(theUrl)
			{
					var xmlHttp = null;

					xmlHttp = new XMLHttpRequest();
					xmlHttp.open( "GET", theUrl, false );
					xmlHttp.send( null );
					// return xmlHttp.responseText;
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
								<h3 class="panel-title">Menu Display Mode</h3>
							</div>
							<div class="panel-body">
								<p class="alert alert-success" role="alert">
									Current display mode is: <br><strong><?php echo $displaymodevalue ?></strong>.
								</p>
								<div class="btn-group" role="group" aria-label="...">
									<?php returnButtons($displaymodevalue); ?>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Administration</h3>
							</div>
							<div class="panel-body">
								<p>
									<a href="admin" class="btn btn-default" role="button">Admin Interface</a>
								</p>
								</div>
							</div>
  					</div> -->
				</div>
			</div>
		</div>

	</body>
</html>
