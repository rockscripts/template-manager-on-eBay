<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="centerbox_top">
</div>
<?php print form_open('membership/forgot_password/send_password', array('id' => 'password_form', 'class' => 'membership_form')) ."\r\n";
?>
<div class="membership_box">
<?php
$this->load->view('generic/flash_error');
?>
</div><h2><?php print $this->lang->line('forgot_password'); ?></h2>
<div class="form_label"><?php print form_label($this->lang->line('your_email') .':', 'email'); ?></div>
<div class="input_box"><?php print form_input(array('name' => 'email', 'id' => 'email', 'class' => 'membership_text_field')); ?></div>
<div><?php print $this->recaptcha->get_html(); ?></div>
<div><?php print form_submit(array('name' => 'forgot_password_submit', 'value' => $this->lang->line('send_password'), 'id' => 'forgot_password_submit', 'class' => 'membership_submit')); ?></div>
<?php print form_close() ."\r\n";
?>
<div class="centerbox_bot">
</div>
<ul class="membership_link">
    <li><a href="<?php print base_url(); ?>"><?php print $this->lang->line('login'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/forgot_username"><?php print $this->lang->line('forgot_username'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/resend_activation"><?php print $this->lang->line('resend_activation'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/register"><?php print $this->lang->line('create_account'); ?></a></li>
</ul>