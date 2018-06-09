<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Uploader</title>
	<link rel="stylesheet" href="uploader/assets/css/bootstrap.css">
	<link rel="stylesheet" href="uploader/assets/css/filetypes.css">

	<script src="uploader/assets/js/jquery.js"></script>

	<!-- Lightbox -->
	<link rel="stylesheet" href="uploader/assets/css/lightbox.css">
	<script src="uploader/assets/js/lightbox-2.6.min.js"></script>
</head>
<body>
	<div id="container">
		<?php 
			require_once('uploader/config.php');   //Config
			require_once('uploader/Uploader.php'); //Main php file

			$object_id = 1; //This is your article ID
			$user_id = 1;   //User id, set to NULL to load images by all users
			$type_id = 1;   //default is 1

			//show_files($object_id, $user_id, $type_id, 'images');

			//show_files($object_id, $user_id, $type_id, 'files');

			show_files($object_id, $user_id, $type_id, 'all');
		?>
		<br clear="all">
	</div>

	<!-- Some style for demo page -->
	<style>
		img {margin: 0 10px 10px 0;}
		body {background: #F3F3F3;}
		img.img {float: right; padding: 3px; border: 1px solid #ddd;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;}
		#container {width: 700px; min-height: 300px; margin: 2em auto; padding: 1.5em; background: #fff; border: 1px solid #D8D8D8; -webkit-border-radius: 6px; -moz-border-radius: 6px; border-radius: 6px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, .065); -moz-box-shadow: 0 1px 4px rgba(0,0,0,.065); box-shadow: 0 1px 4px rgba(0, 0, 0, .065); }
	</style>
</body>
</html>