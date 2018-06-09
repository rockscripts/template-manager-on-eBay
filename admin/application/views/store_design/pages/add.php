        <h4 class="widgettitle nomargin shadowed">New Page</h4>

                <div class="widgetcontent bordered shadowed nopadding">  

                   
 <?php  
$attributes = array('class' => 'stdform stdform2',"id"=>"newsletter_welcome_text");
echo form_open("marketing/newsletter/save_welcome_text",$attributes);
?>   
                    <?php
                   
                    if(isset($id_page)):
                        ?>
                     <input name="id_page" id="id_page" type="hidden" value="<?=$id_page?>" /> 
                    <?php
                        else:
                             ?>
                     <input name="id_page" id="id_page"  type="hidden" /> 
                    <?php
                    endif;
                        ?>
                    <p>

                               <label>Title: </label>

                                <span class="field">
                                    <?php
                   
                    if(isset($id_page)):
                        ?>
                                    <input type="text" id="page_title" name="page_title" value="<?=$title?>"  class="input-xlarge" />
                                    <?php
                        else:
                             ?>
                                     <input type="text" id="page_title" name="page_title" class="input-xlarge" />
                                    <?php
                    endif;
                        ?>
                                </span>

                            </p>
 
                            <p>

                              
                     
                                      <?php 
            		$config_mini = array();   
            		$config_mini['toolbar'] = array(array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike','FontSize','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','NumberedList','BulletedList' ,'-', 'Link', 'Unlink', 'Anchor',"Image"));
            		$config_mini['filebrowserBrowseUrl'] = base_url()."ckeditor/kcfinder/browse.php";
            		$config_mini['filebrowserImageBrowseUrl'] = base_url()."ckeditor/kcfinder/browse.php?type=images";
            		$config_mini['filebrowserUploadUrl'] = base_url()."ckeditor/kcfinder/upload.php?type=files";
            		$config_mini['filebrowserImageUploadUrl'] = base_url()."ckeditor/kcfinder/upload.php?type=images";
                        if(isset($page_text))
            		echo $this->ckeditor->editor("page_text", html_entity_decode(htmlspecialchars($page_text, ENT_QUOTES)) , $config_mini);
                        else
                            echo $this->ckeditor->editor("page_text", html_entity_decode('') , $config_mini);
            	?>
                              

                            </p>    
                            
                            <p class="stdformbutton">

                                <div class="btn btn-primary save_store_page " function="update_welcome_text" action="edit" style="margin-bottom: 10px;    margin-left: 10px;">
                                  <i class="iconsweets-zip"></i>
                                    Save
                               </div>

                            </p>

                        </form>

                    </div><!--widgetcontent-->
                    <script>
                              jQuery(".save_store_page").click(function()
                                {
                                    
                                    id_page             = jQuery("#id_page").val();
                                    title  = jQuery("#page_title").val();
                                    CKEDITOR.instances.page_text.updateElement();
                                    page_text             = jQuery("#page_text").val();
                                    if(title=="")
                                    {
                                        set_error_field("page_title");
                                        show_error_message("Please type page title.") ;
                                    }
                                    else
                                    {
                                     jQuery(".alert").fadeOut();
                                     remove_error_field("page_title");
                                     if(page_text =="")
                                     {
                                        set_error_field("page_text");
                                        show_error_message("Please type page content.") ;  
                                     }
                                     else
                                     {
                                          jQuery(".loader-image").fadeIn();
                                          jQuery(".loader-image").html("<div class='sending-to-ebay'>Sending to eBay...</div>");
                                          if(typeof CKEDITOR != "undefined")
                                        {
                                         delete CKEDITOR.instances['page_text']   
                                        }
                                         jQuery(".sending-to-ebay").focus();
                                       jQuery(".sending-to-ebay").fadeOut();
                                       jQuery(".sending-to-ebay").fadeIn();
                                       
                                       save_store_page(id_page,title, page_text,function(response)
                                        {
                                            form = callback_save_store_page(response);                                  
                                            jQuery(".store-pages-container").html(form);
                                            show_successfull_message('Page was saved successful') ;
                                            jQuery(".loader-image").fadeOut();
                                             jQuery(".loader-image").html("");
                                        }); 
                                     }                                                                        
                                   }
                                });
                                
                    </script>