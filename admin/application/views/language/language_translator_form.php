
 <div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"> 
                   
                 </span>
  </div> 
        <h4 class="widgettitle nomargin shadowed">Language fields</h4>

                <div class="widgetcontent bordered shadowed nopadding">  

                   <?php  
         $attributes = array('class' => 'stdform stdform2 ',"id"=>"description_form");
         echo form_open("configuration/save_new_configuration",$attributes);
         ?>   <input name="id-value" id="id-value" type="hidden" value="<?php if(isset($id_language_translator))echo $id_language_translator;?>" placeholder="MY_WORD or MY_TEXT..." /> 
                    <p>
                        <label>Constant: </label>
                        <span class="field"> 
                      <?php
                   
                    if(isset($constant)):
                        ?>
                     <input name="constant-value" id="constant-value" type="input" value="<?=$constant?>" placeholder="MY_WORD or MY_TEXT..." /> 
                    <?php
                        else:
                             ?>
                     <input name="constant-value" id="constant-value"  type="input" placeholder="MY_WORD or MY_TEXT..." /> 
                    <?php
                    endif;
                        ?> 
                        </span>
                    </p>
                    <p>
                        <label><i class="flag-EN i-flags">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>English: </label>
                        <span class="field"> 
                            <textarea id="english-field" class="language-fields"><?php if(isset($english))echo $english;?></textarea>
                        </span>
                    
                    </p>
                    <p>
                        <label><i class="flag-SP i-flags">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>Spanish: </label>
                        <span class="field"> 
                            <textarea id="spanish-field" class="language-fields"><?php if(isset($spanish))echo $spanish;?></textarea>
                        </span>
                    
                    </p>
                    <p>
                        <label><i class="flag-FR i-flags">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>French: </label>
                        <span class="field"> 
                            <textarea  id="french-field" class="language-fields"><?php if(isset($french))echo $french;?></textarea>
                        </span>
                    
                    </p>
                    <p>
                        <label><i class="flag-GR i-flags">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>Germany: </label>
                        <span class="field"> 
                            <textarea  id="german-field" class="language-fields"><?php if(isset($german))echo $german;?></textarea>
                        </span>                    
                    </p>
                   
 
                            <p>

                              
                     
            
                              

                            </p>    
                            
                            <p class="stdformbutton">

                                <div class="btn btn-primary update_language_fields_button_ajax " function="update_language_fields" action="save">
                                  <i class="iconsweets-zip"></i>
                                    Save
                               </div>

                            </p>

                   
                </form>
                    </div><!--widgetcontent-->
                    <script>
                              jQuery(".update_language_fields_button_ajax").click(function()
                                {
                                    //getting values (textareas and inputs)
                                    data = {id_language_translator:jQuery("#id-value").val(),constant:jQuery("#constant-value").val(),english:jQuery("#english-field").val(),spanish:jQuery("#spanish-field").val(),french:jQuery("#french-field").val(),german:jQuery("#german-field").val()};                                    
                                    update_language_fields(data);
                                    show_successfull_message("Row was added successful <b>Key-constant:</b> "+jQuery("#constant-value").val());
                                    load_translator_fields_datable(function(response)
                                     {
                                     var datatable = callback_load_translator_fields_datable(response);     
                                     jQuery("#language-main-page").html(datatable);
                                     jQuery("#language-form").html("");
                                     jQuery("#language-main-page").fadeIn();
                                     jQuery("#language-form").fadeOut();
                                     jQuery(".button_new_row_translator").fadeIn();
                                     jQuery(".drop-list-languages-container").fadeIn();
                                     jQuery(".button_back_fields_list").fadeOut();
                                     });
                                });
                    </script>