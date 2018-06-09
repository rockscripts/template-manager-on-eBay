jQuery(document).ready(function() 
{
  jQuery("li.store-logo").click(function()
  {  
     jQuery(".alert").css("display","none");
     jQuery(".loader-image").fadeIn();
     form_store_logo = ajax_load_store_logo_form();
     jQuery("#content").html(form_store_logo);
     set_current(this);
  });
   jQuery("li.welcome-text-front").click(function()
  {
      if(typeof CKEDITOR != "undefined")
      {
       delete CKEDITOR.instances['welcome_text']   
      }
  
     jQuery(".alert").css("display","none");
     jQuery(".loader-image").fadeIn();
    ajax_load_welcome_text_form(function(response)
 {
     result = callback_ajax_load_welcome_text_form(response);
      jQuery("#content").html(result.html);
     set_current(this);
 });
  });
 jQuery("li.listing-slider-home").click(function()
  {
   jQuery(".loader-image").fadeIn();
     jQuery(".alert").css("display","none");
    form = ajax_load_home_design_image_vide_slider_form();
    jQuery("#content").html(form);
    set_current(this);
    
  });
  jQuery("li.front-item-specifications-widget").click(function()
  {
   jQuery(".loader-image").fadeIn();
     jQuery(".alert").css("display","none");
   ajax_load_item_specifications_widget_view(function(response)
{
    data = callback_ajax_load_item_specifications_widget_view(response);
   jQuery("#content").html(data.view);
    set_current("li.front-item-specifications-widget");
});
   
    
  });
    jQuery("li.advertising-home").click(function()
  {
      jQuery(".loader-image").fadeIn();
     jQuery(".alert").css("display","none");
    form = ajax_load_home_design_advertising_form();
    jQuery("#content").html(form);
    set_current(this);
  });
    jQuery("li.featured-home").click(function()
  {
      jQuery("#global_location").val("front_featured");
      count_clicked = 0;
      jQuery(".loader-image").fadeIn();
     jQuery(".alert").css("display","none");
    form = ajax_load_listing_featured_form("front");
    jQuery("#content").html(form);
    if(count_clicked == 0)
    {
    jQuery("#content").html(form);
    count_clicked++;   
    }
    set_current(this);
  });
   jQuery("li.specials-home").click(function()
  {
      jQuery("#global_location").val("front_specials");
      count_clicked = 0;
      jQuery(".loader-image").fadeIn();
     jQuery(".alert").css("display","none");
    form = ajax_load_listing_special_form("front");
    jQuery("#content").html(form);
    if(count_clicked == 0)
    {
    jQuery("#content").html(form);
    count_clicked++;   
    }
    set_current(this);
  });
  jQuery("li.arrivals-home").click(function()
  {
    jQuery("#global_location").val("front_arrivals");
    count_clicked = 0;
    jQuery(".loader-image").fadeIn();
    jQuery(".alert").css("display","none");
    form = ajax_load_listing_new_arrivals_form("front");
    jQuery("#content").html(form);
    if(count_clicked == 0)
    {
    jQuery("#content").html(form);
    count_clicked++;   
    }
    set_current(this);
  });
  //load popular categories
  jQuery("li.popular-categories-home").click(function()
  {
       jQuery("#global_location").val("front");
      jQuery(".loader-image").fadeIn();
    jQuery(".alert").css("display","none");
    form = ajax_popular_category_form("front");
    jQuery("#content").html(form);
    set_current(this);
  });
    jQuery("li.tabs-home").click(function()
  {
       jQuery(".loader-image").fadeIn();
      if(typeof CKEDITOR != "undefined")
      {
       delete CKEDITOR.instances['tab_content']   
      }         
     jQuery(".alert").css("display","none");
   //jQuery(".listing-images-content").css("display","none");  
  ajax_load_home_design_tabs_form(function(response)
    {
    form_tabs = callback_ajax_load_home_design_tabs_form(response);
    jQuery("#content").html(form_tabs);
    set_current(this);
    });    
  });
  
   jQuery("li.content-settings").click(function()
   {	
		//alert('In social Media');
		jQuery(".alert").css("display","none");
		jQuery(".loader-image").fadeIn();
		form= ajax_load_general_form();
		jQuery("#content").html(form);
		set_current(this);
   });
      jQuery("li.listing-social-media").click(function()
   {
		//alert('In social Media');
		jQuery(".alert").css("display","none");
		jQuery(".loader-image").fadeIn();
		form= ajax_load_social_media_form();
		jQuery("#content").html(form);
		set_current(this);
   });
     jQuery("li.menu-manager-home").click(function()

    {
        jQuery(".loader-image").fadeIn();
        jQuery(".alert").css("display","none");
        base_url = "http://"+window.location.hostname+"/";
       jQuery("#content").html( '<iframe src="'+base_url+'store_design/listingdesign/easymenu?act=menu" frameborder="0" style="width: 100%;height:100%;"></iframe>' );
        set_current(this);
        jQuery(".loader-image").fadeOut(); 
    });
      jQuery("li.front-layout").click(function()
  {
      jQuery(".button_import_update_categories").fadeOut();
      jQuery(".loader-image").fadeIn();
      jQuery(".alert").css("display","none");
      form = ajax_load_front_layout_maker();
      jQuery("#content").html(form);
      set_current(this);
  });
});
/*Functions for interface*/
  function ajax_load_front_layout_maker()
        {
            var result = "";
            jQuery.ajax({
                url: base_url+"index.php?/store_design/storedesign/load_layout_maker/",
                async: false,
                type: "POST",    
                dataType: "json",
                success: function(data) 
                { 
                  result = data.html;         
                  jQuery(".loader-image").fadeOut();
                }
            });
            return result ;
        }
