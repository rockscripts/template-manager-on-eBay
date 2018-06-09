
<div class="top-buttons">
    <div class="btn btn-primary go_to_templates" title="Go back to my templates">
      <i class=" icon-backward"></i> Back
     </div>
    <div class="btn btn-primary button_preview_template" title="Preview">
      <i class="  icon-eye"></i> Preview
     </div>
       <div class="btn btn-primary button_generate_template" style="display: none;" title="Get listing design code with current settings">
      <i class=" icon-download"></i> Get Code
     </div>
</div>
<br>
<div class="navigation-options">   

<div id="header">

      <div class="logo">

        <h2><?=$widgettitle?></h2> 

      </div>

      <div class="icon-option"> </div>

      <div class="clear"></div>

    </div>
    <div id="main" class="banner">
        <div id="of-nav" style="min-height: 396px!important;">
            <ul>
             <!--   <li class="content-settings current">
                    Settings
                </li>-->
              <?php
                 if($action == "create_auction"):
                ?>
                 <li class="listing-title li_available"> 
                    Listing Title
                </li>
                <li class="listing-description li_available"> 
                    Listing Description
                </li>
                <li class="listing-pictures li_available"> 
                    Listing Pictures
                </li>
                 
                <?php
                endif;
                ?>
                <?php
                 if($action == "appearance"):
                ?>
                <li class="dynamic-categories li_available">
                   Dynamic Categories
                </li>
                <li class="menu-manager li_available">
                   Menu Manager
                </li>
                <li class="tabs li_available">
                   Tabs
                </li>
                 <li class="advertising li_available">
                   Advertising
                </li>
                 <li class="welcome-text-listing li_available"> 
                    Custom Rich Text
                </li>   
                <li class="popular-categories li_available">
                   Popular Categories
                </li>
                <li class="featured-listing li_available">
                    Featured Listings
                </li>
                 <li class="specials-listing li_available">
                    Special Discounts
                </li> 
                <li class="arrivals-listing li_available">
                    New Arrivals Listings
                </li>  
                 
                <li class="listing-slider li_available">
                   Image / Video Slider
                </li>
                <li class="listing-item-specifications-widget current">
                    Items Specifics Widget
                </li>
                 <li class="listing-layout li_available">
                   Layout & Widgets
                </li>
                <?php
                endif;
                ?>
            </ul>
        </div>
        <div>
             <div class="loader-image"></div>
             <div class="listing-code-content">
                 <div class="btn btn-primary close-listing-code close_button" title="Get listing design code with current settings">
                     Close&nbsp;&nbsp;&nbsp;<i class=" icon-close"></i> 
               </div>
                            <div class="alert warning " style="display:none;margin-top:10px;">
                           <span id="message_content1"  class="message_content">  </span>
                           </div>
                 <textarea id="listing_code"></textarea>
             </div>
             <div class="preview-template">
                  <div class="btn btn-primary close-listing-code close_button" title="Get listing design code with current settings">
                     Close&nbsp;&nbsp;&nbsp;<i class=" icon-close"></i> 
          
               </div>
                 <br><br>                 
                 <div id="preview-template-printed"></div>
             </div>
             <div title="Store Categories Synchronization" style="float:left;margin-left: 10px;" class="btn btn-primary button_import_update_categories ">
           <i class="icon-sync">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Sync Categories
          </div>
            <div id="content" >    
        </div>
        </div>
        
    </div> 
    <div class="save_bar"> 

	
        <button class="button submit-button reset-button" type="submit" id="of_reset">&nbsp;Options Reset&nbsp;</button>

	</div>
    
</div>
<!--Necessary Vars to work with listing design data-->
<input name="id_listing_design" type="hidden" value="<?= $id_listing_design?>"/> 
<input name="id_ebay_design" type="hidden" value="<?=$id_ebay_design?>"/> 
<input name="user_id" type="hidden" value="<?=$user_id?>"/> 


<script>
  jQuery(document).ready(function() 
  {
   jQuery(".showmenu").click();
        jQuery(".showmenu").trigger("click");
        jQuery(".showmenu").click();
       jQuery(".showmenu").fadeOut();
        jQuery(".logo_small").fadeIn();
      id_listing_design = jQuery("#id_listing_design").val();
      id_ebay_design = jQuery("#id_ebay_design").val();
      user_id= jQuery("#user_id").val();
      form_listing_pictures = ajax_load_listing_pictures_form();
      jQuery("#content").html(form_listing_pictures);
      set_current(jQuery("li.listing-pictures"));
   
          
    jQuery(".go_to_templates").click(function()
    {
        window.location.href = "http://"+window.location.hostname+"/private/home"; 
    });
     jQuery(".button_generate_template").click(function()
    {
     
     jQuery("#loader-image").fadeIn();
     listing_code =  generate_listing_design_code();
     if(Array.isArray(listing_code))
     {
         jQuery("#listing_code").fadeOut();
         jQuery("#message_content1").html(listing_code.toString());
         jQuery(".listing-code-content").fadeIn();
         jQuery("#loader-image").fadeOut();
         jQuery(".warning").fadeIn();
     }
     else
     {
     jQuery("#listing_code").val(listing_code);
     jQuery(".listing-code-content").fadeIn();
     jQuery("#loader-image").fadeOut();
     }
    auto_click();
    });
     jQuery(".close-listing-code").click(function()
    {
        jQuery("#loader-image").fadeIn();
       jQuery(".listing-code-content").fadeOut();
       jQuery("#loader-image").fadeOut();
       
    });
    jQuery(".button_preview_template").click(function()
    {
         jQuery("#loader-image").fadeIn();
         jQuery(".preview-template").fadeIn();
         auto_click();
         prevent_cache = Math.random()*Math.random();
        jQuery("#preview-template-printed").delay(3600).html("<iframe src='http://etemplate.com/store_design/listingdesign/preview_template?"+prevent_cache+"' width='100%' height='100%'></iframe>");
         jQuery("#loader-image").fadeOut();
    });
  
      jQuery(".close-listing-code").click(function()
    {
       jQuery("#loader-image").fadeIn();
       jQuery("#preview-template-printed").html("");
        jQuery(".preview-template").fadeOut();
       jQuery("#loader-image").fadeOut();
        
    });
     //-------------------Bug fix-------------------
     if ((jQuery.browser.mozilla!=true)) {
            var harray=Array();
         //   var toparray = Array();
            jQuery('.block-grid .listing-image-box').each(function(i) {
                if (i>2) {
                    var pindex =parseInt(i-3);
                    var newTop =parseInt(harray[pindex]);//+toparray[pindex]);
                    jQuery(this).css('margin-top','25%');
                         
                }
            });
        }
  
     
     
     
    });
</script>

<input type="hidden" id="video_provider"/>
<input type="hidden" id="description"/>
<input name="contentWordCount" type="hidden" value="250" />
 <?php
                 if($action == "appearance"):
                ?>
                <script>
                      jQuery(document).ready(function() 
                      {
                        jQuery("li.dynamic-categories").click();
                        jQuery(".button_generate_template").remove();
                      });
                </script>
                <?php    
                endif;
                ?>
                