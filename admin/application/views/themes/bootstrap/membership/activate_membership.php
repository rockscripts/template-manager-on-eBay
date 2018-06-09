<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<h1 class="page-title"><?php print $this->lang->line('activate_membership_title'); ?></h1>


<div id="errorapp" class="error_box">
    <?php print (isset($success) ? $success : ""); ?>
</div>
<div id="errorapp" class="error_box">
    <?php print (isset($error) ? $error : ""); ?>
</div>