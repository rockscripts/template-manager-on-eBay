<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/*get user details object*/

?>


<div class="container">

    <ul class="nav nav-tabs">

        <li <?php print ($this->uri->segment('2') == "home" ? ' class="active"' : ''); ?>>

            <a href="<?php print base_url(); ?>private/home">My Designs</a>

        </li>





        <li <?php print ($this->uri->segment('2') == "profile" ? ' class="active"' : ''); ?>>

            <a href="<?php print site_url('private/'. ($this->session->userdata('is_oauth') == true ? "oauth_" : "") .'profile'); ?>" title="edit profile"><?php print $this->lang->line('my_profile'); ?></a>

        </li>



 <?php
                  if($this->session->userdata( 'role_id' ) == 1):
                  ?>

        <li>

            <a href="<?php print base_url(); ?>adminpanel/site_settings">Adminpanel</a>

        </li>


  <?php
              endif;
                  ?>

    

 

    </ul>

</div>

<?php print form_open('private/profile/update_account', array('id' => 'profile_form')) ."\r\n"; ?>







        <h4 class="widgettitle nomargin shadowed"> <?php print $this->lang->line('personal_details'); ?></h4>

                <div class="widgetcontent bordered shadowed nopadding"> 
                <div class="stdform stdform2">
                    <div>

    <?php $this->load->view('generic/flash_error'); ?>

</div>
                <p>
                <span><label for="profile_first_name"><?php print $this->lang->line('first_name'); ?></label></span>
                <span class="field"><input type="text" name="first_name" id="profile_first_name" value="<?php print $user_object->first_name; ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('first_name_requirements'); ?>" class="tooltip_target"></span>
                </p>

<p>
<span>
<label for="profile_last_name"><?php print $this->lang->line('last_name'); ?></label>
</span>
<span class="field">
<input type="text" name="last_name" id="profile_last_name" value="<?php print $user_object->last_name; ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('last_name_requirements'); ?>" class="tooltip_target">
</span>
</p>
<p>
<span>
<label for="profile_email"><?php print $this->lang->line('change_email'); ?></label>
</span>
<span class="field">
<input type="text" name="email" id="profile_email" value="<?php print $user_object->email; ?>" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('email_requirements'); ?>" class="tooltip_target">
</span>
</p>
<p>
<span>
<label for="profile_password"><?php print $this->lang->line('password_required_for_changes'); ?></label>
</span>
<span class="field">
<input type="password" name="password" id="profile_password"/>
</span>
</p>

<p class="stdformbutton">
<input type="submit" name="profile_submit" id="profile_submit" value="<?php print $this->lang->line('update_profile'); ?>" class="btn  btn-primary"/>

<input type="hidden" name="id" value="<?php print $user_object->id; ?>" />
</p>


</div>
</div>

<?php print form_close() ."\r\n"; ?>



<?php print form_open('private/profile/update_password', array('id' => 'profile_pwd_form')) ."\r\n"; ?>

 <h4 class="widgettitle nomargin shadowed">   <?php print  $this->lang->line('edit_password'); ?></h4>

                <div class="widgetcontent bordered shadowed nopadding"> 
                <div class="stdform stdform2">

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

<p>
<span>
<label for="current_password"><?php print $this->lang->line('current_password'); ?></label>
</span>
<span class="field">
<input type="password" name="current_password" id="current_password">
</span>
</p>


<p>
<span>
<label for="profile_new_password"><?php print $this->lang->line('new_password'); ?></label>
</span>
<span class="field">
<input type="password" name="new_password" id="profile_new_password" data-original-title="<?php print $this->lang->line('password_requirements'); ?>" class="tooltip_target">
</span>
</p>
<p>
<span>
<label for="new_password_again"><?php print $this->lang->line('new_password_again'); ?></label>
</span>
<span class="field">
<input type="password" name="new_password_again" id="new_password_again">
</span>
</p>
<p class="stdformbutton">

<br>
    <?php print $this->lang->line('send_copy_to_email'); ?>

    <br>

    <?php print form_checkbox(array('name' => 'send_copy', 'value' => 'accept', 'checked' => TRUE, 'class' => 'checkbox')); ?>

<br>
<br>
<input type="submit" name="submit" id="profile_pwd_submit" value="<?php print $this->lang->line('update_password'); ?>" class="btn  btn-primary">
</p>



<?php print form_hidden('email', $user_object->email); ?>









</div>
</div>

<?php print form_close() ."\r\n"; ?>

