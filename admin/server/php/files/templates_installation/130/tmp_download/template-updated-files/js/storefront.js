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
});
function smoothScrollTop()
{
  jQuery('html,body').animate({scrollTop:'0'},'slow');
}