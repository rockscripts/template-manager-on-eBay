
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

 <h4 class="widgettitle nomargin shadowed">Manage Banners Design</h4>
<div class="widgetcontent bordered shadowed nopadding">  
    <div class="inner">
		<div class="banner">

			<div class="banner_left">
				<img src="<?=$banner_url;?>" />
					<div class="controls">
					<button class="btn btn-primary" type="button" onclick="window.location.href='<?=base_url();?>store_design/banners/edit?id=<?=$id_logo;?>&id_design=1';">
					Change Banner
					</button>
					</div>

			</div>
			<div class="banner_right">
				
				<div class="cell">
					<img src="<?=$banner_url_2;?>" />

					<div class="controls">

					<button class="btn btn-primary" type="button" onclick="window.location.href='<?=base_url();?>store_design/banners/edit?id=<?=$id_logo_2;?>&id_design=2';">
					Change Banner
					</button>
					
					</div>
				</div>


				<div class="cell">
					<img src="<?=$banner_url_3;?>" />
					
					<div class="controls">

					<button class="btn btn-primary" type="button" onclick="window.location.href='<?=base_url();?>store_design/banners/edit?id=<?=$id_logo_3;?>&id_design=3';">
					Change Banner
					</button>

					
					</div>
				</div>
			</div>
		</div>
    </div>
</div><!--widgetcontent-->

  