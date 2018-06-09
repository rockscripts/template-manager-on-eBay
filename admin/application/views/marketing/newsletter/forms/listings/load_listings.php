
 <div class="alert  hide">
                	<button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"> 
                    <?php 
                    if(isset($message))
                    {
                       echo  $message ;
                    }
                    ?>
                 </span>
  </div> 
<div class="top-buttons">
    <div class="btn btn-primary button-add-new-listing">
   <i class="icon-plus"></i>  Add new
 </div>
</div>
<br>
<div>
<div class="block-grid">
   <?php
   if(!empty($array_newsletter_listings)):
foreach($array_newsletter_listings as $newsletter_listings):
?> 
<div class="featured-box" id="listing-box-<?=$newsletter_listings->id_neswletter_listing?>">
    <img src="<?=$newsletter_listings->image_url?>" class="featured-iamge">
    <div class="more clr">
        <div class="featured-title">          
               <?=$newsletter_listings->title?>
        </div>
        <div class="featured-price"><?=$newsletter_listings->price?>&nbsp;<?=$currency?></div>       
        <div class="box-controls">
       <?php
        /*Start Change status*/
       /*$attributes = array('class' => 'stdform','id' => 'change_status_'.$newsletter_listings->id_neswletter_listing);
       echo form_open("store_design/featured/change_status/?id=".$newsletter_listings->id_neswletter_listing,$attributes);  */
       ?>
            <div class="button-controls custom_button" title="<?=$newsletter_listings->status?>" id_neswletter_listing="<?=$newsletter_listings->id_neswletter_listing?>"rel="change_status_<?=$newsletter_listings->id_neswletter_listing?>" action="update" call_function="change_listing_status">
                <img src="<?= base_url() ?>/themes/katniss/img/controls/featured-<?=$newsletter_listings->status?>.png"  title="<?=$newsletter_listings->status?>" />
            </div>
             <input id="current_status_<?=$newsletter_listings->id_neswletter_listing?>" type="hidden" value="<?=$newsletter_listings->status?>"/>             
        <?php
        /*  echo form_close();     */
          /*End Change status*/ 
        ?>
        <?php
        /*Start Change status*/
       /*$attributes = array('class' => 'stdform','id' => 'edit_featured_listing_'.$newsletter_listings->id_neswletter_listing);
       echo form_open("store_design/featured/edit_featured_listing",$attributes);  */
       ?>
            <div class="button-controls custom_button" title="Edit listing" action="update" rel="edit_listing_<?=$newsletter_listings->id_neswletter_listing?>" id_neswletter_listing="<?=$newsletter_listings->id_neswletter_listing?>" call_function="edit_listing"><i class="icon-edit"></i></div>
            <input id="current_image_url_<?=$newsletter_listings->id_neswletter_listing?>" type="hidden" value="<?=$newsletter_listings->image_url?>"/> 
            <input id="current_price_<?=$newsletter_listings->id_neswletter_listing?>" type="hidden" value="<?=$newsletter_listings->price?>"/> 
            <input id="current_title_<?=$newsletter_listings->id_neswletter_listing?>" type="hidden" value="<?=$newsletter_listings->title?>"/>
            <input id="current_description_<?=$newsletter_listings->id_neswletter_listing?>" type="hidden" value="<?=$newsletter_listings->description?>"/>
            <input id="current_link_<?=$newsletter_listings->id_neswletter_listing?>" type="hidden" value="<?=$newsletter_listings->link?>"/>
        <?php
         /* echo form_close();     */
          /*End Change status*/
        ?>
       <?php  
        /*Start Change status*/
     /*  $attributes = array('class' => 'stdform','id' => 'delete_featured_listing_'.$newsletter_listings->id_neswletter_listing);
       echo form_open("store_design/featured/delete_featured_listing/?id=".$newsletter_listings->id_neswletter_listing,$attributes);  */
       ?>
            <div class="button-controls custom_button" title="Delete listing" rel="delete_listing_<?=$newsletter_listings->id_neswletter_listing?>" action="delete" id_neswletter_listing="<?=$newsletter_listings->id_neswletter_listing?>" call_function="delete_listing"><i class="icon-trash"></i></div>           
            <?php
         /*   echo form_close();  */   
           /*End Change status*/
           ?>
        </div>
    </div>
