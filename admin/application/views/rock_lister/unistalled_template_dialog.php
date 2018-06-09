 <div class="alert" style="display:block!important;">                
    <h4>Warning!</h4>
    <p>This listing isn't using rockscripts template yet. We only need to be sure if description has not another template installed<br>
        More Information:<br>
        <span class=" icon-info-sign"></span> <a href="#" target="_blank">Extract description from non rockscripts templates</a><br>
    </p>
</div>
<div  class="banner">
     <div class="btn btn-primary  button_confirm_listing_installation" title="Confirm and install">
           <i class="icon-circle-arrow-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Confirmed, It's only my description
          </div>
     <div class="btn btn-primary  button_extract_description" title="Extract Description  from template installed" style="">
           <i class="icon-cog">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Extract Description from non rockscripts template installed
      </div>
</div>
<div class="checker_action_apply">
    Apply this action for all <div class="checker checker4_action_apply" ><span><input type="checkbox" name="check2" style="opacity: 0;"></span></div>
</div>
<script>
    jQuery(".checker4_action_apply").click(function()
    {
        if(jQuery(this).find("span").hasClass("checked"))
        {
          jQuery(this).find("span").removeClass("checked");
        set_security_decision(false);  
        }        
    else
    {
        jQuery(this).find("span").addClass("checked");
      set_security_decision(true);
    }
    
    });
</script>