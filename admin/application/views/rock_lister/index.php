 <div class="alert" style="display:none;">
                	<button type="button" class="close" data-dismiss="alert">x</button>
                        <div id="message_content"></div>
                </div>
<div class="loader-image" style="display: none;"></div>
<div class="rocklister-section">

<div>
<div class="btn-group action-with-selected-button"  style="float:left; border-radius: 10px;">
                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action with item(s) selected <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                              <li class="item_1"><a href="javascript:void(0);" class="add_listing_template_to_item"><i class="icon2-settings2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Install Listing Template</a></li>
                                              <li class="item_8"><a href="javascript:void(0);" class="unistall_listing_template_to_item"><i class="icon2-unistall">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Uninstall Listing Template</a></li>
                                              <li  class="item_2" title="Send prepared items selected to eBay Inc" ><a href="javascript:void(0);" class="submit_prepared_selected_to_ebay"><i class="icon2-ebay2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Submit Revision to eBay</a></li>
                                              <li  class="item_3"  title="Search and replace text into listing description, then update on eBay Inc"><a href="javascript:void(0);"><i class="icon2-search-replace">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Search and Replace</a></li>
                                              <li  class="item_7"  title="Extract description & images from some template code"><a href="javascript:void(0);"><i class="icon2-extractor">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Extract Description & Images</a></li>
                                              <li  class="item_4" title="Remove prepare items selected"><a href="#" class="remove_prepared_items" ><i class="icon2-trash2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Remove</a></li>
                                              <li  class="item_5" title="Relist Item | Active Item"><a href="#" class="relist_item_on_ebay" ><i class="icon2-relist">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Relist</a></li>
                                              <li  class="item_6" title="End Item"><a href="#" class="end_item_on_ebay" ><i class="icon2-end-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;End Item(s)</a></li>
                                            </ul>
                                          </div>
    <div style="float:left; border-radius: 10px;" class="btn-group">
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Options...
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu drop-list-member-options">
            <li>
               <a href="javascript:void(0);" class="sync_items_button"><i class="icon-sync">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Sync</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="reset_sync_sessions" title="Reset Sync. Then start sync from first page"><i class=" icon-restart">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Reset Sync</a>
            </li>
             <li>
                <a href="javascript:void(0);" class="Add_item" title="Create listing on eBay Inc"><i class="icon-addpage">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Create Listing</a>
            </li>
        </ul>
    </div>
</div>
<br style="clear:both">
<div>
    <?php 
     if(isset($_SESSION["pages_to_import"])):
        $pages = $_SESSION["pages_to_import"];
     else:
        $pages = $total_pages; 
     endif;
    
    if($pages>1):
    ?>
    <div style="clear:both">
    <form class="stdform"  style="margin-top: 5px;">
 <label style="width: auto;float:left;">Page to Sync:</label>

                            <div class="field"  style="margin-left: 0px;float:left;">

                            <select name="pages_sync" id="pages_sync" class="uniformselect">
                               <?php
                                   for ($i=1;$i<=$pages;$i++):
                                       ?>
                                       <option value="<?=$i?>"><?=$i?></option>
                                <?php
                                 endfor;
                               ?>
                            </select>
                            </div>
    </form>
  <form class="stdform"  style="margin-top: 5px;margin-left: 10px;">
      <label style="width: auto;float:left;">&nbsp;&nbsp;&nbsp;&nbsp;Import Mode:</label>

                            <div class="field"  style="margin-left: 0px;float:left;">

                            <select name="import_mode" id="import_mode" class="uniformselect">                              
                                       <option value="clean_import">Clean import</option>
                                       <option value="only_new_items">Only new items</option>
                            </select>
                            </div>
    </form>
    </div>
    <script>
        var pages = "<?php echo $pages; ?>";
      <?php
      if(!isset($_SESSION["pages_to_import"])):
                $_SESSION["pages_to_import"] = $pages;
                $_SESSION["current_page_to_import"] = 1;
                ?>
         jQuery("#pages_sync").val(1);           
    <?php
      else:
          ?>
            var current_page_select = "<?php echo $_SESSION["current_page_to_import"]; ?>"; 
            jQuery("#pages_sync").val(current_page_select); 
          <?php
      endif;
      ?>
      

