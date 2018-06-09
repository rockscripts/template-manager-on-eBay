/*Add your listing scripts here*/
jQuery(document).ready(function()
{
  jQuery(".store-phone").text(store_phone);
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
  if(layout_type==2)
  {
     
          $(".col-sm-6").css("padding-right","15px");
          $(".layout-type-3").css("padding-right","0px");
  }
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
  jQuery(".navbar-brand").addClass("icon-home");
  jQuery(".navbar-brand").text("");
    /*****FIX IE 9*****/
  //footer Menu
  html_footer_menu = jQuery(".navbar-nav").last().html();
  jQuery(".navbar-nav").last().remove();
  jQuery("#es_formLinks").append(html_footer_menu);
   //Social media buttons
  jQuery.each(jQuery(".social-media-icon"), function() 
  {
  var social_media = jQuery(this).prop("outerHTML");
  jQuery(".social-media-buttons").append(social_media);
  });
  //jQuery(".social-button").fadeOut();
  jQuery(".social-media-buttons .social-media-icon").fadeIn();
  var logo_fix = jQuery("img.logo").prop("outerHTML");
  jQuery("img.logo").parent().remove();
  jQuery("#logo-content-IE9").html(logo_fix);
});