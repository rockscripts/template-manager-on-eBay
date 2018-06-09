
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
                <label>Display listings in home</label>
                  <span class="field is_active_listings_on_home">
                    <input type="checkbox" name="is_active_listings_on_home" id="is_active_listings_on_home" value="<?=$is_active_listings_on_home?>">
                </span>
                <span class="field  ">                    
                    <b>#</b> <input type="text" class="input-xlarge" name="number_listings_on_front_design" style="width:100px;"id="number_listings_on_front_design" value="<?=$number_listings_on_home?>"/>
                </span>
               
         </p>
    <p>
                <label>Display widgets in categories pages</label>
                  <span class="field display_widgets_categories">
                    <input type="checkbox" name="display_widgets_categories" id="display_widgets_categories" value="<?=$display_widgets_categories?>">
                </span>
               
         </p>
        <p class="stdformbutton"> 
            <div  class="btn btn-primary  save_theme_options" style="margin-left: 10px;margin-bottom: 10px;">
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
   var switch_select = "<?php echo $is_active_listings_on_home?>";
    jQuery("input#is_active_listings_on_home").switchButton({
  width: 41,
  height: 14,
  button_width: 23,
  on_label: 'ON',
  off_label: 'OFF'
});
   jQuery("input#display_widgets_categories").switchButton({
  width: 41,
  height: 14,
  button_width: 23,
  on_label: 'ON',
  off_label: 'OFF'
});
jQuery(document).on("click",".save_theme_options",function(){
  var is_active_listings_on_home =  jQuery(".is_active_listings_on_home").find(".on").text();
  var display_widgets_categories =  jQuery(".display_widgets_categories").find(".on").text();
  var number_listings_on_front_design =  jQuery("#number_listings_on_front_design").val();
  save_theme_option(is_active_listings_on_home,"front-design-option-is-active-listings-on-front");
  save_theme_option(display_widgets_categories,"front-design-option-display-widgets-categories");
  if(number_listings_on_front_design!="")
  {
      if(is_numeric(number_listings_on_front_design))
  {
       jQuery("#number_listings_on_front_design").css("border","1px  solid #bbb")    ;
       save_theme_option(number_listings_on_front_design,"front-design-option-number-listings-on-front");       
       show_successfull_message('Theme options was updated successful');
  } 
  else
  {
      show_error_message("Number of listings in front design field is not a number.") ;
      jQuery("#number_listings_on_front_design").css("border","1px  solid red")    ;  
  }
  }
  else
  {
    show_error_message("Number of listings in front design field is empty.") ;
    jQuery("#number_listings_on_front_design").css("border","1px  solid red")    ;    
  }
  
});
jQuery(document).ready(function() 
{
if(switch_select=="ON")
 jQuery(".switch-button-label:eq(1)").click();
});
</script>
