<div class="loader-image"></div>
 <div class="alert  hide">
                  <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content" class="message_content"> 
                 </span>
  </div>    
<div id="accordion2" class="accordion2">
    <h3><a href="#">Store Front Backups</a></h3>
    <div><?php echo $store_front_backups_data_table;?></div>
    <h3 class="listing_groups_backups"><a href="#">Listing Backup Points</a></h3>
    <div><?php echo $listing_groups_backups_data_table;?></div>
    <h3 class="developer_zone_backups"><a href="#">Developer Zone Backups</a></h3>
    <div class="developer_zone_backups_datatable"><?php echo $developer_zone_backups_data_table;?></div>
    </div>
<div class="developer_zone_backup_view">
    
</div> 
<script>
    jQuery('#accordion2').accordion();
    <?php
    if(isset($_GET["show_groups"])):
        ?>
         jQuery(".listing_groups_backups").click(); 
         <?php
        endif;
    ?>
         <?php
    if(isset($_GET["show_dz"])):
        ?>
         jQuery(".developer_zone_backups").click(); 
         <?php
        endif;
    ?>
         <?php
    if(isset($_GET["executed"])):
        ?>
        show_successfull_message("Store front backup was exected successful.");
         <?php
        endif;
    ?>
          <?php
    if(isset($_GET["deleted"])):
        ?>
        show_successfull_message("Store front backup was deleted successful.");
         <?php
        endif;
    ?>
               <?php
    if(isset($_GET["deleted1"])):
        ?>
        show_successfull_message("Backup point was deleted successful.");
         jQuery(".listing_groups_backups").click(); 
         <?php
        endif;
    ?>
</script>