<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="centerbox_top">
</div>
<?php print form_open('membership/login/validate', 'id="login_form" class="membership_form"') ."\r\n";
?>
<div class="membership_box">
<?php
if (Settings_model::$db_config['login_enabled'] == 0)
{
?>
    <div id="error" class="error_box"><?php print $this->lang->line('login_disabled') ?></div>
<?php
}else{
    $this->load->view('generic/flash_error');
}
?>
</div><h2><?php print $this->lang->line('login'); ?></h2>
<div class="form_label"><?php print form_label(ucfirst($this->lang->line('username')) .':', 'login_username'); ?></div>
<div class="input_box"><?php print form_input(array('name' => 'username', 'id' => 'login_username', 'class' => 'membership_text_field')); ?></div>
<div class="form_label"><?php print form_label(ucfirst($this->lang->line('password')) .':', 'login_password'); ?></div>
<div class="input_box"><?php print form_password(array('name' => 'password', 'id' => 'login_password', 'class' => 'membership_text_field')); ?></div>
<div id="remember_me_box"><?php print form_label($this->lang->line('remember_me'), 'remember_me') ." ". form_checkbox(array('name' => 'remember_me', 'id' => 'remember_me', 'value' => 'accept', 'checked' => FALSE, 'class' => 'remember_me_checkbox')); ?></div>
<?php
if ($this->session->userdata('login_attempts') > 5) {
    print $this->recaptcha->get_html();
}
?>
<div class="login_submit"><?php print form_submit(array('name' => 'submit', 'value' => $this->lang->line('login'), 'id' => 'login_submit', 'class' => 'membership_submit')); ?></div>
<?php print form_close() ."\r\n"; ?>
<div class="centerbox_bot">
</div>
<ul class="membership_link">
    <li><a href="<?php print base_url(); ?>membership/forgot_password"><?php print $this->lang->line('forgot_password'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/forgot_username"><?php print $this->lang->line('forgot_username'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/resend_activation"><?php print $this->lang->line('resend_activation'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/register"><?php print $this->lang->line('create_account'); ?></a></li>
</ul>