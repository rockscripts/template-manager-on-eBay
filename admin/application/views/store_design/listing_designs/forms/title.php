<div class="description-form-content">
   
    <h4 class="widgettitle nomargin shadowed">Listing Title</h4>
    <div class="widgetcontent bordered shadowed nopadding">
         <?php  
         $attributes = array('class' => 'stdform stdform2 ',"id"=>"title_form");
         echo form_open("configuration/save_new_configuration",$attributes);
         ?> 
       
        <p>
            
               <label>Listing Title: </label>
                <?php 
                        if($listing_title):
                            ?>
                       <span class="field"><input type="text" id="listing_title" name="listing_title" class="input-xlarge" value="<?=$listing_title->title?>" /></span>
                        <?php            	
                        else:
                             ?>
                       <span class="field"><input type="text" id="listing_title" name="listing_title" class="input-xlarge" value="" /></span>
                        <?php
                           endif;
            	?>
      
        </p>
        
        <p class="stdformbutton"> 
            <div  class="btn btn-primary  button_add_title">
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
    
jQuery().ready(function() 
{

 // CKEDITOR.instances.description.setData(initialText);

 jQuery(".button_add_title").click(function()
 {

    dataString = jQuery("#title_form").serialize();
    message    = update_listing_title(dataString);
    show_successfull_message(message);
 });
  jQuery(".loader-image").fadeOut();
});

</script>