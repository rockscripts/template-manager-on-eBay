<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="centerbox_top">
</div>
<?php
print form_open('private/profile/update_account', array('id' => 'profile_form', 'class' => 'membership_form')) ."\r\n";
?>
<div class="membership_box">
    <div id="error">
        <?php
        if ($this->session->flashdata('message')) {
            print "<div class=\"error_box\">". $this->session->flashdata('message') ."</div>";
        }
        ?>
    </div>
</div>
<h2><?php print $this->lang->line('edit_profile'); ?></h2>
<div class="form_label"><?php print form_label($this->lang->line('first_name'), 'profile_first_name'); ?></div>
<div class="input_box"><?php print form_input(array('name' => 'first_name', 'id' => 'profile_first_name', 'value' => $first_name, 'class' => 'membership_text_field qtip_first_name')); ?></div>
<div class="form_label"><?php print form_label($this->lang->line('last_name'), 'profile_last_name'); ?></div>
<div class="input_box"><?php print form_input(array('name' => 'last_name', 'id' => 'profile_last_name', 'value' => $last_name, 'class' => 'membership_text_field qtip_last_name')); ?></div>
<div class="text_black"><?php print $this->lang->line('current_email') .": <strong>". $email; ?></strong></div>
<div class="form_label"><?php print form_label($this->lang->line('change_email'), 'profile_email');?></div>
<div class="input_box"><?php print form_input(array('name' => 'email', 'id' => 'profile_email', 'class' => 'membership_text_field qtip_email')) ."\r\n";
?>
<div id="email_valid"></div>
<div id="email_taken"></div>
</div>
<div class="text_black"><?php print $this->lang->line('password_required_for_changes'); ?></div>
<div class="input_box"><?php print form_password(array('name' => 'password', 'id' => 'profile_password', 'class' => 'membership_text_field')); ?></div>
<div><?php print form_submit(array('name' => 'submit', 'value' => $this->lang->line('update_profile'), 'id' => 'profile_submit', 'class' => 'membership_submit')); ?></div>
<?php print form_close() ."\r\n"; ?>
<div class="centerbox_bot">
</div>
<div class="centerbox_top">
</div>
<?php print form_open('private/profile/update_password', array('id' => 'profile_pwd_form', 'class' => 'membership_form')) ."\r\n";
?>
<div class="membership_box">
    <div id="pwd_error">
        <?php
        if ($this->session->flashdata('pwd_message')) {
            print "<div class=\"error_box\">". $this->session->flashdata('pwd_message') ."</div>";
        }
        ?>
    </div>
</div>
<h2><?php print  $this->lang->line('edit_password'); ?></h2>
<div class="form_label"><?php print form_label($this->lang->line('current_password'), 'current_password'); ?></div>
<div class="input_box"><?php print form_password(array('name' => 'current_password', 'id' => 'current_password', 'class' => 'membership_text_field')); ?></div>
<div class="form_label"><?php print form_label($this->lang->line('new_password'), 'profile_new_password'); ?></div>
<div class="input_box"><?php print form_password(array('name' => 'new_password', 'id' => 'profile_new_password', 'class' => 'membership_text_field qtip_password')); ?></div>
<div class="form_label"><?php print form_label($this->lang->line('new_password_again'), 'new_password_again'); ?></div>
<div class="input_box"><?php print form_password(array('name' => 'new_password_again', 'id' => 'new_password_again', 'class' => 'membership_text_field')); ?></div>
<?php print form_hidden('email', $email); ?>
<div class="text_black"><?php print $this->lang->line('send_copy_to_email') . form_checkbox(array('name' => 'send_copy', 'value' => 'accept', 'checked' => TRUE, 'class' => 'checkbox')); ?></div>
<div><?php print form_submit(array('name' => 'submit', 'value' => $this->lang->line('update_password'), 'id' => 'profile_pwd_submit', 'class' => 'membership_submit')); ?></div>
<?php print form_close() ."\r\n"; ?>
<div class="centerbox_bot">
</div>
