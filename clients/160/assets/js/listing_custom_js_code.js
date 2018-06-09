/*Add your store front scripts here*/
jQuery(document).ready(function()
{
  jQuery(".navbar-nav").find("li").first().find("ul").first().css("width","259px");
  jQuery(".navbar-brand").addClass("icon-home");
  jQuery(".navbar-brand").text("");
   body_width = jQuery("body").width();
    jQuery(document).on("hover",".menu-item a",function()
                       {
                         jQuery(this).fadeIn("slow",function()
                                              {
                                               jQuery(this).addClass("menu-item-hover");
                                              })
                         
                       });
  jQuery(document).on("mouseout",".menu-item a",function()
                       {
                         jQuery(this).removeClass("menu-item-hover");
                       });
  //
  if(body_width<=900 && body_width>=800)
  {    
    jQuery("#es_formLinks").css("margin-top","-40px"); 
  }
 
  if(body_width<=980)
  {
    jQuery(".shop-now-button-small").css("display","none");
  }
  if(body_width>=700)
  {
   jQuery(".col-sm-6").addClass("col-sm-6-fix-width");
   jQuery(".layout-type-2  .rc-box").css("width","30.8%");
  }
   if(body_width<=300)
  {
   jQuery(".navbar-right").css("display","block");
    jQuery("span .logo").css("left","5%");
  }
   if(body_width>=500 && layout_type==2)
  {
   jQuery(".col-sm-6").removeClass("col-sm-6-fix-width");
   jQuery(".col-sm-3").css("width","24%");
    jQuery(".col-sm-6").css("width","50.3%");
   jQuery(".col-sm-6").css("margin-right","14px"); 
  }
});
function smoothScrollTop()
{
  jQuery('html,body').animate({scrollTop:'0'},'slow');
}