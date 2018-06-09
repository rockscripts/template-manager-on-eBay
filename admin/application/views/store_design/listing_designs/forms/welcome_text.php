
 <div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"> 
                   
                 </span>
  </div> 
        <h4 class="widgettitle nomargin shadowed">Custom Rich Text</h4>

                <div class="widgetcontent bordered shadowed nopadding">  

                   
 <?php  
$attributes = array('class' => 'stdform stdform2',"id"=>"newsletter_welcome_text");
echo form_open("marketing/newsletter/save_welcome_text",$attributes);
?>   
                    <?php
                   
                    if(isset($id_home_design_welcome_text)):
                        ?>
                     <input name="id_home_design_welcome_text" id="id_home_design_welcome_text" type="hidden" value="<?=$id_home_design_welcome_text?>" /> 
                    <?php
                        else:
                             ?>
                     <input name="id_home_design_welcome_text" id="id_home_design_welcome_text"  type="hidden" /> 
                    <?php
                    endif;
                        ?>
                   
 
                            <p>

                              
                     
                                      <?php 
            		$config_mini = array();   
            		$config_mini['toolbar'] = array(array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike','FontSize','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','NumberedList','BulletedList' ,'-', 'Link', 'Unlink', 'Anchor',"Image"));
            		$config_mini['filebrowserBrowseUrl'] = base_url()."ckeditor/kcfinder/browse.php";
            		$config_mini['filebrowserImageBrowseUrl'] = base_url()."ckeditor/kcfinder/browse.php?type=images";
            		$config_mini['filebrowserUploadUrl'] = base_url()."ckeditor/kcfinder/upload.php?type=files";
            		$config_mini['filebrowserImageUploadUrl'] = base_url()."ckeditor/kcfinder/upload.php?type=images";
                        if($current_welcome_text)
            		echo $this->ckeditor->editor("welcome_text", html_entity_decode(htmlspecialchars($current_welcome_text, ENT_QUOTES)) , $config_mini);
                        else
                            echo $this->ckeditor->editor("welcome_text", html_entity_decode('') , $config_mini);
            	?>
                              

                            </p>    
                            
                            <p class="stdformbutton">

                                <div class="btn btn-primary welcome_text_custom_button_ajax " function="update_welcome_text" action="edit">
                                  <i class="iconsweets-zip"></i>
                                    Save
                               </div>

                            </p>

                        </form>

                    </div><!--widgetcontent-->
                    <script>
                              jQuery(".welcome_text_custom_button_ajax").click(function()
                                {
                                    id_home_design_welcome_text             = jQuery("#id_home_design_welcome_text").val();
                                    CKEDITOR.instances.welcome_text.updateElement();
                                    welcome_text             = jQuery("#welcome_text").val();
                                    result = home_design_update_welcome_text(id_home_design_welcome_text,welcome_text);   
                                    jQuery(".alert").css("display","none");                                    
                                    jQuery("#content").html(result.html);
                                     show_successfull_message('Rich text was updated successful') ;
                                    set_current(this);
                                });
                    </script>