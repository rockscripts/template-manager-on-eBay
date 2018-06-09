
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
    <div class="btn btn-primary hide button_back_suggested_template" style="width: 50px;" href="<?= base_url() ?>suggested_templates">
          <i class="  icon-backward"></i> Back
     </div>
    <div class="btn btn-primary button_new_suggested_template">
      <i class=" icon-plus"></i> New
    </div>
</div>

<div class="advertising-form-content hide"></div>

<div class="listing-advertising">
        <div class="block-grid-9">
           <?php
            if(!empty($suggested_templates_array)):
                foreach($suggested_templates_array as $suggested_template):
            ?> 
            <div class="listing-advertising-box featured-box">
                <div class="listing-images-for-boxes">
                    <img src="<?=$suggested_template->url_image?>"  id="img-<?=$suggested_template->id_suggested_template?>">
                </div>
                
                <div class="more clr">
                        <div class="box-controls">
                            <div class="featured-price"><a href="<?=$suggested_template->link?>" target="_blank" class="linke-name-backend" title="go to <?=$suggested_template->name?> template"><?=$suggested_template->name?></a></div> 
                            
                            <div action="delete" id_suggested_template="<?=$suggested_template->id_suggested_template?>" title="Delete Suggested template" class="button-controls custom_button" >
                                 <i class="icon-trash"  title="Delete Suggested template"></i>
                            </div>
                             
                            <span class="separator-left">&nbsp;|&nbsp;</span>

                            <div action="edit" id_suggested_template="<?=$suggested_template->id_suggested_template?>" title="Edit Suggested template" class="button-controls custom_button" >
                                 <i class="icon-edit"  title="Edit Suggested template"></i>
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
                        You have not added Suggested templates yet. 
                    </span>
                </div>
            <?php
                endif;
            ?> 
        </div>
</div>   

<script>
jQuery(document).ready(function() {
    


   
    jQuery(".button_new_suggested_template").click(function()
    {
        global_location =  jQuery("#global_location").val();
        form = ajax_load_suggested_template_form();
         if(global_location=="suggested_template")
      {        
       jQuery(".advertising-form-content").html(form);  
      } 
      else{
        jQuery(".advertising-form-content").html( form) ;
     
      }
        jQuery(".advertising-form-content").fadeIn();
        jQuery(".listing-advertising").fadeOut();
        jQuery(".button_new_suggested_template").fadeOut();
        jQuery(".button_back_suggested_template").fadeIn();
        jQuery(".alert").css("display","none");
    });

   jQuery(".button_back_suggested_template").click(function()
    {
        jQuery(".widgetcontent").html( load_suggested_template_part('suggested-template') );
        jQuery(".advertising-form-content").fadeOut();
        jQuery(".listing-advertising").fadeIn();
        jQuery(".button_new_suggested_template").fadeIn();
        jQuery(".button_back_suggested_template").fadeOut();
        jQuery(".alert").css("display","none");
    });
    jQuery(".custom_button").click(function()
    {     
      action = jQuery(this).attr("action");
      if(action=="delete")
      {
        id_suggested_template = jQuery(this).attr("id_suggested_template");
        var result = confirm("Are you sure?");
        if (result==true)  
        {
            jQuery(".loader-image").fadeIn();
            message =  delete_suggested_template(id_suggested_template);  
            var current_src = jQuery("#img-"+id_suggested_template).attr("src");
            blueimp_remove_image(current_src,"suggested-template");
            jQuery(".widgetcontent").html( load_suggested_template_part('suggested-template') );
            show_successfull_message(message);
        }                
      }  
        if(action=="edit")
        {
          jQuery(".button_back_suggested_template").fadeIn();
          id = jQuery(this).attr("id_suggested_template"); 
          popular_category = load_suggested_template(id);
         
          jQuery(".advertising-form-content").html( ajax_load_suggested_template_form() );
          jQuery('#id').val(popular_category[0].id_suggested_template);
          jQuery('#name').val(popular_category[0].name);
          jQuery('#link').val(popular_category[0].link);
          jQuery('#files-preview').html('<div><p><img width="100" height="100" src="'+popular_category[0].url_image+'"></p></div>')

          jQuery(".alert").fadeOut() ;
          jQuery(".advertising-form-content").fadeIn();
          jQuery(".listing-advertising").fadeOut();
          jQuery(".button_new_suggested_template").fadeOut();

        }
    });

});
</script>
<style>
.listing-images-for-boxes img {
    height: auto !important;
    max-height: 225px!important;
    width: auto;
}    
</style>