
jQuery(document).ready(function() 
{
    /*used to submit forms re-loading page*/
     jQuery(".custom_button").click(function()
  {
      form_id = jQuery(this).attr("rel");
      action = jQuery(this).attr("action");
      if(action=="delete")
      {
         var result = confirm("Are you sure?");
         if (result==true) 
          {
            jQuery("#"+form_id).submit();
            }                     
      }
      else
      jQuery("#"+form_id).submit();
  });
  jQuery("li.background-settings").click(function()
  {  
     jQuery(".alert").css("display","none");
     jQuery(".loader-image").fadeIn();
     form_store_background = ajax_load_store_background_form();
     jQuery("#content").html(form_store_background);
     set_current(this);
  });
   jQuery("li.background-header").click(function()
  {  
     jQuery(".alert").css("display","none");
     jQuery(".loader-image").fadeIn();
     form_store_header_background = ajax_load_store_header_background_form();
     jQuery("#content").html(form_store_header_background);
     set_current(this);
  });
     jQuery(".social-main-menu-item").click(function()
   {
		jQuery(".alert").css("display","none");
                jQuery(".pagetitle h1").text("Design Manager");
		jQuery(".loader-image").fadeIn();
		form= ajax_load_social_media_form();
		jQuery(".widgetcontent").html(form);
   });
    jQuery(".featured-main-menu-item").click(function()
  {
         jQuery(".pagetitle h1").text("Featured Listings");
        form = ajax_load_listing_featured_form("global");
        jQuery(".widgetcontent").html(form);  
        jQuery("#global_location").val("featured");                  
  });
   jQuery(".special-main-menu-item").click(function()
  {
        jQuery(".pagetitle h1").text("Special Discounts");
        form = ajax_load_listing_special_form("global");
        jQuery(".widgetcontent").html(form);  
        jQuery("#global_location").val("discounts");                  
  });
   jQuery(".popular-categories-main-menu-item").click(function()
  {
      jQuery("#global_location").val("popular_categories");
      form = ajax_popular_category_form("global");
      jQuery(".widgetcontent").html(form);
      jQuery(".pagetitle h1").text("Popular Categories");
      
  });
    jQuery(".new-arrivals-main-menu-item").click(function()
  {
      jQuery("#global_location").val("new_arrivals");
      form = ajax_load_listing_new_arrivals_form("global");
      jQuery(".widgetcontent").html(form);
      jQuery(".pagetitle h1").text("New Arrivals");            
  });
     jQuery("li.front-design-options").click(function()
  {  
     jQuery(".alert").css("display","none");
     jQuery(".loader-image").fadeIn();
     form_front_options = ajax_load_front_options_form();
     jQuery("#content").html(form_front_options);
     set_current(this);
  });
     jQuery("li.listing-design-options").click(function()
  {  
     jQuery(".alert").css("display","none");
     jQuery(".loader-image").fadeIn();
     form_listing_options = ajax_load_listing_options_form();
     jQuery("#content").html(form_listing_options);
     set_current(this);
  });
jQuery(document).on("click",".add_page",function()
{
    jQuery(".alert").fadeOut();
     jQuery(".add_page").fadeOut();
       jQuery(".sync_pages_button").fadeOut();
    jQuery(".loader-image").fadeIn();
     if(typeof CKEDITOR != "undefined")
      {
       delete CKEDITOR.instances['page_text']   
      }
   load_add_store_pages(false,function(response)
   {
       form = callback_load_add_store_pages(response);
       jQuery(".store-pages-container").html(form);
      
       jQuery(".button_back").removeClass("hide");
       jQuery(".loader-image").fadeOut();
   });
});
     jQuery(".store-pages-main-menu-item").click(function()
  {
       jQuery(".loader-image").fadeIn();
      jQuery("#global_location").val("store_pages");
       load_store_pages(function(response)
        {
            table = callback_load_store_pages(response)
            jQuery(".widgetcontent").html(table);
            jQuery(".pagetitle h1").text("Store Pages");
             jQuery(".loader-image").fadeOut();
        });           
  }); 
    /*used to submit forms re-loading page*/

     
  jQuery(".go_back").click(function()
  {
      goBack();
  });

   jQuery("#save_featured").click(function()
   {
        jQuery("#message_content").html("");
       title = jQuery("#title").val();
        link  =  jQuery("#link").val();
           price =  jQuery("#price").val();
           
           if(title!="")
           {
               if(checkprice(price))
               {
                 if (validate_link( link ) )
                {
                  if(jQuery('#files').find('div').size() >0)
                    {
                             jQuery(".alert").addClass("hide");
                             jQuery("#files").find("button").first().trigger('click');
                    }
                else
                {
                    jQuery(".alert").removeClass("hide");
                     jQuery("#message_content").append( "Please select listing image." )  ;
                }   
                }
                else
                {
                   show_error_message("Listing link is invalid.") ;
                   jQuery("#link").css("border","1px  solid red")    ; 
                }
                   
               }
               else
               {
                   
                      jQuery("#message_content").append( "Listing price is invalid." )  ;
                      jQuery("#price").css("border","1px  solid red");
                      jQuery(".alert").removeClass("hide");
               }
           }
           else
           {
           jQuery("#message_content").html(" ");
           jQuery("#message_content").append( "Listing title is empty." )  ;
           jQuery("#title").css("border","1px  solid red")
            if(!checkprice(price))
            {
               jQuery("#message_content").append( "<br>Listing price is invalid." )  ; 
               jQuery("#price").css("border","1px  solid red");
            }   
              if (!validate_link( link ) )
                {
                   show_error_message("<br>Listing link is invalid.") ;
                   jQuery("#link").css("border","1px  solid red")    ;   
                }
           jQuery(".alert").removeClass("hide");
   
           }
      
     
   });
     
   /*Edit Featured Listing*/
    jQuery("#update_featured").click(function()
   {
       jQuery("#message_content").html("");
       id_featured_listing = jQuery("#id_featured_listing").val();
       title = jQuery("#title").val();
       price =  jQuery("#price").val();
        link  =  jQuery("#link").val();
       domain =  jQuery("#domain").val();   
           if(title!="")
           {
               if(checkprice(price))
               {
                      if (validate_link( link ) )
                {
                      if(jQuery('#files').find('div').size() >0)
                    {
                             jQuery(".alert").addClass("hide");
                             jQuery("#files").find("button").first().trigger('click');
                    }
                    else
                    {
                     jQuery(".alert").addClass("hide");
                     image_url = "not-defined";
                    // alert("Was here!");
                    // updateFeaturedListing(id_featured_listing,title,price,image_url,domain,action)
                     updateFeaturedListing(id_featured_listing,title,price,link,image_url,domain,"update_featured_listing");
                     window.location.href = domain+"/store_design/featured/load_featured_listing/?id="+id_featured_listing;
                    }
                }
                 else
                {
                   show_error_message("Listing link is invalid.") ;
                   jQuery("#link").css("border","1px  solid red")    ; 
                }
                  
               }
               else
               {                   
                      jQuery("#message_content").append( "Listing price is invalid." )  ;
                      jQuery("#price").css("border","1px  solid red");
                      jQuery(".alert").removeClass("hide");
               }
           }
           else
           {
           jQuery("#message_content").html(" ");
           jQuery("#message_content").append( "Listing title is empty." )  ;
           jQuery("#title").css("border","1px  solid red")
            if(!checkprice(price))
            {
               jQuery("#message_content").append( "<br>Listing price is invalid." )  ; 
               jQuery("#price").css("border","1px  solid red");
            }               
           jQuery(".alert").removeClass("hide");   
           }
      
       
   });
           
});

