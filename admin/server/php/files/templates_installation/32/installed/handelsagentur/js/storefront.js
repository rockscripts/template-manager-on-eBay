/*Add your store front scripts here*/
jQuery(document).ready(function()
{
  
  /*new styles*/
  var navbar_inverse = jQuery(".navbar-inverse").parent(".row");
  navbar_inverse.css("background","white");
  navbar_inverse.css("border-top-left-radius","6px");
  navbar_inverse.css("border-top-right-radius","6px");
  navbar_inverse.css("border-bottom-left-radius","3px");
  navbar_inverse.css("border-bottom-right-radius","3px");
  navbar_inverse.css("padding-top","10px");
  jQuery(".store-phone").text(store_phone);
  /*add caret*/
  jQuery(".vTitle").append('<p class="caret"></p>');
  /*Menu Style Colors*/
  var array_colors = [ "#E80032", "#00A4E5", "#82451F", "#EF8C16", "#AE53B9", "#AE53B9", "#236F01"];
  var items_length = jQuery(".menu-item").length;
  jQuery.each( array_colors, function( index, val ) 
  {
    jQuery('.navbar-inverse .menu-item').eq(index).css({'border-bottom':"2px solid "+val});
    jQuery('.navbar-inverse .menu-item').eq(index).find(".parent").css({'background-color':val});
  });
  /*new styles*/
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
  jQuery(".navbar-brand").html('<div class="home-icon"></div>');
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
   jQuery(".navbar-right").css("display","block")
  }
  jQuery(".rc-box").css("width","47%");
    if(body_width>=500 && layout_type==2)
  {
   jQuery(".col-sm-6").removeClass("col-sm-6-fix-width");
   jQuery(".col-sm-3").css("width","22%");
   jQuery(".layout-type-1").css("margin-left","5px");   
   jQuery(".rc-box").css("width","46%");
   jQuery(".col-sm-6").css("width","53.4%");
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