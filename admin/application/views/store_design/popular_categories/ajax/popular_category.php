
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
<div class="alert2  alert-info">
              <i class="icon-info-sign"></i>Recommended image sizes: 640 x 480 pixels
  </div>
<div class="top-buttons">
    <div class="btn btn-primary button_back_popular_category hide" style="width: 100px;">
          <i class="  icon-backward"></i> Back
     </div>
    <div class="btn btn-primary button_new_popular_category" style="width: 150px;">
      <i class=" icon-plus"></i> New Popular Category
    </div>
</div>

<div class="advertising-form-content hide"></div>

<div class="listing-advertising">
        <div class="block-grid-9">
           <?php
            if(!empty($listing_popular_categories_array)):
                foreach($listing_popular_categories_array as $popular_categories):
            ?> 
            <div class="listing-advertising-box featured-box">
                <div class="listing-images-for-boxes">
                    <img src="<?=$popular_categories->image_url?>"  id="img-<?=$popular_categories->id_popular_category?>">
                </div>
                
                <div class="more clr">
                        <div class="box-controls">
                            <div class="featured-price"><a href="<?=$popular_categories->link?>" target="_blank" class="linke-name-backend" title="go to <?=$popular_categories->name?> | category"><?=$popular_categories->name?></a></div> 
                            
                            <div action="delete" id_popular_category="<?=$popular_categories->id_popular_category?>" title="Delete Popular Category" class="button-controls custom_button" >
                                 <i class="icon-trash"  title="Delete Popular Category"></i>
                            </div>
                             
                            <span class="separator-left">&nbsp;|&nbsp;</span>

                            <div action="edit" id_popular_category="<?=$popular_categories->id_popular_category?>" title="Edit Popular Category" class="button-controls custom_button" >
                                 <i class="icon-edit"  title="Edit Popular Category"></i>
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
                        You have not added Popular Categories yet. 
                    </span>
                </div>
            <?php
                endif;
            ?> 
        </div>
</div>   

<script>
jQuery(document).ready(function() {
    


   
    jQuery(".button_new_popular_category").click(function()
    {
        global_location =  jQuery("#global_location").val();
        form = ajax_load_popular_categories_part_form();
         if(global_location=="popular_categories")
      {        
       jQuery(".advertising-form-content").html(form);  
      } 
      else{
        jQuery(".advertising-form-content").html( form) ;
     
      }
         jQuery(".advertising-form-content").fadeIn();
        jQuery(".listing-advertising").fadeOut();
        jQuery(".button_new_popular_category").fadeOut();
        jQuery(".button_back_popular_category").fadeIn();
        jQuery(".alert").css("display","none");
    });

    jQuery(".button_back_popular_category").click(function()
    {
        global_location =  jQuery("#global_location").val();
        do_properly_click(global_location)
      
        jQuery(".advertising-form-content").fadeOut();
        jQuery(".listing-advertising").fadeIn();
        jQuery(".button_new_popular_category").fadeIn();
        jQuery(".button_back_popular_category").fadeOut();
           jQuery(".alert").css("display","none");
    });

    jQuery(".custom_button").click(function()
    {
     
      action = jQuery(this).attr("action");
      if(action=="delete")
      {
        id_popular_category = jQuery(this).attr("id_popular_category");
        var result = confirm("Are you sure?");
        if (result==true)  
        {
             jQuery(".loader-image").fadeIn();
            message =  delete_popular_category(id_popular_category);  
            var current_src = jQuery("#img-"+id_popular_category).attr("src");
            blueimp_remove_image(current_src,"popular-category");
            global_location =  jQuery("#global_location").val();
            do_properly_click(global_location);
            show_successfull_message(message);
        }                
      }  
        if(action=="edit")
        {
 jQuery(".button_back_popular_category").fadeIn();
          id          = jQuery(this).attr("id_popular_category"); 
          popular_category = load_popular_category(id);
         
         jQuery(".advertising-form-content").html( ajax_load_popular_categories_part_form() );

          jQuery('#id').val(id);
          jQuery('#name').val(popular_category[0].name);
          jQuery('#link').val(popular_category[0].link);
          jQuery('#files-preview').html('<div><p><img width="100" height="100" src="'+popular_category[0].image_url+'"></p></div>')

          jQuery(".alert").fadeOut() ;
          jQuery(".advertising-form-content").fadeIn();
          jQuery(".listing-advertising").fadeOut();
          jQuery(".button_new_popular_category").fadeOut();

        }
    });

});
</script>