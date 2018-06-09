<div class="loader-image"></div>
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
<div class="listing-advertising">
        <div class="block-grid-9">
           <?php
            if(!empty($suggested_templates_array)):
                foreach($suggested_templates_array as $suggested_template):
            ?> 
            <div class="listing-advertising-box featured-box template-selection" style="padding:4px;border: 5px solid #bbb;">
                <div class="template-selector" template-id="<?=$suggested_template->id_suggested_template?>">SELECT</div>
                <div class="listing-images-for-boxes">
                    <img src="<?=$suggested_template->url_image?>"  id="img-<?=$suggested_template->id_suggested_template?>">
                </div>
                <div class="featured-price"><a href="<?=$suggested_template->link?>" target="_blank" class="linke-name-backend" title="go to <?=$suggested_template->name?> template"><?=$suggested_template->name?></a></div> 
            </div>
            <?php
                endforeach;
            else:
                ?>
                <div class="message-empty">      
                    <span> 
                        There is not results for this category. 
                    </span>
                </div>
            <?php
                endif;
            ?> 
        </div>
</div> 
<style>
.listing-images-for-boxes img {
    height: auto !important;
    max-height: 225px!important;
    width: auto;
}   
.template-selector
{
    background: none repeat scroll 0 0 #008000;
    border-radius: 3px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
    left: 41%;
    padding: 5px;
    position: absolute;
    top: 46%;
    z-index: 9999;
}
</style>
