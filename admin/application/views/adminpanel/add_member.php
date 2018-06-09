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



        <li>

            <a href="<?php print base_url(); ?>membership/<?php print ($this->session->userdata('logged_in') == true ? "logout" : "login") ?>">

                <?php print ($this->session->userdata('logged_in') == true ? "log out" : "log in") ?>

            </a>

        </li>

        <li style="float: right; padding-top: 10px;">

            <?php if ($this->session->userdata('logged_in') == true) { ?>

                Logged in as: <strong><?php print $this->session->userdata('username'); ?></strong>

            <?php }?>

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
            <li>
                <a title="<?php print $this->lang->line('oauth_providers'); ?>" href="<?php print site_url('adminpanel/oauth_providers'); ?>">
                    <i class="icon-chevron-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp;<?php print $this->lang->line('oauth_providers'); ?>
                </a>
            </li>
            <li>
                <a title="<?php print $this->lang->line('backup_and_export'); ?>" href="<?php print site_url('adminpanel/backup_export'); ?>">
                    <i class="icon-chevron-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp;<?php print $this->lang->line('backup_and_export'); ?>
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
<div class="navigation-options member">
<div id="header">

      <div class="logo">

        <h2><?php print $this->lang->line('add_member'); ?></h2> 

      </div>

      <div class="icon-option"> </div>

      <div class="clear"></div>

    </div> 
    <div class="main-layout" id="main">

        <div id="content">

<h4 class="widgettitle nomargin shadowed">Add Member</h4>

                <div class="widgetcontent bordered shadowed nopadding"> 
                <div class="stdform stdform2">


    <?php $this->load->view('generic/flash_error'); ?>



    <?php print form_open('adminpanel/add_member/add', array('id' => 'add_member_form')) ."\r\n"; ?>

<p>
<span>
<label for="first_name"><?php print $this->lang->line('first_name'); ?></label>
</span>
<span class="field">
<input type="text" name="first_name" id="first_name" value="<?php print $this->session->flashdata('first_name'); ?>"/>
</span>
</p>
<p>
<span>
<label for="last_name"><?php print $this->lang->line('last_name'); ?></label>
</span>
<span class="field">
<input type="text" name="last_name" id="last_name" value="<?php print $this->session->flashdata('last_name'); ?>">
</span>
</p>

<p>
<span>
<label for="email"><?php print $this->lang->line('email_address'); ?></label>
</span>
<span class="field">
 <input type="text" name="email" id="email" value="<?php print $this->session->flashdata('email'); ?>">
</span>
</p>

<p>
<span>
<label for="reg_username"><?php print $this->lang->line('username'); ?></label>
</span>
<span class="field">
<input type="text" name="username" id="reg_username" value="<?php print $this->session->flashdata('username'); ?>">
</span>
</p>


    <div id="email_valid"></div>

    <div id="email_taken"></div>

    <div id="username_valid"></div>

    <div id="username_taken"></div>

    <div id="username_length"></div>

<p>
<span>
 <label for="reg_password"><?php print $this->lang->line('password'); ?></label>
</span>
<span class="field">
<input type="password" name="password" id="reg_password">
</span>
</p>


<p>
<span>
 <label for="password_confirm"><?php print $this->lang->line('confirm_password'); ?></label>
</span>
<span class="field">
<input type="password" name="password_confirm" id="password_confirm">
</span>
</p>


<p class="stdformbutton">
     <input type="submit" name="membership_submit" id="membership_submit" value="<?php print $this->lang->line('add_member'); ?>" class="btn  btn-primary"/>
</p>


</div></div></div></div>

    <?php print form_close() ."\r\n"; ?>
    </div>
<style>
    
.main-layout #content, .main-layout #of-nav {
    margin-top:0px!important;
}
.navigation-options #content {
      width: 100%!important;
      border-bottom: 1px solid #CCCCCC;
}
    </style>