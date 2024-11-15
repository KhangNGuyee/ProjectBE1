<?php
	if(!isset($_SESSION)) session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
<?php
	include "config/config.php";
	include ROOT."/include/function.php";
	spl_autoload_register("loadClass");
?>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Trang chủ</title>

		<link rel="shortcut icon" href="img/favicon.png">
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body onload="SetDefault();">
				<!-- jQuery Plugins -->
		
			
		<?php 
			include 'mode.php';
		 ?>
		<!-- HEADER -->
			<!-- TOP HEADER -->
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<!-- /MAIN HEADER -->
			
		<?php include_once 'subpage/header.php'; ?>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<?php include_once 'subpage/navigation.html'; ?>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<?php include_once 'subpage/section_introduce.html'; ?>
		<!-- /SECTION -->

		<!-- SECTION -->
		<?php include_once 'subpage/section_newproduct.php'; ?>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<?php include_once 'subpage/hotdealsection.html'; ?>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<?php include_once 'subpage/section_topselling.php'; ?>
		<!-- /SECTION -->

		<!-- SECTION -->
		<?php include_once 'subpage/section_topselling_widget.php'; ?>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<?php include_once 'subpage/newsletter.php'; ?>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<?php include_once 'subpage/footer.html'; ?>
		<!-- /FOOTER -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		
	</body>
</html>
