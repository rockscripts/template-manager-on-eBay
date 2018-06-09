
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
              
                <li class="store-logo li_available"> 
                    Store Logo
                </li>
                <li class="background-settings li_available"> 
                    Background
                </li>  
                <li class="background-header li_available"> 
                    Header Background
                </li>
                <li class="google-fonts li_available"> 
                    Google fonts
                </li>
                <li class="front-design-options li_available"> 
                    Front Design Options
                </li> 
                <li class="listing-design-options li_available"> 
                    Listing Design Options
                </li> 
               <li class="reinstall-store-front li_available"> 
                    Re-install Storefront 
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
      form_store_logo = ajax_load_store_logo_form();
      jQuery("#content").html(form_store_logo);
      set_current(jQuery("li.store-logo"));
   
    jQuery(".go_to_templates").click(function()
    {
       window.location.href = "http://"+window.location.hostname+"/private/home"; 
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
<script>
   jQuery(document).on("click",".submit_authorization",function()
   {
       jQuery(".alert").fadeOut();
       password = jQuery("#password").val();
       if(password == "")
       {
        show_error_message("password field is empty invalid.");   
        jQuery("#popup_message .alert").html(jQuery(".widgetcontent .alert").html());
        jQuery("#popup_message .alert").fadeIn();
       }       
       else
       {
          
         authorized =  check_authorization(password);
         if(authorized=="true")
         {
             reinstall_store_front(function(response)
             {
              result = call_reinstall_store_front(response); 
              show_successfull_message(result.message);
              jQuery("#popup_message .alert").html(jQuery(".widgetcontent .alert").html());
              jQuery("#password").remove();
              jQuery("label").remove();
              jQuery(".submit_authorization").remove();
              jQuery("#close_dialog").text("Close");
              jQuery("#popup_message .alert").fadeIn();
             });
         }
         else
         {
             show_error_message("password typed was invalid.");
             jQuery("#popup_message .alert").html(jQuery(".widgetcontent .alert").html());
             jQuery("#popup_message .alert").fadeIn();
         }
          
       }
       
   });
    jQuery(document).on("click",".close_dialog",function()
    {
        remove_dialog_simple();
        jQuery(".alert").fadeOut();
        jQuery(".loader-image").fadeOut();
    });
  </script>
<input type="hidden" id="video_provider"/>
<input type="hidden" id="description"/>
<input name="contentWordCount" type="hidden" value="250" />