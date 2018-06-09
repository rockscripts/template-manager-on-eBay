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



      

        <li style="float: right; padding-top: 10px;">

            <?php if ($this->session->userdata('logged_in') == true) { ?>

                Logged in as: <strong><?php print $this->session->userdata('username'); ?></strong>

            <?php }?>

        </li>

    </ul>

</div>
<div class="navigation-options member">
<div id="header">

      <div class="logo">

        <h2><?php print $this->lang->line('add_oauth_provider'); ?></h2> 

      </div>

      <div class="icon-option"> </div>

      <div class="clear"></div>

    </div> 
     <div class="main-layout" id="main">
       <div id="of-nav" class="clean">
        <ul class="nav nav-list affix bs-docs-sidenav">

        <li><a href="<?php print site_url('adminpanel/site_settings'); ?>"><i class="icon-chevron-right"></i> <?php print $this->lang->line('site_settings'); ?></a></li>

        <li><a href="<?php print site_url('adminpanel/list_members'); ?>"><i class="icon-chevron-right"></i> <?php print $this->lang->line('list_members_title'); ?></a></li>

        <li><a href="<?php print site_url('adminpanel/add_member'); ?>"><i class="icon-chevron-right"></i> <?php print $this->lang->line('add_member'); ?></a></li>

        <li><a href="<?php print site_url('adminpanel/oauth_providers'); ?>"><i class="icon-chevron-right"></i> <?php print $this->lang->line('oauth_providers'); ?></a></li>

        <li><a href="<?php print site_url('adminpanel/backup_export'); ?>"><i class="icon-chevron-right"></i> <?php print $this->lang->line('backup_and_export'); ?></a></li>

    </ul>
         
        </div>
         <div id="content">
         <h4 class="widgettitle nomargin shadowed">New</h4>

                <div class="widgetcontent bordered shadowed nopadding"> 
                <div class="stdform stdform2">                          
    <?php $this->load->view('generic/flash_error'); ?>



<?php print form_open('adminpanel/oauth_new_provider/save', array('id' => 'oauth_new_provider_form'))?>
<p>
<span>
 <label for="name"><?php print $this->lang->line('provider_name'); ?></label>
</span>
<span class="field">
<input type="text" name="name" id="name" value="<?php print $this->session->flashdata('name'); ?>">
</span>
</p>
<p>
<span>
 <label for="key"><?php print $this->lang->line('consumer_key'); ?></label>
</span>
<span class="field">
 <input type="text" name="key" id="key" value="<?php print $this->session->flashdata('key'); ?>">
</span>
</p>

<p>
<span>
  <label for="secret"><?php print $this->lang->line('consumer_secret'); ?></label>
</span>
<span class="field">
 <input type="text" name="secret" id="secret" value="<?php print $this->session->flashdata('secret'); ?>">
</span>
</p>

<p>
<span>
<label for="enabled"><?php print $this->lang->line('provider_enabled'); ?>?</label>
</span>
<span class="field">
 <select name="enabled" id="enabled">

            <option value="1">Yes</option>

            <option value="0">No</option>

        </select>
</span>
</p>


<p class="stdformbutton">
      <input type="submit" value="<?php print $this->lang->line('add_provider'); ?>" class="btn  btn-primary message_cleanup">
</p>



<?php print form_close();?>
</div>
</div>
</div>
</div>
</div>