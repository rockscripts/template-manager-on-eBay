<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<?php
print "<div class=\"redbox_top\"></div>";
print form_open('private/profile/update_account', array('id' => 'profile_form', 'class' => 'redtheme_form')) ."\r\n";
?>
<div class="membership_box">
<?php
print $this->load->view('generic/flash_error');
print "</div><h2>". $this->lang->line('edit_profile') ."</h2>\r\n";
print "<div class=\"form_label\">". form_label($this->lang->line('first_name'), 'profile_first_name') ."</div>";
print "<div class=\"input_box\">". form_input(array('name' => 'first_name', 'id' => 'profile_first_name', 'value' => $first_name, 'class' => 'input_text qtip_first_name')) . "</div>\r\n";
print "<div class=\"form_label\">". form_label($this->lang->line('last_name'), 'profile_last_name') ."</div>";
print "<div class=\"input_box\">". form_input(array('name' => 'last_name', 'id' => 'profile_last_name', 'value' => $last_name, 'class' => 'input_text qtip_last_name')) . "</div>\r\n";
print "<div class=\"text_black\">". $this->lang->line('current_email') .": <strong>". $email ."</strong></div>";
print "<div class=\"form_label\">". form_label($this->lang->line('change_email'), 'profile_email') ."</div>";
print "<div class=\"input_box\">". form_input(array('name' => 'email', 'id' => 'profile_email', 'class' => 'input_text qtip_email')) ."</div>\r\n";
?>
<div id="email_valid"></div>
<div id="email_taken"></div>
<?php
print "<div class=\"text_black\">". $this->lang->line('password_required_for_changes')."</div>";
print "<div class=\"input_box\">". form_password(array('name' => 'password', 'id' => 'profile_password', 'class' => 'input_text')) ."</div>\r\n";
print "<div>". form_submit(array('name' => 'submit', 'value' => $this->lang->line('update_profile'), 'id' => 'profile_submit', 'class' => 'input_submit')) ."</div>\r\n";
print form_close() ."\r\n";
?>
<div class="redbox_bot"></div>
<?php
print "<div class=\"redbox_top\"></div>";
print form_open('private/profile/update_password', array('id' => 'profile_pwd_form', 'class' => 'redtheme_form')) ."\r\n";
?>
<div class="membership_box">
<div id="pwd_error">
</div>
<?php
if ($this->session->flashdata('pwd_message')) {
    print "<div class=\"error_box\">". $this->session->flashdata('pwd_message') ."</div>";
}
print "</div><div class=\"form_label\">". form_label($this->lang->line('current_password'), 'current_password') ."</div>";
print "<div class=\"input_box\">". form_password(array('name' => 'current_password', 'id' => 'current_password', 'class' => 'input_text')) ."</div>\r\n";
print "<div class=\"form_label\">". form_label($this->lang->line('new_password'), 'profile_new_password') ."</div>";
print "<div class=\"input_box\">". form_password(array('name' => 'new_password', 'id' => 'profile_new_password', 'class' => 'input_text qtip_password')) ."</div>\r\n";
print "<div class=\"form_label\">". form_label($this->lang->line('new_password_again'), 'new_password_again') ."</div>";
print "<div class=\"input_box\">". form_password(array('name' => 'new_password_again', 'id' => 'new_password_again', 'class' => 'input_text')) ."</div>\r\n";
print form_hidden('email', $email);
print "<div class=\"text_black\">". $this->lang->line('send_copy_to_email') . form_checkbox('send_copy', 'accept', TRUE) ."</div>\r\n";
print "<div>". form_submit(array('name' => 'submit', 'value' => $this->lang->line('update_password'), 'id' => 'profile_pwd_submit', 'class' => 'input_submit')) ."</div>\r\n";
print form_close() ."\r\n";
?>
<div class="redbox_bot"></div>
