<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div class="container-fluid">

    <ul class="nav nav-tabs">

        <li>

            <a href="<?php print base_url(); ?>private/home">Home</a>

        </li>





        <li>

            <a href="<?php print site_url('private/'. ($this->session->userdata('is_oauth') == true ? "oauth_" : "") .'profile'); ?>" title="edit profile"><?php print $this->lang->line('my_profile'); ?></a>

        </li>





        <li <?php print ($this->uri->segment('1') == "adminpanel" ? ' class="active"' : ''); ?>>

            <a href="<?php print base_url(); ?>adminpanel/site_settings">Adminpanel</a>

        </li>






    </ul>
  <div style="height: 36px;" class="top-buttons home-slider">  
    <div style="float:left; border-radius: 10px;" class="btn-group action-with-selected-button">
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Menu
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li>
                <a title="Site Settings"  href="<?php print site_url('adminpanel/site_settings'); ?>">
                    <i class="icon-chevron-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp; <?php print $this->lang->line('site_settings'); ?>
                </a>
            </li>
            <li>
                <a title="<?php print $this->lang->line('list_members_title'); ?>"  href="<?php print site_url('adminpanel/list_members'); ?>">
                    <i class="icon-chevron-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp; <?php print $this->lang->line('list_members_title'); ?>
                </a>
            </li>
            <li>
                <a title="<?php print $this->lang->line('add_member'); ?>" href="<?php print site_url('adminpanel/add_member'); ?>">
                    <i class=" icon-chevron-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp;Add <?php print $this->lang->line('add_member'); ?>
                </a>
            </li>
            <li >
 <a title="Suggested templates" href="<?php print base_url(); ?>suggested_templates">
                    <i class="icon-chevron-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp;Suggested Templates
                </a>

        </li>
            <li>
                <a title="Get  storefront slider widget ready to use on your storefront" href="<?php print site_url('adminpanel/oauth_providers'); ?>">
                    <i class="icon-chevron-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp;<?php print $this->lang->line('oauth_providers'); ?>
                </a>
            </li>
            <li>
                <a title="Get  storefront slider widget ready to use on your storefront" href="<?php print site_url('adminpanel/backup_export'); ?>">
                    <i class="icon-chevron-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp;<?php print $this->lang->line('backup_and_export'); ?>
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
<div class="navigation-options">
<div id="header">

      <div class="logo">

        <h2>Site Settings</h2> 

      </div>

      <div class="icon-option"> </div>

      <div class="clear"></div>

    </div> 
    <div class="main-layout" id="main">

        <div id="content">
        


    <?php $this->load->view('generic/flash_error'); ?>



    <?php print form_open('adminpanel/site_settings/update_settings', array('id' => 'settings_form')) ."\r\n"; ?>
<h4 class="widgettitle nomargin shadowed"> General settings</h4>

                <div class="widgetcontent bordered shadowed nopadding"> 
                <div class="stdform stdform2">




    <p class="stdformbutton">
     <input type="submit" name="site_settings_submit_top" value="Save all settings" class="btn  btn-primary message_cleanup">
</p>
<p>
<span>
<label for="site_title">Site title
<small >The site title appears in the title bar as it is used in the &lt;title&gt; tag. Can be a maximum of 60 characters long.</small>
</label>
</span>
<span class="field">
<input type="text" name="site_title" id="site_title" class="input-xxlarge" value="<?php print Settings_model::$db_config['site_title']; ?>">
</span>
</p>
<p>
<span>
    <label for="disable_all" class="inline">Disable whole application
        <small>Deny access to all pages, both public and private. The main administrator account will still be able to log in. All pages will be inaccessible except for the login page.</small>
    </label>
</span>
<span class="field">
<input type="checkbox" name="disable_all" id="disable_all" value="accept"<?php print (Settings_model::$db_config['disable_all'] == 1 ? ' checked="checked"' : ""); ?> class="label_checkbox">
</span>
</p>

<p>
<span>
    <label>Text to display when website is disabled:</label>
</span>
<span class="field">
<textarea name="site_disabled_text" id="site_disabled_text" class="input-xxlarge"><?php print Settings_model::$db_config['site_disabled_text']; ?></textarea>
</span>
</p>

<p>
<span>
<label for="login_enabled" class="inline">Disable login access
    <small>Turn off login ability for all members except the main administrator account.</small>
