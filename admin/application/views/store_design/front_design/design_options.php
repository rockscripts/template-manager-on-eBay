
<div class="top-buttons">
    <div class="btn btn-primary go_to_templates">
      <i class=" icon-backward"></i> Back
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
        <div id="of-nav">
            <ul>
              
                <li class="menu-manager-home li_available"> 
                    Menu Manager
                </li>
                 <li class="listing-slider-home li_available">
                    Image / Video Slider
                </li>
                <li class="welcome-text-front li_available"> 
                    Custom Rich Text
                </li>                                                
                 <li class="advertising-home li_available">
                   Advertising
                </li>
                <li class="popular-categories-home li_available">
                   Popular Categories
                </li>
                <li class="featured-home li_available">
                    Featured Listings
                </li>    
                <li class="specials-home li_available">
                    Special Discounts
                </li> 
                <li class="arrivals-home li_available">
                    New Arrivals Listings
                </li>   
                 
                <li class="tabs-home li_available">
                   Tabs
                </li>
                  <li class="listing-social-media current">
                    Social Media
                </li>
                </li>
                  <li class="front-item-specifications-widget current">
                    Items Specifics Widget
                </li>
               <li class="front-layout li_available">
                   Layout &amp; Widgets
                </li>
                
            </ul>
        </div>
        <div>
             <div class="loader-image"></div>
        
            <div id="content" >
            
        </div>
        </div>
        
    </div> 
    <div class="save_bar"> 

	
        <button class="button submit-button reset-button" type="submit" id="of_reset">&nbsp;Options Reset&nbsp;</button>

	</div>
    
</div>
<!--Necessary Vars to work with listing design data-->
<input name="id_home_design" type="hidden" value="<?= $id_home_design?>"/> 
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
      id_home_design = jQuery("#id_home_design").val();
      id_ebay_design = jQuery("#id_ebay_design").val();
      user_id= jQuery("#user_id").val();
      jQuery(".menu-manager-home").click();
      set_current(jQuery("li.menu-manager-home"));
   
    jQuery(".go_to_templates").click(function()
    {
       window.location.href = "http://"+window.location.hostname+"/designmanager/private/home"; 
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