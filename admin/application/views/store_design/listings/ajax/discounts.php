
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
    <div class="btn btn-primary button_new_special" style="width: 150px;">
      <i class=" icon-plus"></i> New Special Listing
    </div>
</div>

<div class="advertising-form-content hide"></div>

<div class="listing-advertising">
        <div class="block-grid-8">
           <?php
            if(!empty($listing_featured_array)):
                foreach($listing_featured_array as $special_listing):
            ?> 
            <div class="listing-advertising-box featured-box" >
                <div class="listing-images-for-boxes"><img src="<?=$special_listing->image_url?>" width="100%" id="img-<?=$special_listing->id_special_listing?>"></div>  
                <div class="more clr">
                        <div class="box-controls">
                            <div class="featured-title"> <a href="<?=$special_listing->link?>" target="_blank" title="go to <?=$special_listing->title?> | special listing" ><?=$special_listing->title?></a></div>
                            <div class="featured-price"><span class="base-price-class"><?=$special_listing->sale_price?>&nbsp;<?=$currency?></span>&nbsp;&nbsp;<span class="discount-price-class"><?=$special_listing->price?>&nbsp;<?=$currency?></span></div> 
                            
                            <div action="delete" id_special_listing="<?=$special_listing->id_special_listing?>" title="Delete Special Listing" class="button-controls custom_button" >
                                 <i class="icon-trash"  title="Delete Special Listing"></i>
                            </div>
                            
                            <span class="separator-left">&nbsp;|&nbsp;</span>

                            <div action="edit" id_special_listing="<?=$special_listing->id_special_listing?>" title="Edit Special Listing" class="button-controls custom_button" >
                                 <i class="icon-edit"  title="Edit Special Listing"></i>
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
                        You have not added Special Listings
                    </span>
                </div>
            <?php
                endif;
            ?> 
        </div>
</div>   

<script>
jQuery(document).ready(function() {
  
   
   

    jQuery(".button_new_special").click(function()
    {
       global_location =  jQuery("#global_location").val();
       form = ajax_load_listing_special_part_form();
         if(global_location=="specials")
      {
        jQuery(".advertising-form-content").html(form);  
      } 
      else{
           
        jQuery(".advertising-form-content").html(form) ;
      
      }
       jQuery(".alert").css("display","none");
        jQuery(".advertising-form-content").fadeIn();
        jQuery(".listing-advertising").fadeOut();
        jQuery(".button_new_special").fadeOut();
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
        id_special_listing = jQuery(this).attr("id_special_listing");
        var result = confirm("Are you sure?");
        if (result==true) 
        {
            message =  delete_special_listing(id_special_listing);  
            var current_src = jQuery("#img-"+id_special_listing).attr("src");
            blueimp_remove_image(current_src,"specials");
            global_location =  jQuery("#global_location").val();
            do_properly_click(global_location);
            show_successfull_message(message);
        }                
      }
        if(action=="edit")
        {

          id = jQuery(this).attr("id_special_listing"); 
          advertising = load_listing_special_array(id);
          jQuery(".advertising-form-content").html( ajax_load_listing_special_part_form()  );

          jQuery('#id').val(advertising[0].id_special_listing);
          jQuery('#title').val(advertising[0].title);
          jQuery('#link').val(advertising[0].link);
          jQuery('#price').val(advertising[0].price);
          jQuery('#price1').val(advertising[0].sale_price);
          jQuery('#files-preview').html('<div><p><img width="100" height="100" src="'+advertising[0].image_url+'"></p></div>')
          jQuery(".alert").fadeOut() ;
          jQuery(".advertising-form-content").fadeIn();
          jQuery(".listing-advertising").fadeOut();
          jQuery(".button_new_special").fadeOut();
          jQuery(".button_back_advertising").fadeIn();

        }
    });
   // alert("in")
});
</script>