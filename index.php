<?php require_once("functions.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>World Cities</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
</head>
<body>
<div class="container-fluid">
	<header>
		<h1 class="col-md-12"><center>Cities in the World</center></h1>
		<p class="col-md-12"><center>Below is the list of all the top cities in the world. Feel free to browse.</center></p>
	</header>
	<section class="col-md-12" id="resultContainer">
		<?php fetchResults(1); ?>
	</section>
	<footer>
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<center>
				<img src="images/prev.png" alt="prev" class="padding cursor prev" onclick="populateResult(1)">
				<img src="images/next.png" alt="next" class="padding cursor next" onclick="populateResult(2)">
			</center>
		</div>
		<div class="col-md-4"></div>
		<div class="bottomspace"></div>
	</footer>
</div>
</body>
</html>