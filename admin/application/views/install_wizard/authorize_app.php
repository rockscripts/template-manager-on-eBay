  <form class="stdform" method="post" action="http://themepixels.com/main/themes/demo/webpage/katniss/wizards.html">

                    <div id="wizard2" class="wizard tabbedwizard">

                    	

                        <ul class="tabbedmenu">

                            <li>

                            	<a href="#wiz1step2_1">

                                	<span class="h2">Token Access</span>

                                    <span class="label">eBay authorization</span>

                                </a>

                            </li>

                            <li>

                            	<a href="#wiz1step2_2">

                                	<span class="h2">STEP 2</span>

                                    <span class="label">Confirm Account Information</span>

                                </a>

                            </li>
                        </ul>

                        

                        	

                        <div id="wiz1step2_1" class="formwiz">

                        	<h4>eBay authorization</h4>

                        	
                                <p>
                                    <strong>Follow these steps to link Design Manager Application with your eBay account</strong>
                                </p>
                                <p>
                  <div class="inside">
                   <ol class="ol-installation-wizard">
	        <li>
                                  <p>

                                    <label>Select the eBay site you want to work on:
                                    
                                    </label>
                                    
                                    <span class="field">
                                         <select name="" class="uniformselect ebay_site_selection">
                                              <option value="">-- Please select --</option>
                                         <?php
                                         foreach($ebay_global as $global_site):
                                             ?>
                                            <option value="<?=$global_site->ebay_siteid?>"><?=$global_site->ebay_sitename?></option>
                                            <?php
                                         endforeach;
                                         ?>
                                    </select>
                                        <br>
                                        <small>
                                    If you want to change the site later, you will need to go through setup again. <br>
                                    </small>
                                    </span>

                                </p>
                                
                                <br>                                  
		</li>
                   <li>
                                  <p>

                                    <label>
                                        Click "Connect with eBay" to sign in to eBay and grant access for Design Manager Application:                                    
                                    </label>
                                    
                                    <span class="field">
                                        <div action="generate" rel="generate_0" style="float:left" class="btn btn-primary  button_connect_to_ebay" title="Connect with eBay Inc" available="true">
                <i class="  icon-generate"></i> Connect With eBay Inc
               </div>
                                        <br><br>
                                       <small>This will open the eBay Sign In page.</small><br>
                                            <small>Please sign in, grant access for Design Manager Application.</small>
                                    </span>

                                </p>
                                <p>
                                    <input type="checkbox" id="terms_of_use"><a href="http://rockscripts.org/terms-of-use/" target="_blank"> I read and accept terms of use. </a>
                                </p>
                                <br>                                  
		</li>
                          
		</ol>
		<p style="">
                                   <small>
		You can view and revoke this authorization by visiting: <br>&#187; My eBay &#187; Account &#187; Site Preferences  &#187; General Preferences  &#187; Third-party authorizations
		</small>
		</p>
                                    </div>
                                </p>
                                

                                

                        	

                            

                        </div><!--#wiz1step2_1-->

                        

                        <div id="wiz1step2_2" class="formwiz">

                        	<h4>Step 2: Confirm Account Information</h4> 

                            
<?php
if(isset($user_store_info)):
    $user_information = $user_store_info["user_info"];
    $store_information = $user_store_info["store_info"];   
?>
                                <p>

                                    <label>User Id</label>

                                    <span class="field"><input type="text" disabled="disabled" name="ebay_user_id" class="input-xxlarge" value="<?=$user_information["userID"]?>"/></span>

                                </p>
                                 <p>

                                    <label>Email</label>

                                    <span class="field"><input type="text" disabled="disabled" name="email" class="input-xxlarge" value="<?=$user_information["email"]?>"/></span>

                                </p>
                                <p>

                                    <label>Store name</label>

                                    <span class="field"><input disabled="disabled" type="text" name="store_name" class="input-xxlarge" value="<?=$store_information["store_name"]?>"/></span>

                                </p>
                                <p>

                                    <label>Store URL</label>

                                    <span class="field"><input disabled="disabled" type="text" name="store_url" class="input-xxlarge" value="<?=$store_information["store_url"]?>"/></span>

                                </p>
                                <p>
                                  <label>eBay Site </label>

                                    <span class="field">
                                        <select name="" class="uniformselect ebay_site_selection1" disabled="disabled"> 
                                              <option value="">-- Please select --</option>
                                         <?php
                                         foreach($ebay_global as $global_site):
                                             ?>
                                            <option value="<?=$global_site->ebay_siteid?>"><?=$global_site->ebay_sitename?></option>
                                            <?php
                                         endforeach;
                                         ?>
                                    </select>
                                    </span>
                                   <?php
    if(isset($installation_wizard_data)):
    $site_id = $installation_wizard_data->site_id;
    ?>
