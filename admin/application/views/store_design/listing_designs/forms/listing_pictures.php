 <div class="alert  hide">
                	<button type="button" class="close">x</button>
                 <span id="message_content" class="message_content"> 
                    <?php 
                    if(isset($message))
                    {
                       echo  $message ;
                    }
                    ?>
                 </span>
  </div>

<div class="listing-images-content">

<div class="listing-images">
   <!-- <div class="top-buttons">
<div class="btn btn-primary button_upload_files_modal">
      <i class=" icon-plus"></i> Upload Listing Images
 </div>
     
    </div>
 -->
    
</div>
    


<!--<div id="files">
    
</div>-->
<style>   
.navigation-options #of-nav 
    {
          min-height: 710px!important;
    }   
</style>
</div>
<div class="content-without-images">
    
</div>
<script>
   // open_listing_images();


          /*update llisting pictures area when page is ready*/
             result =  update_listing_pictures_area();
             jQuery(".listing-pictures-part").html(result);


    jQuery('.alert .close').live("click", function(e) {
        jQuery(this).parent().hide();
        
      
    });
</script>
