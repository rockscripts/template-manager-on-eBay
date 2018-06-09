<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>    
<h1 class="text-center page-title">        
    <?php print $this->lang->line('login'); ?>    
</h1>    
<div>       
 <?php        if (Settings_model::$db_config['login_enabled'] == 0)        {            ?>            
    <div id="error" class="alert"><?php print $this->lang->line('login_disabled') ?>
    </div>        <?php        }else{            $this->load->view('generic/flash_error');        }        ?>   
</div>    <?php $this->load->view('themes/bootstrap/membership/oauth'); ?>    
    <?php print form_open('membership/login/validate', 'id="login_form" class="regular_form"') ."\r\n"; ?>    
<div id="oauth_login_wrapper" class="center text-center">        
    <a id="oauth_login" class="btn" href="javascript:">Social logon</a>    
</div>  
   <div class="alert1" style="display:none;">
<?php
if(isset($_GET["user_found"]) == "false")
echo "Unfortunately, you have not a plan with us, please create an account at <a href='http://rockscripts.org/my-account/'>rockscripts.org</a>, get an <a href='http://rockscripts.org/shop/advanced/'>Advance store design</a> plan, come back here and login with your Rockscripts username and password.";
?>
       <?php
if(isset($_GET["password_match"]) == "false")
echo "Password does not match.<br><a target='_blank' href='http://rockscripts.org/my-account/lost-password/'>Lost your password?</a>";
?>
              <?php
if(isset($_GET["need_renew"]) == "false")
echo "Unfortunately, you have not an active plan with us, please, renew one or get an <a href='http://rockscripts.org/shop/advanced/'>Advance store design</a> plan, come back here and login with your Rockscripts username and password.";
?>
    </div>
<label for="login_username"><?php print $this->lang->line('username'); ?></label>   
<input type="text" name="username" id="login_username" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('username_requirements'); ?>" class="tooltip_target">    <label for="login_password"><?php print $this->lang->line('password'); ?></label>    
<input type="password" name="password" id="login_password" data-toggle="tooltip" data-original-title="<?php print $this->lang->line('password_requirements'); ?>" class="tooltip_target"><?php if (Settings_model::$db_config['remember_me_enabled'] == true) {?>    <p>   
    <label for="remember_me"><?php print $this->lang->line('remember_me'); ?></label> 
   <?php print form_checkbox(array('name' => 'remember_me', 'id' =>'remember_me', 'value' => 'accept', 'checked' => FALSE)); ?>    </p><?php } ?>  
  <?php    if ($this->session->userdata('login_attempts') > 5) {        if (Settings_model::$db_config['recaptcha_enabled'] == true) {            print $this->recaptcha->get_html();        }    }    ?>    <input type="submit" name="submit" id="login_submit" value="<?php print $this->lang->line('login'); ?>" class="btn btn-inverse">    <span class="loading"><img src="<?php print base_url(); ?>images/loaderB16.gif" alt=""></span>    
      <?php print form_close() ."\r\n"; ?>
  <style>
      .nav-tabs
      {
        
      }
     
.jumbotron {
    border-bottom: 2px solid #CCCCCC;
}

.page-title {
    color: #FF0000;
    font-family: 'Oswald',sans-serif;
    font-size: 49px;
    letter-spacing: -1px;
    line-height: 50px;
    margin: 4px 0 41px;
}
footer{
    height: 0px!important;
    padding: 0px!important;
}
      </style>
      <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script>
        //  $(".nav-tabs").remove();
          <?php
          if(isset($_GET["need_renew"]) or isset($_GET["password_match"]) or isset($_GET["need_renew"]) ):
          ?>
             $(".alert1").fadeIn();  
              <?php
        endif;
          ?>
      </script>