<div class="loader-image" style="display: none;"></div>
<div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"> 
                   
                 </span>
  </div> 
<label>Type password </label>
<input  type="password" name="password" id="password">
 <br style="clear:both; ">
  <br style="clear:both; ">
  <div title="Cancel" class="btn btn-primary close_dialog">
      <i class=" icon-remove-sign"></i> Cancel
 </div>
 <div title="Submit" class="btn btn-primary submit_authorization">
      <i class=" icon-ok-circle"></i> Submit
 </div>
  <script>
      jQuery("#password").blur(function()
      {
          jQuery("#password_unistalled").val(jQuery(this).val());
      });
      jQuery("#password").keypress(function(e) {
    if(e.which == 13) {
        jQuery(".submit_authorization").click();
    }
});
  </script>
 
