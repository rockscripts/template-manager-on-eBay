<div class="description-form-content">
   
    <h4 class="widgettitle nomargin shadowed">Listing Description</h4>
    <div class="widgetcontent bordered shadowed nopadding">
         <?php  
         $attributes = array('class' => 'stdform stdform2 ',"id"=>"description_form");
         echo form_open("configuration/save_new_configuration",$attributes);
         ?> 
        <p>
            
               
                <?php 
            		$config_mini = array();   
            		$config_mini['toolbar'] = array(array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike','FontSize','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','NumberedList','BulletedList' ,'-', 'Link', 'Unlink', 'Anchor','Image','Flash','Table','HorizontalRule'));
            		$config_mini['filebrowserBrowseUrl'] = base_url()."ckeditor/kcfinder/browse.php";
            		$config_mini['filebrowserImageBrowseUrl'] = base_url()."ckeditor/kcfinder/browse.php?type=images";
            		$config_mini['filebrowserUploadUrl'] = base_url()."ckeditor/kcfinder/upload.php?type=files";
            		$config_mini['filebrowserImageUploadUrl'] = base_url()."ckeditor/kcfinder/upload.php?type=images";
                        if($listing_description):
            		echo $this->ckeditor->editor("description", $listing_description->description , $config_mini);
                        else:
                           echo $this->ckeditor->editor("description", html_entity_decode('') , $config_mini);
                           endif;
            	?>
      
        </p>
        
        <p class="stdformbutton"> 
            <div  class="btn btn-primary  button_add_description">
                <i class="iconsweets-zip"></i>
                Save
            </div>
        </p>
        <?php
            echo form_close();
        ?>
    </div>
</div>

<script>
    
jQuery(document).ready(function() 
{

 // CKEDITOR.instances.description.setData(initialText);

 jQuery(".button_add_description").click(function()
 {
    //jQuery('textarea[name=description]').val(CKEDITOR.instances.description.getData());
    CKEDITOR.instances.description.updateElement();
    dataString = jQuery("#description_form").serialize();
    message    = update_listing_description(dataString);
    show_successfull_message(message);
 });
  jQuery(".loader-image").fadeOut();
});

</script>