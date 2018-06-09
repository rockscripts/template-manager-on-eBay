<link href="<?= base_url() ?>themes/katniss/css/google_fonts.css" type="text/css" rel="stylesheet" />
<h4 class="widgettitle nomargin shadowed">Google Fonts</h4> 
 <div class="alert  hide">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                 <span id="message_content"  class="message_content"> 
                    <?php 
                    if(isset($message))
                    {
                       echo  $message ;
                    }
                    ?>
                 </span>
  </div> 
<div>
    <?php
    if(!$actived_font_id):
        ?>
    <div class="alert2  alert-info">
        <i class="icon-info-sign"></i>&nbsp;&nbsp;No Google font is used
  </div>
    
    <?php
        else:
        ?>
    <br>
    <b>Font actived:</b><span id="font-actived-info">&nbsp;<?=$actived_font_name?></span>
    <?php
    endif;
    ?>
</div>
<table class="table table-bordered items_data_table deleted_items_data_table" data="deleted_items_data_table" id="dyntable_resultados6" >
  <thead>
      <tr>
          <th class="head0 sorting">Status</th>
           <th class="head0 sorting">Name</th>
          <th class="head0 sorting">Sample</th>   
      </tr>
 </thead>
    <tbody>
      <?php
      if(is_array($google_fonts_collection)): 
      foreach($google_fonts_collection as $item):
        if($actived_font_id==$item->id_google_font):
            $class_active = "actived";
            else:
            $class_active = "deactived";
        endif; 
?>
        <tr>
            <td>
                <div font_id="<?= $item->id_google_font?>" class="<?=$class_active?> font-id-<?= $item->id_google_font?>" font-name="<?= $item->name?>""></div>
            </td>
            <td style="font-family:<?= $item->name?>">
                <?= $item->name?>
            </td>
            <td style="font-family:<?= $item->name?>;font-size:14px;">
                <?= $item->text?>
            </td>
        </tr>
<?php 
endforeach;
endif;
      ?>
    </tbody>

</table>


<script>
    jQuery(document).on("click",".deactived",function()
    {
        //backup developer zone
        var font_id = jQuery(this).attr("font_id");
        var font_name = jQuery(this).attr("font-name");
        jQuery(".alert").hide();
        active_font(font_id,function(response)
       {
           result = call_active_font(response);
           if(jQuery(".actived").length>0)
           {
            var current_activate = jQuery(".actived");
            current_activate.removeClass("actived");
            current_activate.addClass("deactived");  
           }           
           jQuery(".font-id-"+font_id).removeClass("deactived");
           jQuery(".font-id-"+font_id).addClass("actived");
           jQuery("#font-actived-info").text(font_name);
           show_successfull_message("<b>"+font_name+"</b> google font was actived successful.");
       });
    });

    // dynamic table

    jQuery('#dyntable_resultados6').dataTable({

    "sPaginationType": "full_numbers",

    "aaSortingFixed": [[1,'asc']],

    "fnDrawCallback": function(oSettings) {

    /*jQuery.uniform.update();*/

    }

    });

</script>
<p>
    Google Fonts are powered by the<br>
    <img src="<?= base_url() ?>themes/katniss/img/google-fonts-api.png"/>
</p>