</label>
</span>
<span class="field">
<input type="checkbox" name="login_enabled" id="login_enabled" value="accept"<?php print (Settings_model::$db_config['login_enabled'] == 0 ? ' checked="checked"' : ""); ?> class="label_checkbox">
</span>
</p>
<p>
<span>
   <label for="register_enabled" class="inline">Disable member registration
    <small>Turn off the ability for new people to register on the site.</small>
   </label>
  
</span>
<span class="field">
<input type="checkbox" name="register_enabled" id="register_enabled" value="accept"<?php print (Settings_model::$db_config['registration_enabled'] == 0 ? ' checked="checked"' : ""); ?> class="label_checkbox">
</span>
</p>
 <p>
<span>
<label for="recaptcha_enabled" class="inline">Enable recaptcha
<small>Turn on recaptcha site-wide to better protect the membership module.</small>
</label>

</span>
<span class="field">
 <input type="checkbox" name="recaptcha_enabled" id="recaptcha_enabled" value="accept"<?php print (Settings_model::$db_config['recaptcha_enabled'] == 1 ? ' checked="checked"' : ""); ?> class="label_checkbox">
</span>
</p> 
<p>
<span>
  <label for="remember_me_enabled" class="inline">Enable remember me
  <small>Allow the remember me functionality to be used on the login page (based on cookies).</small>
  </label>

</span>
<span class="field">
<input type="checkbox" name="remember_me_enabled" id="remember_me_enabled" value="accept"<?php print (Settings_model::$db_config['remember_me_enabled'] == 1 ? ' checked="checked"' : ""); ?> class="label_checkbox">
</span>
</p>

<p>
<span>
        <label for="install_enabled" class="inline">Enable install page
        <small>Turn on the installation page, is used to recreate the main administrator account.</small>
        </label>

</span>
<span class="field">
<input type="checkbox" name="install_enabled" id="install_enabled" value="accept"<?php print (Settings_model::$db_config['install_enabled'] == 1 ? ' checked="checked"' : ""); ?> class="label_checkbox">
</span>
</p>
<p>
<span>
 <label for="members_per_page">Members per page
 <small>The number of members per page to display on the list members page.</small>
 </label>

</span>
<span class="field">
<input type="text" name="members_per_page" id="members_per_page" class="input-small" value="<?php print Settings_model::$db_config['members_per_page']; ?>" maxlength="3">
</span>
</p>

<p>
<span>
<label for="admin_email">Administrator e-mail account
<small>Primary application e-mail address to be used for sending e-mails - by default the same as the main administrator e-mail.</small>
</label>
</span>
<span class="field">
<input type="text" name="admin_email" id="admin_email" value="<?php print Settings_model::$db_config['admin_email_address']; ?>">
</span>
</p>
<p>
<span>
<label for="home_page">Post-login display page
<small>The page to display right after logging in - should be a controller that extends Private_Controller.</small>
</label>
</span>
<span class="field">
<?php print form_dropdown('home_page', $private_pages, Settings_model::$db_config['home_page']); ?>
</span>
</p>
<p>
<span>
        <label for="active_theme">Currently active theme
        <small>Allows for change of admin folder by selecting the corresponding theme folder name.</small>
        </label>

</span>
<span class="field">
 <input type="text" name="active_theme" id="active_theme" value="<?php print Settings_model::$db_config['active_theme']; ?>">
</span>
</p>

<p>
<span>
   <label for="login_attempts">ReCaptcha login attempts trigger
   <small>Shows a reCaptcha form after this many failed login attempts.</small>
   </label>

</span>
<span class="field">
<input type="text" name="login_attempts" id="login_attempts" class="input-small" value="<?php print Settings_model::$db_config['login_attempts']; ?>" maxlength="3">
</span>
</p>
<p>
<span>
 <label for="recaptcha_theme">ReCaptcha theme
 <small>Choose the preferred reCaptcha view style.</small> </label>

</span>
<span class="field">
<input type="text" name="recaptcha_theme" id="recaptcha_theme" value="<?php print Settings_model::$db_config['recaptcha_theme']; ?>">
</span>
</p>
<p>
<span>
  <label for="cookie_exp">Cookie expiration
  <small>Cookies set will receive this number in seconds as their future expiry time.</small>
  </label>

</span>
<span class="field">
  <input type="text" name="cookie_exp" id="cookie_exp" value="<?php print Settings_model::$db_config['cookie_expires']; ?>">
