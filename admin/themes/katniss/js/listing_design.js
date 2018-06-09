jQuery().ready(function() 
{
 
  jQuery("li.listing-pictures").click(function()
  {
      jQuery(".button_import_update_categories").fadeOut();
    // jQuery(".alert").css("display","none");
    jQuery(".listing-images-content").fadeIn();
     jQuery(".listing-images").fadeIn();
    jQuery(".content-without-images").html("");
    set_current(this);
    jQuery(".listing-pictures-part").find(".alert").fadeIn();
    
  });
  /*Import categories*/
    jQuery(".button_import_update_categories").click(function()
    {
    jQuery(".loader-image").fadeIn();
    ajax_import_update_categories();
    jQuery(".dynamic-categories").click();
       
    });
      jQuery("li.listing-item-specifications-widget").click(function()
  {
   jQuery(".loader-image").fadeIn();
     jQuery(".alert").css("display","none");
     jQuery(".listing-images-content").css("display","none");
     jQuery(".button_import_update_categories").fadeOut();
   ajax_load_item_specifications_widget_view(function(response)
{
    data = callback_ajax_load_item_specifications_widget_view(response);
   jQuery(".content-without-images").html(data.view);
    set_current("li.listing-item-specifications-widget");
});
   
    
  });
     jQuery("li.welcome-text-listing").click(function()
  {
      if(typeof CKEDITOR != "undefined")
      {
       delete CKEDITOR.instances['welcome_text']   
      }
  
     jQuery(".alert").css("display","none");
     jQuery(".loader-image").fadeIn();
     jQuery(".listing-images-content").css("display","none");  
     jQuery(".button_import_update_categories").fadeOut();
    ajax_load_welcome_text_form(function(response)
 {
     result = callback_ajax_load_welcome_text_form(response);
      jQuery(".content-without-images").html(result.html);
     set_current(this);
 });
  });
  jQuery("li.tabs").click(function()
  {
      jQuery(".button_import_update_categories").fadeOut();
      if(typeof CKEDITOR != "undefined")
      {
       delete CKEDITOR.instances['tab_content']   
      }
      ;
  
     jQuery(".alert").css("display","none");
     jQuery(".loader-image").fadeIn();
     jQuery(".listing-images-content").css("display","none");  
    ajax_load_tabs_form(function(response)
    {
        form_tabs = callback_ajax_load_tabs_form(response);
         jQuery(".content-without-images").html(form_tabs);
         
    });
     set_current(this);
  });

  jQuery("li.listing-description").click(function()
  {
      jQuery(".button_import_update_categories").fadeOut();
       if(typeof CKEDITOR != "undefined")
      {
       delete CKEDITOR.instances['description']   
      }
       jQuery(".loader-image").fadeIn();    

    jQuery(".alert").css("display","none");   
    jQuery(".listing-images-content").css("display","none"); 
     form = ajax_load_listing_description_form();
    jQuery(".content-without-images").html(form);
    set_current(this);
  });
 jQuery("li.listing-title").click(function()
  {
      jQuery(".button_import_update_categories").fadeOut();
       jQuery(".loader-image").fadeIn();    

    jQuery(".alert").css("display","none");   
    jQuery(".listing-images-content").css("display","none"); 
     form = ajax_load_listing_title_form();
    jQuery(".content-without-images").html(form);
    set_current(this);
  });
  jQuery("li.advertising").click(function()
  {
      jQuery(".button_import_update_categories").fadeOut(); 
     count_clicked = 0;
      jQuery(".loader-image").fadeIn();
     jQuery(".alert").css("display","none");
    form = ajax_load_listing_advertising_form();
    jQuery(".content-without-images").html(form);
    set_current(this);
    jQuery(".listing-images-content").css("display","none"); 
      jQuery(".listing-images-content").css("display","none"); 
     if(count_clicked == 0)
    {
          jQuery(".content-without-images").html(form);
          count_clicked++;
    }
  });
  //load popular categories
  jQuery("li.popular-categories").click(function()
  {
      jQuery(".button_import_update_categories").fadeOut();
      jQuery("#global_location").val("listing");
      count_clicked = 0;
      jQuery(".loader-image").fadeIn();
    jQuery(".alert").css("display","none");
    form = ajax_popular_category_form("listing");
    jQuery(".content-without-images").html(form);
    set_current(this);
    jQuery(".listing-images-content").css("display","none"); 
     if(count_clicked == 0)
    {
          jQuery(".content-without-images").html(form);
          count_clicked++;
    }
  });
   jQuery("li.featured-listing").click(function()
  {  
      jQuery("#global_location").val("listing_featured");
      jQuery(".button_import_update_categories").fadeOut();
       count_clicked = 0;
      jQuery(".listing-images-content").fadeOut();
      jQuery(".loader-image").fadeIn();
     jQuery(".alert").css("display","none");
    form = ajax_load_listing_featured_form("listing");
    jQuery(".content-without-images").html(form);
    set_current(this);
   
    if(count_clicked == 0)
    {
          jQuery(".content-without-images").html(form);
          count_clicked++;
    }
     jQuery(".listing-images-content").css("display","none"); 
  });
   jQuery("li.specials-listing").click(function()
  {  
      jQuery("#global_location").val("listing_specials");
      jQuery(".button_import_update_categories").fadeOut();
       count_clicked = 0;
      jQuery(".listing-images-content").fadeOut();
      jQuery(".loader-image").fadeIn();
     jQuery(".alert").css("display","none");
    form = ajax_load_listing_special_form("listing");
    jQuery(".content-without-images").html(form);
    set_current(this);
   
    if(count_clicked == 0)
    {
          jQuery(".content-without-images").html(form);
          count_clicked++;
    }
     jQuery(".listing-images-content").css("display","none"); 
  });
     jQuery("li.arrivals-listing").click(function()
  {  
      jQuery("#global_location").val("listing_arrivals");
      jQuery(".button_import_update_categories").fadeOut();
       count_clicked = 0;
      jQuery(".listing-images-content").fadeOut();
      jQuery(".loader-image").fadeIn();
     jQuery(".alert").css("display","none");
    form = ajax_load_listing_new_arrivals_form("listing");
    jQuery(".content-without-images").html(form);
    set_current(this);
   
    if(count_clicked == 0)
    {
          jQuery(".content-without-images").html(form);
          count_clicked++;
    }
     jQuery(".listing-images-content").css("display","none"); 
  });
   jQuery("li.listing-slider").click(function()
  {
      jQuery(".button_import_update_categories").fadeOut();
      count_clicked = 0;
      jQuery(".loader-image").fadeIn();
      
     jQuery(".alert").css("display","none");
    form = ajax_load_image_vide_slider_form();
    jQuery(".content-without-images").html(form);
    set_current(this);  jQuery(".listing-images-content").css("display","none");  
     jQuery(".listing-images-content").css("display","none"); 
    if(count_clicked == 0)
    {
          jQuery(".content-without-images").html(form);
          count_clicked++;
    }
  });
   jQuery("li.menu-manager").click(function()

    {
        jQuery(".button_import_update_categories").fadeOut();
        jQuery(".loader-image").fadeIn();
        jQuery(".alert").css("display","none");
        base_url = "http://"+window.location.hostname+"/";
       jQuery(".content-without-images").html( '<iframe src="'+base_url+'store_design/listingdesign/easymenu?act=menu" frameborder="0" style="width: 100%;height:800px;"></iframe>' );
        set_current(this);
        jQuery(".listing-images-content").css("display","none");
        jQuery(".loader-image").fadeOut(); 
    });
      jQuery("li.dynamic-categories").click(function()
    {       
        jQuery(".button_import_update_categories").fadeIn();
        jQuery(".loader-image").fadeIn();
        jQuery(".alert").css("display","none");
        base_url = "http://"+window.location.hostname+"/";
       jQuery(".content-without-images").html( '<iframe src="'+base_url+'store_design/listingdesign/load_dynamic_categories?act=menu" frameborder="0" style="width: 100%;height:100%;"></iframe>' );
        set_current(this);
        jQuery(".listing-images-content").css("display","none");
        jQuery(".loader-image").fadeOut(); 
    });
  jQuery("li.listing-layout").click(function()
  {
      jQuery(".button_import_update_categories").fadeOut();
      jQuery(".loader-image").fadeIn();
      jQuery(".alert").css("display","none");
      form = ajax_load_layout_maker();
      jQuery(".content-without-images").html(form);
      set_current(this);
     jQuery(".listing-images-content").css("display","none"); 
  });
});
/*Functions for interface*/

