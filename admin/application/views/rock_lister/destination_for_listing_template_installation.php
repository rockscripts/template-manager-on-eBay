
    <b>Please, select listing destination:</b> 

<br>
<div  class="banner">
     <div class="btn btn-primary  button_send_to_prepared_listings" title="Send to Prepared listings">
           <i class="icon-circle-arrow-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Send to Prepared listings
          </div>
     <div class="btn btn-primary  button_send_to_live" title="Send to Live" style="">
           <i class="icon-cog">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> Send To Live
      </div>
</div>
<div class="apply_action">
    Apply this action for all <div class="checker checker_action_apply" ><span><input type="checkbox" name="check2" style="opacity: 0;"></span></div>
</div>
<script>
    jQuery(".checker_action_apply").click(function()
    {
        if(jQuery(this).find("span").hasClass("checked"))
        {
            jQuery(this).find("span").removeClass("checked");
            set_listing_destination(false);
        }        
        else
        {
            jQuery(this).find("span").addClass("checked");
            set_listing_destination(true);
        }    
    });
</script>