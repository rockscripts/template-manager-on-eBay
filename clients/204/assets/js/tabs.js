$(document).ready(function(){
				
				$('.product-info .tabs span').click(function(){
					$('.tab_content').hide();
					var id = $(this).attr('data');
					$('#js-tab-content-'+ id).show();
				});
				
				$('#js-tab-content-description').show();
				
			});