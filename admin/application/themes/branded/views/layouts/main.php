<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php print Settings_model::$db_config['site_title']; ?>: <?php print $template['title']; ?></title>
    <?php print $template['metadata']; ?>

    <link rel="stylesheet" href="<?php print base_url(); ?>css/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php print base_url(); ?>css/themes/<?php print Settings_model::$db_config['default_theme']; ?>/style.css" type="text/css" media="screen" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php print base_url(); ?>css/themes/<?php print Settings_model::$db_config['default_theme']; ?>/ie7.css" type="text/css" media="screen" />
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php
    $this->load->view('generic/js_base_url');
    $this->load->view('generic/js_language_files');
    ?>
    <script type="text/javascript" src="<?php print base_url(); ?>js/jQuery/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="<?php print base_url(); ?>js/jQuery/jquery-qtip-1.0.0-rc3.min.js"></script>
    <script type="text/javascript" src="<?php print base_url(); ?>js/jQuery/jq_functions.js"></script>
    <script type="text/javascript" src="<?php print base_url(); ?>js/jQuery/themes/<?php print Settings_model::$db_config['default_theme'] ?>/style.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
</head>

<body id="main">
<div class="preload">
    <img src="<?php print base_url(); ?>images/themes/branded/form_button_hover.png" alt="" />
</div>
<div id="container">
    <header>
    <?php print $template['partials']['header']; ?>
    </header>
    <div id="content_column">

    <?php print $template['body']; ?>

    </div>
    <footer>
    <?php print $template['partials']['footer']; ?>
    </footer>
</div>
</body>

</html>