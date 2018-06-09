<div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content" class="message_content"> 
                    <?php 
                    if(isset($message))
                    {
                       echo  $message ;
                    }
                    ?>
                 </span>
  </div>

<div class="webstore-install-step-3">
    <h4 class="widgettitle nomargin shadowed">Synchronize Listings</h4>
    <div class="widgetcontent bordered shadowed nopadding">
        <div class="inner">    
                <?php
                echo $active_items_data_table;
                ?>
            <div style="display: none" class="webstore_items">
                <?php
                if(is_array($active_items)):
                    foreach ($active_items as $item) :
                    ?>
                     <div class="item_id"><?=$item->ItemID?></div>
                    <?php
                    endforeach;
                endif;                 
                ?>
            </div>
        </div>
    </div>
   <div class="btn btn-primary install_webstores_listings" style="margin: 0 0 10px 10px;">
    <i class="icon-circle-arrow-right"></i>
     Synchronize
   </div> 
</div>
<script>
jQuery(".install_webstores_listings").on("click",function()
    {
       init_listings_installation();
    });
</script>
