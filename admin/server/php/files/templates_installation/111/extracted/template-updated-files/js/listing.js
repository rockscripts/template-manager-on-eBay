/*Add your store listing scripts here*/
jQuery(document).ready(function()
{
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
  //footer Menu
  html_footer_menu = jQuery(".navbar-nav").last().html();
  jQuery(".footer-menu-content").html(html_footer_menu);
  jQuery(".footer-menu-content").addClass("navbar-nav");
  jQuery(".navbar-nav").last().remove();
  //Social media buttons
  jQuery.each(jQuery(".social-media-icon"), function() 
  {
  var social_media = jQuery(this).clone().wrap('<p>').parent().html();
  jQuery(".social-media-buttons").append(social_media);
  });
  jQuery(".social-button").fadeOut();
  jQuery(".social-media-buttons .social-media-icon").fadeIn();
  var logo_fix = jQuery("img.logo").parent().clone().wrap('<p>').parent().html();
  jQuery("img.logo").parent().remove();
  jQuery("#logo-content-IE9").html(logo_fix); 
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
