<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
print "<div class=\"redbox_top\"></div>\r\n";
print form_open('membership/login/validate', 'id="login_form"') ."\r\n";
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
print "</div><div class=\"form_label\">". form_label($this->lang->line('username'), 'login_username') ."</div>";
print "<div class=\"input_box\">". form_input(array('name' => 'username', 'id' => 'login_username', 'class' => 'input_text')) . "</div>\r\n";
print "<div class=\"form_label\">". form_label($this->lang->line('password'), 'login_password') ."</div>";
print "<div class=\"input_box\">". form_password(array('name' => 'password', 'id' => 'login_password', 'class' => 'input_text')) ."</div>\r\n";
print "<div class=\"form_label_small\">". $this->lang->line('remember_me') ." ". form_checkbox('remember_me', 'accept', FALSE) ."</div>\r\n";
if ($this->session->userdata('login_attempts') > 5) {
    print $this->recaptcha->get_html();
}
print "<div class=\"login_submit\">". form_submit(array('name' => 'submit', 'value' => $this->lang->line('login'), 'id' => 'login_submit', 'class' => 'input_submit')) ."</div>\r\n";
print form_close() ."\r\n";
?>
<div class="redbox_bot"></div>
<p class="login_link">
    <a href="<?php print base_url(); ?>membership/forgot_password"><?php print $this->lang->line('forgot_password'); ?></a> &laquo;&raquo;
    <a href="<?php print base_url(); ?>membership/forgot_username"><?php print $this->lang->line('forgot_username'); ?></a> &laquo;&raquo;
    <a href="<?php print base_url(); ?>membership/resend_activation"><?php print $this->lang->line('resend_activation'); ?></a> &laquo;&raquo;
    <a href="<?php print base_url(); ?>membership/register"><?php print $this->lang->line('create_account'); ?></a>
</p>
