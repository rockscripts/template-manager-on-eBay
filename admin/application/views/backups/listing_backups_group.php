 <table class="table table-bordered items_data_table active_items_data_table" id="dyntable_resultados1456" >
  <thead>
      <tr>
          <th class="head2 sorting" style="width:20%">Reazon</th> 
          <th class="head3 sorting" style="width:40%">Date Created</th> 
          <th class="head4 sorting"  style="width:40%">Actions</th> 
      </tr>
 </thead>
    <tbody>
      <?php
      if(is_array($listing_groups_backups)): 
      foreach($listing_groups_backups as $item):
?>
        <tr>
            <td style="width:20%">
                <?= $item->reazon?>
            </td> 
            <td class="td_image_datatable" style="width:40%;text-align: left!important;">
                <?= $item->date_added?>
            </td>           
            <td  style="width:40%"> 
              <div group_id="<?= $item->listing_backup_group_id?>" title="List processed listings for this point" style="float:left;margin-left: 10px;" class="btn btn-primary  view_processed_listings_backup">
              <i class="icon-eye">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Processed Listings
              </div>
              <div backup_group_id="<?= $item->listing_backup_group_id?>" title="delete this backup point" style="float:left;margin-left: 10px;" class="btn btn-primary delete_listing_backup_group ">
              <i class="icon2-trash2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Delete
              </div>    
            </td>   
        </tr> 
<?php
 
endforeach;
endif;
      ?>
    </tbody>

</table>


<script>
 jQuery(document).on("click",".view_processed_listings_backup",function(){
     group_id = jQuery(this).attr("group_id")
      load_listings_backups(group_id);
  });
   jQuery(document).on("click",".delete_listing_backup_group",function(){
     backup_group_id = jQuery(this).attr("backup_group_id")
      delete_listing_backup_group(backup_group_id);
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