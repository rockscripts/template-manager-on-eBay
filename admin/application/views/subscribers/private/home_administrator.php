<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="container" style="margin-left: 0px;">

    <ul class="nav nav-tabs">

        <li <?php print ($this->uri->segment('2') == "home" ? ' class="active"' : ''); ?>>

            <a href="<?php print base_url(); ?>private/home">Home</a>

        </li>





        <li <?php print ($this->uri->segment('2') == "profile" ? ' class="active"' : ''); ?>>

            <a href="<?php print site_url('private/'. ($this->session->userdata('is_oauth') == true ? "oauth_" : "") .'profile'); ?>" title="edit profile"><?php print $this->lang->line('my_profile'); ?></a>

        </li>





        <li>

            <a href="<?php print base_url(); ?>adminpanel/site_settings">Adminpanel</a>

        </li>




        <li style="float: right; padding-top: 10px;">

            <?php if ($this->session->userdata('logged_in') == true) { ?>

            Logged in as: <strong><?php print $this->session->userdata('username'); ?></strong>

            <?php }?>

        </li>

    </ul>

</div>


<div>

    <?php $this->load->view('generic/flash_error'); ?>

</div>



<div>

    <h2 class="h2-title">
        <?php print $welcome; ?>
    </h2>
    <p>
  
    <div class="widgetcontent">
        <h4 class="widgettitle nomargin shadowed">Page Views | Visits Statistics</h4>
        <div class="widgetcontent bordered shadowed nopadding">
            <div class="inner">
                 <div role="main">

    <!-- <h1>Current <span id="current-viewing">x</span> people view this site</h1> -->

    <img id="galoading" src="<?= base_url() ?>/private/img/loading.gif" alt="loading..." />

    <div id="results">
        <div id="graph" style="min-width: 400px; height: 400px; margin: 0 auto">
            <a href="http://www.google.com/intl/es/analytics/" target="_blank">
                <img src="<?= base_url() ?>images/analitycs-sign-in.jpg"/>
            </a>
        </div>

    </div>

  </div>

            </div>
        </div>
    </div>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->

  <script>window.jQuery || document.write('<script src="<?= base_url() ?>/private/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
  <script src="https://apis.google.com/js/client.js?onload=load"></script>

  <!-- scripts concatenated and minified via build script -->
  <script src="<?= base_url() ?>/private/js/jquery.sparkline.min.js"></script>
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script src="http://code.highcharts.com/modules/exporting.js"></script>
  <script src="<?= base_url() ?>/private/js/plugins.js"></script>
  <script src="<?= base_url() ?>/private/js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','(UA-48248509-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

    </p>
  
    

</div>