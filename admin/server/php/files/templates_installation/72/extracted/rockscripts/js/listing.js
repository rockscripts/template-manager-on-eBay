/*Add your store listing scripts here*/
jQuery(document).ready(function()
{
  jQuery(".New-arrivals-title").text("Sample Templates");
    jQuery(".Popular-categories-title").text("Portfolio");
  jQuery(".Popular-categories a").attr("target","_blank");
  jQuery(".Featured-listings-title").text("Subscriptions");
  jQuery("..New-arrivals .price-inner").html('<span class="price-value" itemprop="price">Free</span>');
  jQuery(".navbar-nav").find("li").first().find("ul").first().css("width","259px");
  jQuery(".navbar-brand").text("Home");
  //Remove image unwanted create by seller manager pro
  jQuery( "a" ).each(function( index ) {
  href = jQuery(this).attr("href");

    if(href=="http://pages.ebay.com.au/selling_manager_pro")
      {
        jQuery(this).parent().remove();
      }
      
});
  //Remove Text unwanted create by seller manager pro
   jQuery( "p" ).each(function( index ) {
    html = jQuery(this).html();
    if(html.indexOf("Posted with") >= 0)
      {
        jQuery(this).remove();
      }      
    });
  //Remove weird symbols
  jQuery( "font" ).each(function( index ) 
      { 
        face = jQuery(this).attr("face");
        if(face=="SymbolMT")
          {
            jQuery(this).remove();
          }
        });
   /*****FIX IE 9*****/
  
   var div = jQuery('.page-simullator-content');
  jQuery(document).on("hover",".frame-browser-simmulator",function()
                       {
                       
                        setInterval(function(){
                            var pos = div.scrollTop();
                            div.scrollTop(pos + 2);
                        }, 100) 
                       });
  
   
 
});
function smoothScrollTop()
{
  jQuery('html,body').animate({scrollTop:'0'},'slow');
}
