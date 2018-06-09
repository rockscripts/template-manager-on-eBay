<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

    <h1 class="text-center page-title">
        <?php print $this->lang->line('forgot_password'); ?>
    </h1>

    <div>
        <?php
        $this->load->view('generic/flash_error');
        ?>
    </div>

    <?php print form_open('membership/forgot_password/send_password', array('id' => 'forgot_password_form')) ."\r\n"; ?>

    <label for="email"><?php print $this->lang->line('your_email'); ?></label>
    <input type="text" name="email" id="email">

    <?php
    if (Settings_model::$db_config['recaptcha_enabled'] == true) {
        print $this->recaptcha->get_html();
    }
    ?>

    <input type="submit" name="forgot_password_submit" class="check_email_empty btn btn-inverse" value="<?php print $this->lang->line('send_password'); ?>">
    <span class="loading"><img src="<?php print base_url(); ?>images/loaderB16.gif" alt=""></span>

    <?php print form_close() ."\r\n"; ?>