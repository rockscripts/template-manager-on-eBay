<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="regbox_top">
</div>
<?php
if (!Settings_model::$db_config['registration_enabled']) {
?>
<div id="error"><?php print $this->lang->line('registration_disabled') ?></div>
<?php
}else{
    print form_open('membership/register/add_member','id="register_form" class="register_form"') ."\r\n";
    ?>
    <div class="membership_box_register">
    <?php $this->load->view('generic/flash_error'); ?>
    </div>

    <h2><?php print $this->lang->line('create_account'); ?></h2>
    <p>(All fields are required)</p>

    <ul class="floatleft form_spacer_right">
    <li class="form_label"><?php print form_label(ucfirst($this->lang->line('first_name')) .':', 'reg_first_name'); ?></li>
    <li class="input_box"><?php print form_input(array('name' => 'first_name', 'id' => 'reg_first_name', 'value' => $this->session->flashdata('first_name'), 'class' => 'membership_text_field qtip_first_name')); ?></li>
    </ul>

    <ul class="floatleft">
    <li class="form_label"><?php print form_label(ucfirst($this->lang->line('last_name')) .':', 'reg_last_name'); ?></li>
    <li class="input_box"><?php print form_input(array('name' => 'last_name', 'id' => 'reg_last_name', 'value' => $this->session->flashdata('first_name'), 'class' => 'membership_text_field qtip_first_name')); ?></li>
    </ul>

    <div class='clearboth'></div>

    <ul class="clearboth floatleft form_spacer_right">
    <li class="form_label"><?php print form_label(ucfirst($this->lang->line('email_address')) .':', 'reg_email'); ?></li>
    <li class="input_box"><?php print form_input(array('name' => 'email', 'id' => 'reg_email', 'value' => $this->session->flashdata('email'), 'class' => 'membership_text_field qtip_email')); ?></li>
    </ul>

    <ul id="email_verification_box">
    <li><div id="email_valid"></div></li>
    <li><div id="email_taken"></div></li>
    </ul>

    <div class="clearboth"></div>

    <ul class="clearboth floatleft form_spacer_right">
    <li class="clearboth form_label"><?php print form_label(ucfirst($this->lang->line('username')) .':', 'reg_username'); ?></li>
    <li class="input_box"><?php print form_input(array('name' => 'username', 'id' => 'reg_username', 'value' => $this->session->flashdata('username'), 'class' => 'membership_text_field qtip_username')); ?></li>
    </ul>
    <div class="floatleft">
        <div id="username_valid"></div>
        <div id="username_taken"></div>
        <div id="username_length"></div>
    </div>

    <div class='clearboth'></div>
    
    <ul class="clearboth floatleft form_spacer_right">
    <li class="form_label"><?php print form_label(ucfirst($this->lang->line('password')) .':', 'reg_password'); ?></li>
    <li class="input_box"><?php print form_password(array('name' => 'password', 'id' => 'reg_password', 'class' => 'membership_text_field qtip_password')); ?></li>
    </ul>

    <ul class="floatleft">
    <li class="form_label"><?php print form_label(ucfirst($this->lang->line('confirm_password')) .':', 'password_confirm'); ?></li>
    <li class="input_box"><?php print form_password(array('name' => 'password_confirm', 'id' => 'password_confirm', 'class' => 'membership_text_field')); ?></li>
    </ul>

    <div class="clearboth"></div>

    <?php print $this->recaptcha->get_html();

    print form_submit(array('name' => 'membership_submit', 'id' => 'membership_submit', 'value' => $this->lang->line('create_account'), 'class' => 'reg_submit')) ."<br />\r\n";
    print form_close() ."\r\n";
}
?>
<div class="regbox_bot">
</div>
<ul class="membership_link">
    <li><a href="<?php print base_url(); ?>"><?php print $this->lang->line('login'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/forgot_password"><?php print $this->lang->line('forgot_password'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/forgot_username"><?php print $this->lang->line('forgot_username'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/resend_activation"><?php print $this->lang->line('resend_activation'); ?></a></li>
</ul>