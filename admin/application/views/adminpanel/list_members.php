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
     <div class="btn btn-primary button_back_advertising hide" style="width: 47px;">
          <i class="  icon-backward"></i> Back
     </div>    
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
   <div class="label label-info float-right">
        <?php print "Total rows: ". $total_rows; ?>
    </div>
</div>
 
</div>
<div class="navigation-options member">
<div id="header">

      <div class="logo">

        <h2>List members</h2> 

      </div>

      <div class="icon-option"> </div>

      <div class="clear"></div>

    </div> 
    <div class="main-layout" id="main">
      
        <div id="content">
    <?php $this->load->view('generic/flash_error'); ?>

    <?php print form_open('adminpanel/list_members/index/username/asc/post/0') ."\r\n"; ?>

<button type="button" class="btn" data-toggle="collapse" data-target="#search_wrapper">
    collapse search
</button>

    <div id="search_wrapper" class="container-fluid collapse">

        <h2>
            <?php print $this->lang->line('search_member'); ?>
        </h2>

        <div class="row-fluid">  

            <div class="span3">
                <label for="username"><?php print $this->lang->line('username'); ?></label>
                <input type="text" name="username" id="username">
            </div>

            <div class="span3">
                <label for="first_name"><?php print $this->lang->line('first_name'); ?></label>
                <input type="text" name="first_name" id="first_name">
            </div>

            <div class="span3">
                <label for="last_name"><?php print $this->lang->line('last_name'); ?></label>
                <input type="text" name="last_name" id="last_name">
            </div>

            <div class="span3">
                <label for="email"><?php print $this->lang->line('email_address'); ?></label>
                <input type="text" name="email" id="email">
            </div>

            <p>
                <input class type="submit" name="member_search_submit" id="member_search_submit" value="<?php print $this->lang->line('search_member'); ?>" class="btn btn-inverse">
            </p>

            <?php print form_close() ."\r\n"; ?>

        </div>
    </div>

 

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">

                <?php if (isset($members)) { ?>

                <?php print $this->pagination->create_links(); ?>

                <?php print form_open('adminpanel/list_members/mass_action/'. $offset .'/'. $order_by .'/'. $sort_order .'/'. $search, 'id="mass_action_form"') ."\r\n"; ?>
<br />
<div style="float:left; border-radius: 10px;" class="btn-group action-with-selected-button">
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">With Selected
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu drop-list-member-options">
            <li>
                <input type="submit" name="delete" id="delete" value="Delete" class="bootbox btn btn-danger" title="Are you sure you want to delete those members?">
            </li>
            <li>
                <input type="submit" name="unistall_on_ebay" id="unistall_on_ebay" value="Unistall" class="bootbox btn btn-danger" title="Are you sure you want to unistall those members?">
            </li>
           <!-- <li>
                <input type="submit" name="ban" id="ban" value="Ban" class="bootbox btn btn-warning" title="Are you sure you want to ban those members?">
            </li>
            <li>
                <input type="submit" name="unban" id="unban" value="Unban" class="bootbox btn btn-success" title="Are you sure you want to unban those members?">
            </li>
            <li>
                <input type="submit" name="activate" id="activate" value="Activate" class="bootbox btn btn-success" title="Are you sure you want to activate those members?">
            </li>
            <li>
                <input type="submit" name="deactivate" id="deactivate" value="Deactivate" class="bootbox btn btn-warning" title="Are you sure you want to deactivate those members?">
            </li>-->
        </ul>
    </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="list_button"><input type="checkbox" class="select_checkboxes"></th>
                        <th class="list_button"><a href="<?php print base_url() ."adminpanel/list_members/index/active/". ($order_by == "active" ? ($sort_order == "asc" ? "desc" : "asc" ) : "asc") ."/". $search ."/0"; ?>" <?php print ($order_by == "active" ? ($sort_order == "asc" ? 'class="icon-arrow-up"' : 'class="icon-arrow-down"' ) : ""); ?>><img src="<?php print base_url(); ?>images/application_form_add.png" title="active"></a></th>
                        <th class="list_button"><a href="<?php print base_url() ."adminpanel/list_members/index/banned/". ($order_by == "banned" ? ($sort_order == "asc" ? "desc" : "asc" ) : "asc") ."/". $search ."/0"; ?>" <?php print ($order_by == "banned" ? ($sort_order == "asc" ? 'class="icon-arrow-up"' : 'class="icon-arrow-down"' ) : ""); ?>><img src="<?php print base_url(); ?>images/lock_open.png" title="banned"></a></th>
                        <th class="list_button"><a href="<?php print base_url() ."adminpanel/list_members/index/role_id/". ($order_by == "role_id" ? ($sort_order == "asc" ? "desc" : "asc" ) : "asc") ."/". $search ."/0"; ?>" <?php print ($order_by == "role_id" ? ($sort_order == "asc" ? 'class="icon-arrow-up"' : 'class="icon-arrow-down"' ) : ""); ?>><img src="<?php print base_url(); ?>images/medal_gold_add.png" title="role"></a></a></th>
                        <th><a href="<?php print base_url() ."adminpanel/list_members/index/username/". ($order_by == "username" ? ($sort_order == "asc" ? "desc" : "asc" ) : "asc") ."/". $search ."/0"; ?>"><i class="<?php print ($order_by == "username" ? ($sort_order == "asc" ? "icon-arrow-up" : "icon-arrow-down icon-arrow-down" ) : ""); ?>"></i> username</a></th>
                        <th><a href="<?php print base_url() ."adminpanel/list_members/index/email/". ($order_by == "email" ? ($sort_order == "asc" ? "desc" : "asc" ) : "asc") ."/". $search ."/0"; ?>"><i class="<?php print ($order_by == "email" ? ($sort_order == "asc" ? "icon-arrow-up" : "icon-arrow-down" ) : ""); ?>"></i> email</a></th>
                        <th><a href="<?php print base_url() ."adminpanel/list_members/index/first_name/". ($order_by == "first_name" ? ($sort_order == "asc" ? "desc" : "asc" ) : "asc") ."/". $search ."/0"; ?>"><i class="<?php print ($order_by == "first_name" ? ($sort_order == "asc" ? "icon-arrow-up" : "icon-arrow-down" ) : ""); ?>"></i> first name</a></th>
                        <th><a href="<?php print base_url() ."adminpanel/list_members/index/last_name/". ($order_by == "last_name" ? ($sort_order == "asc" ? "desc" : "asc" ) : "asc") ."/". $search ."/0"; ?>"><i class="<?php print ($order_by == "last_name" ? ($sort_order == "asc" ? "icon-arrow-up" : "icon-arrow-down" ) : ""); ?>"></i> last name</a></th>
                        <th><a href="<?php print base_url() ."adminpanel/list_members/index/last_login/". ($order_by == "last_login" ? ($sort_order == "asc" ? "desc" : "asc" ) : "asc") ."/". $search ."/0"; ?>"><i class="<?php print ($order_by == "last_login" ? ($sort_order == "asc" ? "icon-arrow-up" : "icon-arrow-down" ) : ""); ?>"></i> last login</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($members->result() as $member):
                    ?>
                    <tr>
                        <td class="list_button"><?php print ($member->username != ADMINISTRATOR ? '<input type="checkbox" name="mass[]" value="'. $member->id .'" class="list_members_checkbox">' : ''); ?></td>
                        <td><a href="<?php print site_url('adminpanel/list_members/toggle_active/'. $member->id ."/". $member->username ."/". $offset .'/'. $order_by .'/'. $sort_order .'/'. $search .'/'. $member->active) ."\" class=\"message_cleanup ". ($member->active == true ? "is_active" : "not_active"); ?>" title="<?php print ($member->active == true ? "de" : ""); ?>activate account"></a></td>
                        <td><a href="<?php print site_url('adminpanel/list_members/toggle_ban/'. $member->id ."/". $member->username ."/". $offset .'/'. $order_by .'/'. $sort_order .'/'. $search .'/'. $member->banned) ."\" class=\"message_cleanup ". ($member->banned == true ? "banned" : "not_banned"); ?>" title="<?php print ($member->banned == true ? "un" : ""); ?>ban account"></a></td>
                        <td><a href="<?php print site_url(substr($member->role_name, 0, 1) == "a" ? "adminpanel/list_members/demote_member/" : "adminpanel/list_members/promote_member/") . "/". $member->id ."/". $member->username ."/". $offset .'/'. $order_by .'/'. $sort_order .'/'. $search; ?>" class="message_cleanup <?php print (strtolower(substr($member->role_name, 0, 1)) == "a" ? "demote" : "promote"); ?>"><?php print ucfirst(substr($member->role_name, 0, 1)); ?></a></td>
                        <td><a href="<?php print base_url(); ?>adminpanel/member_detail/<?php print $member->id; ?>"><?php print (isset($member->username) ? $member->username : "OAuth unfinished"); ?></a></td>
                        <td><?php print $member->email; ?></td>
                        <td><?php print $member->first_name; ?></td>
                        <td><?php print $member->last_name; ?></td>
                        <td><?php print $member->last_login; ?><a href="<?php print base_url(); ?>adminpanel/list_members/sign_in?username=<?=$member->username?>" id="sign_in_as"> <img src="<?php print base_url(); ?>themes/katniss/img/sign-in-icon.png" title="Sing in as this user"/></a></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

      
                <input type="hidden" name="mass_action" id="mass_action" value="">

                <?php print form_close() ."\r\n"; ?>

                <?php print $this->pagination->create_links(); ?>

                <?php }else{ ?>
                    <p>No results found.</p>
                <?php } ?>

            </div>
        </div></div></div>
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
    <script>
        jQuery(document).on("click","#mass_action_form input",function()
    {
        id= jQuery(this).attr("id");
        jQuery("#mass_action").val(id);
    });
    </script>