jQuery(document).on("click",".sync_pages_button",function()
{
     jQuery(".loader-image").fadeIn();
     sync_store_pages();
     jQuery(".loader-image").fadeOut();  
    jQuery(".store-pages-main-menu-item").click();
});
/*google fonts*/
jQuery(document).on("click",".google-fonts",function()
{
    jQuery(".loader-image").fadeIn();
    form_google_fonts(function(response)
       {
           result = call_form_google_fonts(response); 
           jQuery("#content").html(result.html);
           set_current(this);
      });
});
jQuery(document).on("click","li.reinstall-store-front",function()
{
    jQuery(".loader-image").fadeIn();
    form_authorization = load_authorization_form();  
    show_dialog_popup("Authorization request",form_authorization);
    set_current(this);
    
});
function sync_store_pages()
{
      base_url = jQuery("#base_url").val();
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/storedesign/sync_pages/",
    async: true,
    type: "POST",    
    dataType: "json",
    success: function(data) 
    {  
    }
  });
}
function load_store_pages(callback)
{
      base_url = jQuery("#base_url").val();
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/storedesign/load_store_pages/",
    async: true,
    type: "POST",    
    dataType: "json",
    success: function(data) 
    { 
      callback(data);
    }
  });
}
function callback_load_store_pages(response)
{
    return response.html;
}
function load_add_store_pages(page_id, callback)
{
      base_url = jQuery("#base_url").val();
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/storedesign/load_add_store_pages/",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{"id_page":page_id},
    success: function(data) 
    { 
      callback(data);
    }
  });
}
function callback_load_add_store_pages(response)
{
    return response.html;
}
function delete_store_page(page_id)
{
      base_url = jQuery("#base_url").val();
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/storedesign/delete_store_page/",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{"id_page":page_id},
    success: function(data) 
    { 
    
    }
  });
}
function save_store_page(id_page,title, page_text, callback)
{
     var result = "";
      base_url = jQuery("#base_url").val();
     jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/storedesign/save_store_page",
      async: true,
      type: "POST", 
      data:{"title":title,"page_text":page_text,"id_page":id_page} ,    
      dataType: "json",
      success: function(data) 
      { 
         callback(data)           
      }
    });
}
function callback_save_store_page(response)
{
    return response.html;
}
function checkPicturesURL(imageItem)
{
    imgUrl =  imageItem.attr("src");
    if(imgUrl=="")
    {
      imageItem.parent("a").remove();
      imageItem.remove();
    }
}
function goBack()
  {
  window.history.back();
  }
  function updateLogoURL(user_id,id_design,logo_url,base_url,action,id_logo)
  {
      jQuery.ajax
      ({
      url: base_url+"store_design/storedesign/"+action,
      async: false,
      type: "POST", 
       data:{"user_id":user_id,"id_design":id_design,"logo_url":logo_url,"id_logo":id_logo} ,    
      dataType: "json",
      success: function(data) 
      { 
            jQuery(".loader-image").fadeOut(); 
      }
    });
  }
    function addFeaturedListing(id_ebay_design,title,price,link,image_url,base_url,action)
  {
      jQuery.ajax
      ({
      url: base_url+"/store_design/featured/"+action,
      async: false,
      type: "POST", 
       data:{"id_ebay_design":id_ebay_design,"title":title,"price":price,"image_url":image_url,"link":link} ,    
      dataType: "json",
      success: function(data) 
      { 
         jQuery(".loader-image").fadeOut(); 
      }
    });
  }
      function updateFeaturedListing(id_featured_listing,title,price,link,image_url,base_url,action)
  {
      /*update fearured listing doing AJAX next step go to featured.php update_featured_listing() function*/
      jQuery.ajax
      ({
      url: base_url+"store_design/featured/"+action+"/",
      async: false,
      type: "POST", 
      data:{"id_featured_listing":id_featured_listing,"title":title,"price":price,"image_url":image_url,"link":link} ,    
      dataType: "json",
      success: function(data) 
      { 
        //alert("Was updateFeaturedListing()!")
      }
    });
  }
