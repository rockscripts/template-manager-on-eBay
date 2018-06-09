<div id="private_nav">
<ul id="navigation">
    <li><a href="<?php print site_url('private/home'); ?>" title="Home Page"><?php print $this->lang->line('home'); ?></a></li>
    <li><a href="<?php print site_url('private/profile'); ?>" title="edit profile"><?php print $this->lang->line('my_profile'); ?></a></li>
    <li><a href="<?php print site_url('adminpanel'); ?>" title="admin panel"><?php print $this->lang->line('admin_panel'); ?></a></li>
</ul>
<p class="floatright">
<?php print $this->lang->line('logged_in_as'); ?>:
<strong><?php print $this->session->userdata('username'); ?></strong> -
<a href="<?php print site_url('membership/logout'); ?>" title="log out"><?php print $this->lang->line('logout'); ?></a>
    </p>
</div>