<script type="text/javascript">
   
    var site_id = "<?php echo $site_id?>";
    jQuery(".ebay_site_selection1").val(site_id);
    jQuery(".ebay_site_selection").val(site_id);
    jQuery(".ebay_site_selection").prop("disabled", true);
    jQuery(".button_connect_to_ebay").addClass("not_available");
    jQuery(".button_connect_to_ebay").attr("available","false");
    jQuery(".Fetch-eBay-Token").attr("available","false");
        /*script interface for previous step*/
</script>
    <?php    
endif;
    ?>
                                </p>
                                 <p>

                                    <label>Currency</label>
                                       
                                    <span class="field"><input type="text"disabled="disabled"  name="currency" class="input-xxlarge" value="<?=$currency?>"/></span>

                                </p>
          <?php
          endif;
          ?>
       <div action="generate" rel="generate_0" style="float:left" class="btn btn-primary  button_continue_custom" title="Continue">
           <i class="icon-circle-arrow-right"></i>&nbsp;Finish
       </div>
                                <br><br>
                        </div>                  

                    </div><!--#wizard-->

                    </form>

<input type="hidden" id="ebay_session_id" value=""/>               

                    <!-- END OF TABBED WIZARD -->

<script type="text/javascript">
    <?php
    if(isset($step)):
    ?>
    var step = "<?php echo $step;?>";
     <?php
    else:
    ?>
        var step = "1";
     <?php
endif;
    ?>
        
	jQuery(document).ready(function()
                 {
                    // Smart Wizard 	
                              jQuery('#wizard2').smartWizard({onFinish: onFinishCallback});

                    function onFinishCallback(){
                            alert('Finish Clicked');
                    } 
                    jQuery(".msgBox").remove();
                    jQuery(".button_connect_to_ebay").click(function()
                    {
                        available =  jQuery(this).attr("available");
                     if(available == "true")
                      {
                       ebay_site_selected =  jQuery(".ebay_site_selection").val();
                      if(ebay_site_selected != "")
                      {
                          terms_of_use_accepted = jQuery("#uniform-terms_of_use").find("span").attr("class");
                          if(terms_of_use_accepted == "checked")
                          {
                          jQuery(".selector").css("border","1px solid #ccc");
                          jQuery(".Fetch-eBay-Token").removeClass("not_available");
                          jQuery(".Fetch-eBay-Token").attr("available","true");
                          window.open("http://"+window.location.hostname+"/designmanager/store_design/installation/send_client_to_ebay_authorization_page?ebay_site="+ebay_site_selected,'_self');
                          }
                          else
                          {
                               jQuery.jGrowl("Please accept term of use.");  
                               jQuery("#uniform-terms_of_use").css("border","1px solid orange");
                          }
                        
                      }
                      else
                      {
                        jQuery.jGrowl("Please select eBay site to connect.");  
                        jQuery(".selector").css("border","1px solid orange");
                      }
                      }                                          
                    });
                      jQuery(".Fetch-eBay-Token").click(function()
                    {
                        available = jQuery(".Fetch-eBay-Token").attr("available");
                        if(available == "true")
                        {        
                              window.location.href = "http://"+window.location.hostname+"/designmanager/store_design/installation/fetch_token?step=2";                               
                        }
                     
                    });
                     jQuery(".Install_store_front").click(function()
                    {
                        window.location.href = "http://"+window.location.hostname+"/designmanager/store_design/installation/install_store_front"; 
                    });
                     jQuery(".button_continue_custom").click(function()
                    {
                         window.location.href = "http://"+window.location.hostname+"/designmanager/";                               
                    });
                   if(step >= 2)
                   {
                       jQuery(".buttonNext").click();
                   }
                   jQuery(".showmenu").click();
                    jQuery(".showmenu").remove();
                     jQuery(".logo_small").fadeIn();
                     jQuery(".leftpanel").remove();
	});
        function closeWindowMain(page){  
      window.open('','_self','');   
      window.close();  
       
   }  
  
   function openNewWindow(page){  
      window.open(page,   
      '_blank');  
   } 
   jQuery(".button_list_edit_profile").fadeOut();
   jQuery(".button_list_my_designs").fadeOut();
   jQuery(".notification").fadeOut();
</script>
<style>
    .stdform label {
    float: left;
    padding: 5px 20px 0 0;
    text-align: left;
    width: 200px;
}
.actionBar
{
    display: none;
}
    </style>
    