/*FUNCTIONS FOR POPULAR CATEGORIES*/
function ajax_load_popular_categories_part_form()
{  
  var result = "";
  base_url = jQuery("#base_url").val();
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/popular_categories_part/",
    async: false,
    type: "POST",    
    dataType: "json",
    success: function(data) 
    { 
      result = data.html;     
       jQuery(".loader-image").fadeOut(); 
    }
  });
  return result;    
} 

function load_popular_category(id_popular_category)
{
   var result = "";
   base_url = jQuery("#base_url").val();
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/load_popular_category/",
      async: false,
      type: "POST",    
      data:{"id_popular_category":id_popular_category} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.popular_category;     
         jQuery(".loader-image").fadeOut(); 
      }
    });
  return result;    
}
function save_popular_categories(id,title,link,image_url)
{
   var result = "";
   base_url = jQuery("#base_url").val();
   jQuery.ajax({
      url: base_url+"index.php?/store_design/listingdesign/save_popular_categories/",
      async: false,
      type: "POST",    
      data: {"id":id,"title":title,"link":link,"image_url":image_url} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;  
        jQuery(".loader-image").fadeOut(); 
      }
    });
  return result;    
}
function delete_popular_category(id_popular_category)
{
   var result = "";
   base_url = jQuery("#base_url").val();
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/delete_popular_category/",
      async: false,
      type: "POST",    
      data:{"id_popular_category":id_popular_category} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;    
         jQuery(".loader-image").fadeOut(); 
      }
    });
  return result;    
}
function load_authorization_form()
{
    var result = "";
   base_url = jQuery("#base_url").val();
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/storedesign/authorization_request_form/",
      async: false,
      type: "POST",    
      dataType: "json",
      success: function(data) 
      { 
        result = data.html;    
      }
    });
  return result;   
}
function check_authorization(password)
{
    var result = "";
   base_url = jQuery("#base_url").val();
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/storedesign/authorization_request",
      async: false,
      type: "POST",    
      data:{"password":password} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.authorize;    
      }
    });
  return result;   
}
function checkprice(str){
  if(str.match(/^\d+(\.\d\d)?$/)){
    return true;
  }
  return false;
}  
function effect_listing_updated(element)
{
    jQuery(element).css("border","3px solid #67EB25");
}
function show_successfull_message(message)
{
    jQuery("#message_content").html(message);
    jQuery(".message_content").html(message);
    
    jQuery(".alert").addClass("alert-success");
    jQuery(".alert").fadeIn();  
    jQuery('html, body').animate({
        scrollTop: jQuery(".alert").offset().top
    }, 2000);
 /*    jQuery(".alert:eq(1)").hide();*/
      jQuery(".alert:eq(2)").hide();
}
function show_error_message(message)
{
    
    jQuery("#message_content").html("");
    jQuery("#message_content").append(message);
     jQuery(".message_content").html(message);
     jQuery(".alert").removeClass("alert-success");
    jQuery(".alert").addClass("alert-error");
    jQuery(".alert").fadeIn();  
    jQuery('html, body').animate({
        scrollTop: jQuery(".alert").offset().top
    }, 2000);
     /*   jQuery(".alert:eq(1)").hide();*/
   jQuery(".alert:eq(2)").hide();
}
function show_warning_message(message)
{
    jQuery("#message_content").html("");
     jQuery(".message_content").html(message);
    jQuery("#message_content").append(message);
     jQuery(".alert").removeClass("alert-success");
    jQuery(".alert").removeClass("alert-error");
    jQuery(".alert").fadeIn();  
    jQuery('html, body').animate({
        scrollTop: jQuery(".alert").offset().top
    }, 2000);
     jQuery(".alert:eq(1)").hide();
      jQuery(".alert:eq(2)").hide();
}
function set_error_field(element)
{
  jQuery("#"+element).css("border","1px  solid red");
}
function remove_error_field(element)
{
     jQuery("#"+element).css("border","1px  solid #BBBBBB");
}
function focus_element_updated(element)
{
    jQuery("#"+element).css("border","3px solid #67EB25");
}
function close_dialog_message()
{
    jQuery(".close1").parent("div").fadeOut();
}
function open_button_view_last_listing_inserted(listing_id, title, price,image_url,description,link)
{
   jQuery("#message_content").append("<div listing_id='"+listing_id+"' title='"+title+"'  price='"+price+"'  image_url='"+image_url+"'  description='"+description+"'   link='"+link+"'class='view-item btn btn-primary'><i class='icon-eye-open'></i>&nbsp;View Item</div>");
}
 function validate_link( url )
        {
            var urlregex = new RegExp(/(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/);
            return urlregex.test(url);
        }
function show_dialog_popup(title, html)
{
    jQuery("#popup_overlay").fadeIn();
    jQuery("#popup_container").fadeIn();
    jQuery("#popup_title").text(title);
    jQuery("#popup_message").html(html);    
    jQuery("#popup_container").center();
}
function remove_dialog(reload)
{
    jQuery("#popup_overlay").fadeOut();
    jQuery("#popup_container").fadeOut();
    jQuery("#popup_title").text("");
    jQuery("#popup_message").html(""); 
    if(reload)
    {
    var host = "http://"+window.location.hostname+"/designmanager";
     window.location.href = host+"/rocklister/rocklister";
    }
}
function remove_dialog_simple()
{
    jQuery("#popup_overlay").fadeOut();
    jQuery("#popup_container").fadeOut();
    jQuery("#popup_title").text("");
    jQuery("#popup_message").html("");       
}
function remove_dialog_send_to_prepared_listings(reload)
{
    jQuery("#popup_overlay").fadeOut();
    jQuery("#popup_container").fadeOut();
    jQuery("#popup_title").text("");
    jQuery("#popup_message").html("");    
    if(reload)
    {
       var host = "http://"+window.location.hostname+"/designmanager";
       window.location.href = host+"/rocklister/rocklister?prepared=true"
    }
}
function remove_dialog_send_to_webstore(reload)
{
    jQuery("#popup_overlay").fadeOut();
    jQuery("#popup_container").fadeOut();
    jQuery("#popup_title").text("");
    jQuery("#popup_message").html("");    
    if(reload)
    {
       var host = "http://"+window.location.hostname+"/designmanager";
       window.location.href = host+"/webstores/webstore"
    }
}
function remove_dialog_send_to_blogger(reload)
{
    jQuery("#popup_overlay").fadeOut();
    jQuery("#popup_container").fadeOut();
    jQuery("#popup_title").text("");
    jQuery("#popup_message").html("");    
    if(reload)
    {
       var host = "http://"+window.location.hostname+"/designmanager";
       window.location.href = host+"/webstores/blogger"
    }
}
function refresh_rocklister_page()
{
    var host = "http://"+window.location.hostname+"/designmanager";
    window.location.href = host+"/rocklister/rocklister";
}
function remove_dialog_and_sync()
{
    jQuery("#popup_overlay").fadeOut();
    jQuery("#popup_container").fadeOut();
    jQuery("#popup_title").text("");
    jQuery("#popup_message").html("");    
       var host = "http://"+window.location.hostname+"/designmanager";
       window.location.href = host+"/rocklister/rocklister?sync=true";
}
function redirect_page_to_listings_backup()
{
     var host = "http://"+window.location.hostname+"/designmanager";
       window.location.href = host+"/store_design/backups/?show_groups=true"
}
function redirect_page_to_store_backup(action)
{
     var host = "http://"+window.location.hostname+"/designmanager";
       window.location.href = host+"/store_design/backups/?"+action+"=true";
}
function remove_dialog_send_to_active_listings(reload)
{
    jQuery("#popup_overlay").fadeOut();
    jQuery("#popup_container").fadeOut();
    jQuery("#popup_title").text("");
    jQuery("#popup_message").html("");    
    if(reload)
    {
       var host = "http://"+window.location.hostname+"/designmanager";
       window.location.href = host+"/rocklister/rocklister?active_items=true";
    }
}
jQuery.fn.center = function () 
{
    this.css("left", Math.max(0, ((jQuery(window).width() - jQuery(this).outerWidth()) / 2) + 
                                                jQuery(window).scrollLeft()) + "px");
    return this;
}
function do_properly_click(global_location)
{
    /*popular categories click decision*/
       if(global_location=="popular_categories")
      {        
          jQuery(".popular-categories-main-menu-item").click();
      } 
      if(global_location=="listing")
      {        
          jQuery("li.popular-categories").click();
      }
       if(global_location=="front")
      {        
          jQuery("li.popular-categories-home").click();
      }
      /*end popular*/
       if(global_location=="listing_featured")
      {        
          jQuery("li.featured-listing").click();
      } 
         if(global_location=="front_featured")
      {        
          jQuery("li.featured-home").click();
      } 
       if(global_location=="featured")
      {        
          jQuery(".featured-main-menu-item").click();
      } 
      /*new arrivals decision*/      
       if(global_location=="new_arrivals")
      {        
          jQuery(".new-arrivals-main-menu-item").click();
      } 
       if(global_location=="listing_arrivals")
      {        
          jQuery("li.arrivals-listing").click();
      } 
         if(global_location=="front_arrivals")
      {        
          jQuery("li.arrivals-home").click();
      }
       /*specials decision*/      
       if(global_location=="discounts")
      {        
          jQuery(".special-main-menu-item").click();
      } 
       if(global_location=="listing_specials")
      {        
          jQuery("li.specials-listing").click();
      } 
         if(global_location=="front_specials")
      {        
          jQuery("li.specials-home").click();
      }
       if(global_location=="store_pages")
      {        
          jQuery(".store-pages-main-menu-item").click();
      } 
}
function load_listings_backups(group_id)
{
    get_listings_backups(group_id,function(response)
{
   listings_backup =  callback_get_listings_backups(response);
   jQuery(".widgetcontent").html(listings_backup);
});
}
function get_listings_backups(group_id,callback)
{  
  base_url = jQuery("#base_url").val();
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/backups/get_listings_backup/",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{"group_id":group_id},
    success: function(data) 
    { 
      callback(data);
    }
  });
} 
function callback_get_listings_backups(response)
{ 
 return response.html;
}
function execute_store_front_instalaltion(backup_id)
{
 jQuery("#dialog_message").html("<b>Are you sure?</b>");
 jQuery("#dialog-confirm").attr("title","Execute store front backup");
 jQuery( "#dialog-confirm" ).dialog({
resizable: false,
height:140,
modal: true,
buttons: {
"Confirm": function() {
    show_dialog_popup("Executing...","<div class='item-notification'><div class='ajax-loader-custom'></div></div>");
    base_url = jQuery("#base_url").val();
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/backups/execute_store_front_backup/",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{"backup_id":backup_id},
    success: function(data) 
    { 
     redirect_page_to_store_backup("executed");
    }
  });
},
Cancel: function() {
jQuery( this ).dialog( "close" );
}
}
});  
}
function delete_store_front_instalaltion(backup_id)
{
     jQuery("#dialog_message").html("<b>Are you sure?</b>");
 jQuery("#dialog-confirm").attr("title","Delete store front backup");
 jQuery( "#dialog-confirm" ).dialog({
resizable: false,
height:140,
modal: true,
buttons: {
"Confirm": function() {
    show_dialog_popup("Removing...","<div class='item-notification'><div class='ajax-loader-custom'></div></div>");
    base_url = jQuery("#base_url").val();
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/backups/delete_store_front_backup/",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{"backup_id":backup_id},
    success: function(data) 
    { 
     redirect_page_to_store_backup("deleted");
    }
  });
},
Cancel: function() {
jQuery( this ).dialog( "close" );
}
}
});  
}
function delete_listing_backup_group(backup_group_id)
{
     jQuery("#dialog_message").html("<b>Are you sure?</b>");
 jQuery("#dialog-confirm").attr("title","Delete store front backup");
 jQuery( "#dialog-confirm" ).dialog({
resizable: false,
height:140,
modal: true,
buttons: {
"Confirm": function() {
    show_dialog_popup("Removing...","<div class='item-notification'><div class='ajax-loader-custom'></div></div>");
    base_url = jQuery("#base_url").val();
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/backups/delete_listing_backup_group/",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{"backup_group_id":backup_group_id},
    success: function(data) 
    { 
     redirect_page_to_store_backup("deleted1");
    }
  });
},
Cancel: function() {
jQuery( this ).dialog( "close" );
}
}
});  
}
function backup_listing_delete(element, backup_id)
{
 jQuery("#dialog_message").html("<b>Are you sure?</b>");
 jQuery("#dialog-confirm").attr("title","Delete item backup");
 jQuery( "#dialog-confirm" ).dialog({
resizable: false,
height:140,
modal: true,
buttons: {
"Confirm": function() {
    show_dialog_popup("Removing...","<div class='item-notification'><div class='ajax-loader-custom'></div></div>");
    base_url = jQuery("#base_url").val();
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/backups/backup_delete_listing/",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{"backup_id":backup_id},
    success: function(data) 
    { 
     element.parent("td").parent("tr").remove();
     remove_dialog();
     show_successfull_message("item backup was deleted successful.");
     jQuery(".ui-dialog").fadeOut();
     jQuery(".ui-widget-overlay").fadeOut();
    }
  });
},
Cancel: function() {
jQuery( this ).dialog( "close" );
}
}
});  
}
function init_item_send_to_ebay_from_backup(items_ids,group_id)
{
    jQuery(".alert").fadeOut();
    var items_collection = items_ids;            
               show_dialog_popup("Restore backup point","<div class='item-notification'></div>");
                jQuery(".progress").fadeIn();
                /*generate backup*/
                add_listing_backup_group(function(response)
                {
                   last_id_backup_group = call_back_add_listing_backup_group(response);  
                      jQuery.each(items_collection, function(index, ItemID)
           {
               index++;             
               var length = items_collection.length;
               var itarator = index;
                add_listing_backup(ItemID,last_id_backup_group);
               item_send_to_ebay_from_backup(ItemID,group_id, function(response)
               {           
                 call_back_item_send_to_ebay(response);      
                 progress_width = itarator /length * 100;
                 jQuery(".bar").css("width",Math.round(progress_width)+"%");
                   if(itarator== length)
                    {
                      if(length>1)
                          jQuery(".item-notification").prepend(length+'<b> items were submited to eBay Inc successful.</b> <a href="javascript:remove_dialog(false)" class="close-dialog">close</a> <br>');
                        if(length==1)
                          jQuery(".item-notification").prepend(length+' <b>item was submited to eBay Inc successful.</b> <a href="javascript:remove_dialog(false)" class="close-dialog">close</a><br>');
                          jQuery(".bar").css("width","100%");
                         /*syncronized:: previous action was with eBay Inc*/ 
                         show_successfull_message("Backup point was restored successful.");
                    }
                });           
                 
           });
                });
           
        
        }
        function item_send_to_ebay_from_backup(item_id,group_id, callback)
       {
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/ebay_update_listing_description_from_backup",
    async: true,
    type: "POST",    
    data: {"item_id":item_id,"group_id":group_id},
    dataType: "json",
    success: function(data) 
    { 
        callback(data);      
    },
   complete: function(data) 
    { 
       jQuery(".loader-image").fadeOut();    
    }
  });
       }
      function  save_development_code(code,type)
      {
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  jQuery.ajax({
    url: base_url+"store_design/developerzone/save_development_code/",
    async: true,
    type: "POST",    
    data: {"code":code,"type":type},
    dataType: "json",
    success: function(data) 
    { 
          
    },
   complete: function(data) 
    { 
       jQuery(".loader-image").fadeOut();    
    }
  });
      }
      
    function init_image_upload(title,html)
    {
        show_dialog_popup(title, html);
    }
    function update_screenshot(url,type)
    {
     var result = "";
  base_url = "http://"+window.location.hostname+"/";
  jQuery.ajax({
    url: base_url+"store_design/storedesign/update_screenshot/",
    async: true,
    type: "POST",    
    data: {"url":url,"type":type},
    dataType: "json",
    success: function(data) 
    { 
          
    },
   complete: function(data) 
    { 
       jQuery(".loader-image").fadeOut();    
    }
  });   
    }
    function ajax_load_store_background_form()
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/store_design/storesettings/form_store_background/",
    async: false,
    type: "POST",    
    /*    data:{"id_newsletter_design":id_newsletter_design} ,  */
    dataType: "json",
    success: function(data) 
    { 
        result = data.html;    
        jQuery(".loader-image").fadeOut();
    }
  });
  return result;    
   jQuery(".loader-image").fadeOut();
}  
  function ajax_update_general_setting(url,type)
  {
      base_url = "http://"+window.location.hostname+"/";
      jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/storesettings/save_general_setting",
      async: false,
      type: "POST", 
       data:{"url":url,"type":type} ,    
      dataType: "json",
      success: function(data) 
      { 
           jQuery(".loader-image").fadeOut();
           
      }
    });
  }
   function ajax_load_store_header_background_form()
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/store_design/storesettings/form_store_header_background/",
    async: false,
    type: "POST",    
    dataType: "json",
    success: function(data) 
    { 
        result = data.html;    
        jQuery(".loader-image").fadeOut();
    }
  });
  return result;    
   jQuery(".loader-image").fadeOut();
}  
function ajax_load_front_options_form()
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/store_design/storesettings/form_front_design_options/",
    async: false,
    type: "POST",    
    dataType: "json",
    success: function(data) 
    { 
        result = data.html;    
        jQuery(".loader-image").fadeOut();
    }
  });
  return result;    
   jQuery(".loader-image").fadeOut();
}  
function ajax_load_listing_options_form()
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/store_design/storesettings/form_listing_design_options/",
    async: false,
    type: "POST",    
    dataType: "json",
    success: function(data) 
    { 
        result = data.html;    
        jQuery(".loader-image").fadeOut();
    }
  });
  return result;    
   jQuery(".loader-image").fadeOut();
}
function auto_click()
{
  /*  var a = jQuery('.showmenu');
var evObj = document.createEvent('MouseEvents');
evObj.initMouseEvent('click', true, true, window);
a.dispatchEvent(evObj);*/
       jQuery(".showmenu").fadeOut();
        jQuery(".logo_small").fadeIn();
}
function init_file_manager(user_id)
{
  base_url = "http://"+window.location.hostname+"/";
 var elf = jQuery('#elfinder').elfinder({
url : base_url+'elfinder/php/connector.php?id='+user_id , // connector URL (REQUIRED)
lang: 'en', 
commands : [
		'open', 'reload', 'home', 'up', 'back', 'forward', 'getfile', 'quicklook', 
		'download', 'rm', 'duplicate', 'rename', 'mkdir', 'upload',  'extract', 'archive', 'search', 'view',  'sort', 'netmount'
	],
uiOptions : {
		// toolbar configuration
		toolbar : [
			['back', 'forward'],
			['netmount'],
		  ['reload'],
			// ['home', 'up'],
			['mkdir',  'upload'],
			['open', 'download', 'getfile'],
			['quicklook'],
			['rm'],
			[ 'rename' ],
			['extract', 'archive'],
			['search'],
			['view', 'sort']
		],
		// directories tree options
		tree : {
			// expand current root on init
			openRootOnLoad : true,
			// auto load current dir parents
			syncTree : true
		},
		// navbar options
		navbar : {
			minWidth : 150,
			maxWidth : 500
		},
		cwd : {
			// display parent folder with ".." name :)
			oldSchool : false
		}
	}
}).elfinder('instance');
}
function validate_special_listing_prices(base_price, sale_price)
{
if(parseFloat(base_price)> parseFloat(sale_price))
    return true;
else
    return false;
}
function save_theme_option(value,key)
{
    var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"store_design/storesettings/save_theme_option",
    async: false,
    type: "POST",   
    data: {"value":value,"key":key},
    dataType: "json",
    success: function(data) 
    { 
        jQuery(".loader-image").fadeOut();
    }
  });
  return result;    
  jQuery(".loader-image").fadeOut();
}
function is_numeric (mixed_var) {
  return (typeof mixed_var === 'number' || typeof mixed_var === 'string') && mixed_var !== '' && !isNaN(mixed_var);
}
/*install template purchased*/
function init_install_template(file_name, callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/developerzone/init_install_template",
          async: true,
          type: "POST",  
          data: {"file_name":file_name},
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
function call_back_init_install_template(response)
{
 return response;
}
function validate_template_file_to_install(file_name, callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/developerzone/install_template_check_files",
          async: true,
          type: "POST",  
          data: {"file_name":file_name},
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
function call_back_validate_template_file_to_install(response)
{
 return response;
}
function exist_zip_file(file_name, callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/developerzone/exist_zip_file",
          async: true,
          type: "POST",  
          data: {"file_name":file_name},
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             //jQuery(".loader-image").fadeOut();    
          }
        });
       }
