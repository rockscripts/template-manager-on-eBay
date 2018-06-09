<div class="alert  hide alert-success" >
                	<button class="close" type="button">x</button>
                 <span id="message_content"></span>
  </div>
<div class="top-buttons">
    <div class="btn btn-primary button_back_advertising hide" style="width: 47px;">
          <i class="  icon-backward"></i> Back
     </div>
    <div class="btn btn-primary button_new_image_video_slider" style="width: 77px;">
      <i class=" icon-plus"></i> Add Image
    </div>
    <div class="btn btn-primary button_new_image_video_slider_yt" video_provider="Youtube"  style="width: 122px;">
      <i class=" icon-youtube"></i> Add Youtube Video
    </div>
     <div class="btn btn-primary button_new_image_video_slider_vimeo" video_provider="Vimeo"  style="width: 117px;">
      <i class=" icon-vimeo"></i> Add Vimeo Video
    </div>
  
</div>

<div class="advertising-form-content hide"></div>
<br>

<div class="listing-advertising">
    <h4 class="widgettitle nomargin shadowed">My Slider Images</h4>

    <div class="widgetcontent bordered shadowed nopadding">
        
           <?php
           
            if(!empty($array_images)):
                 ?>
        <div class="block-grid-5 banner">
            <?php
               for($index_image=0;$index_image<sizeof($array_images);$index_image++):
            ?> 
            <div class="listing-advertising-box featured-box custom-width" style="height: 188px;">
                <?php
                if($array_images[$index_image] ['link']!=""):
                    ?>
                 <a href="<?=$array_images[$index_image] ['link']?>" target="_blank" ><img src="<?=$array_images[$index_image] ['image_url']?>" id="img-<?=$array_images[$index_image] ['id_listing_design_slider'] ?>"></a>
                <?php
                    else:
                    ?>
                  <img src="<?=$array_images[$index_image] ['image_url']?>" style="width: 100%;height:134px" id="img-<?=$array_images[$index_image] ['id_listing_design_slider'] ?>">
                <?php
                endif;
                ?>
                <div class="more clr">
                        <div class="box-controls">
                           
                            
                            <div action="delete" id_listing_design_slider="<?=$array_images[$index_image] ['id_listing_design_slider'] ?>" title="Delete  Image" class="button-controls custom_button" >
                                 <i class="icon-trash"  title="Delete  Image"></i>
                            </div>
                            
                            <span class="separator-left">&nbsp;|&nbsp;</span>

                            <div action="edit" id_listing_design_slider="<?=$array_images[$index_image] ['id_listing_design_slider'] ?>" title="Edit  Image" class="button-controls custom_button" >
                                 <i class="icon-edit"  title="Edit Image"></i>
                            </div>
                        </div>
                </div>
            </div>
            <?php
            endfor;
            ?>
             </div>
            <?php
            else:
                ?>
                <div  class="message-empty" style="margin-top: -5px;">      
                    <span> 
                        You have not added Slider Images
                    </span>
                </div>
            <?php
                endif;
            ?> 
      
</div> 
        <h4 class="widgettitle nomargin shadowed">My Slider Videos </h4>

    <div class="widgetcontent bordered shadowed nopadding">
        
           <?php
           
            if(!empty($array_videos)):
                ?>
        <div class="block-grid-2">
            <?php
               for($index_video=0;$index_video<sizeof($array_videos);$index_video++):
            ?> 
            <div class="listing-advertising-box featured-box custom-width">
                <?php
                if($array_videos[$index_video] ['type'] == "Youtube"):
                    $url = $array_videos[$index_video] ['image_url'];
                  $pattern = '#^(?:https?://)?(?:www\.)?(?:youtu\.be/|youtube\.com(?:/embed/|/v/|/watch\?v=|/watch\?.+&v=))([\w-]{11})(?:.+)?$#x';
                preg_match($pattern, $url, $matches);
                $video_id =  (isset($matches[1])) ? $matches[1] : false;
              //   $video_id = substr($res[1],1,12);
    
                    ?>
              <iframe width="100%" height="auto" src="//www.youtube.com/embed/<?=$video_id?>" frameborder="0" allowfullscreen></iframe>
                <?php
                elseif($array_videos[$index_video] ['type'] == "Vimeo"):
                  $video_id =   (int) substr(parse_url($array_videos[$index_video] ['image_url'] , PHP_URL_PATH), 1);
                    ?>
                <iframe src="//player.vimeo.com/video/<?=$video_id?>?portrait=0&amp;color=ffffff" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <?php
                endif;
                ?>
                <div class="more clr">
                        <div class="box-controls">
                           
                            
                            <div action="delete" id_listing_design_slider="<?=$array_videos[$index_video] ['id_listing_design_slider'] ?>" title="Delete Video" class="button-controls custom_button" >
                                 <i class="icon-trash"  title="Delete Video"></i>
                            </div>
                            
                            <span class="separator-left">&nbsp;|&nbsp;</span>

                            <div action="edit1" id_listing_design_slider="<?=$array_videos[$index_video] ['id_listing_design_slider'] ?>" title="Edit Video" class="button-controls custom_button" provider="<?= ucwords(strtolower($array_videos[$index_video] ['type']) )?>">
                                 <i class="icon-edit"  title="Edit Video"></i>
                            </div>
                        </div>
                </div>
            </div>
            <?php
            endfor;
            ?>
             </div>
            <?php
            else:
                ?>
                <div  class="message-empty" style="margin-top: -5px;">      
                    <span> 
                        You have not added Slider Videos
                    </span>
                </div>
            <?php
                endif;
            ?> 
       