</div>
<?php
endforeach;
else:
    ?>
     <div class="alert">
                
                 <span id="message_content"> 
                  You have not added listings for this newsletter design. Start now!
                  <br>
                  <div class="btn btn-primary button-add-new-listing">
                  <i class="icon-plus"></i>Add new
                  </div>
                 </span>
  </div>
    <script>
     jQuery(".top-buttons").remove();
    </script>
    <?php
endif;


?> 
</div>
    </div>
<?php
if(isset($id_neswletter_listing_updated)):
    ?>
<script>
    //alert("in")
     var id_ebay_design = "<?php echo $id_neswletter_listing_updated;?>";
  element = "#featured-box-"+id_ebay_design;
  //alert(element)
   
  effect_listing_updated(element);
 jQuery(".alert").removeClass("hide")
 jQuery(".alert").addClass("alert-success");
  offsetYValue = 10;
</script>
<?php
else:
    ?>
<script>
    offsetYValue = 10;
</script>
<?php
endif;
?>

<script>
    jQuery(document).ready(function() {
	jQuery('.block-grid').BlocksIt({
		numOfCol: 4,
		offsetX: 8,
		offsetY: offsetYValue,
		blockElement: '.featured-box'
	});
        jQuery(".button-add-new-listing").click(function()
            {  
                form_add_listings= ajax_add_listings_form();
                jQuery("#content").html(form_add_listings);
            });
        
            /*used to simulate submits with AJAX forms without re-loading page*/
     jQuery(".custom_button").click(function()
  {
      id_newsletter_design = jQuery("#id_newsletter_design").val();
      form_id = jQuery(this).attr("rel");
      action = jQuery(this).attr("action");
      call_function = jQuery(this).attr("call_function");
      if(action=="delete")
      {
         var result = confirm("Are you sure?");
         if (result==true) 
          {
            id_neswletter_listing  = jQuery(this).attr("id_neswletter_listing"); 
            data_returned = delete_listing(id_neswletter_listing,id_newsletter_design);
            jQuery("#content").html(data_returned.html);
            show_successfull_message( "Listing was deleted successfull.");
          }                     
      }
      else
      {   
          switch(call_function)
          {
          case "change_listing_status":
              id_neswletter_listing  = jQuery(this).attr("id_neswletter_listing");              
              current_status  = jQuery("#current_status_"+id_neswletter_listing).val();
              array_return = change_listing_status(id_neswletter_listing, current_status,id_newsletter_design);
              jQuery("#content").html(array_return.html);
              show_successfull_message( "Status was changed successfull.");
             focus_element_updated(".listing-box-"+id_neswletter_listing);
          break;
          case "edit_listing":
               id_neswletter_listing  = jQuery(this).attr("id_neswletter_listing");      
               current_image_url = jQuery("#current_image_url_"+id_neswletter_listing).val();
               current_price = jQuery("#current_price_"+id_neswletter_listing).val();
               current_title = jQuery("#current_title_"+id_neswletter_listing).val();
               current_description = jQuery("#current_description_"+id_neswletter_listing).val();
               current_link = jQuery("#current_link_"+id_neswletter_listing).val();
               data_return = edit_listing_form(id_neswletter_listing,current_title,current_price,current_image_url,base_url,current_description,current_link);
               jQuery("#content").html(data_return.html);
          break;
      case "delete_listing":                 
               /*CHECK CONDICTION FOR DELETE STATMENT*/
          break;
          }
      }
  });
        });

</script>


