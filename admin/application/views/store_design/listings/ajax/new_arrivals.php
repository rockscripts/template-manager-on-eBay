<div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content" class="message_content"> 
                 </span>
  </div>
<div class="alert2  alert-info">
              <i class="icon-info-sign"></i>Recommended image sizes: 640 x 480 pixels
  </div>
<div class="top-buttons">
    <div class="btn btn-primary button_back_advertising hide" style="width: 100px;">
          <i class="  icon-backward"></i> Back
     </div>
    <div class="btn btn-primary button_new_arrival" style="width: 150px;" title="New Arrival Listing">
      <i class=" icon-plus"></i> New Arrival Listing
    </div>
</div>

<div class="advertising-form-content hide"></div>

<div class="listing-advertising">
        <div class="block-grid-8">
           <?php
            if(!empty($listing_featured_array)):
                foreach($listing_featured_array as $arrival_listing):
            ?> 
            <div class="listing-advertising-box featured-box" >
                <div class="listing-images-for-boxes"><img src="<?=$arrival_listing->image_url?>" width="100%" id="img-<?=$arrival_listing->id_arrival_listing?>"></div>  
                <div class="more clr">
                        <div class="box-controls">
                            <div class="featured-title"> <a href="<?=$arrival_listing->link?>" target="_blank" title="go to <?=$arrival_listing->title?> | new arrival listing"><?=$arrival_listing->title?></a></div>
                            <div class="featured-price"><?=$arrival_listing->price?>&nbsp;<?=$currency?></div> 
                            
                            <div action="delete" id_arrival_listing="<?=$arrival_listing->id_arrival_listing?>" title="Delete Featured Listing" class="button-controls custom_button" >
                                 <i class="icon-trash"  title="Delete New Arrival Listing"></i>
                            </div>
                            
                            <span class="separator-left">&nbsp;|&nbsp;</span>

                            <div action="edit" id_arrival_listing="<?=$arrival_listing->id_arrival_listing?>" title="Edit Featured Listing" class="button-controls custom_button" >
                                 <i class="icon-edit"  title="Edit New Arrival Listing"></i>
                            </div>

                        </div>
                </div>
            </div>
            <?php
                endforeach;
            else:
                ?>
                <div class="message-empty">      
                    <span> 
                        You have not added New Arrivals Listings
                    </span>
                </div>
            <?php
                endif;
            ?> 
        </div>
</div>   

<script>
jQuery(document).ready(function() {
  


    jQuery(".button_new_arrival").click(function()
    {
       global_location =  jQuery("#global_location").val();
       form = ajax_load_listing_new_arrivals_part_form();
         if(global_location=="new_arrivals") 
      {       
         jQuery(".advertising-form-content").html(form);  
      } 
      else
      {        
        jQuery(".advertising-form-content").html(form) ;       
      }
       jQuery(".alert").css("display","none");
        jQuery(".advertising-form-content").fadeIn();
        jQuery(".listing-advertising").fadeOut();
        jQuery(".button_new_arrival").fadeOut();
        jQuery(".button_back_advertising").fadeIn();
    });

    jQuery(".button_back_advertising").click(function()
    {
       global_location =  jQuery("#global_location").val();
        do_properly_click(global_location);
    });

    jQuery(".custom_button").click(function()
    {
     
      action = jQuery(this).attr("action");
      if(action=="delete")
      {
        id_arrival_listing = jQuery(this).attr("id_arrival_listing");
        var result = confirm("Are you sure?");
        if (result==true) 
        {
            message =  delete_arrival_listing(id_arrival_listing);
            var current_src = jQuery("#img-"+id_arrival_listing).attr("src");
            blueimp_remove_image(current_src,"arrivals");
            global_location =  jQuery("#global_location").val();
            do_properly_click(global_location);
            show_successfull_message(message);
        }                
      }
        if(action=="edit")
        {

          id = jQuery(this).attr("id_arrival_listing"); 
          advertising = load_listing_arrival_array(id);
          jQuery(".advertising-form-content").html( ajax_load_listing_new_arrivals_part_form()  );

          jQuery('#id').val(advertising[0].id_arrival_listing);
          jQuery('#title').val(advertising[0].title);
          jQuery('#link').val(advertising[0].link);
          jQuery('#price').val(advertising[0].price);
          jQuery('#files-preview').html('<div><p><img width="100" height="100" src="'+advertising[0].image_url+'"></p></div>')
          jQuery(".alert").fadeOut() ;
          jQuery(".advertising-form-content").fadeIn();
          jQuery(".listing-advertising").fadeOut();
          jQuery(".button_new_arrival").fadeOut();
          jQuery(".button_back_advertising").fadeIn();

        }
    });
   // alert("in")
});
</script>