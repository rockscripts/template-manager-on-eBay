<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div id="default_header">
<nav>
<?php
$this->load->view('themes/'. Settings_model::$db_config['default_theme'] .'/private_nav.php');
?>
</nav>
</div>
