<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php print Settings_model::$db_config['site_title']; ?>: <?php print $template['title']; ?></title>
<?php print $template['metadata']; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link rel="shortcut icon" href="<?= base_url() ?>favicon.ico" />
<!-- Le styles -->
<link rel="stylesheet" href="<?php print base_url(); ?>css/themes/bootstrap/style.css" type="text/css" media="screen">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
</head>

<body>

    <header>
        <?php print $template['partials']['header']; ?>
    </header>

    <div id="main_container" class="container">
        <?php print $template['body']; ?>
    </div>

    <footer>
        <?php print $template['partials']['footer']; ?>
    </footer>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php print base_url(); ?>js/themes/bootstrap/jquery.js"></script>
<script src="<?php print base_url(); ?>js/themes/bootstrap/bootstrap.min.js"></script>
<!-- Le CI_Membership JQuery -->
<?php
$this->load->view('generic/js_base_url');
$this->load->view('generic/js_language_files');
?>
<script type="text/javascript" src="<?php print base_url(); ?>js/jq_functions.js"></script>

</body>
</html>