/*START Funcions for listing pictures on listing settings*/
function ajax_load_listing_pictures_form()
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/store_design/listingdesign/form_listing_pictures",
    async: false,
    type: "POST",    
    /*    data:{"id_newsletter_design":id_newsletter_design} ,  */
    dataType: "json",
    success: function(data) 
    { 
      result = data.html;         
    }
  });
  return result;    
   jQuery(".loader-image").fadeOut();
}  

function ajax_load_tabs_form(callback)
{
  
  if ( typeof CKEDITOR !== 'undefined' && typeof CKEDITOR.instances.tab_content !== 'undefined' ){
    CKEDITOR.instances.tab_content.destroy();
  }

  var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/form_tabs",
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
function callback_ajax_load_tabs_form(data)
{
    return data.html;
}

function update_listing_pictures_area()
{
  
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/update_listing_pictures_area",
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
function delete_listing_picture(id_listing_design_picture,image_name)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/delete_listing_picture",
      async: false,
      type: "POST",    
      data:{"id_listing_design_picture":id_listing_design_picture,"image_name":image_name} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;     
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function change_status_listing_picture(id_listing_design_picture,image_name)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/change_status_listing_picture",
      async: false,
      type: "POST",    
      data:{"id_listing_design_picture":id_listing_design_picture,"image_name":image_name} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;       
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function add_tab(data_serialize)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   jQuery.ajax({
      url: base_url+"index.php?/store_design/listingdesign/add_tab",
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

function delete_tab(id_tab)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/delete_tab",
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

function ajax_load_tab(id_tab)
{
 var result = "";
 base_url = "http://"+window.location.hostname+"/";
 //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_tab",
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


function ajax_load_listing_description_form()
{
  
  if ( typeof CKEDITOR !== 'undefined' && typeof CKEDITOR.instances.description !== 'undefined' )
    CKEDITOR.instances.description.destroy();

   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/form_description",
      async: false,
      type: "POST",    
      dataType: "json",
      beforeSend : function (){
           jQuery(".loader-image").fadeIn();
            },
      success: function(data) 
      { 
        result = data.html;     
             jQuery(".loader-image").fadeOut();
               
      }
    });
  return result;    
}
function ajax_load_listing_title_form()
{
  
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/form_title",
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
function update_listing_title(data_serialize)
{
  
 var result = "";
 base_url = "http://"+window.location.hostname+"/";
  jQuery(".loader-image").fadeIn();
 jQuery.ajax({
    url: base_url+"index.php?/store_design/listingdesign/update_listing_title",
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
function update_listing_description(data_serialize)
{
  
 var result = "";
 base_url = "http://"+window.location.hostname+"/";
  jQuery(".loader-image").fadeIn();
 jQuery.ajax({
    url: base_url+"index.php?/store_design/listingdesign/update_listing_description",
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

function ajax_load_listing_advertising_form()
{
  jQuery("li.listing-pictures").click();
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_advertising/",
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
function ajax_load_listing_featured_form(load_type)
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_featured_listing",
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
function ajax_load_listing_new_arrivals_form(load_type)
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_new_arrivals_listing",
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
function ajax_load_listing_new_arrivals_part_form()
{
  
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_new_arrivals_listing_part",
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
function save_new_arrivals_listing(id,title,link,price,image_url)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   jQuery.ajax({
      url: base_url+"index.php?/store_design/listingdesign/save_arrival_listing",
      async: false,
      type: "POST",    
      data: {"id":id,"title":title,"link":link,"image_url":image_url,"price":price} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;   
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function load_listing_arrival_array(id_featured_listing)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/load_arrival_listings_array",
      async: false,
      type: "POST",    
      data:{"id_featured_listing":id_featured_listing} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.html;         
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function delete_arrival_listing(id_featured_listing)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/delete_arrival_listing",
      async: false,
      type: "POST",    
      data:{"id_featured_listing":id_featured_listing} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;      
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
/*special*/
function ajax_load_listing_special_form(load_type)
{
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_special_listing",
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
function save_special_listing(id,title,link,price,sale_price,image_url)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   jQuery.ajax({
      url: base_url+"index.php?/store_design/listingdesign/save_special_listing",
      async: false,
      type: "POST",    
      data: {"id":id,"title":title,"link":link,"image_url":image_url,"price":price,"sale_price":sale_price} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;   
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function ajax_load_listing_special_part_form()
{
  
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_special_listing_part/",
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
function delete_special_listing(id_featured_listing)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/delete_special_listing",
      async: false,
      type: "POST",    
      data:{"id_featured_listing":id_featured_listing} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;      
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function load_listing_special_array(id_featured_listing)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/load_special_listings_array",
      async: false,
      type: "POST",    
      data:{"id_featured_listing":id_featured_listing} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.html;         
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function ajax_load_listing_featured_part_form()
{
  
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_featured_listing_part",
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
function ajax_popular_category_form(load_type)
{
  jQuery("li.listing-pictures").click();
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_popular_categories",
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

function ajax_load_listing_advertising_part_form()
{
  
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_advertising_part",
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

function save_listing_advertising(id,title,link,image_url)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   jQuery.ajax({
      url: base_url+"index.php?/store_design/listingdesign/save_listing_advertising",
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

function delete_listing_advertising(id_listing_design_advertising)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/delete_listing_advertising",
      async: false,
      type: "POST",    
      data:{"id_listing_design_advertising":id_listing_design_advertising} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;   
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}

function load_listing_advertising(id_listing_design_advertising)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/load_listing_advertising",
      async: false,
      type: "POST",    
      data:{"id_listing_design_advertising":id_listing_design_advertising} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.html;    
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function save_featured_listing(id,title,link,price,image_url)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   jQuery.ajax({
      url: base_url+"index.php?/store_design/listingdesign/save_featured_listing",
      async: false,
      type: "POST",    
      data: {"id":id,"title":title,"link":link,"image_url":image_url,"price":price} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;   
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function delete_featured_listing(id_featured_listing)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/delete_featured_listing",
      async: false,
      type: "POST",    
      data:{"id_featured_listing":id_featured_listing} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;      
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function load_listing_deatured_array(id_featured_listing)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/load_featured_listings_array",
      async: false,
      type: "POST",    
      data:{"id_featured_listing":id_featured_listing} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.html;         
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function ajax_load_image_vide_slider_form()
{
  jQuery("li.listing-pictures").click();
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_image_video_slider",
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
function save_images_videos_slider(id,link,image_url,type)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   jQuery.ajax({
      url: base_url+"index.php?/store_design/listingdesign/save_images_videos_slider",
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
function ajax_load_listing_images_videos_slider_part_form()
{
  
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_images_videos_slider_part",
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
function ajax_load_images_videos_slider_part_providers_form(provider)
{
  
  var result = "";
  base_url = "http://"+window.location.hostname+"/";
  //alert(base_url)
   jQuery.ajax({

    url: base_url+"index.php?/store_design/listingdesign/load_images_videos_slider_part_providers_part",
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
function load_images_videos_slider_array(id_listing_design_slider)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/load_images_videos_slider_array",
      async: false,
      type: "POST",    
      data:{"id_listing_design_slider":id_listing_design_slider} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.html;  
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function delete_images_videos_slider(id_listing_design_slider)
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/delete_images_videos_slider",
      async: false,
      type: "POST",    
      data:{"id_listing_design_slider":id_listing_design_slider} ,
      dataType: "json",
      success: function(data) 
      { 
        result = data.message;  
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}

function check_vimeo_youtube_video_url(url)
{
	var output = '';
	var youtubeUrl = url.match(/watch\?v=([a-zA-Z0-9\-_]+)/);
        var youtubeUrl1 = url.match(/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/);
	var vimeoUrl = url.match(/http:\/\/(www\.)?vimeo.com\/(\d+)($|\/)/);
	if( youtubeUrl ){
		return "youtube";
        }
        if( youtubeUrl1 ){
		return "youtube";
        }
        if(vimeoUrl)
        return "vimeo";
}

function generate_listing_design_code()
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/generate_listing_design_code",
      async: false,
      type: "POST",    
      data:{} ,
      dataType: "json",
      success: function(data) 
      { 
          if(data.listing_code)
          result = data.listing_code;  
          else
           result = [data.warning];  
        jQuery(".loader-image").fadeOut();
      }
    });
  return result;  
}
  function ajax_load_layout_maker()
        {
            var result = "";
            jQuery.ajax({
                url: base_url+"index.php?/store_design/listingdesign/load_layout_maker",
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
        function ajax_import_update_categories()
        {
            var result = "";
            jQuery.ajax({
                url: base_url+"index.php?/store_design/listingdesign/save_update_categories",
                async: true,
                type: "POST",    
                dataType: "json",
                beforeSend: function() {
            jQuery(".loader-image").fadeIn();
        },
                success: function(data) 
                {                        
                  jQuery(".loader-image").fadeOut();
                  if (data.FAILURE === undefined)
                  {}
                  else
                  show_error_message(data.eMessage[0]) ;
                }
            });
            return result ;
        }
        function get_images_count_per_listing()
{
   var result = "";
   base_url = "http://"+window.location.hostname+"/";
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/store_design/listingdesign/get_images_count_per_listing",
      async: false,
      type: "POST",    
      dataType: "json",
      success: function(data) 
      { 
        result = data.count;  
         jQuery(".loader-image").fadeOut();
      }
    });
  return result;    
}
function open_listing_images()
{
      jQuery(".listing-images").html( '<iframe scrolling="no" frameborder="0" allowtransparency="true" src="'+base_url+'/example/index.php" frameborder="0" style="width: 100%;height:100%;"></iframe>' );
}
function update_listing_order_advertising(id,order_value,callback)
       {
        jQuery(".loader-image").fadeIn();
        var result = "";
        base_url = "http://"+window.location.hostname+"/";
        //alert(base_url)
         jQuery.ajax({
          url: base_url+"index.php?/store_design/listingdesign/update_order_advertising",
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
function call_update_listing_order_advertising(response)
{
 return response;
}