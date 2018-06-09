<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php print Settings_model::$db_config['site_title']; ?>: <?php print $template['title']; ?></title>
<?php print $template['metadata']; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link rel="stylesheet" href="<?php print base_url(); ?>css/adminpanel/style.css" type="text/css" media="screen">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
</head>

<body>

<div id="main_container">

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <header>
                    <?php print $template['partials']['header']; ?>
                </header>
            </div>
        </div>
    </div>

    <ul class="nav nav-list affix bs-docs-sidenav">
        <li><a href="<?php print site_url('adminpanel/site_settings'); ?>"><i class="icon-chevron-right"></i> <?php print $this->lang->line('site_settings'); ?></a></li>
        <li><a href="<?php print site_url('adminpanel/list_members'); ?>"><i class="icon-chevron-right"></i> <?php print $this->lang->line('list_members_title'); ?></a></li>
        <li><a href="<?php print site_url('adminpanel/add_member'); ?>"><i class="icon-chevron-right"></i> <?php print $this->lang->line('add_member'); ?></a></li>
        <li><a href="<?php print site_url('adminpanel/oauth_providers'); ?>"><i class="icon-chevron-right"></i> <?php print $this->lang->line('oauth_providers'); ?></a></li>
        <li><a href="<?php print site_url('adminpanel/backup_export'); ?>"><i class="icon-chevron-right"></i> <?php print $this->lang->line('backup_and_export'); ?></a></li>
    </ul>

    <div class="main">
        <div class="container-fluid">
            <div class="row-fluid"">
                <div class="span12">
                    <?php print $template['body']; ?>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php print $template['partials']['footer']; ?>
    </footer>

</div>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php print base_url(); ?>js/adminpanel/jquery.js"></script>
<script src="<?php print base_url(); ?>js/adminpanel/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php print base_url(); ?>js/adminpanel/bootbox.min.js"></script>
<!-- Le CI_Membership JQuery -->
<?php
$this->load->view('generic/js_base_url');
$this->load->view('generic/js_language_files');
?>
<script type="text/javascript" src="<?php print base_url(); ?>js/jq_functions.js"></script>

</body>
</html>