jQuery('#pages_sync').on('change', function (e) {
    var optionSelected = jQuery("option:selected", this);
    var valueSelected = this.value;
    update_page_session(pages, valueSelected);
    jQuery("#pages_sync").val(valueSelected);
});

    
    </script>
    <?php
    endif;
    ?>

</div>
<br style="clear:both">
<ul class="nav nav-tabs items-status" style="margin-top:10px;">
    <li class="active"><a href="javascript:void(0);" data="active_items_data_table" id="tab_active_items_data_table">Active</a></li>
    <li><a href="javascript:void(0);" data="prepared_items_data_table" id="tab_title_prepared_items_data_table">Prepared Items</a></li>
   <!--   <li><a href="javascript:void(0);" data="all_items_data_table">All</a></li>
  <li><a href="javascript:void(0);" data="sold_items_data_table">Sold</a></li>
    <li><a href="javascript:void(0);" data="unsold_items_data_table">Unsold</a></li>
    <li><a href="javascript:void(0);" data="deleted_items_data_table">Deleted</a></li>    -->
</ul>

<div id="active_items_data_table" class="itemdatatable">      
    <?php
    echo $active_items_data_table;
    ?>
</div>
<!--<div id="all_items_data_table" class="itemdatatable">
    <?php
   // echo $all_items_data_table;
    ?>
</div>-->
<!--<div id="sold_items_data_table" class="itemdatatable">
    <?php
    //echo $sold_items_data_table;
    ?>
</div>-->
<!--<div id="unsold_items_data_table" class="itemdatatable">
    <?php
   // echo $unsold_items_data_table;
    ?>
</div>-->
<!--<div id="deleted_items_data_table" class="itemdatatable">
    <?php
    //echo $deleted_items_data_table;
    ?>
</div>-->
<div id="prepared_items_data_table" class="itemdatatable">
    <?php
    echo $prepared_items_data_table;
    ?>
</div>

<br>
<div>
<div class="btn-group action-with-selected-button"  style="float:left; border-radius: 10px;">
                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action with item(s) selected <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                              <li class="item_1"><a href="javascript:void(0);" class="add_listing_template_to_item"><i class="icon2-settings2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Install Listing Template</a></li>
                                              <li  class="item_2" title="Send prepared items selected to eBay Inc" ><a href="javascript:void(0);" class="submit_prepared_selected_to_ebay"><i class="icon2-ebay2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Submit Revision to eBay</a></li>
                                              <li  class="item_3"  title="Search and replace text into listing description, then update on eBay Inc"><a href="javascript:void(0);"><i class="icon2-search-replace">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Search and Replace</a></li>
                                              <li  class="item_7"  title="Extract description & images from some template code"><a href="javascript:void(0);"><i class="icon2-extractor">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Extract Description & Images</a></li>
                                              <li  class="item_4" title="Remove prepare items selected"><a href="#" class="remove_prepared_items" ><i class="icon2-trash2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Remove</a></li>
                                              <li  class="item_5" title="Relist Item | Active Item"><a href="#" class="relist_item_on_ebay" ><i class="icon2-relist">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Relist</a></li>
                                              <li  class="item_6" title="End Item"><a href="#" class="end_item_on_ebay" ><i class="icon2-end-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;End Item(s)</a></li>
                                            </ul>
                                          </div>
    <div style="float:left; border-radius: 10px;" class="btn-group">
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Options...
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu drop-list-member-options">
            <li>
               <a href="javascript:void(0);" class="sync_items_button"><i class="icon-sync">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Sync</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="reset_sync_sessions" title="Reset Sync. Then start sync from first page"><i class=" icon-restart">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Reset Sync</a>
            </li>
             <li>
                <a href="javascript:void(0);" class="Add_item" title="Create listing on eBay Inc"><i class="icon-addpage">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Create Listing</a>
            </li>
        </ul>
    </div>
</div>
<br><br><br><br>
</div>
<div class="edit-description-section">
    
