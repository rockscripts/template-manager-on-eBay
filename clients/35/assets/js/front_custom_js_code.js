/*Add your store front scripts here*/
jQuery(document).ready(function()
{
  jQuery(".navbar-nav").find("li").first().find("ul").first().css("width","259px");
  jQuery(".navbar-brand").text("Home");
   body_width = jQuery("body").width();
  if(body_width<=980)
  {
    jQuery(".shop-now-button-small").css("display","none");
  }
  
  
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
});
function smoothScrollTop()
{
  jQuery('html,body').animate({scrollTop:'0'},'slow');
}