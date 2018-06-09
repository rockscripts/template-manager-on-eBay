
<div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content" class="message_content"> 
                    <?php 
                    if(isset($message))
                    {
                       echo  $message ;
                    }
                    ?>
                 </span>
  </div>
<img src="<?= base_url() ?>themes/katniss/img/powered_by_google.gif">
<div class="webstire-install-step-1">
    <h4 class="widgettitle nomargin shadowed">Google account Authorization</h4>
    <div class="widgetcontent bordered shadowed nopadding">
        <div class="inner">
            <form class="stdform stdform2" action="<?=base_url()?>/webstores/blogger/sign_in" method="post" accept-charset="utf-8">
             <p>
                <label>Email</label>
                <span class="field  ">                    
                    <input type="text"  lass="input-xlarge" name="email" id="email" value=""/>
                </span>               
                </p>
                <p>
                <label>Password</label>
                <span class="field  ">                    
                    <input type="password"  lass="input-xlarge" name="password" id="password" value=""/>
                </span>                  
                </p> 
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="https://accounts.google.com/signup?service=blogger">Create account</a></p>
                <p>
                    <br>
                    <input type="submit" class="btn btn-primary " style="margin: 0 0 10px 10px;" value="Sign In">
                </p>
            </form>
            
        </div>
    </div>
   
    
</div>
<script>
 jQuery(document).ready(function()
 {
    jQuery(document).on("blur","#email",function()
    {
     if(!checkEmail(jQuery(this).val()))
      show_error_message("email isn't valid.");
     else
     jQuery(".alert").fadeOut();
    }) 
 });
</script>
<?php
if(isset($message)):
    ?>
<script>
    var message = "<?php echo $message;?>";
    var type = "<?php echo $type;?>";
    if(type=="error")
    show_error_message(message);
</script>
<?php
endif;
?>
