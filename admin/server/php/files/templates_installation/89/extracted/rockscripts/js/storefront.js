/*Add your store front scripts here*/
jQuery(document).ready(function()
{
  jQuery(".New-arrivals-title").text("Sample Templates");
  jQuery(".Popular-categories-title").text("Portfolio");
  jQuery(".Popular-categories a").attr("target","_blank");
  jQuery(".Featured-listings-title").text("Subscriptions");
  jQuery(".New-arrivals .price-inner").html('<span class="price-value" itemprop="price">Free</span>');
  jQuery(".navbar-nav").find("li").first().find("ul").first().css("width","259px");
  jQuery(".navbar-brand").text("Home");
   body_width = jQuery("body").width();
  if(body_width<=980)
  {
    jQuery(".shop-now-button-small").css("display","none");
  }
  
if(is_home())
{/*jQuery(".promotion-plan").first().hide();*/}
  /*****FIX IE 9*****/
  //footer Menu
  
});
function smoothScrollTop()
{
  jQuery('html,body').animate({scrollTop:'0'},'slow');
}