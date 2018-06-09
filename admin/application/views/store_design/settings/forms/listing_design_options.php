
 <div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"> 
                    <?php 
                    if(isset($message))
                    {
                       echo  $message ;
                    }
                    ?>
                 </span>
  </div>
<div class="description-form-content">
   
    <h4 class="widgettitle nomargin shadowed"></h4>
    <div class="widgetcontent bordered shadowed nopadding">
         <?php  
         $attributes = array('class' => 'stdform stdform2 ',"id"=>"description_form");
         echo form_open("configuration/save_new_configuration",$attributes);
         ?>  
        <p>
                <label>Display image viewer</label>
                  <span class="field is_active_listing_image_viewer">
                    <input type="checkbox" name="is_active_listing_image_viewer" id="is_active_listing_image_viewer" value="<?=$is_active_listing_image_viewer?>">
                </span>
               
         </p>
    
        <p class="stdformbutton"> 
            <div  class="btn btn-primary  save_listing_theme_options" style="margin-left: 10px;margin-bottom: 10px;">
                <i class="icon-play"></i>
                Save
            </div>
        </p>
        <?php
            echo form_close();
        ?>
    </div>
</div>
<script>
   var switch_select = "<?php echo $is_active_listing_image_viewer?>";
 
 jQuery("input#is_active_listing_image_viewer").switchButton({
  width: 41,
  height: 14,
  button_width: 23,
  on_label: 'ON',
  off_label: 'OFF'
});

jQuery(document).on("click",".save_listing_theme_options",function()
{
  var is_active_listing_image_viewer =  jQuery(".is_active_listing_image_viewer").find(".on").text();
  save_theme_option(is_active_listing_image_viewer,"listing-design-option-is-active-image-viewer");    
  show_successfull_message('Theme options was updated successful');
});
jQuery(document).ready(function() 
{
if(switch_select=="ON")
 jQuery(".switch-button-label:eq(1)").click();
});
</script>
