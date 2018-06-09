<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="center">
<?php
$this->load->view('generic/flash_error');
?>
<p class="login_link"><a href="<?php print base_url(); ?>membership/login"><?php print $this->lang->line('login'); ?></a></p>
</div>