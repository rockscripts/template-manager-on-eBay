jQuery(document).ready(function(){
				
				jQuery('.product-info .tabs span').click(function(){
					jQuery('.tab_content').hide();
					var id = jQuery(this).attr('data');
					jQuery('#js-tab-content-'+ id).show();
				});
				
				jQuery('#js-tab-content-description').show();
				
			});