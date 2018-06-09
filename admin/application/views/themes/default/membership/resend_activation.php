<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
print form_open('membership/resend_activation/send_link', array('id' => 'resend_activation_form', 'class' => 'membership_form')) ."\r\n";
?>
<div class="membership_box">
<?php
$this->load->view('generic/flash_error');
?>
</div>
<h2><?php print $this->lang->line('resend_activation'); ?></h2>
<div class="form_label"><?php print form_label($this->lang->line('your_email') .':', 'email'); ?></div>
<div class=\"input_box\"><?php print form_input(array('name' => 'email', 'id' => 'email', 'class' => 'membership_text_field')); ?></div>
<?php print $this->recaptcha->get_html(); ?>
<div>
<?php print form_submit(array('name' => 'resend_activation_submit', 'value' => $this->lang->line('send_activation_email'), 'id' => 'resend_activation_submit', 'class' => 'membership_submit')); ?></div>
<?php print form_close() ."\r\n";
?>
<ul class="membership_link">
    <li><a href="<?php print base_url(); ?>"><?php print $this->lang->line('login'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/forgot_password"><?php print $this->lang->line('forgot_password'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/forgot_username"><?php print $this->lang->line('forgot_username'); ?></a></li>
    <li><a href="<?php print base_url(); ?>membership/register"><?php print $this->lang->line('create_account'); ?></a></li>
</ul>