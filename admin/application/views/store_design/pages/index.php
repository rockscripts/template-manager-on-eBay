<div class="loader-image"></div>
<div class="alert  hide">
                  <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content" class="message_content"> 
                 </span>
  </div> 
<div class="top-buttons">
    <div style="width: 70px;" class="btn btn-primary button_back hide">
          <i class="  icon-backward"></i> Back
     </div>
      <div class="btn btn-primary  add_page"  title="Add store page">
              <i class="icon-addpage">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Add Page
              </div>
    <div title="eBay Store Pages Synchronization" style="margin-left: 10px;" class="btn btn-primary sync_pages_button ">
           <i class="icon-sync">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Sync
          </div>
</div>
    <div class="store-pages-container">
        <table class="table table-bordered items_data_table active_items_data_table" id="dyntable_resultados1456" >
  <thead>
      <tr>
          <th class="head2 sorting" style="width: 7%;">Actions</th> 
          <th class="head4 sorting"  style="width:50%">Title</th> 
          <th class="head4 sorting"  style="width:48%">URL</th> 
      </tr>
 </thead>
    <tbody>
<?php
if(is_array($store_pages)): 
foreach($store_pages as $store_page):
?>
        <tr>
            <td style="width: 7%;">
                <i class="icon-edit edit_page" title="Edit this page" page_id="<?=$store_page->id_store_page?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;
                <i class="icon2-trash2 remove_page" title="Remove this page" page_id="<?=$store_page->id_store_page?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>                
            </td>
            <td style="width:50%">
                <?= $store_page->title?> 
            </td>  
            <td style="width:48%">
                <a target="_blank" href="<?=$store_page->url?>"><?= $store_page->url?></a>  
            </td> 
        </tr> 
<?php 
endforeach;
endif;
      ?>
    </tbody>

</table>
        <br>  
        <div class="top-buttons">
    <div style="width: 70px;" class="btn btn-primary button_back hide">
          <i class="  icon-backward"></i> Back
     </div>
      <div class="btn btn-primary  add_page"  title="Add store page">
              <i class="icon-addpage">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Add Page
              </div>
    <div title="eBay Store Pages Synchronization" style="margin-left: 10px;" class="btn btn-primary sync_pages_button ">
           <i class="icon-sync">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Sync
          </div>
</div>
    </div>



<script>

   jQuery(document).on("click",".remove_page",function(){
       element =  jQuery(this);
              var page_id = jQuery(this).attr("page_id");
        jQuery("#dialog_message").html("<b>Are you sure?</b>");
 jQuery("#dialog-confirm").attr("title","Remove Page");
 jQuery( "#dialog-confirm" ).dialog({
resizable: false,
height:140,
modal: true,
buttons: {
"Confirm": function() {
      
      delete_store_page(page_id);
       show_successfull_message('Page was deleted successful') ; 
      element.parent("td").parent("tr").remove();
      jQuery( this ).dialog( "close" );
      
},
 Cancel: function() {
jQuery( this ).dialog( "close" );
}
}
});         
  });
   jQuery(document).on("click",".button_back",function(){
     global_location =  jQuery("#global_location").val();
     do_properly_click(global_location);
  });
  jQuery(document).on("click",".edit_page",function()
{
    jQuery(".alert").fadeOut();
    jQuery(".add_page").fadeOut();
       jQuery(".sync_pages_button").fadeOut();
    jQuery(".loader-image").fadeIn();
    page_id = jQuery(this).attr("page_id");
     if(typeof CKEDITOR != "undefined")
      {
       delete CKEDITOR.instances['page_text']   
      }
   load_add_store_pages(page_id,function(response)
   {
       form = callback_load_add_store_pages(response);
       jQuery(".store-pages-container").html(form);
       
       jQuery(".button_back").removeClass("hide");
       jQuery(".loader-image").fadeOut();
   });
});
    // dynamic table

    jQuery('#dyntable_resultados1456').dataTable({

    "sPaginationType": "full_numbers",

    "aaSortingFixed": [[1,'asc']],

    "fnDrawCallback": function(oSettings) {

    /*jQuery.uniform.update();*/

    }
 
    });

</script>