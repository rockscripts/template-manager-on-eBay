<div class="alert alert-success  hide">
    <button type="button" class="close" data-dismiss="alert">x</button>
 <span id="message_content" class="message_content"> 
    <?php 
    if(isset($message))
    {
       echo  $message ;
    }
    ?>
 </span>
</div>  
<div class="webstores-index">
 <div class="top-buttons">
        <div style="border-radius: 10px;" class="btn-group action-with-selected-button">
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Synchronize...
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li>
                <a title="Synchronize Categories"  href="<?= base_url() ?>/webstores/webstore/synchronize_categories_view" class="synchronize_categories">
                    <i class="icon-categories">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp; Categories
                </a>
            </li>
            <li>
                <a title="Synchronize Listings"  href="<?= base_url() ?>/webstores/webstore/synchronize_listings_view" class="synchronize_listings">
                    <i class="icon-listings">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                    &nbsp; Listings
                </a>
            </li>            
        </ul>
    </div>
</div>
    <br>
 <ul class="widgeticons row-fluid">
    <li class="one_fifth"><a target="_blank" href="http://<?=$_SERVER['HTTP_HOST']?>/webstores/<?=$nice_store_name?>"><img alt="" src="<?= base_url() ?>themes/katniss/img/webstore-ebay.jpg" class=""><span>Webstore View</span></a></li>
    <!--<li class="one_fifth"><a href="#"><img alt="" src="<?= base_url() ?>themes/katniss/img/RSS_feed_icon.jpg" class=""><span>RSS (g-datafeed)</span></a></li>
    <li class="one_fifth"><a href="#"><img alt="" src="<?= base_url() ?>themes/katniss/img/google-trust-store.jpg" class=""><span>Google trust store</span></a></li>-->
    <li class="one_fifth"><a href="<?= base_url() ?>webstores/blogger"><img alt="" src="<?= base_url() ?>themes/katniss/img/blogger-icon.png" class=""><span>Blog</span></a></li>
    <li class="one_fifth last"><a href="javascript:void(0);" class="cron-job-button"><img alt="" src="<?= base_url() ?>themes/katniss/img/cron-job-icon.jpg" class=""><span>Cron jobs</span></a></li>
                        	
</div>
<script>
jQuery(document).ready(function() 
{
 jQuery(document).on("click",".cron-job-button",function()
 {
    show_successfull_message("This application updates all webstore and blog listings daily at midnight"); 
 });
});
</script>
<?php 
    if(isset($message))
    {
     ?>
<script>
jQuery(document).ready(function() 
{
 jQuery(".alert").removeClass("hide");
});
</script>
<?php
    }
    ?>