function call_back_exist_zip_file(response)
{
 return response;
}
function active_template(id_template_installed,template_name, callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/developerzone/active_template",
          async: true,
          type: "POST",  
          data: {"id_template_installed":id_template_installed,"template_name":template_name},
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
function call_active_template(response)
{
 return response;
}
function download_template(id_template_installed,template_name, callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/developerzone/download_template",
          async: true,
          type: "POST",  
          data: {"id_template_installed":id_template_installed,"template_name":template_name},
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
function call_download_template(response)
{
 return response;
}
function delete_template(id_template_installed,template_name, callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/developerzone/delete_template",
          async: true,
          type: "POST",  
          data: {"id_template_installed":id_template_installed,"template_name":template_name},
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
function call_delete_template(response)
{
 return response;
}
function validate_images(file_name, callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/validate/validate_images",
          async: true,
          type: "POST",  
          data: {"file_name":file_name},
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
function call_validate_images(response)
{
 return response;
}
function OpenInNewTab(url) {
  var a = document.createElement('a');
a.setAttribute('href', url);
a.setAttribute('target', '_blank');
document.body.appendChild(a);
a.click();
}

/*Google fonts*/
function form_google_fonts(callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/storesettings/form_google_fonts",
          async: true,
          type: "POST",  
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
function call_form_google_fonts(response)
{
 return response;
}
function active_font(font_id,callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/storesettings/active_font",
          async: true,
          type: "POST",  
          data: {"font_id":font_id},
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
function call_active_font(response)
{
 return response;
}
function load_suggested_template(id_suggested_template)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/suggested_templates/load_suggested_template/",
      async: false,
      type: "POST",    
      data:{"id_suggested_template":id_suggested_template} ,
      dataType: "json",
      success: function(data) 
      { 
         result = data.suggested_template;     
         jQuery(".loader-image").fadeOut(); 
      }
    });
  return result;    
}
function load_suggested_template_zip_file_name(id_suggested_template, callback)
{
    jQuery(".loader-image").fadeIn();
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/suggested_templates/load_suggested_template_zip_file_name",
      async: true,
      type: "POST",    
      data:{"id_suggested_template":id_suggested_template} ,
      dataType: "json",
      success: function(data) 
      { 
         callback(data); 
      },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
    });
  return result;    
}
function call_load_suggested_template_zip_file_name(response)
{
 return response.zip_file_name;
}
function ajax_load_suggested_template_form()
{  
  var result = "";
  base_url = jQuery("#base_url").val();
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/suggested_templates/load_suggested_template_form/",
    async: false,
    type: "POST",    
    dataType: "json",
    success: function(data) 
    { 
      result = data.html;     
       jQuery(".loader-image").fadeOut(); 
    }
  });
  return result;    
}
function delete_suggested_template(id_suggested_template)
{
   var result = "";
   base_url = jQuery("#base_url").val();
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/suggested_templates/delete_suggested_template/",
      async: false,
      type: "POST",    
      data:{"id_suggested_template":id_suggested_template} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;    
         jQuery(".loader-image").fadeOut(); 
      }
    });
  return result;    
}
function save_suggested_template(id,title,link,image_url)
{
   var result = "";
   base_url = jQuery("#base_url").val();
   jQuery.ajax({
      url: base_url+"index.php?/suggested_templates/save_suggested_template/",
      async: false,
      type: "POST",    
      data: {"id":id,"title":title,"link":link,"image_url":image_url} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;  
        jQuery(".loader-image").fadeOut(); 
      }
    });
  return result;    
}
function load_suggested_template_part(load_type)
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/suggested_templates/load_suggested_template_part",
    async: false,
    type: "POST",    
    dataType: "json",
    data:{"load_type":load_type},
    success: function(data) 
    { 
      result = data.html;  
      jQuery(".loader-image").fadeOut();
    }
  });
  return result;    
} 
function load_suggested_templates_by_categories(category_id,callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "https://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/suggested_templates/load_suggested_templates_by_categories",
          async: true,
          type: "POST",  
          data: {"category_id":category_id},
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
       function load_suggested_templates_by_categories_http(category_id,callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/suggested_templates/load_suggested_templates_by_categories",
          async: true,
          type: "POST",  
          data: {"category_id":category_id},
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
function call_load_suggested_templates_by_categories(response)
{
 return response;
}
function send_suggested_template_to_installation(file_name,callback)
       {
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/suggested_templates/send_suggested_template_to_installation",
          async: true,
          type: "POST",  
          data: {"file_name":file_name},
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             //jQuery(".loader-image").fadeOut();    
          }
        });
       }
