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

    <?php $this->load->view('generic/flash_error'); ?>



    <?php if (!empty($providers)) { ?>



    <p>

        <a href="<?php print base_url(); ?>adminpanel/oauth_new_provider" class="btn btn-primary">Add new</a>

    </p>



    <p><strong>The name must be exactly the same as the provider for example "google", not "google+".</strong></p>

<div id="mainbrol">

    <table  class="table table-hover">

        <thead>

        <tr>

            <th><?php print $this->lang->line('provider_name'); ?></th>

            <th><?php print $this->lang->line('consumer_key'); ?></th>

            <th><?php print $this->lang->line('consumer_secret'); ?></th>

            <th><?php print $this->lang->line('provider_enabled'); ?></th>

            <th></th>

            <th></th>

        </tr>

        </thead>

        <tbody>



        <?php foreach ($providers as $provider) { ?>



            <?php print form_open('adminpanel/oauth_providers/action') ."\r\n"; ?>



            <tr>

                <td><input type="text" name="name" value="<?php print $provider->name; ?>"></td>

                <td><input type="text" name="key" value="<?php print $provider->key; ?>"></td>

                <td><input type="text" name="secret" value="<?php print $provider->secret; ?>"></td>

                <td>

                    <select name="enabled">

                        <option value="1"<?php print ($provider->enabled == true ? ' selected="selected"' : ''); ?>>Yes</option>

                        <option value="0"<?php print ($provider->enabled == false ? ' selected="selected"' : ''); ?>>No</option>

                    </select>

                </td>

                <td>

                    <input type="submit" name="save" value="Save" class="message_cleanup btn btn-success">

                </td>

                <td>

                    <input type="submit" name="delete" value="<?php print $this->lang->line('provider_delete'); ?>" class="btn  btn-danger">

                    <input type="hidden" name="id" value="<?php print $provider->id; ?>">

                </td>

            </tr>



            <?php print form_close() ."\r\n"; ?>



        <?php } ?>



        </tbody>

    </table>

</div>
</div>
</div>
</div>
    <?php } ?>
<style>
    
.main-layout #content, .main-layout #of-nav {
    margin-top:0px!important;
}
.navigation-options #content {
      width: 100%!important;
      border-bottom: 1px solid #CCCCCC;
}
    </style>