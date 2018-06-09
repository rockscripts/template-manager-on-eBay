/*Add your listing scripts here*/
jQuery(document).ready(function()
{
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
});