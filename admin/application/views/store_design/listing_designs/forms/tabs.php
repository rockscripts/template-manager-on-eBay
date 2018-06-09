  <div class="top-buttons">
<div class="btn btn-primary button_back_tab">
      <i class="  icon-backward"></i> Back
 </div>
<div class="btn btn-primary button_new_tab">
      <i class=" icon-plus"></i> New Tab
 </div>
    </div>
<br>

<div class="new-tab-form-content">
    <h4 class="widgettitle nomargin shadowed">New Tab</h4>
    <div class="widgetcontent bordered shadowed nopadding">
         <?php  
         $attributes = array('class' => 'stdform stdform2',"id"=>"new_tab_form");
         echo form_open("configuration/save_new_configuration",$attributes);
         ?>
         <input name="tab_id" type="hidden" /> 
        <p>
            <label>Title: </label>
             <span class="field">
                 <input type="text" id="tab_title" name="tab_title" class="input-xlarge" />                 
             </span>
        </p>
        <p>
            <label>Content: </label>
             <span class="field">
              <!-- <textarea name="tab_content"></textarea> -->
               <?php     
    $config_mini = array();   
    $config_mini['toolbar'] = array(
      array('Source', '-', 'Bold', 'Italic', 'Underline', 'Strike','FontSize','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','NumberedList','BulletedList' ,'-', 'Link', 'Unlink', 'Anchor','Image','Table','HorizontalRule')
    );
    $config_mini['filebrowserBrowseUrl'] = base_url()."ckeditor/kcfinder/browse.php";
    $config_mini['filebrowserImageBrowseUrl'] = base_url()."ckeditor/kcfinder/browse.php?type=images";
    $config_mini['filebrowserUploadUrl'] = base_url()."ckeditor/kcfinder/upload.php?type=files";
    $config_mini['filebrowserImageUploadUrl'] = base_url()."ckeditor/kcfinder/upload.php?type=images";
    echo $this->ckeditor->editor("tab_content", "", $config_mini);
    ?>
             </span>
            
        </p>
        <p class="stdformbutton"> 
        <div  class="btn btn-primary  button_add_tab" style="margin-bottom: 20px;">
                                  <i class="iconsweets-zip"></i>
                                    Save
                               </div>
        </p>
        <?php
        echo form_close();
        ?>
        
       
    </div>
</div>

<div class="new-tab-form-content tabs_preview" style="display: block;">
<h4 class="widgettitle nomargin shadowed">Preview</h4>
<div class="widgetcontent bordered shadowed"> 

<div id="tab_container">
  
  <ul class="nav nav-tabs" id="myTab">
    <?php 
    if(!empty($listing_tabs_array)):     
 
      foreach($listing_tabs_array as $key => $tab):
    ?>
      <li class="<?php if ( $key == 0 ) echo 'active'; ?>">
        <a data-toggle="tab" href="#tab-<?=$tab->id_listing_design_tab ?>" style="height:17px;">
            <div class="left">
                 <?=$tab->title ?>
            </div>

          <div action="edit" style="float:right;" id_tab="<?=$tab->id_listing_design_tab ?>" title="Edit Image" class="button-controls custom_button" >
            <img src="<?= base_url() ?>themes/katniss/img/edit.png"  title="Edit Tab" >
          </div>
          <div action="delete" style="float:right;margin-left:20px;" id_tab="<?=$tab->id_listing_design_tab ?>" title="Delete Image" class="button-controls custom_button">
            <img src="<?= base_url() ?>themes/katniss/img/delete.png"  title="Delete Tab" >
          </div>
        </a>
      </li>
    <?php 
      endforeach; 
    else:
        ?>
        <div class="alert alert_show">      
            <span id="message_content"> 
               <i class="iconsweets-info"></i> Click New Tab button to start working with tabs
            </span>
        </div>
    <?php
        endif;
    ?> 
  </ul>
  <div class="tab-content" id="myTabContent" style="margin-top: -20px;">
    <?php 
    if(!empty($listing_tabs_array)):   
      foreach($listing_tabs_array as $key => $tab):
    ?>
      <div id="tab-<?=$tab->id_listing_design_tab ?>" class="tab-pane fade in <?php if ( $key == 0 ) echo 'active'; ?>" style="border:none;">    
               <p><?=$tab->content ?></p>
      </div>
    <?php 
      endforeach; 
     endif;
    ?>
  </div>

