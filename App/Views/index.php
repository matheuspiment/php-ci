<?php

use App\Classes\Calculator;
$calculator = new Calculator();

$firstOperation = $calculator->addTwo(4, 3);
$secondOperation = $calculator->multiplyTwo(5, 3);

?>

<!doctype html>
<html lang="pt-br">
	<head>
	  <meta charset="utf-8" />
	  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
	  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
	  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
	  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon-60x60.png">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	  <title><?php echo TITLE; ?></title>

	  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	  <meta name="viewport" content="width=device-width" />

	  <link href="http://<?php echo APP_HOST; ?>/public/css/bootstrap.min.css" rel="stylesheet" />
	  <link href="http://<?php echo APP_HOST; ?>/public/css/style.css" rel="stylesheet" />
	</head>

	<body>
	  <div class="wrapper">
	    <div class="page-header" style="background-image: url('../public/img/background.jpg')">
	      <div class="filter"></div>
	    	<div class="content-center">
	    	  <div class="container">
	    		  <div class="title-brand">
	            <h1>Calculator App</h1>
							<h2>O resultado de 4 + 3 é <?php echo $firstOperation ?><h2>
							<h2>O resultado de 5 * 3 é <?php echo $secondOperation ?><h2>
	    			</div>
	    	  </div>
	    	</div>
	    </div>
	  </div>
	</body>
</html>
