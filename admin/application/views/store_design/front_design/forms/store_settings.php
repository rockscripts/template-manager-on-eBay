
 <div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"> 
                   
                 </span>
  </div> 
   
   
<div class="container">

    <ul class="nav nav-tabs">

        <li <?php print ($this->uri->segment('2') == "home" ? ' class="active"' : ''); ?>>

            <a href="<?php print base_url(); ?>private/home">My Designs</a>

        </li>





        <li <?php print ($this->uri->segment('2') == "profile" ? ' class="active"' : ''); ?>>

            <a href="<?php print site_url('private/'. ($this->session->userdata('is_oauth') == true ? "oauth_" : "") .'profile'); ?>" title="edit profile"><?php print $this->lang->line('my_profile'); ?></a>

        </li>



 <?php
                  if($this->session->userdata( 'role_id' ) == 1):
                  ?>

        <li>

            <a href="<?php print base_url(); ?>adminpanel/site_settings">Adminpanel</a>

        </li>


  <?php
              endif;
                  ?>

    

 

    </ul>

</div>

                <div class="widgetcontent bordered shadowed nopadding" style="border:none;">  

                   
 <?php  
$attributes = array('class' => 'stdform stdform2',"id"=>"newsletter_welcome_text");
echo form_open("store_design/storedesign/save_store_settings",$attributes);
?>   
<table class="table table-bordered" width="100%" >
<tr>
<td>Store Name</td>
<td><input disabled="disabled"name="store_name" id="store_name" type="text" value="<?php echo $all_urls['store_name']; ?>" /></td>
</tr>
<tr>
<td>User ID</td>
<td><input disabled="disabled" name="store_id" id="store_id" type="text" value="<?php echo $all_urls['ebay_user_id']; ?>" /></td>
</tr>
<tr>
<td>Store URL</td>
<td><input disabled="disabled" name="store_url" id="store_url" type="text" value="<?php echo $all_urls['store_url']; ?>" /></td>
</tr>

<tr>
<td>Currency</td>
<td><input disabled="disabled" name="currency" id="currency" type="text" value="<?php echo $all_urls['currency']; ?>" /></td>
</tr>
<tr>
<td>Phone</td>
<td><input name="phone" id="phone" type="text" value="<?php echo $all_urls['phone']; ?>" /></td>
</tr>
</table>
			
                    
                   
                      
                            
                            <p class="stdformbutton">

                                <div style="margin: 0 0 10px 10px;" class="btn btn-primary social_media_custom_button_ajax " onclick='updateStoreSetting();' >
                                  <i class="iconsweets-zip"></i>
                                    Save
                               </div>

                            </p>

                        </form>

                    </div><!--widgetcontent-->
                   
				   <script>
                function updateStoreSetting(){
                        jQuery(".alert").hide();
                        var store_id = document.getElementById("store_id").value;
                        var store_url = document.getElementById("store_url").value;
                        var store_name = document.getElementById("store_name").value;
                        
                        var phone = document.getElementById("phone").value;
                        var currency = document.getElementById("currency").value;

                        if(store_name == "")
                        {								
                                jQuery(".alert").html("Store name field is empty");
                                show_error_message("Store name field is empty") ;
                                jQuery("#store_name").css("border","1px solid red");
                                return false;
                        }
                        else if(store_id == "")
                        {
                                jQuery(".alert").html("Store Id field is empty");
                                show_error_message("Store Id field is empty") ;
                                jQuery("#store_id").css("border","1px solid red");
                                return false;
                        }
                        else if(store_url == "")
                        {								
                                jQuery(".alert").html("Store Url Field is empty");
                                show_error_message("Store Url Field is empty") ;
                                jQuery("#store_url").css("border","1px solid red");
                                return false;
                        }
                       /* else if(phone == "")
                        {								
                                jQuery(".alert").html("Phone field is empty");
                                show_error_message("Phone field is empty") ;
                                jQuery("#phone").css("border","1px solid red");
                                return false;
                        }*/
                        else if(currency == "")
                        {								
                                jQuery(".alert").html("Currency field is empty");
                                show_error_message("Currency field is empty") ;
                                jQuery("#currency").css("border","1px solid red");
                                return false;
                        }
             
                        else{
                                jQuery("#store_name").css("border","1px solid #BBBBBB");
                                jQuery("#store_id").css("border","1px solid #BBBBBB");
                                jQuery("#store_url").css("border","1px solid #BBBBBB");
                                jQuery("#phone").css("border","1px solid #BBBBBB");
                                jQuery("#currency").css("border","1px solid #BBBBBB");
                                jQuery("#shop_categories_script").css("border","1px solid #BBBBBB");


                        jQuery.post( "<?php echo base_url(); ?>store_design/storedesign/save_store_settings", { store_id: store_id, store_url: store_url, store_name: store_name, phone: phone, currency: currency })
                          .done(function( data ) {
                                jQuery(".alert").html("Settings was updated");
                                show_successfull_message('Settings was updated');
                          });
                        }
                }
				   </script>
				   