/*START Funcions for listing pictures on listing settings*/
function ajax_load_store_logo_form()
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/store_design/storedesign/form_store_logo/",
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
  function ajax_update_logo(logo_url,base_url,action,id_logo)
  {
      jQuery.ajax
      ({
      url: base_url+"/store_design/storedesign/"+action,
      async: false,
      type: "POST", 
       data:{"logo_url":logo_url,"id_logo":id_logo} ,    
      dataType: "json",
      success: function(data) 
      { 
           jQuery(".loader-image").fadeOut();
           
      }
    });
  }
  /*START Funcions for welcome text*/
  function ajax_load_welcome_text_form(callback)
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/store_design/storedesign/form_welcome_text/",
    async: true,
    type: "POST",    
    /*    data:{"id_newsletter_design":id_newsletter_design} ,  */
    dataType: "json",
    success: function(data) 
    { 
      callback(data);
       jQuery(".loader-image").fadeOut();
    }
  });
  return result;    
  
}  
function callback_ajax_load_welcome_text_form(response)
{
    return response;
}
function home_design_update_welcome_text(id_home_design_welcome_text,welcome_text)
{
     var result = "";
      base_url = "http://"+window.location.hostname+"/";
     jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/storedesign/update_welcome_text",
      async: false,
      type: "POST", 
      data:{"welcome_text":welcome_text,"id_home_design_welcome_text":id_home_design_welcome_text} ,    
      dataType: "json",
      success: function(data) 
      { 
           result = data.html; 
       jQuery(".loader-image").fadeOut();
           
      }
    });
      return result;  
}
function ajax_load_home_design_image_vide_slider_form()
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/storedesign/load_image_video_slider/",
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
function ajax_load_images_videos_slider_part_form()
{
  
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/storedesign/load_images_videos_slider_part/",
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
function save_home_design_images_videos_slider(id,link,image_url,type)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   jQuery.ajax({
      url: base_url+"index.php?/store_design/storedesign/save_images_videos_slider/",
      async: false,
      type: "POST",    
      data: {"id":id,"link":link,"image_url":image_url,"type":type} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;  
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function ajax_load_home_design_images_videos_slider_part_providers_form(provider)
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/storedesign/load_images_videos_slider_part_providers_part/",
    async: false,
    type: "POST",    
    dataType: "json",
     data: {"provider":provider} ,
    success: function(data) 
    { 
      result = data.html;  
       jQuery(".loader-image").fadeOut();
    }
  });
  return result;    
} 
function home_design_save_images_videos_slider(id,link,image_url,type)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   jQuery.ajax({
      url: base_url+"index.php?/store_design/storedesign/save_images_videos_slider/",
      async: false,
      type: "POST",    
      data: {"id":id,"link":link,"image_url":image_url,"type":type} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;  
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function load_home_design_images_videos_slider_array(id_home_design_slider)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/storedesign/load_images_videos_slider_array/",
      async: false,
      type: "POST",    
      data:{"id_home_design_slider":id_home_design_slider} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.html;  
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function ajax_home_design_load_images_videos_slider_part_form()
{
  
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/storedesign/load_images_videos_slider_part/",
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
function load_home_design_images_videos_slider_array(id_home_design_slider)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/storedesign/load_images_videos_slider_array/",
      async: false,
      type: "POST",    
      data:{"id_home_design_slider":id_home_design_slider} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.html;  
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function delete_home_design_images_videos_slider(id_home_design_slider)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/storedesign/delete_images_videos_slider/",
      async: false,
      type: "POST",    
      data:{"id_home_design_slider":id_home_design_slider} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;  
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function ajax_load_home_design_advertising_form()
{
  jQuery("li.listing-pictures").click();
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/storedesign/load_advertising",
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
function ajax_load_home_advertising_part_form()
{
  
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/storedesign/load_advertising_part",
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
function save_home_design_advertising(id,title,link,image_url)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   jQuery.ajax({
      url: base_url+"index.php?/store_design/storedesign/save_home_advertising",
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
function load_home_advertising(id_home_design_advertising)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/storedesign/load_home_advertising",
      async: false,
      type: "POST",    
      data:{"id_home_design_advertising":id_home_design_advertising} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.html;    
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function delete_home_design_advertising(id_home_design_advertising)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/storedesign/delete_home_advertising",
      async: false,
      type: "POST",    
      data:{"id_home_design_advertising":id_home_design_advertising} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;   
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function ajax_load_home_design_tabs_form(callback)
{  
  if ( typeof CKEDITOR !== 'undefined' && typeof CKEDITOR.instances.tab_content !== 'undefined' ){
    CKEDITOR.instances.tab_content.destroy();
  }
  var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/storedesign/form_tabs",
      async: true,
      type: "POST",    
      dataType: "json",
      success: function(data) 
      { 
         callback(data);
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}  
function callback_ajax_load_home_design_tabs_form(response)
{
    return response.html;
}
function home_design_add_tab(data_serialize)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   jQuery.ajax({
      url: base_url+"index.php?/store_design/storedesign/add_tab",
      async: false,
      type: "POST",    
      data:data_serialize ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;  
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function home_design_delete_tab(id_tab)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/storedesign/delete_tab/",
      async: false,
      type: "POST",    
      data:{"id_tab":id_tab} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;   
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function ajax_load_home_design_tab(id_tab)
{
 var result = "";
 base_url = "http://"+window.location.hostname+"/";
 //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/storedesign/load_tab",
    async: false,
    type: "POST", 
    data:{"id_tab":id_tab} , 
    dataType: "json",
    success: function(data) 
    { 
      result = data.html;         
       jQuery(".loader-image").fadeOut();
    }
  });
  return result;    
} 

function ajax_load_general_form()
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/store_design/storedesign/form_general_settings",
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
  
} 

function ajax_load_social_media_form()
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/store_design/storedesign/form_social_media",
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
  
} 
function home_design_update_social_media(id_home_design_welcome_text,welcome_text)
{
     var result = "";
      base_url = "http://"+window.location.hostname+"/";
     jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/storedesign/update_welcome_text",
      async: false,
      type: "POST", 
      data:{"welcome_text":welcome_text,"id_home_design_welcome_text":id_home_design_welcome_text} ,    
      dataType: "json",
      success: function(data) 
      { 
           result = data.html; 
       jQuery(".loader-image").fadeOut();
           
      }
    });
      return result;  
}
function uninstall_store_front()
{
     var result = "";
      base_url = "http://"+window.location.hostname+"/";
     jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/unistall/uninstall_store_front",
      async: true,
      dataType: "json",
      success: function() 
      { 
       jQuery(".loader-image").fadeOut();
           
      }
    });
      return result;  
}
function list_store_front_backups()
{
     var result = "";
      base_url = "http://"+window.location.hostname+"/";
     jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/storedesign/load_store_front_backup",
      async: false,
      dataType: "json",
      success: function(data) 
      { 
       result = data.html;
       jQuery(".loader-image").fadeOut();
           
      }
    });
      return result;  
}
function store_front_execute_backup_point(backup_id)
{
     var result = "";
      base_url = "http://"+window.location.hostname+"/";
     jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/unistall/uninstall_store_front",
      async: false,
      dataType: "json",
      type: "POST", 
      data:{"backup_id":backup_id} ,   
      success: function(data) 
      { 
       jQuery(".loader-image").fadeOut();           
      }
    });
      return result;    
}

