<div class="loader-image"></div>
<?php 
if(isset($message))
{
 ?>
 <div class="alert <?php echo $type?>">
                	<button type="button" class="close" data-dismiss="alert">x</button>
                    <?= $message?>
                </div>
 <?php  
}
else
{
  ?>
 <div class="alert" style="display:none">
                	<button type="button" class="close" data-dismiss="alert">x</button>
                        <div id="message_content"></div>
                </div>
<?php
}
?>
<div class="top-buttons">
    <div class="btn btn-primary button_new_row_translator" style="width: 70px;">
          <i class="icon-addpage"></i> New row
    </div>
    <div class="left drop-list-languages-container">
        <div class="btn-group"  style="float:left; border-radius: 10px;">
        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          <?php
          if($main_language=="EN"):
              ?>
            <a href=""><i class="flag-EN i-flags">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>English</a>
            <?php
          endif;
          ?>
           <?php
          if($main_language=="SP"):
              ?>
            <i class="flag-SP i-flags">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>Spanish
            <?php
          endif;
          ?> 
             <?php
          if($main_language=="FR"):
              ?>
            <i class="flag-FR i-flags">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>French
            <?php
          endif;
          ?>
              <?php
          if($main_language=="GR"):
              ?>
            <i class="flag-GR i-flags">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>German
            <?php
          endif;
          ?>
            <span class="caret"></span></button>
      <ul class="dropdown-menu drop-list-languages">
            <?php
          if($main_language!="EN"):
              ?>
            <li >
               <a href="<?=base_url()?>store_design/language/change_main_language?language=EN" class="En"  title="Select as main language"><i class="flag-EN i-flags">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;English</a>
            </li>
            <?php
          endif;
          ?>
            <?php
          if($main_language!="SP"):
              ?>
            <li >
               <a href="<?=base_url()?>store_design/language/change_main_language?language=SP" class="SP"  title="Select as main language"><i class="flag-SP i-flags">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;Spanish</a>
            </li>
            <?php
          endif;
          ?>
            <?php
          if($main_language!="FR"):
              ?>
            <li >
               <a href="<?=base_url()?>store_design/language/change_main_language?language=FR" class="FR"   title="Select as main language"><i class="flag-FR i-flags">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;French</a>
            </li>
             <?php
          endif;
          ?>
            <?php
          if($main_language!="GR"):
              ?>
            <li >
               <a href="<?=base_url()?>store_design/language/change_main_language?language=GR" class="GR"   title="Select as main language"><i class="flag-GR i-flags">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;German</a>
            </li>
             <?php
          endif;
          ?>
    </ul>
        </div>
         
    </div>
    <div class="btn btn-primary button_back_fields_list " style="width: 70px;">
          <i class="  icon-backward"></i> Back
     </div> 
</div>
<div id="language-form"></div>
<div id="language-main-page">  
    <?php echo $fields_data_table;?>
</div>
 


<script>

    // dynamic table

    
var main_language = "<?php echo$main_language;?>";
jQuery(document).ready(function(){

  jQuery(".th-flag-actived-"+main_language).addClass("main-flag");  
  
   jQuery(".button_new_row_translator").click(function()
                              {
                                  jQuery(".loader-image").fadeIn();
                                  jQuery("#language-main-page").fadeOut();
                                  jQuery("#language-form").fadeIn();
                                  jQuery(".button_new_row_translator").fadeOut();
                                  jQuery(".drop-list-languages-container").fadeOut();
                                  jQuery(".button_back_fields_list").fadeIn();
                                  var id_language_translator = -1;
                                    load_language_translator_form(id_language_translator, function(response){
                                        var form = callback_load_language_translator_form(response);     
                                        jQuery("#language-form").html(form);
                                        jQuery(".loader-image").fadeOut();  
                                    });
                                });
                                 jQuery(".button_back_fields_list").click(function()
                              { 
                                  jQuery(".loader-image").fadeIn();
                                  jQuery("#language-main-page").fadeIn();
                                  jQuery("#language-form").fadeOut();
                                  jQuery(".button_new_row_translator").fadeIn();
                                  jQuery(".drop-list-languages-container").fadeIn();
                                  jQuery(this).fadeOut();
                                  jQuery(".loader-image").fadeOut(); 
                                });
                                
      jQuery(document).on("click",".edit_row_translator", function()
        { 
            jQuery(".loader-image").fadeIn();  
            jQuery("#language-main-page").fadeOut();
            jQuery("#language-form").fadeIn();
            jQuery(".button_new_row_translator").fadeOut();
            jQuery(".drop-list-languages-container").fadeOut();
            jQuery(".button_back_fields_list").fadeIn();
            var id_language_translator = jQuery(this).attr("row-id");
            load_language_translator_form(id_language_translator, function( response)
            {
                var form = callback_load_language_translator_form(response);     
                jQuery("#language-form").html(form);
                jQuery(".loader-image").fadeOut();  
            });
        });
        jQuery(document).on("click",".delete_row_translator", function()
        { 
            jQuery(".loader-image").fadeIn();            
            var id_language_translator = jQuery(this).attr("row-id");
            remove_row_translator(id_language_translator, function( response1)
            {
                show_successfull_message("Row was removed successful.");
                load_translator_fields_datable(function(response)
                {
                var datatable = callback_load_translator_fields_datable(response);     
                jQuery("#language-main-page").html(datatable);
                jQuery("#language-form").html("");
                 jQuery(".loader-image").fadeOut(); 
                });
                
            });
        });
});

</script>
