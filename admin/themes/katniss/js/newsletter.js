jQuery().ready(function() 
{
 jQuery("li.welcome-text").click(function()
 {
     id_newsletter_design = jQuery("#id_newsletter_design").val();
     form_welcome_text = ajax_load_welcome_text_form(id_newsletter_design);
     jQuery("#content").html(form_welcome_text);
     set_current(this);
 });
 jQuery("li.main-banner").click(function()
 {
     id_newsletter_design = jQuery("#id_newsletter_design").val();
     form_main_banner = ajax_load_main_banner_form(id_newsletter_design);
     jQuery("#content").html(form_main_banner);
     set_current(this);
 });
 jQuery("li.listings-newsletter").click(function()
 {
     id_newsletter_design = jQuery("#id_newsletter_design").val();
     form_load_listings= ajax_load_listings_form(id_newsletter_design);
     jQuery("#content").html(form_load_listings);
      jQuery("#content").html(form_load_listings);
    set_current(this);
 }); 
});

/*START Funcions for welcome text on newsletter settings*/
function ajax_load_welcome_text_form(id_newsletter_design)
{
    var result = "";
   base_url = jQuery("#base_url").val();
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/marketing/newsletter/form_welcome_text/",
      async: false,
      type: "POST",    
      data:{"id_newsletter_design":id_newsletter_design} ,  
      dataType: "json",
      success: function(data) 
      { 
        result = data.html;         
      }
    });
  return result;    
}  

function update_welcome_text(id_newsletter_design,current_welcome_text)
{
   var result = "";
     base_url = jQuery("#base_url").val();
     jQuery.ajax({
      url: base_url+"index.php?/marketing/newsletter/update_welcome_text/",
      async: false,
      type: "POST",    
      data:{"id_newsletter_design":id_newsletter_design,"current_welcome_text":current_welcome_text} ,  
      dataType: "json",
      success: function(data) 
      { 
        result = data;     
      }
    });
  return result;    
}  
/*END Funcions fro welcome text on newsletter settings*/
/*START Funcions for main banner on newsletter settings*/
function ajax_load_main_banner_form(id_newsletter_design)
{
    var result = "";
   base_url = jQuery("#base_url").val();
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/marketing/newsletter/form_main_banner/",
      async: false,
      type: "POST",    
      data:{"id_newsletter_design":id_newsletter_design} ,  
      dataType: "json",
      success: function(data) 
      { 
        result = data.html;         
      }
    });
  return result;    
}  
  function updateBannerURL(id_newsletter_component, value)
  {
      jQuery.ajax
      ({
      url: base_url+"index.php?/marketing/newsletter/update_main_banner/",
      async: false,
      type: "POST", 
       data:{"id_newsletter_component":id_newsletter_component,"value":value} ,    
      dataType: "json",
      success: function(data) 
      { 
      }
    });
  }
/*END Funcions fro welcome text on newsletter settings*/

/*START Funcions for listings*/
function ajax_load_listings_form(id_newsletter_design)
{
    var result = "";
   base_url = jQuery("#base_url").val();
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/marketing/newsletter/load_listings/",
      async: false,
      type: "POST",    
      data:{"id_newsletter_design":id_newsletter_design} ,  
      dataType: "json",
      success: function(data) 
      { 
        result = data.html;         
      }
    });
  return result;    
} 
function ajax_add_listings__form(message)
{
   var result = "";
   base_url = jQuery("#base_url").val();
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/marketing/newsletter/add_listing_form/",
      async: false,
      type: "POST",     
      dataType: "json",
       data:{"message":message} ,    
      success: function(data) 
      { 
        result = data.html;         
      }
    });
  return result;    
} 
function ajax_add_listings_form()
{
    var result = "";
   base_url = jQuery("#base_url").val();
   //alert(base_url)
     jQuery.ajax({

      url: base_url+"index.php?/marketing/newsletter/add_listing_form/",
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
 function save_listing(id_newsletter_design,title,price,image_url,description, link)
  {
      base_url = jQuery("#base_url").val();
      jQuery.ajax
      ({
      url: base_url+"index.php?/marketing/newsletter/save_listing",
      async: false,
      type: "POST", 
       data:{"id_newsletter_design":id_newsletter_design,"title":title,"price":price,"image_url":image_url,"description":description,"link":link} ,    
      dataType: "json",
      success: function(data) 
      {         
      }
    });
  }
 function  change_listing_status(id_neswletter_listing, current_status,id_newsletter_design)
 {
     var result = "";
     base_url = jQuery("#base_url").val();
      jQuery.ajax
      ({
      url: base_url+"index.php?/marketing/newsletter/change_listing_status",
      async: false,
      type: "POST", 
       data:{"id_neswletter_listing":id_neswletter_listing,"current_status":current_status,"id_newsletter_design":id_newsletter_design} ,    
      dataType: "json",
      success: function(data) 
      {        
          result = data; 
      }
    });
     return result; 
 }
    function edit_listing_form(id_neswletter_listing,current_title,current_price,current_image_url,base_url,description,link)
  {
      
      /*update fearured listing doing AJAX next step go to featured.php update_featured_listing() function*/
       var result = "";
      jQuery.ajax
      ({
      url: base_url+"index.php?/marketing/newsletter/edit_listing_form",
      async: false,
      type: "POST", 
      data:{"id_neswletter_listing":id_neswletter_listing,"current_title":current_title,"current_price":current_price,"current_image_url":current_image_url,"description":description,"link":link} ,    
      dataType: "json",
      success: function(data) 
      { 
         result = data; 
      }
    });
     return result; 
  }
      function update_listing(id_neswletter_listing,new_title,new_price,new_image_url,base_url)
  {      
      /*update fearured listing doing AJAX next step go to featured.php update_featured_listing() function*/
       var result = "";
      jQuery.ajax
      ({
      url: base_url+"index.php?/marketing/newsletter/update_listing",
      async: false,
      type: "POST", 
      data:{"id_neswletter_listing":id_neswletter_listing,"title":new_title,"price":new_price,"image_url":new_image_url} ,    
      dataType: "json",
      success: function(data) 
      { 
         result = data; 
      }
    });
     return result; 
  }
      function delete_listing(id_neswletter_listing,id_newsletter_design)
  {      
      /*update fearured listing doing AJAX next step go to featured.php update_featured_listing() function*/
       var result = "";
      jQuery.ajax
      ({
      url: base_url+"index.php?/marketing/newsletter/delete_listing",
      async: false,
      type: "POST", 
      data:{"id_neswletter_listing":id_neswletter_listing,"id_newsletter_design":id_newsletter_design} ,    
      dataType: "json",
      success: function(data) 
      { 
         result = data; 
      }
    });
     return result; 
  }
  function get_last_listing_id_inserted(id_newsletter_design)
  {
       /*update fearured listing doing AJAX next step go to featured.php update_featured_listing() function*/
       var last_id = 0;
      jQuery.ajax
      ({
      url: base_url+"index.php?/marketing/newsletter/get_last_listing_id_inserted",
      async: false,
      type: "POST", 
      data:{"id_newsletter_design":id_newsletter_design} ,    
      dataType: "json",
      success: function(data) 
      { 
         last_id = data.last_id; 
      }
    });
     return last_id; 
  }
  function set_current(element)
  {
      jQuery( "#of-nav li" ).each(function( index ) 
      {
        jQuery(this).removeClass("current");
      });
       jQuery(element).addClass("current");
  }