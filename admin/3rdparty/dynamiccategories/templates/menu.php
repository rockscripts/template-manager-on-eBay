<!DOCTYPE HTML>

<html lang="en">

<head>

<title>Easy Menu Manager</title>

<meta charset="utf-8">



<link rel="stylesheet" href="<?php echo _BASE_URL_ASSETS; ?>templates/css/style.css">

<!--[if lte IE 8]>

<script type="text/javascript" src="<?php echo _BASE_URL_ASSETS; ?>templates/js/html5.js"></script>

<![endif]-->

<script>

var _BASE_URL = '<?php echo _BASE_URL; ?>';

var current_group_id = <?php echo $group_id; ?>;

</script>

<script src="<?php echo _BASE_URL_ASSETS; ?>templates/js/jquery.1.4.1.min.js"></script>

<script src="<?php echo _BASE_URL_ASSETS; ?>templates/js/interface-1.2.js"></script>

<script src="<?php echo _BASE_URL_ASSETS; ?>templates/js/inestedsortable.js"></script>

<script src="<?php echo _BASE_URL_ASSETS; ?>templates/js/menu.js"></script>



</head>

<body>

	<section>

		<header>

			<h1>Dynamic Categories</h1>	

		</header>

		<article>

			<section>

				<div class="clear"></div>



				<form method="post" id="form-menu" action="<?php echo site_url('store_design/listingdesign/load_dynamic_categories?act=menu.save_position'); ?>">

					<div class="ns-row" id="ns-header">


						<div class="ns-url">URL</div>

						<div class="ns-title">Name</div>

					</div>

					<?php echo $menu_ul; ?>

					<div id="ns-footer">

						<button type="submit" class="button green small" id="btn-save-menu">Update Positions</button>

					</div>

				</form>

			</section>

			

			<div class="clear"></div>

		</article>

            

	</section>

	<div id="loading">

		<img src="<?php echo _BASE_URL_ASSETS; ?>templates/images/ajax-loader.gif" alt="Loading">

		Processing...

	</div>
    <script>
        $(".edit-menu").remove();
        $(".ns-class").remove();
        $("header").css("margin-top","41px");
        $("header").css("height","55px");
         $("section").css("width","100%");
         $(".ns-url").css("width","57%");
         $(".ns-url").css("right","16%");
         $(".ns-actions").css("width","29px");
    </script>
    
</body>

</html>  