</div>
<script>
    //edit description or Overview
      jQuery(document).on("click",".edit-description",function()
    {
        var item_id = jQuery(this).attr("item_id");
        jQuery(".alert").hide();
       ajax_load_edit_description_form(item_id,function(response)
       {callback_ajax_load_edit_description_form(response);});
    });
    
    jQuery(".sync_items_button").on("click",function()
    {
    // show_dialog_popup("eBay Inventory Synchronization","test");    
         ajax_item_sync(function(response)
       {callback_ajax_item_sync(response);});
    });
    jQuery(".add_listing_template_to_item").on("click",function()
    {
       current_tab =  jQuery("#flag_current_datatable").val();  
       init_listing_template_installation(current_tab);
    });
    
    jQuery(".unistall_listing_template_to_item").on("click",function()
    {
       current_tab =  jQuery("#flag_current_datatable").val();  
       init_unistall_listing_template(current_tab);
    });
    /*extractor*/
    jQuery(".item_7").on("click",function()
    {
       current_tab =  jQuery("#flag_current_datatable").val();  
       init_extractor(current_tab);
    });
    jQuery(".item_3").on("click",function()
    {
       current_tab =  jQuery("#flag_current_datatable").val();  
       init_find_replace(current_tab);
    });
     jQuery(".remove_prepared_items").on("click",function()
    {
       current_tab =  jQuery("#flag_current_datatable").val();  
       remove_prepared_items(current_tab);
    });
     jQuery(".submit_prepared_selected_to_ebay").on("click",function()
    {
       current_tab =  jQuery("#flag_current_datatable").val();  
       init_item_send_to_ebay(current_tab);
    });
    jQuery(".relist_item_on_ebay").on("click",function()
    {
       current_tab =  jQuery("#flag_current_datatable").val();  
       init_item_relist(current_tab);
    });
    jQuery(".end_item_on_ebay").on("click",function()
    {
       current_tab =  jQuery("#flag_current_datatable").val();  
       init_item_end(current_tab);
    });
    
    jQuery(".items-status li a").click(function()
    {
       jQuery(".items-status li").removeClass("active");
       jQuery(".itemdatatable").fadeOut();
       id_element =  jQuery(this).attr("data");
       jQuery("#"+id_element).fadeIn();
       jQuery(this).parent("li").addClass("active");
       jQuery("#flag_current_datatable").val(id_element);
       /*add condition to hidde some data*/
       if(id_element=="prepared_items_data_table")
       {
           jQuery(".item_1").fadeOut();
           jQuery(".item_2").fadeIn();
            jQuery(".item_3").fadeOut();
             jQuery(".item_4").fadeIn();
             jQuery(".item_6").fadeOut();  
               jQuery(".item_5").fadeOut();  
                jQuery(".item_7").fadeOut();
                jQuery(".item_8").fadeOut();
       }
       else
       {
          
           if (id_element=="active_items_data_table")
           {
                jQuery(".action-with-selected-button").fadeIn();
                jQuery(".item_1").fadeIn();
                jQuery(".item_3").fadeIn();
                jQuery(".item_2").fadeOut();  
                jQuery(".item_4").fadeOut();  
                 jQuery(".item_5").fadeOut();  
                  jQuery(".item_6").fadeIn();  
                   jQuery(".item_7").fadeIn();
                   jQuery(".item_8").fadeIn();
           }
           else
           {             
              jQuery(".action-with-selected-button").fadeIn();
              jQuery(".item_1").fadeOut();
              jQuery(".item_2").fadeOut();
              jQuery(".item_3").fadeOut();
              jQuery(".item_4").fadeOut();  
              jQuery(".item_6").fadeOut();  
               jQuery(".item_7").fadeOut();
              jQuery(".item_5").fadeIn();  
               if(id_element=="sold_items_data_table")
                    {
                        jQuery(".action-with-selected-button").fadeOut();
                    }
               if(id_element=="prepared_items_data_table")
                {
                      jQuery(".item_5").fadeOut();  
                      jQuery(".item_6").fadeOut();  
                }
           }
           
       }
    });
    jQuery(".items-status li a").first().click();
    jQuery(".item_check_all").click(function()
    {
      is_checked = jQuery(this).find("span").attr("class");
      current_tab = jQuery("#flag_current_datatable").val();  
      if(is_checked == "checked")      
      jQuery("."+current_tab).find(".item_checker").find("span").addClass("checked");
      else
      jQuery("."+current_tab).find(".item_checker").find("span").removeClass("checked");
    });
    jQuery( document ).ready(function() {
 /*check all if top checkbox is checked*/
    jQuery(".item_check_all").each(function()
    {
        is_checked = jQuery(this).find("span").attr("class");
        container_tab  = jQuery(this).attr("data");
        if(is_checked=="checked")
        {
           jQuery("."+container_tab).find(".item_checker").find("span").addClass("checked");
            jQuery(this).find("span").addClass("checked");
        }
        else
        {
           jQuery("."+container_tab).find(".item_checker").find("span").removeClass("checked");  
           jQuery(this).find("span").removeClass("checked");
        }
    });
    jQuery(document).on("click",".item_checker",function()
    {        
      current_tab = jQuery("#flag_current_datatable").val();  
      ischecked =  jQuery("#"+current_tab).find(".item_check_all").find("span").attr("class");
      is_checked = jQuery(this).find("span").attr("class");
      if(ischecked == "checked")
      {
           if(is_checked == "checked")
               jQuery("#"+current_tab).find(".item_check_all").find("span").removeClass("checked");                    
      }
      if(is_checked == "checked")
           {
               jQuery(this).find("span").removeClass();               
           }
           else
            jQuery(this).find("span").addClass("checked");
    });
});
   

