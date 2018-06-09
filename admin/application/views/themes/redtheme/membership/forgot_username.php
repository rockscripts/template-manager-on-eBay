<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
print "<div class=\"redbox_top\"></div>\r\n";
print form_open('membership/forgot_username/send_username', array('id' => 'username_form', 'class' => 'redtheme_form')) ."\r\n";
?>
<div class="membership_box">
<?php
$this->load->view('generic/flash_error');
print "</div><h2>". $this->lang->line('forgot_username') ."</h2>\r\n";
print "<div class=\"form_label\">". form_label($this->lang->line('your_email'), 'email') ."</div>\r\n";
print "<div class=\"input_box\">". form_input(array('name' => 'email', 'id' => 'email', 'class' => 'input_text_long')) . "</div>\r\n";
print $this->recaptcha->get_html();
print "<div>". form_submit(array('name' => 'forgot_username_submit', 'value' => $this->lang->line('send_username'), 'id' => 'forgot_username_submit', 'class' => 'input_submit')) ."</div>\r\n";
print form_close() ."\r\n";
?>
<div class="redbox_bot"></div>
<p class="login_link">
    <a href="<?php print base_url(); ?>"><?php print $this->lang->line('login'); ?></a> &laquo;&raquo;
    <a href="<?php print base_url(); ?>membership/forgot_password"><?php print $this->lang->line('forgot_password'); ?></a> &laquo;&raquo;
    <a href="<?php print base_url(); ?>membership/resend_activation"><?php print $this->lang->line('resend_activation'); ?></a> &laquo;&raquo;
    <a href="<?php print base_url(); ?>membership/register"><?php print $this->lang->line('create_account'); ?></a>
</p>