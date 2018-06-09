<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

    <div>
        <?php $this->load->view('generic/flash_error'); ?>
    </div>

    <h1 class="page-title"><?php print $this->lang->line('my_profile'); ?></h1>

<?php print form_open('private/oauth_profile/update_profile', array('id' => 'oauth_profile_form')) ."\r\n"; ?>

    <p>
        <label for="first_name"><?php print $this->lang->line('first_name'); ?></label>
        <input type="text" name="first_name" id="first_name" value="<?php print $first_name; ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('first_name_requirements'); ?>" class="tooltip_target">
    </p>

    <p>
        <label for="last_name"><?php print $this->lang->line('last_name'); ?></label>
        <input type="text" name="last_name" id="last_name" value="<?php print $last_name; ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('last_name_requirements'); ?>" class="tooltip_target">
    </p>

    <p>
        <label for="email"><?php print $this->lang->line('change_email'); ?></label>
        <input type="text" name="email" id="email" value="<?php print $email; ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('email_requirements'); ?>" class="tooltip_target">
    </p>

    <p>
        <input type="submit" value="<?php print $this->lang->line('save_profile'); ?>" id="oauth_profile_submit" class="message_cleanup btn btn-inverse">
        <input type="hidden" name="id" value="<?php print $id; ?>" />
    </p>



<?php print form_close() ."\r\n"; ?>