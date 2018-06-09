<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?><div class="jumbotron masthead">    <div class="container">         <h1><img src="<?php
print base_url();
?>themes/katniss/img/logo.gif"></h1>        <p>Welcome to Storefront and listing template design manager on eBay</p>    
</div></div><div class="container">   
 <ul class="nav nav-tabs">        
 <li <?php print($this->uri->segment('2') == "login" ? ' class="active"' : '');?>>            
 <a href="<?php print base_url();?>">
 <?php print $this->lang->line('login');?>
 </a>        
 </li> 

 <li <?php print($this->uri->segment('2') == "register" ? ' class="active"' : '');?>>            
 <a href="<?php print base_url();?>membership/register">
 <?php print $this->lang->line('create_account');?>
 </a>        
 </li> 

<li <?php
print($this->uri->segment('2') == "forgot_password" ? ' class="active"' : '');
?>>            <a href="<?php
print base_url();
?>membership/forgot_password"><?php
print $this->lang->line('forgot_password');
?></a>        </li>        <li <?php
print($this->uri->segment('2') == "forgot_username" ? ' class="active"' : '');
?>>            <a href="<?php
print base_url();
?>membership/forgot_username"><?php
print $this->lang->line('forgot_username');
?></a>        </li>        <li <?php
print($this->uri->segment('2') == "resend_activation" ? ' class="active"' : '');
?>>            <a href="<?php
print base_url();
?>membership/resend_activation"><?php
print $this->lang->line('resend_activation');
?></a>        </li>    </ul></div>