function call_send_suggested_template_to_installation(response)
{
 return response;
}
function create_template_selected_session_http(suggested_template_id)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/suggested_templates/create_template_selected_session",
          async: true,
          type: "POST",  
          data: {"suggested_template_id":suggested_template_id},
          dataType: "json",
          success: function(data) 
          { 
                   
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
function create_template_selected_session(suggested_template_id)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "https://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/suggested_templates/create_template_selected_session",
          async: true,
          type: "POST",  
          data: {"suggested_template_id":suggested_template_id},
          dataType: "json",
          success: function(data) 
          { 
                   
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
function reinstall_store_front(callback)
       {
        jQuery(".loader-image").fadeIn();  
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/installation/install_store_front1",
          async: true,
          type: "POST",  
          dataType: "json",
          success: function(data) 
          { 
              callback(data);      
          },
         complete: function(data) 
          { 
             jQuery(".loader-image").fadeOut();    
          }
        });
       }
function call_reinstall_store_front(response)
{
 return response;
}
function checkEmail(email) 
{
    var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
    if(pattern.test(email)){         
	return true;   
    }else{   
	return false;
    }
}
function load_language_translator_form(id_language_translator, callback)
{
    base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/store_design/language/load_language_translator_form/",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{"id_language_translator":id_language_translator},
    success: function(data) 
    { 
      callback(data);
    }
  });
}
function callback_load_language_translator_form(response)
{
    return response.html;
}
function update_language_fields(data)
{
    base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/language/update_language_fields/",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{"data":data},
    success: function(data) 
    { 
    }
  });
}

function load_translator_fields_datable(callback)
{
    base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/language/load_translator_fields_datable/",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{},
    success: function(data) 
    { 
      callback(data);
    }
  });
}
function callback_load_translator_fields_datable(response)
{
    return response.html;
}
function remove_row_translator(id_language_translator,callback)
{
    base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/language/remove_row_translator/",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{"id_language_translator":id_language_translator},
    success: function(data) 
    { callback(data);
    }
  });
}