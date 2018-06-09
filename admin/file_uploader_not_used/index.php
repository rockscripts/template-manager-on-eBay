<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Uploader</title>
	<!-- Style -->
	<link rel="stylesheet" href="uploader/assets/css/bootstrap.css">
	<link rel="stylesheet" href="uploader/assets/css/style.css">
	<!-- jQuery & jQuery UI custom -->
	<script src="uploader/assets/js/jquery.js"></script>
	<script src="uploader/assets/js/jquery-ui-custom.js"></script>
	<!-- Fileupload -->
	<script src="uploader/assets/js/fileupload.js"></script>
	<!-- Lightbox -->
	<link rel="stylesheet" href="uploader/assets/css/lightbox.css">
	<script src="uploader/assets/js/lightbox-2.6.min.js"></script>
	<!-- Main script -->
	<script src="uploader/assets/js/script.js"></script>
</head>
<body>
	<div id="container">
		<?php 
			require_once('uploader/config.php');   //Config
			require_once('uploader/Uploader.php'); //Main php file

			$object_id = 1; //This is your article ID
			$user_id = 1;   //This is the user that uploads the files
			$type_id = 1;

			add_uploader($object_id , $user_id, $type_id);
		?>
		
	</div>

	<!-- Some style for demo page -->
	<style>
		body {background: #F3F3F3;}
		img.img {float: right; padding: 3px; border: 1px solid #ddd;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;}
		#container {
			width: 700px;
			min-height: 300px;
			margin: 2em auto;
			padding: 1.5em;
			background: #fff;
			border: 1px solid #D8D8D8;
			-webkit-border-radius: 6px;
			-moz-border-radius: 6px;
			border-radius: 6px;
			-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
			-moz-box-shadow: 0 1px 4px rgba(0,0,0,.065);
			box-shadow: 0 1px 4px rgba(0, 0, 0, .065);
		}
	</style>
        <script>
        show_uploader();</script>
</body>
</html>