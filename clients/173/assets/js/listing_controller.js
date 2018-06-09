//ebay.js
header_display = translate(header_display);
footer_display = translate(footer_display);
$("body").append('<div class="loader-image"></div>');
$(".loader-image").fadeIn();
$("#header-display").html(header_display);
$("#logo-content-IE9").html(logo_display); 
$("#es_header").append(header_background);
$(".navbar-collapse").first().append(main_menu); 
$("#footer-display").html(footer_display);
$("#es_formLinks").html(footer_menu);
$(".social-media-buttons").html(social_media_buttons_parts);
 //$(document).ready(function() 
 //{

     var old_entry ="";
     open_widget('layout-type-2',dynamic_categories, "Shop Categories"); 
     switch(layout_type)
     {
      case 1:
          $(".layout-type-1").css("display","block");
          $(".layout-type-2").css("display","block");
          $(".layout-type-3").css("display","none");  
          body_width = $("body").width();
          if(body_width<=400)
          {
             $(".col-sm-6").css("width","100%"); 
             $(".navbar-inverse .navbar-right").css("display","inline");
          }
               
          else
          {
              $(".col-sm-6").css("width","73.1%");
          }
           $(".col-sm-6").css("margin-right","0px");
    ///      left_widgets.reverse();
     if(left_widgets!=false)
           {
          left_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-1',entry, capitalize(entry));
                });
           }
        //   center_widgets.reverse();
         if(center_widgets!=false)
           {
           center_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-2',entry, capitalize(entry));
                });
           }
      break;
      case 2:
          $(".layout-type-1").css("display","block");
          $(".layout-type-2").css("display","block");
          $(".layout-type-3").css("display","block");   
         
        //  left_widgets.reverse(); if(left_widgets!=false)
            if(left_widgets!=false)
           {
          left_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-1',entry, capitalize(entry));
                });
           }
         //  center_widgets.reverse();
          if(center_widgets!=false)
           {
           center_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-2',entry, capitalize(entry));
                });
           } 
          //       right_widgets.reverse();
            if(right_widgets!=false)
           {
             right_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-3',entry, capitalize(entry));
                });
           }
                    $(".shop-now-button-small").fadeOut();
                    $(".layout-type-2  .promotion-plan").css("width","46.5%");  
      break;
      case 3:
          
          $(".layout-type-1").css("display","none");
          $(".layout-type-2").css("display","block");
          $(".layout-type-3").css("display","block");  
          $(".layout-type-1").remove();
          $(".col-sm-6").css("width","73%");
          $(".col-sm-3").css("width","25.8%");
          $(".col-sm-3").css("margin-left","7px");
          $(".col-sm-3").css("padding-right","0px");
          $(".col-sm-6").css("margin-left","0px");
       //   center_widgets.reverse();
             if(center_widgets!=false)
           {
           center_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-2',entry, capitalize(entry));
                });
           }
          //       right_widgets.reverse();
            if(right_widgets!=false)
           {
             right_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-3',entry, capitalize(entry));
                });
           }
      break;
     }
   
   ///#Fix Bug for tabs
   $(".tab_content:eq(0)").fadeIn();
   ///#Fix Bug for tabs
   $(".tabs span").click(function()
   {
       $(".tabs span").removeClass("active_class");
       $(this).addClass("active_class");
   });
   $(".tabs span:eq(0)").addClass("active_class");
      ///#Fix Bug for urls
   $(".store-home-url").attr("action",store_url);
   $(".store-home-url").attr("href",store_url);
   $(".navbar-brand").attr("href",store_url);
   //social media
   if(facebook_url != "")
   {
      $(".facebook-link").attr("href",facebook_url); 
      $(".facebook-link").fadeIn();
   }
    if(twiter_url != "")
   {
      $(".twiter-link").attr("href",twiter_url); 
      $(".twiter-link").fadeIn();
   }
    if(youtube_url != "")
   {
      $(".youtube-link").attr("href",youtube_url); 
      $(".youtube-link").fadeIn();
   }
    if(printerest_url != "")
   {
      $(".pinterest-link").attr("href",printerest_url); 
      $(".pinterest-link").fadeIn();
   }
    if(linkedin_url != "")
   {
      $(".linkedin-link").attr("href",linkedin_url); 
      $(".linkedin-link").fadeIn();
   }
      if(google_url != "")
   {
      $(".google-link").attr("href",google_url); 
      $(".google-link").fadeIn();
   }
  if(delicious_url != "")
   {
      $(".delicious-link").attr("href",delicious_url); 
      $(".delicious-link").fadeIn();
   }
    /*categories menu levels control*/
