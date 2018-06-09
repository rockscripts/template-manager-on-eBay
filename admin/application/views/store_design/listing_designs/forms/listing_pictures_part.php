      <div class="block-grid-10 " style="width:100%; ">
        <?php
        if(is_array($listing_images_array)):         
    foreach($listing_images_array as $listing_image):
    ?>
            <div class="listing-image-box featured-box">
                
                <img width="200" height="150" src="<?=$listing_image->image_url?>"  style="width:100%;height: 158px;">
                <div class="more clr">
                    
                    <div class="box-controls">
                        <div class="listing-image-name"><?=$listing_image->image_name?></div> 
                        
        
                         <div action="delete" image_name="<?=$listing_image->image_name?>"  id_listing_design_picture="<?=$listing_image->id_listing_design_picture?>" title="Delete Image" class="button-controls custom_button1" >
                             <i class="icon-trash"  title="Delete Image"></i>
                         </div>
                         
                        <span class="separator-left">&nbsp;|&nbsp;</span>

                         <div action="update" image_name="<?=$listing_image->image_name?>"  id_listing_design_picture="<?=$listing_image->id_listing_design_picture?>" title="Set Main Image" class="button-controls custom_button1" >
                              <?php if ( $listing_image->is_main_image ) { ?>
                                <img src="http://rockscripts.org/designmanager//themes/katniss/img/controls/featured-Active.png">
                              <?php } else { ?>
                                <img src="http://rockscripts.org/designmanager//themes/katniss/img/controls/featured-Deactive.png">
                              <?php } ?>
                         </div>
<?php if ( $listing_image->is_main_image ) { ?>
                  <div class="main-image"></div> 
                <?php } ?>
                    </div>
                </div>
            </div>
      
    <?php
    endforeach;
       else:
           ?>
          
        <div class="alert ">
                
                 <span id="message_content"> 
                  You have not listing pictures yet, start now clicking green button!                  
                 </span>
  </div>

          <?php
    endif;
    ?>
        </div>
        <script>
    jQuery(document).ready(function() 
    {


       jQuery('.block-grid-10').isotope(
           {
             masonry: 
                     {
                       columnWidth: 10
                      },
                      itemSelector: '.listing-advertising-box'
          });

   jQuery('.block-grid-10').isotope(
           {
             masonry: 
                     {
                       columnWidth: 10
                      },
                      itemSelector: '.listing-advertising-box'
          });
      
          /*Use for block list*/

        /*USe to do actions fopr buttons*/
        /*used to submit forms re-loading page*/
     jQuery(".custom_button1").click(function()
  {
     
      action = jQuery(this).attr("action");
      if(action=="delete")
      {
           id_listing_design_picture = jQuery(this).attr("id_listing_design_picture");
            image_name = jQuery(this).attr("image_name");
         var result = confirm("Are you sure?");
         if (result==true) 
          {
            message =  delete_listing_picture(id_listing_design_picture,image_name);   
            show_successfull_message(message);
            result =  update_listing_pictures_area();
             jQuery(".listing-pictures-part").html(result);
          }                     
      }

      if(action=="update")
      {
           id_listing_design_picture = jQuery(this).attr("id_listing_design_picture");
           image_name = jQuery(this).attr("image_name");

            message =  change_status_listing_picture(id_listing_design_picture,image_name);   
            show_successfull_message(message);
            result =  update_listing_pictures_area();
            jQuery(".listing-pictures-part").html(result);
                   
      }


  });
  
 
  
  });
</script>
