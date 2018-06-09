
 <div class="alert  hide">
                  <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content" class="message_content"> 
                 </span>
  </div> 
<div class="top-buttons">
    <div style="width: 70px;" class="btn btn-primary button_back">
          <i class="  icon-backward"></i> Back
     </div>
    <?php
    if(is_array($listing_backups)):
    ?>
      <div class="btn btn-primary  execute_point" style="margin-left: 10px;" title="Execute store front backup" group_id="<?=$group_id?>">
              <i class="icon-execute">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Execute All
              </div>
    <?php
    endif;
    ?>
</div> 
<table class="table table-bordered items_data_table active_items_data_table" id="dyntable_resultados1456" >
  <thead>
      <tr>
          <th class="head2 sorting" style="width:5%">Item Id</th> 
          <th class="head3 sorting" style="width:40%">Title</th> 
          <th class="head3 sorting" style="width:15%">Date added</th> 
          <th class="head4 sorting" style="width:40%">Actions</th> 
      </tr>
 </thead>
    <tbody>
      <?php
      if(is_array($listing_backups)): 
          $items_id=array();
      foreach($listing_backups as $item):
          $items_id[] = $item->item_id;
?>
        <tr>
            <td style="width:20%">
                <?= $item->item_id?>
            </td> 
            <td class="td_image_datatable" style="width:40%;text-align: left!important;">
                <?= $item->title?>
            </td>    
            <td class="td_image_datatable" style="width:40%;text-align: left!important;">
                <?= $item->date_processed?>
            </td> 
            <td  style="width:40%"> 
               <div title="Execute this listing backup" item_id="<?= $item->item_id?>" group_id="<?=$group_id?>" style="float:left;margin-left: 10px;" class="btn btn-primary  execute_single_listing_backup">
              <i class="icon-execute">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Execute
              </div>
              <div backup_id="<?= $item->id_backup?>" title="Delete this listing backup" style="float:left;margin-left: 10px;" class="btn btn-primary delete_listing_backup ">
              <i class="icon2-trash2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Delete
              </div>    
            </td>   
        </tr> 
<?php
 
endforeach;
$items_id = json_encode($items_id);
endif;
      ?>
    </tbody>

</table>


<script>
    <?php
      if(is_array($listing_backups)): 
    ?>
        items_ids =<?php echo $items_id;?>;
       <?php
endif;
      ?> 
 jQuery(document).on("click",".button_back",function(){
   redirect_page_to_listings_backup();
  });
   jQuery(document).on("click",".delete_listing_backup",function(){
      backup_id =  jQuery(this).attr("backup_id");
      backup_listing_delete(jQuery(this),backup_id);
  });
  
      jQuery(".execute_point").on("click",function()
    {
        group_id = jQuery(this).attr("group_id");
       init_item_send_to_ebay_from_backup(items_ids,group_id);
       update_installation_wizard_installed_field("false");     
    });
     jQuery(".execute_single_listing_backup").on("click",function()
    {
        item_id = jQuery(this).attr("item_id");
        group_id = jQuery(this).attr("group_id");
       items_ids = [item_id] ; 
       init_item_send_to_ebay_from_backup(items_ids,group_id);
       update_installation_wizard_installed_field("false");     
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