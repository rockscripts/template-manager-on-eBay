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
</div>