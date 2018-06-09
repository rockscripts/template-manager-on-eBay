<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
print "<div class=\"redbox_top\"></div>";
print "<div class=\"redbox_mid\">";
?>
<div class="membership_box">
<?php
if (!Settings_model::$db_config['registration_enabled']) {
?>
<div id="error" class="error_box"><?php print $this->lang->line('registration_disabled') ?></div>
<?php
}else{
    print form_open('membership/register/add_member','id="membership_form"') ."\r\n";
    $this->load->view('generic/flash_error');
    print "</div><h2>". $this->lang->line('create_account') ."</h2>\r\n";
    print "<div class=\"form_label\">". form_label($this->lang->line('first_name'), 'reg_first_name') ."</div>";
    print "<div class=\"input_box\">". form_input(array('name' => 'first_name', 'id' => 'reg_first_name', 'value' => $this->session->flashdata('first_name'), 'class' => 'input_text qtip_first_name')) ."</div>\r\n";
    print "<div class=\"form_label\">". form_label($this->lang->line('last_name'), 'reg_last_name') ."</div>";
    print "<div class=\"input_box\">". form_input(array('name' => 'last_name', 'id' => 'reg_last_name', 'value' => $this->session->flashdata('last_name'), 'class' => 'input_text qtip_last_name')) ."</div>\r\n";
    print "<div class=\"form_label\">". form_label($this->lang->line('email_address'), 'reg_email') ."</div>";
    print "<div class=\"input_box\">". form_input(array('name' => 'email', 'id' => 'reg_email', 'value' => $this->session->flashdata('email'), 'class' => 'input_text qtip_email')) ."</div>\r\n";
    ?>
    <div id="email_valid"></div>
    <div id="email_taken"></div>
    <?php
    print "<div class=\"form_label\">". form_label($this->lang->line('username'), 'reg_username') ."</div>";
    print "<div class=\"input_box\">". form_input(array('name' => 'username', 'id' => 'reg_username', 'value' => $this->session->flashdata('username'), 'class' => 'input_text qtip_username')) ."</div>\r\n";
    ?>
    <div id="username_valid"></div>
    <div id="username_taken"></div>
    <div id="username_length"></div>
    <?php
    print "<div class=\"form_label\">". form_label($this->lang->line('password'), 'reg_password') ."</div>";
    print "<div class=\"input_box\">". form_password(array('name' => 'password', 'id' => 'reg_password', 'class' => 'input_text qtip_password')) ."</div>\r\n";
    print "<div class=\"form_label\">". form_label($this->lang->line('confirm_password'), 'password_confirm') ."</div>";
    print "<div class=\"input_box\">". form_password(array('name' => 'password_confirm', 'id' => 'password_confirm', 'class' => 'input_text')) ."</div>\r\n";
    print $this->recaptcha->get_html();
    print form_submit(array('name' => 'membership_submit', 'id' => 'membership_submit', 'value' => $this->lang->line('create_account'), 'class' => 'input_submit')) ."<br />\r\n";
    print form_close() ."\r\n";
}
?>
</div>
<div class="redbox_bot"></div>
<p class="login_link">
    <a href="<?php print base_url(); ?>"><?php print $this->lang->line('login'); ?></a> &laquo;&raquo;
    <a href="<?php print base_url(); ?>membership/forgot_password"><?php print $this->lang->line('forgot_password'); ?></a> &laquo;&raquo;
    <a href="<?php print base_url(); ?>membership/forgot_username"><?php print $this->lang->line('forgot_username'); ?></a> &laquo;&raquo;
    <a href="<?php print base_url(); ?>membership/register"><?php print $this->lang->line('create_account'); ?></a>
</p>