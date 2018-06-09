
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
<div class="top-buttons">
    <div class="btn btn-primary button_back_advertising hide" style="width: 100px;">
          <i class="  icon-backward"></i> Back
     </div>
    <div class="btn btn-primary button_new_advertising" style="width: 150px;">
      <i class=" icon-plus"></i> New Advertisement 
    </div>
</div>

<div class="advertising-form-content hide"></div>

<div class="listing-advertising">
        <div class="block-grid">
           <?php
            if(!empty($home_advertising_array)):
                foreach($home_advertising_array as $advertising):
            ?> 
            <div class="listing-advertising-box featured-box">
                <div class="listing-images-for-boxes">
                <?php
                   if($advertising->link != ""):
                          ?>
                            <a href="<?=$advertising->link?>" target="_blank" ><img src="<?=$advertising->image_url?>" id="img-<?=$advertising->id_home_design_advertising?>"></a>
                         <?php
                       else:
                       ?>
                <img src="<?=$advertising->image_url?>" id="img-<?=$advertising->id_home_design_advertising?>">
                <?php
                   endif;
                ?>
                </div>
                <div class="more clr">
                        <div class="box-controls">
                            <div class="featured-price"><?=$advertising->title?></div> 
                            
                            <div action="delete" id_home_design_advertising="<?=$advertising->id_home_design_advertising?>" title="Delete Advertising" class="button-controls custom_button" >
                                 <i class="icon-trash"  title="Delete Advertising"></i>
                            </div>
                            
                            <span class="separator-left">&nbsp;|&nbsp;</span>

                            <div action="edit" id_home_design_advertising="<?=$advertising->id_home_design_advertising?>" title="Edit Advertising" class="button-controls custom_button" >
                                 <i class="icon-edit"  title="Edit Advertising"></i>
                            </div>
                            <span class="separator-left">&nbsp;|&nbsp;</span>
                            <div >
                                <label class="order-by-input">Order: </label><input type="text" value="<?=$advertising->order?>" id="<?=$advertising->id_home_design_advertising?>" class="order-by-input"/>
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
                        You have not added Advertising
                    </span>
                </div>
            <?php
                endif;
            ?> 
        </div>
</div>   

<script>
jQuery(document).ready(function() {
    
  
    jQuery(".button_new_advertising").click(function()
    {
        jQuery(".alert").css("display","none");
        jQuery(".advertising-form-content").html( ajax_load_home_advertising_part_form() ) ;
        jQuery(".advertising-form-content").fadeIn();
        jQuery(".listing-advertising").fadeOut();
        jQuery(".button_new_advertising").fadeOut();
        jQuery(".button_back_advertising").fadeIn();
        jQuery(".alert").css("display","none");
    });

    jQuery(".button_back_advertising").click(function()
    {
        jQuery(".advertising-form-content").fadeOut();
        jQuery(".listing-advertising").fadeIn();
        jQuery(".button_new_advertising").fadeIn();
        jQuery(".button_back_advertising").fadeOut();
        jQuery(".alert").css("display","none");
    });

    jQuery(".custom_button").click(function()
    {
      var action = jQuery(this).attr("action");
      if(action=="delete")
      {
        id_home_design_advertising = jQuery(this).attr("id_home_design_advertising");
        var result = confirm("Are you sure?");
        if (result==true) 
        {
            delete_home_design_advertising(id_home_design_advertising);  
            var current_src = jQuery("#img-"+id_home_design_advertising).attr("src");
            blueimp_remove_image(current_src,"front-advertising");
            jQuery("li.advertising-home").click() ;
            show_successfull_message("Advertising was deleted successful");
        }                
      }
        if(action=="edit")
        {

          var id          = jQuery(this).attr("id_home_design_advertising"); 
         // alert( id)
          var advertising = load_home_advertising(id)
          
          jQuery(".advertising-form-content").html( ajax_load_home_advertising_part_form() );

          jQuery('#id').val(advertising[0].id_home_design_advertising);
          jQuery('#title').val(advertising[0].title);
          jQuery('#link').val(advertising[0].link);
          jQuery('#files-preview').html('<div><p><img width="100" height="100" src="'+advertising[0].image_url+'"></p></div>')

          jQuery(".alert").fadeOut() ;
          jQuery(".advertising-form-content").fadeIn();
          jQuery(".listing-advertising").fadeOut();
          jQuery(".button_new_advertising").fadeOut();
          jQuery(".button_back_advertising").fadeIn();

        }
    });
    jQuery(document).on("blur",".order-by-input",function(){
     var id = jQuery(this).attr("id");
     var order_value = jQuery(this).val();
     if(is_numeric (order_value))
     {
      update_front_order_advertising(id, order_value, function(response)
        {
            call_update_front_order_advertising(response);            
            show_successfull_message("Advertising item order was updated successfully");
        }); 
        jQuery(this).css("border","1px solid #ccc");
     }
     else
     {
       show_error_message("Order value should be a number.");  
       jQuery(this).css("border","1px solid red");
     }
     
      
    });
});
</script>