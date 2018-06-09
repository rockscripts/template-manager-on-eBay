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
  navbar_inverse.css("margin-bottom","15px");
  jQuery(".navbar-brand").html('<div class="home-icon"></div>');
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
    if(body_width>=500 && layout_type==2)
  {
   jQuery(".col-sm-6").removeClass("col-sm-6-fix-width");
   jQuery(".col-sm-3").css("width","24%");
    jQuery(".col-sm-6").css("width","50.38%");
   jQuery(".rc-box").css("width","45%");
   jQuery(".col-sm-6").css("margin-right","14px"); 
  }
  jQuery(".rc-box").css("width","47%");  
});
function smoothScrollTop()
{
  jQuery('html,body').animate({scrollTop:'0'},'slow');
}