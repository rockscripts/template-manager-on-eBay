<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div>
    <?php $this->load->view('generic/flash_error'); ?>
</div>

<?php print form_open('membership/oauth_register/register', 'id="oauth_register_form"') ."\r\n"; ?>

    <p>
        <label for="username"><?php print $this->lang->line('username'); ?></label>
        <input type="text" name="username" id="username" value="<?php print $this->session->flashdata('username'); ?>">
    </p>

    <?php if ($this->session->flashdata('provider') == "twitter" || $this->session->flashdata('provider') == "linkedin") { ?>
    <p>
        <label for="email"><?php print $this->lang->line('email_address'); ?></label>
        <input type="text" name="email" id="email" value="<?php print $this->session->flashdata('email'); ?>">
    </p>
    <?php } ?>

    <p>
        <input type="submit" value="<?php print $this->lang->line('oauth_complete_social_logon'); ?>"  class="btn btn-inverse">
    </p>
<?php print form_close() ."\r\n"; ?>