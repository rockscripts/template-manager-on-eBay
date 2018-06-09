
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

<div class="webstire-install-step-1">
    <h4 class="widgettitle nomargin shadowed"><b>STEP 1:</b> Install Webstore</h4>
    <div class="widgetcontent bordered shadowed nopadding">
        <div class="inner">
            <form class="stdform stdform2" accept-charset="utf-8">
             <p>
                <label>Webstore Name</label>
                <span class="field  ">                    
                    <input type="text" disabled lass="input-xlarge" name="store_name" id="number_listings_on_front_design" value="<?=$store_settings["store_name"]?>"/>
                </span>               
                </p>
                <p>
                      <label>Webstore Url</label>
                      <span class="field  ">                    
                          <a target="_blank" href="http://<?=$_SERVER['HTTP_HOST']?>/webstores/<?=$nice_store_name?>">http://<?=$_SERVER['HTTP_HOST']?>/webstores/<?=$nice_store_name?></a>
                      </span>               
                </p>   
            </form>
            
        </div>
    </div>
   <a href="<?=base_url()?>/webstores/webstore/install_webstore" class="btn btn-primary install_webstoreandcategories " style="margin: 0 0 10px 10px;">
    <i class="icon-circle-arrow-right"></i>
     Install
   </a> 
</div>