</span>
</p>

<p>
<span>
 <label for="password_exp">Password link expiration
<small>Make the reset password activation link expire in this many seconds in the future.</small>
 </label>
</span>
<span class="field">
  <input type="text" name="password_exp" id="password_exp" value="<?php print Settings_model::$db_config['password_link_expires']; ?>">
</span>
</p>
<p>
<span>
      <label for="activation_exp">Activation link expiration
<small>Make the account activation link expire in this many seconds in the future.</small></label>
</span>
<span class="field">
<input type="text" name="activation_exp" id="activation_exp" value="<?php print Settings_model::$db_config['activation_link_expires']; ?>">
</span>
</p>

<p class="stdformbutton">
     <input type="submit" name="site_settings_submit_top" value="Save all settings" class="btn  btn-primary message_cleanup">
</p>
   
                </div> </div>

<h4 class="widgettitle nomargin shadowed">Mail settings</h4>

                <div class="widgetcontent bordered shadowed nopadding"> 
                <div class="stdform stdform2">
<p>
<span>
 <label>Protocol</label>
<small></small>
</span>
<div class="field">
PHP mail() &raquo; 
 <input type="checkbox" name="email_protocol" value="1" class="label_checkbox"<?php print (Settings_model::$db_config['email_protocol'] == 1 ? ' checked="checked"' : ""); ?>><br>

            Sendmail &raquo; <input type="checkbox" name="email_protocol" value="2" class="label_checkbox"<?php print (Settings_model::$db_config['email_protocol'] == 2 ? ' checked="checked"' : ""); ?>><br>

            Gmail SMTP &raquo; <input type="checkbox" name="email_protocol" value="3" class="label_checkbox"<?php print (Settings_model::$db_config['email_protocol'] == 3 ? ' checked="checked"' : ""); ?>><br>
</div>
</p>
<p>
<span>
<label for="sendmail_path">Path to sendmail
<small>For most servers this is /usr/sbin/sendmail</small>
</label>

</span>
<span class="field">
<input type="text" name="sendmail_path" id="sendmail_path" value="<?php print Settings_model::$db_config['sendmail_path']; ?>">
</span>
</p>
<p>
<span>
   <label for="smtp_host">SMTP host</label>
<small></small>
</span>
<span class="field">
    <input type="text" name="smtp_host" id="smtp_host" value="<?php print Settings_model::$db_config['smtp_host']; ?>">
</span>
</p>
<!--<p>
<span>
<label for="smtp_user">SMTP user
<small>Will be encrypted before saving to database.</small>
</label>

</span>
<span class="field">
<input type="text" name="smtp_user" id="smtp_user" value="<?php //print $this->encrypt->decode(Settings_model::$db_config['smtp_user']); ?>">
</span>
</p>

<p>
<span>
    <label for="smtp_pass">SMTP password
<small>Will be encrypted before saving to database.</small>
    </label>
</span>
<span class="field">
 <input type="text" name="smtp_pass" id="smtp_pass" value="<?php //print $this->encrypt->decode(Settings_model::$db_config['smtp_pass']); ?>">
</span>
</p>-->


<p class="stdformbutton">
       <input type="submit" name="site_settings_submit_top" value="Save all settings" class="btn  btn-primary  message_cleanup">
</p>


                </div>
                                    </div>

    <?php

    print form_close() ."\r\n";



    print form_open('adminpanel/site_settings/clear_sessions', array('id' => 'sessions_form')) ."\r\n";

    if ($this->session->flashdata('sessions_message')) {

        print "<div id=\"error\" class=\"error_box\">". $this->session->flashdata('sessions_message') ."</div>\r\n";

    }

    ?>



    <h2>Clear your sessions</h2>





    <p>

        Can be used to gracefully make all members log out by removing their session data.

    </p>



    <p class="spacer">

        <input type="submit" name="sessions_submit" id="sessions_submit" value="Clear sessions" class="btn  btn-primary btn-inverse message_cleanup">

    </p>



<?php print form_close() ."\r\n";?>
        </div>
    </div>


</div>
<style>
    .stdform2 span.field, .stdform2 div.field {
    min-height: 80px;
}

    </style>
    <link rel="stylesheet" href="<?php print base_url(); ?>css/adminpanel/style.css" type="text/css" media="screen">