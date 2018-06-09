
 <div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"> 
                   
                 </span>
  </div> 
   
        <h4 class="widgettitle nomargin shadowed">SOCIAL MEDIA</h4>

                <div class="widgetcontent bordered shadowed nopadding">  

                   
 <?php  
$attributes = array('class' => 'stdform stdform2',"id"=>"newsletter_welcome_text");
echo form_open("store_design/storedesign/save_social_media",$attributes);
?>   
<table class="table table-bordered" width="100%" >
<tr>
<td><span style="float:left; "><img align="absmiddle" src="<?php echo base_url()."assets/1383932424_twitter.png"; ?>" /></span> <span style="float:left;margin-top: 3px;margin-left: 10px;">Twitter URL</span> </td>
<td><input name="twitter_url" id="twitter_url" type="text" value="<?php echo $all_urls['twiter_url']; ?>" /></td>
</tr>
<tr>
<td><span style="float:left; "><img align="absmiddle" src="<?php echo base_url()."assets/1383932297_facebook_square.png"; ?>" /></span> <span style="float:left;margin-top: 3px;margin-left: 10px;">Facebook URL</span> </td>
<td><input name="facebook_url" id="facebook_url" type="text" value="<?php echo $all_urls['facebook_url']; ?>" /></td>
</tr>
<tr>
<td><span style="float:left; "><img align="absmiddle" src="<?php echo base_url()."assets/1383932585_youtube_square_color.png"; ?>" /></span> <span style="float:left;margin-top: 3px;margin-left: 10px;">Youtube URL</span> </td>
<td><input name="youtube_url" id="youtube_url" type="text" value="<?php echo $all_urls['youtube_url']; ?>" /></td>
</tr>
<tr>
<td><span style="float:left; "><img align="absmiddle" src="<?php echo base_url()."assets/1383932453_Pinterest_alt.png"; ?>" /></span> <span style="float:left;margin-top: 3px;margin-left: 10px;">Pinterest URL</span> </td>
<td><input name="printerest_url" id="printerest_url" type="text" value="<?php echo $all_urls['printerest_url']; ?>" /></td>
</tr>
<tr>
<td><span style="float:left; "><img align="absmiddle" src="<?php echo base_url()."assets/1383932469_linkedin_square_color.png"; ?>" /></span> <span style="float:left;margin-top: 3px;margin-left: 10px;">LinkenIn URL</span> </td>
<td><input name="linkedin_url" id="linkedin_url" type="text" value="<?php echo $all_urls['linkedin_url']; ?>" /></td>
</tr>
<tr>
<td><span style="float:left;"><img align="absmiddle" src="<?php echo base_url()."assets/1383932563_social_delicious_box.png"; ?>" /></span> <span style="float:left;margin-top: 3px; margin-left: 10px;">Delicious URL</span> </td>
<td><input name="delicious_url" id="delicious_url" type="text" value="<?php echo $all_urls['delicious_url']; ?>" /></td>
</tr>
<tr>
<td><span style="float:left; "><img align="absmiddle" src="<?php echo base_url()."assets/1383932430_social_google_box.png"; ?>" /></span> <span style="float:left;margin-top: 3px; margin-left: 10px;">Google URL</span> </td>
<td><input name="google_url" id="google_url" type="text" value="<?php echo $all_urls['google_url']; ?>" /></td>
</tr>

