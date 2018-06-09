/*Add your store front scripts here*/
jQuery(document).ready(function()
{
  jQuery(".store-phone").text(store_phone);
  jQuery("#bs-example-navbar-collapse-1 .navbar-nav .menu-item a").last().css("border","0px");
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
});