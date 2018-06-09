 <table class="table table-bordered items_data_table prepared_items_data_table" data="deleted_items_data_table" id="dyntable_resultados666" >
  <thead>
      <tr>
          <th class="head0"><div class="checker item_check_all" ><input type="checkbox"  name="check2" style="opacity: 0;"></div></th>
           <th class="head0 sorting"  style="display: none;">ID</th>
            <th class="head0 sorting" style="width: 5px!important;">Action</th>
          <th class="head0 sorting">Image</th>
            <th class="head1 sorting"  style="width:40%">Title</th>
          <th class="head2 sorting" >Format</th> 
          <th class="head3 sorting" >Price</th> 
          <th class="head4 sorting" >Qty</th> 
          <th class="head5 sorting" >Time Left</th>    
      </tr>
 </thead>
    <tbody>
      <?php
      if(is_array($items)): 
      foreach($items as $item):
?>
        <tr>
            <td style="width:6px!important;">
                <div class="checker item_checker" ><span item_id="<?=$item->ItemID?>"><input type="checkbox" value="<?=$item->ItemID?>" name="check2" style="opacity: 0;"></span></div>
               
            </td> 
            <td style="display: none;">
                <?= $item->ItemID?>
            </td> 
            <td style="width: 5px!important;">
               <i class="icon2-trash2 small_button_remove_item_from_prepared_items" title="Remove Listing" item_id="<?=$item->ItemID?>" style="cursor: pointer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
               <i class="  icon-eye small_button_preview_item_from_prepared_items " item_id="<?=$item->ItemID?>" title="Preview Listing Design"  style="margin-left: 2px;cursor: pointer" ></i>
            </td> 
            <td class="td_image_datatable" style="width:100px">
                <img src="<?= $item->picture_url?>" class="datatable-picurl"/>
            </td>              
            <td>
                <a href="<?= $item->ViewItemURLForNaturalSearch?>" target="_blank"><?= $item->Title?></a>
            </td>    
        <td style="width:23px;">
              <?php
              if($item->ListingType=="FixedPriceItem"):
                  ?>
            <img src="<?= base_url() ?>themes/katniss/img/dollar-bill-icon.png"  style="margin:0px auto;" title="Fixed Price Item"  />
            <?php
              endif;
              ?>
            <?php
              if($item->ListingType=="Chinese"):
                  ?>
            <img src="<?= base_url() ?>themes/katniss/img/auction-icon.png" title="Auction Style" style="margin:0px auto;"/>
            <?php
              endif;
              ?>
            <?php
              if($item->ListingType=="LeadGeneration"):
                  ?>
            
            <img src="<?= base_url() ?>themes/katniss/img/ads-icon.png" title="Classified Ad" style="margin:0px auto;"/>
            <?php
              endif;
              ?>
            
            
            
            </td>
            <td style="text-align:center;width: 100px"> 
              <?= $item->ConvertedStartPriceValue?>&nbsp;<?= $item->Currency?>
            </td>
            <td style="width:15px;text-align: center;">
              <?= $item->Quantity?>
            </td>
            <td style="width: 120px;">
               <?php
               $end_time = strtotime($item->end_time) ;
               $difference = $end_time-time();
               $days=floor($difference/(60*60*24));//seconds/minute*minutes/hour*hours/day)
               $hours=round(($difference-$days*60*60*24)/(60*60));
               if($days>1):
                      ?>
                <?=$days?>&nbsp;days and <?=$hours?> 
                 <?php
                 if($hours==1):
                 ?>
                 hour
                 <?php
                 else:
                     ?>
                 hours
                <?php
                endif;
                elseif($days==1):
                    ?>
                 <?=$days?>&nbsp;day and <?=$hours?> 
                 <?php
                 if($hours==1):
                 ?>
                 hour
                 <?php
                 else:
                     ?>
                 hours
                 <?php
                 endif;
                  elseif($days<1):
                    ?>
                 Ended
                <?php
                endif;
                ?>
            </td>
        </tr>
<?php
 
endforeach;
endif;
      ?>
    </tbody>

</table>

<script>

    // dynamic table

    jQuery('#dyntable_resultados666').dataTable({

    "sPaginationType": "full_numbers",
"bSort" : false,
    "aaSortingFixed": [[3,'asc']],
    

    "fnDrawCallback": function(oSettings) {

    /*jQuery.uniform.update();*/

    }

    });
jQuery(document).on("click",".small_button_remove_item_from_prepared_items",function()
{
    item_id = jQuery(this).attr("item_id");
    item_prepared_remove_single(jQuery(this), item_id);
    jQuery(this).parent("td").parent("tr").first().remove();
    show_successfull_message("Prepared item was deleted successful");
});
jQuery(document).on("click",".small_button_preview_item_from_prepared_items",function()
{
     item_id = jQuery(this).attr("item_id");
    load_single_listing_design(item_id);
});
</script>