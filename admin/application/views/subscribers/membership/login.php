****<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>    <h1 class="text-center page-title">        <?php
print $this->lang->line('login');
?>    </h1>    <div>        <?php
if (Settings_model::$db_config['login_enabled'] == 0) {
?>            <div id="error" class="alert"><?php
    print $this->lang->line('login_disabled');
?></div>        <?php
} else {
    $this->load->view('generic/flash_error');
}
?>    </div>    <?php
$this->load->view('themes/bootstrap/membership/oauth');
?>    <?php
print form_open('membership/login/validate', 'id="login_form" class="regular_form"') . "\r\n";
?>    <div id="oauth_login_wrapper" class="center text-center">        <a id="oauth_login" class="btn" href="javascript:">Social logon</a>    </div>    <label for="login_username"><?php
print $this->lang->line('username');
?></label>    <input type="text" name="username" id="login_username" data-toggle="tooltip" data-original-title="<?php
print $this->lang->line('username_requirements');
?>" class="tooltip_target">    <label for="login_password"><?php
print $this->lang->line('password');
?></label>    <input type="password" name="password" id="login_password" data-toggle="tooltip" data-original-title="<?php
print $this->lang->line('password_requirements');
?>" class="tooltip_target"><?php
if (Settings_model::$db_config['remember_me_enabled'] == true) {
?>    <p>    <label for="remember_me"><?php
    print $this->lang->line('remember_me');
?></label>    <?php
    print form_checkbox(array(
        'name' => 'remember_me',
        'id' => 'remember_me',
        'value' => 'accept',
        'checked' => FALSE
    ));
?>    </p><?php
}
?>    <?php
if ($this->session->userdata('login_attempts') > 5) {
    if (Settings_model::$db_config['recaptcha_enabled'] == true) {
        print $this->recaptcha->get_html();
    }
}
?>    <input type="submit" name="submit" id="login_submit" value="<?php
print $this->lang->line('login');
?>" class="btn btn-inverse">    <span class="loading"><img src="<?php
print base_url();
?>images/loaderB16.gif" alt=""></span>    <?php
print form_close() . "\r\n";
?>