$(".navbar-inverse ul li").hover(
   function() {
      if($(this).find("ul"))
      $(this).find("ul").first().css("display","block");
   },
   function() {
     if($(this).find("ul"))
      $(this).find("ul").first().css("display","none");
   }
);
   $("#mm_topnav ul li a").last().css("border-right","none");
  /*Fix Top buttons*/
  if($(".button-join-main-list-link"))  
      $(".button-join-main-list-link").attr("href","http://my."+site_domain+"/ws/eBayISAPI.dll?AcceptSavedSeller&linkname=includenewsletter&sellerid="+store_id);
  if($(".button-add-favorite-seller-link"))  
      $(".button-add-favorite-seller-link").attr("href","http://my."+site_domain+"/ws/eBayISAPI.dll?AcceptSavedSeller&linkname=includefavoritestore&sellerid="+store_id);
 

    ipad_sizes();

   /*Submit buttons*/
   $(".submit_search").click(function()
{
    $(".navbar-form").submit();
});
/*fix links to do _blank*/
$("#es_topLinksContainer").find("a").attr("target","_blank");
$(".logo").attr("target","_blank");

/*Fix Categories menu Menu*/
$('.vertical li:has(ul)').addClass('parent');

      /*fix some mobile features*/
$(".layout-type-2 .Popular-categories").addClass("hidden-xs");
$(".layout-type-2 .Popular-categories-title").addClass("hidden-xs");
$(".console ul.left li:eq(0)").addClass("hidden-xs");

$(".thumbs img").each(function(index)
{
  src_image = $(this).attr("src");   
  $(".view_pretty_iamges").append('<a href="'+src_image+'" rel="prettyPhoto[gallery]"></a>');
});
$(".ei-slider-large img").each(function(index)
{
  src_image = $(this).attr("src");   
  $(".ei-slider-thumbs").append('<li><a href="#"><img src="'+src_image+'" /></a></li>');
});

if(body_width<=768 && body_width >=450)
    {
        if(layout_type == 1 || layout_type == 3)
        {
          //  alert(body_width)
            $(".container").css("width","100%");
            $(".container").css("padding-left","0px");
            $(".container").css("padding-right","0%");
            $(".col-sm-3").removeClass("hidden-xs");
        }
   }
   

   
   //Slider 
   // Vimeo API nonsense
      var player = document.getElementById('player_1');
     // $f(player).addEvent('ready', ready);

      function addEvent(element, eventName, callback) {
        (element.addEventListener) ? element.addEventListener(eventName, callback, false) : element.attachEvent(eventName, callback, false);
      }

      function ready(player_id) {
        var froogaloop = $f(player_id);

        froogaloop.addEvent('play', function(data) {
          $('.flexslider').flexslider("pause");
        });

        froogaloop.addEvent('pause', function(data) {
          $('.flexslider').flexslider("play");
        });
      }
 if(store_phone=="")
 {
     $(".phone_icon").remove();
 }
              if (typeof listing_design_option_is_active_image_viewer != 'undefined') {
if(listing_design_option_is_active_image_viewer=="OFF")
    {
       $(".zoomer").remove();
       $("#ei-slider").remove();
    }
     else
        {
            $(".holder").css("display","block"); 
        }
}
// $("#ds_div").append('<div style="text-align:center;margin-top:5px;"><a class="powered_link" href="http://rockscripts.org" >Powered by: <img src="http://hosting.rockscripts.org/default/images/rockscripts-small.png" class="rockscripts-logo-small"></a></div>');
  /*copyright*/
 var date = new Date();
var year = date.getFullYear();
 $(".copyright").html("&copy;"+store_name+" "+year+". <span class='right-reserved'>All rights reserved</span>");
   $(".loader-image").fadeOut();
   
