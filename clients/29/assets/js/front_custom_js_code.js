/*Add your store front scripts here*/
jQuery(document).ready(function()
{
  jQuery(".navbar-nav").find("li").first().find("ul").first().css("width","259px");
  jQuery(".navbar-brand").text("Home");
  
});
function smoothScrollTop()
{
  jQuery('html,body').animate({scrollTop:'0'},'slow');
}