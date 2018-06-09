/*Add your store front scripts here*/
jQuery(document).ready(function()
{
  
 
  jQuery(".store-phone").text(store_phone);
  jQuery("#bs-example-navbar-collapse-1 .navbar-nav .menu-item a").last().css("border","0px")
  var flexslider = jQuery(".flexslider").clone();
  jQuery(".space-top").prepend("<div class='slider-home'></div>")
  jQuery(".slider-home").append(flexslider);
  jQuery("div.flexslider:eq(1)").remove();
  var banners_custom = jQuery(".banners-custom").clone();
  jQuery(".layout-type-2").prepend("<div class='banners-custom-widget'></div>")
  jQuery(".banners-custom-widget").append(banners_custom);
  jQuery("div.banners-custom:eq(1)").fadeIn();
  
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
  jQuery(".navbar-brand").text("Home");
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
   if(body_width<=380)
  {
   jQuery("span .logo").css("left","16%"); 
   jQuery(".banner-custom").css("width","47%"); 
   jQuery(".Shop-Categories-title").css("clear","both");
  }
});
function smoothScrollTop()
{
  jQuery('html,body').animate({scrollTop:'0'},'slow');
}