/*functions for backup developer zone*/
function ajax_backup_developer_zone()
{
    var result = "";
      base_url = "http://"+window.location.hostname+"/";
     jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/backups/backup_developer_zone",
      async: true,
      dataType: "json",
      type: "POST",  
      success: function(data) 
      {       
       jQuery(".loader-image").fadeOut();      
      }
    }); 
}
function ajax_delete_backup_developer_zone(id_backup_developer_zone,callback)
{
    var result = "";
      base_url = "http://"+window.location.hostname+"/";
     jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/backups/delete_backup_developer_zone",
      async: true,
      dataType: "json",
       data:{"id_backup_developer_zone":id_backup_developer_zone} ,
      type: "POST",  
      success: function(data) 
      {  
       callback(data);
       jQuery(".loader-image").fadeOut();      
      }
    }); 
}
function callback_ajax_delete_backup_developer_zone(data)
{
    return data;
}
function ajax_execute_backup_developer_zone(id_backup_developer_zone,callback)
{
    var result = "";
      base_url = "http://"+window.location.hostname+"/";
     jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/backups/execute_backup_developer_zone",
      async: true,
      dataType: "json",
       data:{"id_backup_developer_zone":id_backup_developer_zone} ,
      type: "POST",  
      success: function(data) 
      {  
       callback(data);
       jQuery(".loader-image").fadeOut();      
      }
    }); 
}
function callback_ajax_execute_backup_developer_zone(data)
{
    return data;
}
function ajax_view_backup_developer_zone(id_backup_developer_zone,callback)
{
    var result = "";
      base_url = "http://"+window.location.hostname+"/";
     jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/backups/view_backup_developer_zone",
      async: true,
      dataType: "json",
       data:{"id_backup_developer_zone":id_backup_developer_zone} ,
      type: "POST",  
      success: function(data) 
      {  
       callback(data);
       jQuery(".loader-image").fadeOut();      
      }
    }); 
}
function callback_ajax_view_backup_developer_zone(data)
{
    return data;
}
jQuery(document).on("click",".backup_developer_zone",function()
{
   my_backups_link = "http://"+window.location.hostname+"/store_design/backups?show_dz=true";
   ajax_backup_developer_zone();
   show_successfull_message("Developer Zone backup was created successful.<br><a href='"+my_backups_link+"'>My backups</a>")
});
function ajax_load_item_specifications_widget_view(callback)
{
    var result = "";
      base_url = "http://"+window.location.hostname+"/";
     jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/itemspecifics/load_item_specifications_widget_view",
      async: true,
      dataType: "json",
      type: "POST",  
      success: function(data) 
      {  
       callback(data);
       jQuery(".loader-image").fadeOut();      
      }
    }); 
}
function callback_ajax_load_item_specifications_widget_view(data)
{
    return data;
}
function update_status_variation_specific(specific_id,status,callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/itemspecifics/update_status_variation_specific",
          async: true,
          type: "POST",  
          data: {"specific_id":specific_id,"status":status},
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
function call_update_status_variation_specific(response)
{
 return response;
}
function ajax_load_item_specifications_values_view(specific_name, callback)
{
    var result = "";
      base_url = "http://"+window.location.hostname+"/";
     jQuery.ajax
      ({
      url: base_url+"index.php?/store_design/itemspecifics/specifics_list",
      async: true,
      data: {"specific":specific_name},
      dataType: "json",
      type: "POST",  
      success: function(data) 
      {  
       callback(data);
       jQuery(".loader-image").fadeOut();      
      }
    }); 
}
function callback_ajax_load_item_specifications_values_view(data)
{
    return data;
}
function delete_specifics(specific_name,specific_id)
{
 jQuery("#dialog_message").html("<b>Are you sure?</b>");
 jQuery("#dialog-confirm").attr("title","Delete "+specific_name+" widget");
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

        url: base_url+"index.php?/store_design/itemspecifics/delete_specifics",
        async: true,
        type: "POST",    
        dataType: "json",
        data:{"specific_name":specific_name,"specific_id":specific_id},
        success: function(data) 
        { 
         remove_dialog(false);          
         jQuery(".ui-dialog").fadeOut();
         jQuery(".ui-widget-overlay").fadeOut();
         jQuery(".row-"+specific_id).remove();
        }
      });
    },
    Cancel: function() {
    jQuery( this ).dialog( "close" );
    }
    }
    });  
}
function update_custom_name(specific_id,custom_name,callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/itemspecifics/update_custom_name",
          async: true,
          type: "POST",  
          data: {"specific_id":specific_id,"custom_name":custom_name},
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
function call_update_custom_name(response)
{
 return response;
}
function update_front_order_advertising(id,order_value,callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/storedesign/update_order_advertising",
          async: true,
          type: "POST",  
          data: {"id":id,"order_value":order_value},
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
function call_update_front_order_advertising(response)
{
 return response;
}