</table>
			
                    
                   
                      
                            
                            <p class="stdformbutton">

                                <div style="margin: 0 0 10px 10px;" class="btn btn-primary social_media_custom_button_ajax " onclick='updateSocialMedia();' >
                                  <i class="iconsweets-zip"></i>
                                    Save
                               </div>

                            </p>

                        </form>

                    </div><!--widgetcontent-->
                   
				   <script>
				   		function updateSocialMedia(){
							jQuery(".alert").hide();
							var twitter_url = document.getElementById("twitter_url").value;
							var facebook_url = document.getElementById("facebook_url").value;
							var youtube_url = document.getElementById("youtube_url").value;
							var linkedin_url = document.getElementById("linkedin_url").value;
							var delicious_url = document.getElementById("delicious_url").value;
							var google_url = document.getElementById("google_url").value;
							var printerest_url = document.getElementById("printerest_url").value;

							if(twitter_url != "" && !validate_link( twitter_url ))
							{
								jQuery(".alert").html("Invalid Url");
								show_error_message("Invalid Url") ;
								jQuery("#twitter_url").css("border","1px solid red");
								return false;
							}
							else if(facebook_url != "" && !validate_link( facebook_url ))
							{								
								jQuery(".alert").html("Invalid Url");
								show_error_message("Invalid Url") ;
								jQuery("#facebook_url").css("border","1px solid red");
								return false;
							}
							else if(youtube_url != "" && !validate_link( youtube_url ))
							{								
								jQuery(".alert").html("Invalid Url");
								show_error_message("Invalid Url") ;
								jQuery("#youtube_url").css("border","1px solid red");
								return false;
							}
							else if(linkedin_url != "" && !validate_link( linkedin_url ))
							{								
								jQuery(".alert").html("Invalid Url");
								show_error_message("Invalid Url") ;
								jQuery("#linkedin_url").css("border","1px solid red");
								return false;
							}
							else if(delicious_url != "" && !validate_link( delicious_url ))
							{								
								jQuery(".alert").html("Invalid Url");
								show_error_message("Invalid Url") ;
								jQuery("#delicious_url").css("border","1px solid red");
								return false;
							}
							else if(google_url != "" && !validate_link( google_url ))
							{								
								jQuery(".alert").html("Invalid Url");
								show_error_message("Invalid Url") ;
								jQuery("#google_url").css("border","1px solid red");
								return false;
							}
							else if(printerest_url != "" && !validate_link( printerest_url ))
							{								
								jQuery(".alert").html("Invalid Url");
								show_error_message("Invalid Url") ;
								jQuery("#printerest_url").css("border","1px solid red");
								return false;
							}
							else{
								jQuery("#twitter_url").css("border","1px solid #BBBBBB");
								jQuery("#facebook_url").css("border","1px solid #BBBBBB");
								jQuery("#youtube_url").css("border","1px solid #BBBBBB");
								jQuery("#linkedin_url").css("border","1px solid #BBBBBB");
								jQuery("#delicious_url").css("border","1px solid #BBBBBB");
								jQuery("#google_url").css("border","1px solid #BBBBBB");
								jQuery("#printerest_url").css("border","1px solid #BBBBBB");
								
							jQuery.post( "<?php echo base_url(); ?>store_design/storedesign/save_social_media", { twitter_url: twitter_url, facebook_url: facebook_url, youtube_url: youtube_url, linkedin_url: linkedin_url, delicious_url: delicious_url, google_url: google_url, printerest_url: printerest_url })
							  .done(function( data ) {
								jQuery(".alert").html("Social Media was updated");
							   	show_successfull_message('Social Media was updated');
							  });
							}
						}
						
						
						/*if(title!="")
						{
						if ( validate_link( link ) )
						{
						id = jQuery("#id").val();
						if(jQuery('#files').find('div').size() >0) {
						jQuery(".alert").addClass("hide");
						jQuery("#files").find("button").first().trigger('click');
						}
						else {
						if(id > 0)
						{
						save_home_design_advertising(id,title,link,'ignore');
						jQuery("li.advertising-home ").click() ;
						show_successfull_message("Advertising was saved successful");
						}
						else
						show_error_message("Please select advertising image.") ;
						}
						} else {
						show_error_message("Advertising link is invalid.") ;
						jQuery("#link").css("border","1px solid red") ;
						}
						} else {
						show_error_message("Title field is empty.") ;
						jQuery("#title").css("border","1px solid red") ;
						} */
				   </script>
				   