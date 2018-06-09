
 <div class="alert alert-success hide">
   <div class="close1">X</div>
   <span class="msg-inner">Welcome text was updated successful</span>
 </div>  
        <h4 class="widgettitle nomargin shadowed">Welcome Text</h4>

                <div class="widgetcontent bordered shadowed nopadding">  

                   
 <?php  
$attributes = array('class' => 'stdform stdform2',"id"=>"newsletter_welcome_text_".$id_newsletter_design);
echo form_open("marketing/newsletter/save_welcome_text",$attributes);
?> 
 
                            <p>

                                <label>Welcome Text: </label>

                                <span class="field">
                                    <textarea id="welcome_text" class="span5" id="welcome_text" name="welcome_text" rows="5" cols="80"><?=$current_welcome_text?></textarea>
                                </span>

                            </p>    
                            <p class="stdformbutton">

                                <div class="btn btn-primary newsletter_custom_button_ajax " function="update_welcome_text"rel="newsletter_welcome_text_<?=$id_newsletter_design?>" action="edit">
                                  <i class="iconsweets-zip"></i>
                                    Save
                               </div>

                            </p>

                        </form>

                    </div><!--widgetcontent-->
                    <script>
                              jQuery(".newsletter_custom_button_ajax").click(function()
                                {
                                    id_newsletter_design = jQuery("#id_newsletter_design").val();
                                    welcome_text             = jQuery("#welcome_text").val();
                                    data_return = update_welcome_text(id_newsletter_design, welcome_text);    
                                    jQuery(".alert").fadeIn();
                                      jQuery(".close1").click(function()
                                      {
                                         jQuery(".alert").fadeOut();
                                      });
                                });
                    </script>