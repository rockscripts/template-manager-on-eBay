<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div>
    <nav>
    <?php
    $this->load->view('themes/'. Settings_model::$db_config['active_theme'] .'/private/private_nav');
    ?>
    </nav>
</div>