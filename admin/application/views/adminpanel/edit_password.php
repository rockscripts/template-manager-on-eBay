<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
print form_open('adminpanel/edit_password/edit/'. $userdata->id, array('id' => 'edit_password_form')) ."\r\n";
?>
<h2>Edit password</h2>
<?php
print $this->load->view('generic/flash_error');
?>
<div class="grey_box">
    <p class="text_black">Change password for <strong><?php print $userdata->username; ?></strong> with e-mail <strong><?php print $userdata->email; ?></strong></p>
    <div class="form_label"><?php print form_label('new password', 'password'); ?></div>
    <div class="input_box"><?php print form_password(array('name' => 'password', 'id' => 'password', 'class' => 'input_text')); ?></div>
    <div class="form_label"><?php print form_label('confirm new password', 'password_confirm'); ?></div>
    <div class="input_box"><?php print form_password(array('name' => 'password_confirm', 'id' => 'password_confirm', 'class' => 'input_text')); ?></div>
    <div class="text_black">Send a copy of the new password to member e-mail?
    <?php print form_checkbox(array('name' => 'send_copy', 'id' => 'send_copy', 'checked' => TRUE, 'value' => 'accept', 'class' => 'checkbox')); ?>
    </div>
</div>
<div class="login_submit"><?php print form_submit(array('name' => 'edit_password_submit', 'id' => 'edit_password_submit', 'value' => 'Change password', 'class' => 'input_submit')); ?></div>
<?php print form_hidden('email', $userdata->email);
print form_close() ."\r\n";