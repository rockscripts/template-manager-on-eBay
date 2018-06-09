<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div id="oauth_container" class="center text-center">

    <div class="row-fluid">
        <div class="span3"><a href="<?php print base_url(); ?>membership/auth/oauth2/facebook" class="facebook"></a></div>
        <div class="span3"><a href="<?php print base_url(); ?>membership/auth/oauth/twitter" class="twitter"></a></div>
        <div class="span3"><a href="<?php print base_url(); ?>membership/auth/oauth2/google" class="google"></a></div>
        <div class="span3"><a href="<?php print base_url(); ?>membership/auth/oauth/linkedin" class="linkedin"></a></div>
    </div>

    <div>
        <a id="regular_login" class="btn" href="javascript:">
            <?php
            print $this->uri->segment('2') == "register" ? "Create a new account with us" : "Regular login";
            ?>
        </a>
    </div>

</div>