</div> 
    </div>

<script>
jQuery(document).ready(function() {



    jQuery(".button_new_image_video_slider").click(function()
    {
        jQuery(".loader-image").fadeIn();
        jQuery(".alert").css("display","none");
        jQuery(".advertising-form-content").html( ajax_load_listing_images_videos_slider_part_form() ) ;
        jQuery(".advertising-form-content").fadeIn();
        jQuery(".listing-advertising").fadeOut();
        jQuery(".button_new_image_video_slider").fadeOut();
         jQuery(".button_new_image_video_slider_yt").fadeOut();
         jQuery(".button_new_image_video_slider_vimeo").fadeOut();
        jQuery(".button_back_advertising").fadeIn();
    });

    jQuery(".button_back_advertising").click(function()
    {
        jQuery(".advertising-form-content").fadeOut();
        jQuery(".listing-advertising").fadeIn();
        jQuery(".button_new_image_video_slider").fadeIn();
        jQuery(".button_new_image_video_slider_yt").fadeIn();
        jQuery(".button_new_image_video_slider_vimeo").fadeIn();
        jQuery(".button_back_advertising").fadeOut();
        jQuery(".alert").css("display","none");
    });

    jQuery(".custom_button").click(function()
    {
     jQuery(".loader-image").fadeIn();
      action = jQuery(this).attr("action");
      if(action=="delete")
      {
        id_listing_design_slider = jQuery(this).attr("id_listing_design_slider");
        var result = confirm("Are you sure?");
        if (result==true) 
        {
            message =  delete_images_videos_slider(id_listing_design_slider);   
            show_successfull_message(message);
            var current_src = jQuery("#img-"+id_listing_design_slider).attr("src");
            blueimp_remove_image(current_src,"listing-slider");
            jQuery("li.listing-slider").click() ;
            jQuery("li.listing-slider").click() ;
            jQuery(".listing-images").css("display","none");
        }                
      }
        if(action=="edit")
        {
         jQuery(".button_back_advertising").fadeIn();
          jQuery(".button_new_image_video_slider_yt").fadeOut();
          jQuery(".button_new_image_video_slider_vimeo").fadeOut();
          id = jQuery(this).attr("id_listing_design_slider"); 
          images_videos_slider = load_images_videos_slider_array(id)
          jQuery(".advertising-form-content").html( ajax_load_listing_images_videos_slider_part_form()  );

          jQuery('#id').val(images_videos_slider[0].id_listing_design_slider);
          jQuery('#link').val(images_videos_slider[0].link);
          jQuery('#files-preview').html('<div><p><img width="100" height="100" src="'+images_videos_slider[0].image_url+'"></p></div>')

          jQuery(".alert").fadeOut() ;
          jQuery(".advertising-form-content").fadeIn();
          jQuery(".listing-advertising").fadeOut();
          jQuery(".button_new_image_video_slider").fadeOut();

        }
          if(action=="edit1")
        {
         jQuery(".button_back_advertising").fadeIn();
         
          jQuery(".button_new_image_video_slider_yt").fadeOut();
          jQuery(".button_new_image_video_slider_vimeo").fadeOut();
          id = jQuery(this).attr("id_listing_design_slider"); 
          provider = jQuery(this).attr("provider"); 
          images_videos_slider = load_images_videos_slider_array(id)
        
          jQuery(".advertising-form-content").html( ajax_load_images_videos_slider_part_providers_form(provider)  );
/*
 * 
          images_videos_slider = load_images_videos_slider_array(id)
          jQuery(".advertising-form-content").html( ajax_load_images_videos_slider_part_providers_form()  );
 */
          jQuery('#id').val(images_videos_slider[0].id_listing_design_slider);
          jQuery('#video_url').val(images_videos_slider[0].image_url);

          jQuery(".alert").fadeOut() ;
          jQuery(".advertising-form-content").fadeIn();
          jQuery(".listing-advertising").fadeOut();
          jQuery(".button_new_image_video_slider").fadeOut();

        }
    });
        jQuery(".button_new_image_video_slider_yt").click(function()
        {
        jQuery(".alert").css("display","none");
        jQuery(".advertising-form-content").html( ajax_load_images_videos_slider_part_providers_form('Youtube') ) ;
        jQuery(".advertising-form-content").fadeIn();
        jQuery(".listing-advertising").fadeOut();
       jQuery(this).fadeOut();
        jQuery(".button_new_image_video_slider").fadeOut();
         jQuery(".button_new_image_video_slider_vimeo").fadeOut();
        jQuery(".button_back_advertising").fadeIn();
         jQuery("#video_provider").val(jQuery(this).attr("video_provider"));
        })
          jQuery(".button_new_image_video_slider_vimeo").click(function()
        {
        jQuery(".alert").css("display","none");
        jQuery(".advertising-form-content").html( ajax_load_images_videos_slider_part_providers_form('Vimeo') ) ;
        jQuery(".advertising-form-content").fadeIn();
        jQuery(".listing-advertising").fadeOut();
         jQuery(this).fadeOut();
        jQuery(".button_new_image_video_slider").fadeOut();
         jQuery(".button_new_image_video_slider_yt").fadeOut();
        jQuery(".button_back_advertising").fadeIn();
         jQuery("#video_provider").val(jQuery(this).attr("video_provider"));
        })

});
</script>