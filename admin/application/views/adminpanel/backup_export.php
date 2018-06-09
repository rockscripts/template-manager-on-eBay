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
<div class="navigation-options">
<div id="header">

      <div class="logo">

        <h2><?php print $this->lang->line('add_member'); ?></h2> 

      </div>

      <div class="icon-option"> </div>

      <div class="clear"></div>

    </div> 
    <div class="main-layout" id="main">
       

  <div id="content">
    <?php print form_open('adminpanel/backup_export/export_members', array('id' => 'export_members_form')) ."\r\n"; ?>

    <?php $this->load->view('generic/flash_error'); ?>



    <h2><?php print $this->lang->line('export_title'); ?></h2>



    <p>

        <span class="form_subtext">This e-mail will be sent to the admin e-mail entered in site settings.</span>

    </p>



    <p class="spacer">

        <input type="submit" name="export_submit" id="export_submit" value="Export memberlist" class="message_cleanup btn  btn-primary"/>

    </p>




    <?php print form_close();



    print form_open('adminpanel/backup_export/export_database', array('id' => 'export_database_form')) ?>



    <h2><?php print $this->lang->line('backup_title'); ?></h2>



    <p>

        <span class="form_subtext">This e-mail will be sent to the admin e-mail entered in site settings.</span>

        <span class="form_subtext">WARNING 1: for very large databases this might not be possible and you will have to export directly from the MySQL command line.</span>

        <span class="form_subtext">WARNING 2: you might want to take your MySQL server offline before backing up. Disable site login before doing this.</span>

    </p>



    <p class="spacer">

        <input type="submit" name="db_backup_submit" id="db_backup_submit" value="Export database" class="message_cleanup btn  btn-primary"/>

    </p>



    <?php print form_close() ."\r\n";?>
    </div>
    </div>
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
    <style>
    
.main-layout #content, .main-layout #of-nav {
    margin-top:0px!important;
}
.navigation-options #content {
      width: 100%!important;
      border-bottom: 1px solid #CCCCCC;
}
    </style>