</script>
<input type="hidden" id="flag_current_datatable" value="active_items_data_table">
<script>
    <?php
if(isset($_GET["prepared"])):
    ?>
        jQuery("#tab_title_prepared_items_data_table").click();
        jQuery("#flag_current_datatable").val("prepared_items_data_table");
    <?php
endif;
?>
</script>
<script>
    <?php
if(isset($_GET["active_items"])):
    ?>
        jQuery("#tab_active_items_data_table").click();
        jQuery("#flag_current_datatable").val("active_items_data_table");
      
    <?php
endif;
?>
</script>
<script>
import_mode = "<?php echo $import_mode?>";
jQuery("#import_mode").val(import_mode);

jQuery('#import_mode').on('change', function (e) {
    var optionSelected = jQuery("option:selected", this);
    var valueSelected = this.value;
    update_import_mode(valueSelected);
});
</script>
<script>
    <?php
if($require_sync=="false"):
    ?>
        // show_dialog_popup("eBay Inventory Synchronization","test");    
         ajax_item_sync(function(response)
       {callback_ajax_item_sync(response);/*document.location.reload(true);*/});  
       
    <?php
endif;
?>
 jQuery(document).ready(function() 
  {
        jQuery(".showmenu").click();
        jQuery(".showmenu").fadeOut();
        jQuery(".logo_small").fadeIn();
        jQuery(".skin-layout").click();
          var domain_name = "<?php echo $domain_name?>";
          var ebay_user_id = "<?php echo $ebay_user_id?>";
        jQuery(document).on("click",".Add_item",function()
        {
          
            url = "http://cgi5."+domain_name+"/ws/eBayISAPI.dll?SellHub3&aidZ153=&MfcISAPICommand=SellHub3&guest=1&userid="+ebay_user_id;
            var win=window.open(url, '_blank');
            win.focus();   
        });
         jQuery(document).on("click",".reset_sync_sessions",function()
        {
            jQuery(".loader-image").fadeIn();
            reset_sync_sessions();
        });
        
         jQuery(document).on("click",".button-revise-item-on-ebay",function()
        {
            item_id = jQuery(this).attr("item_id");
            url = "http://cgi5."+domain_name+"/ws/eBayISAPI.dll?UserItemVerification&item="+item_id+"&ssPageName=STRK:MESE:RVS";
            var win=window.open(url, '_blank');
            win.focus();   
        });
  });
      <?php
if(isset($_GET["sync"])):
    ?>
       // show_dialog_popup("eBay Inventory Synchronization","test");    
         ajax_item_sync(function(response)
       {callback_ajax_item_sync(response);});       
    <?php
endif;
?>
</script>
