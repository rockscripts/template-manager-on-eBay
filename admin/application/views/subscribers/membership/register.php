<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

    <h1 class="text-center page-title">
        <?php print $this->lang->line('create_account'); ?>
    </h1>

    <?php if (!Settings_model::$db_config['registration_enabled']) { ?>
    <div id="error" class="the_error">
        <div class="alert alert-error">
            <?php print $this->lang->line('registration_disabled'); ?>
        </div>
    </div>

    <?php }else{ ?>

    <div>
        <?php $this->load->view('generic/flash_error'); ?>
    </div>

    <div>
        <?php $this->load->view('themes/bootstrap/membership/oauth'); ?>
    </div>

    <?php print form_open('membership/register/add_member','id="register_form" class="regular_form"') ."\r\n"; ?>

    <div id="oauth_login_wrapper" class="center text-center">
        <a id="oauth_login" class="btn" href="javascript:">Social logon</a>
    </div>

    <p>
        (All fields are required)
    </p>

    <label for="reg_first_name"><?php print $this->lang->line('first_name'); ?></label>
    <input type="text" name="first_name" id="reg_first_name" value="<?php print $this->session->flashdata('first_name'); ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('first_name_requirements'); ?>" class="tooltip_target">

    <label for="reg_last_name"><?php print $this->lang->line('last_name'); ?></label>
    <input type="text" name="last_name" id="reg_last_name" value="<?php print $this->session->flashdata('last_name'); ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('last_name_requirements'); ?>" class="tooltip_target">

    <label for="reg_email"><?php print $this->lang->line('email_address'); ?></label>
    <input type="text" name="email" id="reg_email" value="<?php print $this->session->flashdata('email'); ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('email_requirements'); ?>" class="tooltip_target">

    <ul id="email_verification_box">
        <li><div id="email_valid"></div></li>
        <li><div id="email_taken"></div></li>
    </ul>

    <label for="reg_username"><?php print $this->lang->line('username'); ?></label>
    <input type="text" name="username" id="reg_username" value="<?php print $this->session->flashdata('username'); ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('username_requirements'); ?>" class="tooltip_target">

    <div>
        <div id="username_valid"></div>
        <div id="username_taken"></div>
        <div id="username_length"></div>
    </div>

    <label for="reg_password"><?php print $this->lang->line('password'); ?></label>
    <input type="password" name="password" id="reg_password" value="<?php print $this->session->flashdata('password'); ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('password_requirements'); ?>" class="tooltip_target">

    <label for="password_confirm"><?php print $this->lang->line('confirm_password'); ?></label>
    <input type="password" name="password_confirm" id="password_confirm" value="<?php print $this->session->flashdata('password_confirm'); ?>">

    <?php
    if (Settings_model::$db_config['recaptcha_enabled'] == true) {
        print $this->recaptcha->get_html();
    }
    ?>

    <input type="submit" name="membership_submit" id="membership_submit" value="<?php print $this->lang->line('create_account'); ?>" class="btn btn-inverse">
    <span class="loading"><img src="<?php print base_url(); ?>images/loaderB16.gif" alt=""></span>

    <?php print form_close() ."\r\n"; ?>

    <?php } ?>