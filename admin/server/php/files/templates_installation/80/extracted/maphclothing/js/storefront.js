/*Add your store front scripts here*/
jQuery(document).ready(function()
{
  jQuery(document).on("hover",".menu-item a",function()
                       {
                         jQuery(this).fadeIn(function()
                                              {
                                               jQuery(this).addClass("menu-item-hover");
                                              })
                         
                       });
  jQuery(document).on("mouseout",".menu-item a",function()
                       {
                         jQuery(this).removeClass("menu-item-hover");
                       });
  jQuery(".navbar-nav").find("li").first().find("ul").first().css("width","259px");
  jQuery(".navbar-brand").addClass("icon-home");
  jQuery(".navbar-brand").text("");
   body_width = jQuery("body").width();
  if(body_width<=980)
  {
    jQuery(".shop-now-button-small").css("display","none");
  }
  if(body_width>=700)
  {
   jQuery(".col-sm-6").addClass("col-sm-6-fix-width");
   jQuery(".col-sm-3").css("width","26.1%");
  }
  if(body_width<=300)
  {
   jQuery(".navbar-right").css("display","block");
    jQuery("span .logo").css("left","5%");
   
  }
    if(body_width>=500 && layout_type==2)
  {
   jQuery(".col-sm-6").removeClass("col-sm-6-fix-width");
   jQuery(".col-sm-3").css("width","22%");
   jQuery(".rc-box").css("width","46%");
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