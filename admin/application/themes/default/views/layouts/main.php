<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title><?php print Settings_model::$db_config['site_title']; ?>: <?php print $template['title']; ?></title>
    <?php print $template['metadata']; ?>
    <link rel="stylesheet" href="<?php print base_url(); ?>css/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php print base_url(); ?>css/themes/<?php print Settings_model::$db_config['default_theme']; ?>/style.css" type="text/css" media="screen" />

    <?php
    $this->load->view('generic/js_base_url');
    $this->load->view('generic/js_language_files');
    ?>
    <script type="text/javascript" src="<?php print base_url(); ?>js/jQuery/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="<?php print base_url(); ?>js/jQuery/jquery-qtip-1.0.0-rc3.min.js"></script>
    <script type="text/javascript" src="<?php print base_url(); ?>js/jQuery/jq_functions.js"></script>
    <script type="text/javascript" src="<?php print base_url(); ?>js/jQuery/themes/<?php print Settings_model::$db_config['default_theme'] ?>/style.js"></script>

</head>

<body>
<div id="container">
    <div id="header">
    <?php print $template['partials']['header']; ?>
    </div>
    <div id="content_column">

    <?php print $template['body']; ?>

    </div>
    <div id="footer">
    <?php print $template['partials']['footer']; ?>
    </div>
</div>
</body>
</html>