// });
 $(window).load(function() 
 {
        $(".flexslider")
        .fitVids()
        .flexslider({
          animation: "slide",
          useCSS: false,
          animationLoop: false,
          smoothHeight: true,
          start: function(slider){
            $('body').removeClass('loading');
          },
          before: function(slider){
          //  $f(player).api('pause');
          }
      }); 
	
   


    $("a[rel^='prettyPhoto']").prettyPhoto({
            theme: 'pp_default',				
            opacity: 0.90,					
            overlay_gallery: true,				
            autoplay_slideshow: false,			
            slideshow: 5000					
    });
    $('#ei-slider').eislideshow({
					animation			: 'center',
					autoplay			: true,
					slideshow_interval	: 3000,
					titlesFactor		: 0
                });
                
  });
 $( window ).resize(function() 
 {
        
     body_width = $("body").width();
     
      if(body_width<=768) 
      {
        $(".listing-box3").css("width","47%");  
        $(".listing-box2").css("width","47%");  
      }      
     else
     {
      $(".listing-box3").css("width","30.5%");   
       $(".listing-box2").css("width","30.5%");  
     }
     if(body_width<=400)
     {
         $(".col-sm-6").css("width","96%");
         $(".listing-box3").css("width","94%");   
         $(".listing-box2").css("width","94%");  
         
     }
     if(layout_type==3 && body_width<=400)
        {
          $(".col-sm-6").css("width","100%");
          $(".listing-box3").css("width","94%");   
         $(".listing-box2").css("width","94%");  
           $(".listing-box").css("width","94%");    
        }
//ipad sizes
 ipad_sizes();
if(body_width >= 290 && body_width<=564)
    {
         $(".col-sm-3").addClass("hidden-xs");
         $(".container").css("width","100%");
         $(".container").css("padding-left","0px");
         $(".col-sm-6").css("margin-left","0px");
         $(".container").css("padding-right","0%");
         $(".listing-box3").css("width","94%");   
        $(".listing-box2").css("width","94%");  
        $(".listing-box").css("width","94%");  
        $(".col-sm-6").css("width","100%");
        $(".promotion-plan").css("width","46.5%");  
        $(".row").css("padding-left","0px");
        $(".row").css("margin-left","0px");
    }
 if(layout_type==3 && body_width<=400)
        {
           $(".container").css("padding-left","0%");
           $(".container").css("padding-right","0%");
           $(".col-sm-6").css("width","100%");
           $(".listing-box3").css("width","94%");   
           $(".listing-box2").css("width","94%");  
           $(".listing-box").css("width","94%");    
        }
        $(".background-main").fadeIn();
         $(".loader-image").fadeOut();
       
         
});
$(".background-main").fadeIn();
function widgets_compare(layout_type,widget_key,widget_title)
{
    body_width = $("body").width();
      if(body_width>=400) 
      {
  if(widget_key == "advertising")
       open_widget(layout_type,listing_advertisings, false);  
   if(widget_key == "featured listings")
       open_widget(layout_type,featured_listings, widget_title); 
   if(widget_key == "tabs")
   open_tab(layout_type,tab_titles,tab_ontent);
   if(widget_key == "image & video slider")
  open_slider(layout_type,slider_images, false);  
  if(widget_key == "popular categories")
       open_widget(layout_type,popoular_categories, widget_title); 
    if(widget_key == "custom rich text")
       open_custom_widget(layout_type,welcome_text, widget_key); 
  if(widget_key == "store categories")
       open_widget(layout_type,dynamic_categories, widget_title); 
 if(widget_key == "special discounts")
       open_widget(layout_type,special_listings, widget_title);      
  if(widget_key == "new arrivals")
      open_widget(layout_type,arrivals_listings, widget_title); 
   if(widget_key == "browse by specifics")
      open_widgets_specifics(layout_type,specifics_array);
      }
      
}
function open_widgets_specifics(layout_type,specifics_array)
{ 
    var output = "";
    var specific_value_string = "";
    var w_title = "";
    var w_title_string = "";
    var specifics_values = "";
    var ul = "";
    var list = "";
   specifics_array.forEach(function(object)
                {    
                 w_title = object.title;
                 specifics_values = object.specifics_values; 
                 if(object.custom_title != "")
                 w_title_string = "<div class='title-specific'>"+object.custom_title+"</div>";
                 else
                 w_title_string = "<div class='title-specific'>"+w_title+"</div>";
                 output+=w_title_string;
                 ul = "<ul class='ul-item-specifics-values'>";
                 list = '';
                 specifics_values.forEach(function(value)
                  {
                     specific_value_string = "<li><a href='"+store_url+"?_nkw="+value+"'>"+value+"</a></li>";
                     list+=specific_value_string; 
                  });
                  
                  ul += list+"</ul>";
                  output += ul;
                });        
         $("."+layout_type).append('<div class="vTitle browse-by-title">Browse by</div><div class="widget browse-by">'+output+'</div>');  
     
    

}
function translate(text)
{
  var re= /\{{(.*?)\}}/g;
for(m = re.exec(text); m; m = re.exec(text))
{
     text = text.replace("{{"+m[1]+"}}", "<span id='element-translate-"+m[1]+"'><script>if(typeof  "+m[1]+" !== 'undefined')jQuery(document).ready(function(){jQuery('#element-translate-"+m[1]+"').text("+m[1]+");})</script></span>");
}  
return text;
}
function open_custom_widget(layout_type,widget_var, widget_key)
{
  var  class_item = widget_key.replace(" ","-");
        $("."+layout_type).append('<div class="widget '+class_item+'">'+widget_var+'</div>');      
}
function open_widget(layout_type,widget_var, widget_title)
{
    if(widget_title == "Shop Categories")
    {
         class_item = widget_title.replace(" ","-");
         $("."+layout_type).append('<div class="vTitle '+class_item+'-title visible-xs">'+widget_title+'</div><div class="widget visible-xs '+class_item+'">'+widget_var+'</div>');    
        return true;
    }
    if(!widget_title )
    {
        $("."+layout_type).append('<div class="widget">'+widget_var+'</div>');  
    }
    else
    {
         class_item = widget_title.replace(" ","-");
         $("."+layout_type).append('<div class="vTitle '+class_item+'-title">'+widget_title+'</div><div class="widget '+class_item+'">'+widget_var+'</div>');  
    }  
}
function open_tab(layout_type,tab_titles,tab_ontent)
{
        $("."+layout_type).append('<div class="tabs">'+tab_titles+tab_ontent+'</div>');      
}
function open_slider(layout_type,slider_content)
{
        $("."+layout_type).append('<div class="flexslider"><ul class="slides">'+slider_content+'</ul></div>');      
}
function capitalize(s)
{
    return s[0].toUpperCase() + s.slice(1);
}
function ipad_sizes()
{
      body_width = $("body").width();
           if(body_width<=768 && body_width >=565)
    {
        if(layout_type == 1 || layout_type == 3)
        {
           // alert(body_width)
            $(".container").css("width","100%");
            $(".container").css("padding-left","0px");
            $(".container").css("padding-right","0%");
            $(".col-sm-3").removeClass("hidden-xs");
             $(".col-sm-6").css("width","72.7%");
        }
        if(layout_type == 2)
        {
          
            $(".container").css("width","100%");
            $(".container").css("padding-left","0px");
            $(".container").css("padding-right","0%");
            $(".col-sm-3").removeClass("hidden-xs");
            $(".shop-now-button-small").css("display","none"); 
        }
    }
    
} 
$.zoomer({
            defaultWidthValue: "auto",				
            defaultHeightValue: "auto",			
            maxWidthValue: 1000,				
            maxHeightValue: 1000,				
            moveValue: 50,						
            zoomValue: 1.4,						
            thumbnailsWidthValue: 62,			
            thumbnailsHeightValue: 62,			
            thumbnailsBoxWidthValue: 410,		
            zoomerTheme: 'light'				
    });
    jQuery(document).ready(function()
{
    if(typeof  NEW_ARRIVALS !== 'undefined')
    jQuery(".New-arrivals-title").text(NEW_ARRIVALS);
    if(typeof  STORE_CATEGORIES !== 'undefined')
    jQuery(".Store-categories-title").text(STORE_CATEGORIES) ;
    if(typeof  POPULAR_CATEGORIES !== 'undefined')
    jQuery(".Popular-categories-title").text(POPULAR_CATEGORIES) ;
    if(typeof  SPECIAL_DISCOUNTS !== 'undefined')
    jQuery(".Special-discounts-title").text(SPECIAL_DISCOUNTS);
    if(typeof  FEATURED !== 'undefined')
    jQuery(".Featured-listings-title").text(FEATURED);
    if(typeof  OUR_LISTINGS !== 'undefined')
    jQuery(".Our-Listings-title").text(OUR_LISTINGS);
    if(typeof  BROWSE_BY_SPECIFICS !== 'undefined')
    jQuery(".browse-by-title").text(BROWSE_BY_SPECIFICS);
    if(typeof  ALL_RIGHT_RESERVED !== 'undefined')
    jQuery(".right-reserved").text(ALL_RIGHT_RESERVED);
});  