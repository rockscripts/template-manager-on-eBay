<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php print form_open('private/profile/update_account', array('id' => 'profile_form')) ."\r\n"; ?>

<div>
    <?php $this->load->view('generic/flash_error'); ?>
</div>

<h1 class="page-title">><?php print $this->lang->line('my_profile'); ?></h1>

<h2>
    <?php print $this->lang->line('personal_details'); ?>
</h2>

<label for="profile_first_name"><?php print $this->lang->line('first_name'); ?></label>
<input type="text" name="first_name" id="profile_first_name" value="<?php print $first_name; ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('first_name_requirements'); ?>" class="tooltip_target">

<label for="profile_last_name"><?php print $this->lang->line('last_name'); ?></label>
<input type="text" name="last_name" id="profile_last_name" value="<?php print $last_name; ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('last_name_requirements'); ?>" class="tooltip_target">

<label for="profile_email"><?php print $this->lang->line('change_email'); ?></label>
<input type="text" name="email" id="profile_email" value="<?php print $email; ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('email_requirements'); ?>" class="tooltip_target">

<div>
    <label for="profile_password"><?php print $this->lang->line('password_required_for_changes'); ?></label>
    <input type="password" name="password" id="profile_password">
</div>

<input type="submit" name="profile_submit" id="profile_submit" value="<?php print $this->lang->line('update_profile'); ?>" class="btn btn-inverse">
<input type="hidden" name="id" value="<?php print $id; ?>" />

<?php print form_close() ."\r\n"; ?>

<?php print form_open('private/profile/update_password', array('id' => 'profile_pwd_form')) ."\r\n"; ?>

<div id="pwd_error" class="the_error">
    <?php
    if ($this->session->flashdata('pwd_error')) {
        ?>
        <div class="alert alert-error">
            <h4>Password error:</h4>
            <p><?php print $this->session->flashdata('pwd_error'); ?></p>
        </div>
    <?php
    }
    ?>
</div>
<div id="success" class="the_error">
    <?php
    if ($this->session->flashdata('pwd_success')) {
        ?>
        <div class="alert alert-success">
            <h4>Success!!</h4>
            <p><?php print $this->session->flashdata('pwd_success'); ?></p>
        </div>
    <?php
    }
    ?>
</div>


<h2>
    <?php print  $this->lang->line('edit_password'); ?>
</h2>

<label for="current_password"><?php print $this->lang->line('current_password'); ?></label>
<input type="password" name="current_password" id="current_password">

<label for="profile_new_password"><?php print $this->lang->line('new_password'); ?></label>
<input type="password" name="new_password" id="profile_new_password" data-original-title="<?php print $this->lang->line('password_requirements'); ?>" class="tooltip_target">

<label for="new_password_again"><?php print $this->lang->line('new_password_again'); ?></label>
<input type="password" name="new_password_again" id="new_password_again">

<?php print form_hidden('email', $email); ?>

<p>
    <?php print $this->lang->line('send_copy_to_email'); ?>
    <br>
    <?php print form_checkbox(array('name' => 'send_copy', 'value' => 'accept', 'checked' => TRUE, 'class' => 'checkbox')); ?>
</p>

<input type="submit" name="submit" id="profile_pwd_submit" value="<?php print $this->lang->line('update_password'); ?>" class="btn btn-inverse">

<?php print form_close() ."\r\n"; ?>
