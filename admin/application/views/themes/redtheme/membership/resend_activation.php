<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
print "<div class=\"redbox_top\"></div>\r\n";
print form_open('membership/resend_activation/send_link', array('id' => 'resend_activation_form', 'class' => 'redtheme_form')) ."\r\n";
$this->load->view('generic/flash_error');
print "<h2>". $this->lang->line('resend_activation') ."</h2>\r\n";
print "<div class=\"form_label\">". form_label($this->lang->line('your_email'), 'email') ."</div>\r\n";
print "<div class=\"input_box\">". form_input(array('name' => 'email', 'id' => 'email', 'class' => 'input_text')) . "</div>\r\n";
print $this->recaptcha->get_html();
print "<div>". form_submit(array('name' => 'resend_activation_submit', 'value' => $this->lang->line('send_activation_email'), 'id' => 'resend_activation_submit', 'class' => 'input_submit_long')) ."</div>\r\n";
print form_close() ."\r\n";
?>
<div class="redbox_bot"></div>
<p class="login_link">
    <a href="<?php print base_url(); ?>"><?php print $this->lang->line('login'); ?></a> &laquo;&raquo;
    <a href="<?php print base_url(); ?>membership/forgot_password"><?php print $this->lang->line('forgot_password'); ?></a> &laquo;&raquo;
    <a href="<?php print base_url(); ?>membership/forgot_username"><?php print $this->lang->line('forgot_username'); ?></a> &laquo;&raquo;
    <a href="<?php print base_url(); ?>membership/register"><?php print $this->lang->line('create_account'); ?></a>
</p>