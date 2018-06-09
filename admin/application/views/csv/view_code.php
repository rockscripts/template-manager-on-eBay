<div class="btn btn-primary go_back" onclick="avascript:goBack()"><i class=" icon-backward"></i>&nbsp;Back</div>
<br>
<br>
<textarea class="view_code">
  <?php
   foreach($array_template_generated as $template_generated):
         echo $template_generated->html_code; 
   endforeach;
    ?>
</textarea>
<br>
<br>

<script>
  /*  item_image1 = jQuery("#item_image1");
    item_image2 = jQuery("#item_image2");
    item_image3 = jQuery("#item_image3");
    item_image4 = jQuery("#item_image4");
    item_image5 = jQuery("#item_image5");

    checkPicturesURL(item_image1);
    checkPicturesURL(item_image2);
    checkPicturesURL(item_image3);
    checkPicturesURL(item_image4);
    checkPicturesURL(item_image5);
    code_analized = jQuery("#code_to_analize").html();
    jQuery("#code_to_analize").remove();
    jQuery(".view_code").text(code_analized);   */
</script>
<div class="btn btn-primary go_back" onclick="avascript:goBack()"><i class=" icon-backward"></i>&nbsp;Back</div>