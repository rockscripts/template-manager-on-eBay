<input type="button" value="Save" id="savejs">
<script>
			jQuery(document).ready(function(){
				jQuery("#savejs").click(function(){
					jQuery.get('<?= base_url() ?>rk_dinamyc_jsp/writetojs/',{},function(data){
						//jQuery(".contentinner").html(data);
					});
				});
			});
		</script>