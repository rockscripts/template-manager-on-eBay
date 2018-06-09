<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php print Settings_model::$db_config['site_title']; ?>: <?php print $template['title']; ?></title>
    <?php print $template['metadata']; ?>

    <link rel="stylesheet" href="<?php print base_url(); ?>css/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php print base_url(); ?>css/themes/<?php print Settings_model::$db_config['default_theme'] ?>/style.css" type="text/css" media="screen" />

    <?php
    $this->load->view('generic/js_base_url');
    $this->load->view('generic/js_language_files');
    ?>
    <script type="text/javascript" src="<?php print base_url(); ?>js/jQuery/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="<?php print base_url(); ?>js/jQuery/jquery-qtip-1.0.0-rc3.min.js"></script>
    <script type="text/javascript" src="<?php print base_url(); ?>js/jQuery/jq_functions.js"></script>
    <script type="text/javascript" src="<?php print base_url(); ?>js/jQuery/themes/<?php print Settings_model::$db_config['default_theme'] ?>/style.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Oswald&amp;v2' rel='stylesheet' type='text/css'>
</head>

<body id="main">
<header>
<?php print $template['partials']['header']; ?>
</header>
<div id="content_column">

<?php print $template['body']; ?>

</div>
<footer>
<?php print $template['partials']['footer']; ?>
</footer>
</body>

</html>