
	<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>    <h1 class="page-title">Member detail</h1>    <?php
$this->load->view('generic/flash_error');
?>    <h2>        <?php
print $this->lang->line('viewing_member');
?>: <strong><?php
print $member->username;
?></strong>    </h2>    <p>        <span class="form_subtext"><?php
print $this->lang->line('last_login');
?>:</span>        <?php
print $member->last_login;
?>    </p>    <p>        <span class="form_subtext"><?php
print $this->lang->line('date_registered');
?>:</span>        <?php
print $member->date_registered;
?>    </p>    <?php
print form_open('adminpanel/member_detail/save') . "\r\n";
?>    <p>        <label for="username"><?php
print $this->lang->line('username');
?></label>        <input type="text" name="username" id="username" value="<?php
print $member->username;
?>" data-toggle="tooltip" data-original-title="<?php
print $this->lang->line('username_requirements');
?>" class="tooltip_target">    </p>    <p>        <label for="email"><?php
print $this->lang->line('email_address');
?></label>        <input type="text" name="email" id="email" value="<?php
print $member->email;
?>" data-toggle="tooltip" data-original-title="<?php
print $this->lang->line('email_requirements');
?>" class="tooltip_target">    </p>    <p>        <label for="first_name"><?php
print $this->lang->line('first_name');
?></label>        <input type="text" name="first_name" id="first_name" value="<?php
print $member->first_name;
?>" data-toggle="tooltip" data-original-title="<?php
print $this->lang->line('first_name_requirements');
?>" class="tooltip_target">    </p>    <p>        <label for="last_name"><?php
print $this->lang->line('last_name');
?></label>        <input type="text" name="last_name" id="last_name" value="<?php
print $member->last_name;
?>" data-toggle="tooltip" data-original-title="<?php
print $this->lang->line('last_name_requirements');
?>" class="tooltip_target">    </p>    <p>        <label for="role"><?php
print $this->lang->line('role');
?></label>        <?php
if (!empty($roles)) {
?>            <select name="role" id="role">                <?php
    foreach ($roles as $role) {
?>                    <option value="<?php
        print $role->id;
?>"<?php
        print($role->id == $member->role_id ? ' selected="selected"' : '');
?>><?php
        print $role->name;
?></option>                <?php
    }
?>            </select>        <?php
}
?>    </p>    <p>        <label for="banned"><?php
print $this->lang->line('banned');
?>?</label>        <select name="banned" id="banned">            <option value="0"<?php
print($member->banned == false ? ' selected="selected"' : '');
?>>No</option>            <option value="1"<?php
print($member->banned == true ? ' selected="selected"' : '');
?>>Yes</option>        </select>    </p>    <p>        <label for="active"><?php
print $this->lang->line('activated');
?>?</label>        <select name="active" id="active">            <option value="1"<?php
print($member->active == true ? ' selected="selected"' : '');
?>>Yes</option>            <option value="0"<?php
print($member->active == false ? ' selected="selected"' : '');
?>>No</option>        </select>    </p>    <p>        <label for="new_password"><?php
print $this->lang->line('new_password');
?></label>        <input type="password" name="new_password" id="new_password" data-toggle="tooltip" data-original-title="<?php
print $this->lang->line('password_requirements');
?>" class="tooltip_target">    </p>    <p>        <label for="send_copy" class="inline"><?php
print $this->lang->line('send_copy');
?></label>        <input type="checkbox" name="send_copy" id="send_copy" value="accept" checked="checked" class="label_checkbox">    </p>    <p>        <input type="submit" value="<?php
print $this->lang->line('save_member_data');
?>" class="btn btn-inverse">        <input type="hidden" name="id" value="<?php
print $member->id;
?>">    </p>    <?php
print form_close() . "\r\n";
?><style>    .main-layout #content, .main-layout #of-nav {    margin-top:0px!important;}.navigation-options #content {      width: 100%!important;      border-bottom: 1px solid #CCCCCC;}    </style>
Download Formatting took: 688 ms
PHP Formatter made by Spark Labs  
Copyright Gerben van Veenendaal  