</div>

</div>
</div>

<script>
    
jQuery(document).ready(function() 
{

jQuery(".button_new_tab").click(function()
 {
   
             jQuery("#tab_content").css("border","1px  solid #bbb")    ;  
        jQuery(".alert").css("display","none")    ; 
            jQuery('input[name=tab_id]').val("");
            jQuery('input[name=tab_title]').val("");
            // jQuery('textarea[name=tab_content]').val("");
            CKEDITOR.instances.tab_content.setData("");
            jQuery(".new-tab-form-content").fadeIn();
            jQuery(this).css("display","none");
            jQuery(".button_back_tab").fadeIn();
            jQuery('.tabs_preview').css("display", "none");
            jQuery(".alert").css("display","none");   
            jQuery(".alert_show").css("display","block");   
            
     
   
 });
 
 /*Add new Tab*/
 jQuery(".button_add_tab").click(function()
 {
     jQuery(".loader-image").fadeIn();
     tab_title  = jQuery("#tab_title").val();
    tab_content  = jQuery("#tab_content").val();
    if(tab_title != "")
    {
        jQuery("#tab_title").css("border","1px  solid #bbb")    ;  
        jQuery(".alert").css("display","none")    ;  
     
     jQuery('textarea[name=tab_content]').val(CKEDITOR.instances.tab_content.getData());
     
     dataString = jQuery("#new_tab_form").serialize();
     message    = add_tab(dataString);
     show_successfull_message("Listing Tab was saved successful.");
     ajax_load_tabs_form(function(response)
    {
        form_tabs = callback_ajax_load_tabs_form(response);
        jQuery(".content-without-images").html(form_tabs);
    });
    }
    else 
         {
              jQuery("#message_content").text("")
              show_error_message("Tab title field is empty.") ;
              jQuery("#tab_title").css("border","1px  solid red");  
               jQuery(".alert").css("display","block")    ;  
         }
         jQuery(".loader-image").fadeOut();
 });
 
 /*button back SHOWS MAIN INTERFACE FOR TABS*/
  jQuery(".button_back_tab").click(function()
 {
      jQuery(this).css("display","none");
      jQuery(".button_new_tab").fadeIn();
      jQuery(".new-tab-form-content").css("display","none");
      jQuery('.tabs_preview').css("display", "block") ;
      jQuery(".alert").css("display","none");
      jQuery(".alert_show").css("display","block");
 });

jQuery(".custom_button").click(function()
{
   
    action = jQuery(this).attr("action");
    
    if(action=="delete")
    {
      jQuery(".loader-image").fadeIn();
       id_tab = jQuery(this).attr("id_tab");
       var result = confirm("Are you sure?");
       if (result==true) 
        {    
            jQuery(".loader-image").fadeIn();
          message =  delete_tab(id_tab); 
          show_successfull_message(message);            
          ajax_load_tabs_form(function(response)
    {
        form_tabs = callback_ajax_load_tabs_form(response);
        jQuery(".content-without-images").html(form_tabs);
    });        
        }                     
    }

    if(action=="edit")
    {
      
      id_tab = jQuery(this).attr("id_tab"); 
      tab    = ajax_load_tab(id_tab); 
      jQuery('input[name=tab_id]').val(tab[0].id_listing_design_tab);
      jQuery('input[name=tab_title]').val(tab[0].title);
      // jQuery('textarea[name=tab_content]').val(tab[0].content);
      CKEDITOR.instances.tab_content.setData(tab[0].content);
      jQuery(".new-tab-form-content").fadeIn();
      jQuery(".button_new_tab").css("display","none");
      jQuery(".button_back_tab").fadeIn(); 

      jQuery('.tabs_preview').css("display", "none") ;

    }

});


});
</script>