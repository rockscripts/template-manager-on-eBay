<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
print "<div class=\"centerbox_top\">\r\n";
print "</div>\r\n";
print form_open('membership/resend_activation/send_link', array('id' => 'resend_activation_form', 'class' => 'membership_form')) ."\r\n";
print "<div class=\"membership_box\">\r\n";
$this->load->view('generic/flash_error');
print "</div><h2>". $this->lang->line('resend_activation') ."</h2>\r\n";
print "<div class=\"form_label\">". form_label($this->lang->line('your_email') .':', 'email') ."</div>\r\n";
print "<div class=\"input_box\">". form_input(array('name' => 'email', 'id' => 'email', 'class' => 'membership_text_field')) . "</div>\r\n";
print $this->recaptcha->get_html();
print "<div>". form_submit(array('name' => 'resend_activation_submit', 'value' => $this->lang->line('send_activation_email'), 'id' => 'resend_activation_submit', 'class' => 'membership_submit')) ."</div>\r\n";
print form_close() ."\r\n";
print "<div class=\"centerbox_bot\">\r\n";
print "</div>\r\n";
?>
<ul class="membership_link">
    <li><a href="<?php print base_url(); ?>"><?php print $this->lang->line('login'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/forgot_password"><?php print $this->lang->line('forgot_password'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/forgot_username"><?php print $this->lang->line('forgot_username'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/register"><?php print $this->lang->line('create_account'); ?></a></li>
</ul>