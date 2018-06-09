/*Add your store front scripts here*/
jQuery(document).ready(function()
{
  
  jQuery("body").addClass("background-style");
  var body_width = jQuery("body").width();
  jQuery(".store-phone").text(store_phone);
  jQuery("#bs-example-navbar-collapse-1 .navbar-nav .menu-item a").last().css("border","0px")
  jQuery(".navbar-nav").find("li").first().find("ul").first().css("width","259px");
  
  jQuery(".navbar-brand").text("Home");
   if(body_width>=380)
  {
    var description = jQuery(".rockscripts-description").clone();
    jQuery(".heading-title").after("<div class='overview-right'></div>")
    jQuery(".overview-right").append(description);
    jQuery("div.rockscripts-description:eq(1)").remove();
    var title = jQuery(".heading-title").clone();
    jQuery(".overview-right").prepend(title);
    jQuery(".overview-right").append("<div class='sharrre'></div>");
    jQuery(".heading-title:eq(0)").remove();
    jQuery("#es_overview").fadeOut();
    jQuery(".product-info").css("margin-top","70px");
  }
  
  /*social share*/
  jQuery('.sharrre').sharrre({
share: {
  googlePlus: true,
facebook: true,
twitter: true,
digg: true,
delicious: true,
stumbleupon: true,
linkedin: true,
pinterest: true
      
},
url: 'http://www.ebay.com.au/itm/UndercoverWear-Ladies-Velvet-Pleated-Waist-Wrap-Blouse-Size-24-/111411662084?pt=AU_Womens_Clothing_2&hash=item19f0a70d04'
});
  
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
  
   if(body_width>=500 && layout_type==2)
  {
   jQuery(".col-sm-6").removeClass("col-sm-6-fix-width");
   jQuery(".col-sm-3").css("width","24%");
   jQuery(".col-sm-6").css("width","50.3%");
   jQuery(".col-sm-6").css("margin-right","14px"); 
  }
  /*****FIX IE 9*****/
   
   if(body_width<=380)
  {
   jQuery(".navbar-right").css("display","block");
    jQuery("span .logo").css("left","5%");
  }
});
function smoothScrollTop()
{
  jQuery('html,body').animate({scrollTop:'0'},'slow');
}