function init_listings_installation(current_tab)
{
    jQuery(".alert").fadeOut();
    var items_collection = [];
    jQuery(".webstore_items").find(".item_id").each(function()
    {
      item_id = jQuery(this).text();
      if(item_id!=undefined)
         items_collection.push(item_id);
    });
     if(items_collection.length==0)
        {
          show_warning_message("Please, synchronize listings under Rocklister before use this feature.");  
        }
        else
        {
           
               show_dialog_popup("Exporting listings to webstore","<div class='item-notification'><div class='processing-loader'></div></div>");
               jQuery(".progress").fadeIn();
               var itarator = 0;
               jQuery.each(items_collection, function(index, ItemID)
           {     
               var length = items_collection.length;           
               install_single_listing(ItemID, function(response)
               { 
                 itarator = itarator+1;
                 call_back_install_single_listing(response);      
                 progress_width = itarator /length * 100;
                 jQuery(".bar").css("width",Math.round(progress_width)+"%");
                   if(itarator== length)
                    {
                        if(length>1)
                          jQuery(".item-notification").prepend(length+' items were installed successful <a href="javascript:remove_dialog_send_to_webstore(true)" class="close-dialog">close</a><br>');
                        if(length==1)
                          jQuery(".item-notification").prepend(length+' item was installed successful  <a href="javascript:remove_dialog_send_to_webstore(true)" class="close-dialog">close</a><br>');

                             jQuery(".bar").css("width","100%");
                            
                    }
                });           
                 
           });
              
        }
}  
function install_single_listing(item_id, callback)
       {
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/webstores/webstore/install_listing",
    async: true,
    type: "POST",    
    data: {item_id:item_id},
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
function call_back_install_single_listing(response)
{
  title = response.title;
  status = response.status;
  if(status=="added")
  jQuery(".item-notification").append('<i class=" icon-ok-sign" title="added"></i> '+title+'<br>');
  jQuery(".processing-loader").fadeOut();
  return true;
}



//BLOGGER

function blogger_init_listings_installation(blog_id)
{
    jQuery(".alert").fadeOut();
    var items_collection = [];
    jQuery(".webstore_items").find(".item_id").each(function()
    {
      item_id = jQuery(this).text();
      if(item_id!=undefined)
         items_collection.push(item_id);
    });
     if(items_collection.length==0)
        {
          show_warning_message("Please, synchronize listings under Rocklister before use this feature.");  
        }
        else
        {
           
               show_dialog_popup("Exporting listings to blogger","<div class='item-notification'><div class='processing-loader'></div></div>");
               jQuery(".progress").fadeIn();
               var itarator = 0;
               jQuery.each(items_collection, function(index, ItemID)
           {     
               var length = items_collection.length;           
               blogger_install_single_listing(blog_id, ItemID, function(response)
               { 
                 itarator = itarator+1;
                 blogger_call_back_install_single_listing(response);      
                 progress_width = itarator /length * 100;
                 jQuery(".bar").css("width",Math.round(progress_width)+"%");
                   if(itarator== length)
                    {
                        if(length>1)
                          jQuery(".item-notification").prepend(length+' items were installed successful <a href="javascript:remove_dialog_send_to_blogger(true)" class="close-dialog">close</a><br>');
                        if(length==1)
                          jQuery(".item-notification").prepend(length+' item was installed successful  <a href="javascript:remove_dialog_send_to_blogger(true)" class="close-dialog">close</a><br>');

                             jQuery(".bar").css("width","100%");
                            
                    }
                });           
                 
           });
              
        }
}  
function blogger_install_single_listing(blog_id, item_id, callback)
       {
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/webstores/blogger/add_blog_post",
    async: true,
    type: "POST",    
    data: {"blog_id":blog_id,"item_id":item_id},
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
function blogger_call_back_install_single_listing(response)
{
  title = response.title;
  status = response.status;
  if(status=="added")
  jQuery(".item-notification").append('<i class=" icon-ok-sign" title="added"></i> '+title+'<br>');
  jQuery(".processing-loader").fadeOut();
  return true;
}
