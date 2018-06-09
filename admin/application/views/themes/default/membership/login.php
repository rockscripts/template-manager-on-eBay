<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
print form_open('membership/login/validate', 'id="login_form" class="membership_form"') ."\r\n";
print "<div class=\"membership_box\">\r\n";
if (Settings_model::$db_config['login_enabled'] == 0)
{
?>
    <div id="error" class="error_box"><?php print $this->lang->line('login_disabled') ?></div>
<?php
}else{
    $this->load->view('generic/flash_error');
}
print "</div><h2>". $this->lang->line('login') ."</h2>\r\n";
print "<div class=\"form_label\">". form_label(ucfirst($this->lang->line('username')) .':', 'login_username') ."</div>";
print "<div class=\"input_box\">". form_input(array('name' => 'username', 'id' => 'login_username', 'class' => 'membership_text_field')) . "</div>\r\n";
print "<div class=\"form_label\">". form_label(ucfirst($this->lang->line('password')) .':', 'login_password') ."</div>";
print "<div class=\"input_box\">". form_password(array('name' => 'password', 'id' => 'login_password', 'class' => 'membership_text_field')) ."</div>\r\n";
print "<div id=\"remember_me_box\">". form_label($this->lang->line('remember_me'), 'remember_me') ." ". form_checkbox(array('name' => 'remember_me', 'id' => 'remember_me', 'value' => 'accept', 'checked' => FALSE, 'class' => 'remember_me_checkbox')) ."</div>\r\n";
if ($this->session->userdata('login_attempts') > 5) {
    print $this->recaptcha->get_html();
}
print "<div class=\"login_submit\">". form_submit(array('name' => 'submit', 'value' => $this->lang->line('login'), 'id' => 'login_submit', 'class' => 'membership_submit')) ."</div>\r\n";
print form_close() ."\r\n";
?>
<ul class="membership_link">
    <li><a href="<?php print base_url(); ?>membership/forgot_password"><?php print $this->lang->line('forgot_password'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/forgot_username"><?php print $this->lang->line('forgot_username'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/resend_activation"><?php print $this->lang->line('resend_activation'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/register"><?php print $this->lang->line('create_account'); ?></a></li>
</ul>