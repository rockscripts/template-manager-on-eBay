/*Add your store front scripts here*/
jQuery(document).ready(function()
{
  jQuery(".navbar-nav").find("li").first().find("ul").first().css("width","259px");
  jQuery(".navbar-brand").text("Home");
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
  }
   if(body_width<=300)
  {
   jQuery(".navbar-right").css("display","block")
  }
   if(body_width>=500 && layout_type==2)
  {
   jQuery(".col-sm-6").removeClass("col-sm-6-fix-width");
   jQuery(".col-sm-3").css("width","24%");
    jQuery(".col-sm-6").css("width","50.2%");
   jQuery(".rc-box").css("width","46%");
   jQuery(".col-sm-6").css("margin-right","4px"); 
  }
  /*****FIX IE 9*****/
   
});
$("body").css("height","100%");
function smoothScrollTop()
{
  jQuery('html,body').animate({scrollTop:'0'},'slow');
}