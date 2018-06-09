/*Add your store front scripts here*/
jQuery(document).ready(function()
{
    /*****FIX IE 9*****/
  //footer Menu
  html_footer_menu = jQuery(".navbar-nav").last().html();
  jQuery(".navbar-nav").last().remove();
  jQuery("#es_formLinks").append(html_footer_menu);
  //Social media buttons
  jQuery.each(jQuery(".social-media-icon"), function() {
  var social_media = jQuery(this).prop("outerHTML");
  jQuery(".social-media-buttons").append(social_media);
});
  jQuery(".social-button").fadeOut();
  jQuery(".social-media-buttons .social-media-icon").fadeIn();
  var header_background = jQuery("img.header-background-image").prop("outerHTML") ;
 jQuery("img.header-background-image").last().remove();
  jQuery("#es_header").append(header_background); 
  var logo_fix = jQuery("img.logo").prop("outerHTML");
  jQuery("img.logo").parent().remove();
  jQuery("#logo-content-IE9").html(logo_fix); 
  
});