function reset_sync_sessions()
       {
       
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/reset_sync_sessions",
    async: true,
    type: "POST",    
    dataType: "json",
    success: function(data) 
    { 
            
    },
   complete: function(data) 
    { 
        remove_dialog(true);
    }
  });
       }
function ajax_load_edit_description_form(item_id, callback)
{
     jQuery(".loader-image").fadeIn(); 
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
   //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/load_edit_description_form",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{"item_id":item_id},
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
function callback_ajax_load_edit_description_form(response)
{
         if(typeof CKEDITOR != "undefined")
      {
       delete CKEDITOR.instances['edit_description_overview']   
      }
      jQuery(".rocklister-section").fadeOut();     
         jQuery(".edit-description-section").html(response.html);
         jQuery(".edit-description-section").fadeIn();  
      if(response.is_rockscripts_template=="true")
      {
          
      }
      else
      {
         jQuery(".alert-info").fadeIn();
      }
         
}
//Save Description
function  save_item_description(item_id,edit_description_overview,action)
{
    jQuery(".loader-image").fadeIn(); 
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/save_item_description",
    async: true,
    type: "POST",    
    dataType: "json",
    data:{"item_id":item_id,"edit_description_overview":edit_description_overview,"action":action},
    success: function(data) 
    {     
    },
   complete: function(data) 
    { 
       jQuery(".loader-image").fadeOut();       
    }
  }); 
}
/*START Funcions for listing pictures on listing settings*/
function ajax_item_sync(callback)
{
  jQuery(".loader-image").fadeIn(); 
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/items_sync",
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
        update_installation_wizard_installed_field("true");     
    }
  });
}
function callback_ajax_item_sync(response)
{
   if(response.items_collection_to_import)
   {
        show_dialog_popup("eBay Inventory Synchronization","<div class='item-notification'></div>");
       pages_to_import = parseInt(response.pages_to_import);
       var pages_left = -1;
       var length = response.items_collection_to_import_length;
       if(pages_to_import>-1)
       {
           current_page_to_import = parseInt(response.current_page_to_import);
        pages_left = pages_to_import - current_page_to_import; 
        if(length<=200)
               {
                jQuery(".item-notification").prepend("<b>Pages Left:</b> "+pages_left+"<br><br>");
        jQuery(".item-notification").prepend("<b>Current page importing:</b> "+response.current_page_to_import+"<br>");        
        jQuery(".item-notification").prepend("<b>Pages to import:</b> "+response.pages_to_import+" (each page have 200 items)<br>");   
               }
        
        jQuery(".item-notification").prepend("<b>Listings imported:</b> <span id='listings-imported'>0</span><br><br>");
       }
       
       jQuery(".progress").fadeIn();
       
       var itarator = -1;
       jQuery.each(response.items_collection_to_import, function(index, item)
   {                         
       item_import_single(item.ItemID, function(response)
       {      
           itarator = itarator+1;
         call_back_item_import_single(response);
         progress_width = itarator /length * 100;
         jQuery(".bar").css("width",Math.round(progress_width)+"%");
          if(itarator== length-1)
       {
           
           if(pages_left>0)
           {
               if(length>200)
               {
                 sync_url_rock = "http://"+window.location.hostname+"/designmanager/rocklister/rocklister";
                 jQuery(".item-notification").prepend("<b>"+length+' items were procesed successful </b><br>');
                 jQuery(".item-notification").prepend(' <a href="javascript:remove_dialog(true)" alt="you can resume importation after click sync button" title="Close this dialog" class="close-dialog">Close dialog</a><br>');
               }
               else{
                sync_url_rock = "http://"+window.location.hostname+"/designmanager/rocklister/rocklister/?sync=true";
                jQuery(".item-notification").prepend("<b>"+length+' items were procesed successful </b><br><a href="'+sync_url_rock+'" class="sync_items_button next-page-button">Import Next Page...</a><br>');
                jQuery(".item-notification").prepend(' <a href="javascript:remove_dialog(true)" alt="you can resume importation after click sync button" title="you can resume importation after click sync button" class="close-dialog">Close dialog</a>, you can work with current block of items imported. Then you can resume importation clicking Sync button.<br>');
                jQuery(".bar").css("width","100%");    
               }
               
                
           }
           else
           {
                if(length>1)
                 jQuery(".item-notification").prepend(length+' items were procesed successful <a href="javascript:remove_dialog(true)" class="close-dialog">close</a><br>');
                if(length==1)
                 jQuery(".item-notification").prepend(length+' item was procesed successful  <a href="javascript:remove_dialog(true)" class="close-dialog">close</a><br>');         
                 jQuery(".bar").css("width","100%");
                 //reset_sync_sessions();
            }  
            
            
       }
       jQuery("#listings-imported").html(itarator+1);
       });
       
      
   });
   }
}
function callback_ajax_item_processed_sync(items_collection_to_import, response)
{
   if(items_collection_to_import)
   {
       show_dialog_popup("eBay Inventory Synchronization","<div class='item-notification'></div>");
        jQuery(".progress").fadeIn();
         var length = items_collection_to_import.length;
         var itarator = -1;
        
       jQuery.each(items_collection_to_import, function(index, itemID)
   {            
       var response1  = response;
       item_import_single(itemID, function(response)
       {      
         itarator = itarator+1;
         call_back_item_import_single(response1);
         progress_width = itarator /length * 100;
         jQuery(".bar").css("width",Math.round(progress_width)+"%");
          if(itarator== length-1)
       {
           if(length>1)
             jQuery(".item-notification").prepend(length+' items were procesed successful <a href="javascript:remove_dialog(true)" class="close-dialog">close</a><br>');
           if(length==1)
             jQuery(".item-notification").prepend(length+' item was procesed successful  <a href="javascript:remove_dialog(true)" class="close-dialog">close</a><br>');         
                jQuery(".bar").css("width","100%");
       }
       });
      
   });
   }
}
function item_import_single(item_id, callback)
       {
        jQuery(".loader-image").fadeIn();
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/item_import_single",
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
function call_back_item_import_single(response)
{
  title = response.title;
  status = response.status;
  if(status=="added")
  jQuery(".item-notification").append('<i class=" icon-ok-sign" title="added"></i> '+title+'<br>');
  if(status=="updated")
  jQuery(".item-notification").append('<i class="icon-refresh" title="synchronized"></i> '+title+'<br>');
  return true;
}

function init_listing_template_installation(current_tab)
{
    jQuery(".alert").fadeOut();
    var items_collection = [];
    jQuery("."+current_tab).find(".checked").each(function()
    {
      item_id = jQuery(this).attr("item_id");
      if(item_id!=undefined)
         items_collection.push(item_id);
    });
     if(items_collection.length==0)
        {
          show_warning_message("Please, select a listing usign checkbox and try again");  
        }
        else
        {
           
               show_dialog_popup("Listing Design Installation","<div class='item-notification'></div>");
                jQuery(".progress").fadeIn();
                     var itarator = 0;
               jQuery.each(items_collection, function(index, ItemID)
           {     
               var length = items_collection.length;
           
               item_install_listing_template(ItemID, function(response)
               { 
                  itarator = itarator+1;
                 call_back_item_install_listing_template(response);      
                 progress_width = itarator /length * 100;
                 jQuery(".bar").css("width",Math.round(progress_width)+"%");
                   if(itarator== length)
                    {
                        if(length>1)
                          jQuery(".item-notification").prepend(length+' items were procesed successful <a href="javascript:remove_dialog_send_to_prepared_listings(true)" class="close-dialog">close</a><br>');
                        if(length==1)
                          jQuery(".item-notification").prepend(length+' item was procesed successful  <a href="javascript:remove_dialog_send_to_prepared_listings(true)" class="close-dialog">close</a><br>');

                             jQuery(".bar").css("width","100%");
                            
                    }
                });           
                 
           });
              
        }
        }  

function item_install_listing_template(item_id, callback)
       {
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/install_listing_template",
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
function call_back_item_install_listing_template(response)
{
  title = response.title;
  status = response.status;
  if(status=="added")
  jQuery(".item-notification").append('<i class=" icon-ok-sign" title="added"></i> '+title+'<br>');
  return true;
}
function remove_prepared_items(current_tab)
{
    jQuery(".alert").fadeOut();
    var items_collection = [];
    jQuery("."+current_tab).find(".checked").each(function()
    {
      item_id = jQuery(this).attr("item_id");
      if(item_id!=undefined)
         items_collection.push(item_id);
    });
     if(items_collection.length==0)
        {
          show_warning_message("Please, select a listing usign checkbox and try again");  
        }
        else
        {
           
               show_dialog_popup("Remove Prepared Items","<div class='item-notification'></div>");
                jQuery(".progress").fadeIn();
                var itarator1 = 0;
               jQuery.each(items_collection, function(index, ItemID)
           {        
               var length = items_collection.length;               
              
               item_remove_prepared(ItemID, function(response)
               {    itarator1 = itarator1+1;        
                 call_back_item_remove_prepared(response);      
                 progress_width = itarator1 /length * 100;
                 jQuery(".bar").css("width",Math.round(progress_width)+"%");
                 
                   if(itarator1== length)
                    {
                        if(length>1)
                          jQuery(".item-notification").prepend(length+' items were deleted successful <a href="javascript:remove_dialog_send_to_prepared_listings(true)" class="close-dialog">close</a><br>');
                        if(length==1)
                          jQuery(".item-notification").prepend(length+' item was deleted successful  <a href="javascript:remove_dialog_send_to_prepared_listings(true)" class="close-dialog">close</a><br>');
                          jQuery(".bar").css("width","100%");
                         
                    }
                });           
                 
           });
        }
        }  
function item_remove_prepared(item_id, callback)
       {
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/remove_prepared_listing",
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
function call_back_item_remove_prepared(response)
{
  title = response.title;
  status = response.status;
  if(status=="deleted")
  jQuery(".item-notification").append('<i class=" icon-remove-sign" title="added"></i> '+title+'<br>');
  return true;
}

function init_item_send_to_ebay(current_tab)
{
    jQuery(".alert").fadeOut();
    var items_collection = [];
    jQuery("."+current_tab).find(".checked").each(function()
    {
      item_id = jQuery(this).attr("item_id");
      if(item_id!=undefined)
         items_collection.push(item_id);
    });
     if(items_collection.length==0)
        {
          show_warning_message("Please, select a listing usign checkbox and try again");  
        }
        else
        {
           
               show_dialog_popup("eBay Listing Template Installation","<div class='item-notification'></div>");
                jQuery(".progress").fadeIn();
                /*generate backup*/
                add_listing_backup_group(function(response)
                {
                   last_id_backup_group = call_back_add_listing_backup_group(response);  
                   var itarator = 0;
                      jQuery.each(items_collection, function(index, ItemID)
           {           
               var length = items_collection.length;
               
               // add_listing_backup(ItemID,last_id_backup_group);
               item_send_to_ebay(ItemID, function(response)
               {    itarator=itarator+1;      
                 call_back_item_send_to_ebay(response);      
                 progress_width = itarator /length * 100;
                 jQuery(".bar").css("width",Math.round(progress_width)+"%");
                   if(itarator== length)
                    {
                      if(length>1)
                          jQuery(".item-notification").prepend(length+'<b> items were submited to eBay Inc successful, Starting Auto-Sync...</b> <br>');
                        if(length==1)
                          jQuery(".item-notification").prepend(length+' <b>item was submited to eBay Inc successful, Auto-Sync...</b><br>');
                          jQuery(".bar").css("width","100%");
                         /*syncronized:: previous action was with eBay Inc*/ 
                        callback_ajax_item_processed_sync(items_collection, response);
                    }
                });           
                 
           });
                });
           
        }
        }
function add_listing_backup_group(callback)
{
   var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
   jQuery.ajax({
    url: base_url+"index.php?/store_design/installation/add_listing_backup_group",
    async: true,
    type: "POST",    
    dataType: "json",
    success: function(data) 
    { 
        callback(data);      
    }
  }); 
}
function call_back_add_listing_backup_group(response)
{
  return response.group_id;
}
function add_listing_backup(ItemID,group_id)
{
    var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
   jQuery.ajax({
    url: base_url+"index.php?/store_design/installation/add_listing_backup",
    async: true,
    type: "POST",   
    data:{"ItemID":ItemID,"group_id":group_id},
    dataType: "json",
    success: function(data) 
    {      
    }
  }); 
}
function item_send_to_ebay(item_id, callback)
       {
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/ebay_update_listing_description",
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
function call_back_item_send_to_ebay(response)
{
  title = response.title;
  status = response.status;
  if(status=="sent")
  jQuery(".item-notification").append('<i class="icon-upload" title="added"></i> '+title+'<br>');
  return true;
}
function init_item_relist()  
{
     jQuery(".alert").fadeOut();
    var items_collection = [];
    jQuery("."+current_tab).find(".checked").each(function()
    {
      item_id = jQuery(this).attr("item_id");
      if(item_id!=undefined)
         items_collection.push(item_id);
    });
     if(items_collection.length==0)
        {
          show_warning_message("Please, select a listing usign checkbox and try again");  
        }
        else
        {
           
               show_dialog_popup("Relist On eBay Inc","<div class='item-notification'></div>");
                jQuery(".progress").fadeIn();
                var itarator = 0;
   
               jQuery.each(items_collection, function(index, ItemID)
           {       
               var length = items_collection.length;
               
               item_relist_on_ebay(ItemID, function(response)
               {      
                  
                   itarator = itarator+1;
                 call_back_item_relist_on_ebay(response);      
                 progress_width = itarator /length * 100;
                 jQuery(".bar").css("width",Math.round(progress_width)+"%");
                   if(itarator== length)
                    {
                        if(length>1)
                          jQuery(".item-notification").prepend(length+'<b> items were relisted successful.</b> <a href="javascript:remove_dialog_and_sync()" class="close-dialog">close</a><br> <br>');
                        if(length==1)
                          jQuery(".item-notification").prepend(length+' <b>item was relisted successful.</b> <a href="javascript:remove_dialog_and_sync()" class="close-dialog">close</a><br><br>');
                          jQuery(".bar").css("width","100%");                          
                       /*syncronized:: previous action was with eBay Inc*/ 
                    }
                });           
                  
           });
        }
}
function item_relist_on_ebay(item_id, callback)
       {
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/ebay_relist_item",
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
function call_back_item_relist_on_ebay(response)
{
  title = response.title;
  status = response.status;
  if(status=="relisted")
  jQuery(".item-notification").append('<i class="icon-check" title="relisted"></i> '+title+'<br>');
  return true;
}
function init_item_end()  
{


   jQuery(".alert").fadeOut();
    var items_collection = [];
    jQuery("."+current_tab).find(".checked").each(function()
    {
      item_id = jQuery(this).attr("item_id");
      if(item_id!=undefined)
         items_collection.push(item_id);
    });
     if(items_collection.length==0)
        {
          show_warning_message("Please, select a listing usign checkbox and try again");  
        }
        else
        {
         /*prepare nice dialog*/
 jQuery("#dialog_message").html("Selected Item(s) will ended on eBay Inc.<br><b>Are you sure?</b>");
 jQuery("#dialog-confirm").attr("title","End Item(s)");
 jQuery( "#dialog-confirm" ).dialog({
resizable: false,
height:140,
modal: true,
buttons: {
"Confirm": function() {
jQuery( this ).dialog( "close" );
show_dialog_popup("End listing On eBay Inc","<div class='item-notification'></div>");
                jQuery(".progress").fadeIn();
                var itarator = 0;
               jQuery.each(items_collection, function(index, ItemID)
           {          
               var length = items_collection.length;               
               item_end_on_ebay(ItemID, function(response)
               {        
                   itarator=itarator+1;
                 call_back_item_end_on_ebay(response);      
                 progress_width = itarator /length * 100;
                 jQuery(".bar").css("width",Math.round(progress_width)+"%");
                   if(itarator== length)
                    {
                        if(length>1)
                          jQuery(".item-notification").prepend(length+'<b> items were ended successful.</b> <a href="javascript:remove_dialog_and_sync()" class="close-dialog">close</a><br><br>');
                        if(length==1)
                          jQuery(".item-notification").prepend(length+' <b>item was ended successful.</b><a href="javascript:remove_dialog_and_sync()" class="close-dialog">close</a><br><br>');
                          jQuery(".bar").css("width","100%");
                            callback_ajax_item_processed_sync(items_collection, response);
                    }
                });           
                 
           });
},
Cancel: function() {
jQuery( this ).dialog( "close" );
}
}
});                          
        }
}
function item_end_on_ebay(item_id, callback)
       {
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/ebay_end_item",
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
function call_back_item_end_on_ebay(response)
{
  title = response.title;
  status = response.status;
  if(status=="ended")
  jQuery(".item-notification").append('<i class=" icon-thumbs-down" title="Ended"></i> '+title+'<br>');
  return true;
}


function  item_prepared_remove_single(element, item_id)
{
  var result = "";
   jQuery(".loader-image").fadeIn(); 
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/item_prepared_remove_single",
    async: true,
    type: "POST",    
    data: {item_id:item_id},
    dataType: "json",
    success: function(data) 
    { 
           
    },
   complete: function(data) 
    { 
       element.parent("tr").remove();
       jQuery(".loader-image").fadeOut();    
    }
  });  
}

function load_single_listing_design(item_id)
{
    base_url = "http://"+window.location.hostname+"/designmanager/";
    element = jQuery(".listing-design-codes");
    element.append('<iframe width="100%" height="100%" src="'+base_url+'rocklister/rocklister/load_view_item?item_id='+item_id+'"></iframe"');
    jQuery(".listing_design_view").fadeIn();     
}
function close_rocklister_listing_design_view()
{
    jQuery(".listing_design_view").fadeOut();
    jQuery(".listing-design-codes").html("");
}




function is_installed_rockscripts_template(item_id, callback)
{
        jQuery(".loader-image").fadeIn();
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/is_installed_rockscripts_template",
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
function call_back_is_installed_rockscripts_template(response)
{
  return(response);
}
function getDomainName(hostName)
{
    return hostName.substring(hostName.lastIndexOf(".", hostName.lastIndexOf(".") - 1) + 1);
}
  
function print_r(printthis, returnoutput) {
    var output = '';

    if(jQuery.isArray(printthis) || typeof(printthis) == 'object') {
        for(var i in printthis) {
            output += i + ' : ' + print_r(printthis[i], true) + '\n';
        }
    }else {
        output += printthis;
    }
    if(returnoutput && returnoutput == true) {
        return output;
    }else {
        alert(output);
    }
}
  function  update_installation_wizard_installed_field(value)
      {
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  jQuery.ajax({
    url: base_url+"rocklister/rocklister/update_installation_wizard_installed_field",
    async: true,
    type: "POST",    
    dataType: "json",
    data: {"value":value},
    success: function(data) 
    { 
          
    },
   complete: function(data) 
    { 
       jQuery(".loader-image").fadeOut();    
    }
  });
      }
      

function init_extractor(current_tab)
{
    jQuery(".alert").fadeOut();
    var items_collection = [];
    jQuery("."+current_tab).find(".checked").each(function()
    {
      item_id = jQuery(this).attr("item_id");
      if(item_id!=undefined)
         items_collection.push(item_id);
    });
     if(items_collection.length==0)
        {
          show_warning_message("Please, select a listing usign checkbox and try again");  
        }
        else
        {          
               load_extractor_form( items_collection, function(response)
               {                   
                  response =  callback_load_extractor_form(response); 
                  jQuery(".widgetcontent").html(response.form);
                });                                                
        }
        }  
    function init_unistall_listing_template(current_tab)
{
      jQuery(".alert").fadeOut();
    var items_collection = [];
    jQuery("."+current_tab).find(".checked").each(function()
    {
      item_id = jQuery(this).attr("item_id");
      if(item_id!=undefined)
         items_collection.push(item_id);
    });
     if(items_collection.length==0)
        {
          show_warning_message("Please, select a listing usign checkbox and try again");  
        }
        else
        {          
             /*settings for description*/
    description_search_by = "ID";//search by id
    description_selector_value = "rockscripts-description";
    /*settings for iamges*/
    image_search_by = "ID";
    image_selector_value = "";
    init_extractor_with_settings(items_collection,description_search_by,description_selector_value,image_search_by,image_selector_value);                                           
        }
     
}  
      
function init_find_replace(current_tab)
{
    jQuery(".alert").fadeOut();
    var items_collection = [];
    jQuery("."+current_tab).find(".checked").each(function()
    {
      item_id = jQuery(this).attr("item_id");
      if(item_id!=undefined)
         items_collection.push(item_id);
    });
     if(items_collection.length==0)
        {
          show_warning_message("Please, select a listing usign checkbox and try again");  
        }
        else
        {          
               load_find_replace_form( items_collection, function(response)
               {                   
                  response =  callback_load_find_replace_form(response); 
                  jQuery(".widgetcontent").html(response.form);
                });                                                
        }
} 
       function load_find_replace_form(items_collection,callback)
        {
               jQuery(".loader-image").fadeIn();
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/load_find_replace_form",
    async: true,
    type: "POST",    
    data: {"items_collection":items_collection},
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
        function callback_load_find_replace_form(response)
        {
            return response;
        }   
        /*Start extraction */
function init_find_replace_with_settings(items_collection,find_what,replace_with)
{  
               show_dialog_popup("Finding and replacing...","<div class='item-notification'><div class='loader-image' style='display:inline'></div></div>");
                jQuery(".progress").fadeIn();
                 var itarator = 0;
               jQuery.each(items_collection, function(index, ItemID)
           {            
               var length = items_collection.length;
               itarator = itarator+1;
               var iterator_inner = itarator;
               item_find_and_replace(ItemID,find_what,replace_with, function(response)
               {  
                 call_back_item_extract(response);      
                 progress_width = itarator /length * 100;
                 jQuery(".bar").css("width",Math.round(progress_width)+"%");
                   if(iterator_inner== length)
                    {
                        
                        if(length>1)
                          jQuery(".item-notification").prepend(length+' items were procesed successful <a href="javascript:remove_dialog_send_to_prepared_listings(true)" class="close-dialog">close</a><br>');
                        if(length==1)
                          jQuery(".item-notification").prepend(length+' item was procesed successful  <a href="javascript:remove_dialog_send_to_prepared_listings(true)" class="close-dialog">close</a><br>');

                             jQuery(".bar").css("width","100%");
                             jQuery(".loader-image").fadeOut();
                            
                    }
                });           
                 
           });
       
        }  
      function item_find_and_replace(item_id,find_what,replace_with, callback)
       {
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/item_find_and_replace",
    async: true,
    type: "POST",    
    data: {item_id:item_id,find_what:find_what,"replace_with":replace_with},
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
        
        
        function load_extractor_form(items_collection,callback)
        {
               jQuery(".loader-image").fadeIn();
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/load_extractor_form",
    async: true,
    type: "POST",    
    data: {"items_collection":items_collection},
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
        function callback_load_extractor_form(response)
        {
            return response;
        }
        
/*Start extraction */
function init_extractor_with_settings(items_collection,description_search_by,description_selector_value,image_search_by,image_selector_value)
{  
               show_dialog_popup("Extracting Description and images...","<div class='item-notification'><div class='loader-image' style='display:inline'></div></div>");
                jQuery(".progress").fadeIn();
                 var itarator = 0;
               jQuery.each(items_collection, function(index, ItemID)
           {           
               var length = items_collection.length;               
               item_extract(ItemID,description_search_by,description_selector_value,image_search_by,image_selector_value, function(response)
               { 
                  itarator = itarator+1;
                 call_back_item_extract(response);      
                 progress_width = itarator /length * 100;
                 jQuery(".bar").css("width",Math.round(progress_width)+"%");
                   if(itarator== length)
                    {
                        if(length>1)
                          jQuery(".item-notification").prepend(length+' items were procesed successful <a href="javascript:remove_dialog_send_to_prepared_listings(true)" class="close-dialog">close</a><br>');
                        if(length==1)
                          jQuery(".item-notification").prepend(length+' item was procesed successful  <a href="javascript:remove_dialog_send_to_prepared_listings(true)" class="close-dialog">close</a><br>');

                             jQuery(".bar").css("width","100%");
                            
                    }
                });           
                 
           });
       
        }  

function item_extract(item_id,description_search_by,description_selector_value,image_search_by,image_selector_value, callback)
       {
  var result = "";
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/item_extract",
    async: true,
    type: "POST",    
    data: {item_id:item_id,"description_search_by":description_search_by,"description_selector_value":description_selector_value,"image_search_by":image_search_by,"image_selector_value":image_selector_value},
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
function call_back_item_extract(response)
{
  title = response.title;
  status = response.status;
  if(status=="added")
  jQuery(".item-notification").append('<i class=" icon-ok-sign" title="added"></i> '+title+'<br>');
  return true;
}
function update_page_session(pages, page_selected)
{
   var result = "";
   jQuery(".loader-image").fadeIn(); 
  base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
   jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/set_sync_sessions",
    async: true,
    type: "POST",    
    data: {"pages":pages,"page_selected":page_selected},
    dataType: "json",
    success: function(data) 
    { 
       // callback(data);      
    },
   complete: function(data) 
    { 
       jQuery(".loader-image").fadeOut();
    }
  }); 
}
function update_import_mode(import_mode_setting)
{
    var result = "";
    jQuery(".loader-image").fadeIn(); 
    base_url = "http://"+window.location.hostname+"/designmanager/";
  //alert(base_url)
    jQuery.ajax({
    url: base_url+"index.php?/rocklister/rocklister/update_import_mode",
    async: true,
    type: "POST",    
    data: {"import_mode_setting":import_mode_setting},
    dataType: "json",
    success: function(data) 
    { 
       // callback(data);      
    },
   complete: function(data) 
    { 
       jQuery(".loader-image").fadeOut();
    }
  }); 
}