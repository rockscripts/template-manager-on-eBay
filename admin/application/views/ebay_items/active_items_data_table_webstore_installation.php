 <table class="table table-bordered items_data_table active_items_data_table" id="dyntable_resultados1" >
  <thead>
      <tr>         
          <th class="head0 sorting"  style="display: none;">ID</th>
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
            <td style="display: none;">
                <?=$item->ItemID?>
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
               $days1=($difference/(60*60*24));//seconds/minute*minutes/hour*hours/day)
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
                  elseif($days1<=0):
                    ?>
                 Ended
                <?php
                else:
                      ?>
                This Item Will End Soon
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

    jQuery('#dyntable_resultados1').dataTable({

    "sPaginationType": "full_numbers",

    
    "bSort" : false,
"aaSortingFixed": [[3,'asc']],
    "fnDrawCallback": function(oSettings) {

    /*jQuery.uniform.update();*/

    }

    });

</script>