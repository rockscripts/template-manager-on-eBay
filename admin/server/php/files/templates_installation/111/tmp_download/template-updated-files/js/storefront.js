/*Add your store front scripts here*/
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
  jQuery(".navbar-brand").addClass("icon-home");
  jQuery(".navbar-brand").text("");
});
