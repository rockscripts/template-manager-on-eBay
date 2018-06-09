
 $(document).ready(function() 
 {
     
     var old_entry ="";
     switch(layout_type)
     {
      case 1:
          $(".layout-type-1").css("display","block");
          $(".layout-type-2").css("display","block");
          $(".layout-type-3").css("display","none");  
    ///      left_widgets.reverse();
          left_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-1',entry, capitalize(entry));
                });
        //   center_widgets.reverse();
           center_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-2',entry, capitalize(entry));
                });
               
      break;
      case 2:
          $(".layout-type-1").css("display","block");
          $(".layout-type-2").css("display","block");
          $(".layout-type-3").css("display","block");   
        //  left_widgets.reverse();
          left_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-1',entry, capitalize(entry));
                });
         //  center_widgets.reverse();
           center_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-2',entry, capitalize(entry));
                });
          //       right_widgets.reverse();
             right_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-3',entry, capitalize(entry));
                });
      break;
      case 3:
          
          $(".layout-type-1").css("display","none");
          $(".layout-type-2").css("display","block");
          $(".layout-type-3").css("display","block");  
       //   center_widgets.reverse();
           center_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-2',entry, capitalize(entry));
                });
         //        right_widgets.reverse();
             right_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-3',entry, capitalize(entry));
                });
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
   $("#mm_topnav ul li a").last().css("border-right","none");
  /*Fix Top buttons*/
  if($(".button-join-main-list-link"))  
      $(".button-join-main-list-link").attr("href","http://my.ebay.co.uk/ws/eBayISAPI.dll?AcceptSavedSeller&linkname=includenewsletter&sellerid="+store_id);
  if($(".button-add-favorite-seller-link"))  
      $(".button-add-favorite-seller-link").attr("href","http://my.ebay.co.uk/ws/eBayISAPI.dll?AcceptSavedSeller&linkname=includefavoritestore&sellerid="+store_id);
 
   /*fix bug main menu*/
   dynamic_nav = $(".navbar-nav").find("ul").first().html();
   $(".navbar-nav").find("ul").first().remove();
   $(".navbar-nav").html(dynamic_nav);
   
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


   $(".loader-image").fadeOut();
 });
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
	
    $.zoomer({
            defaultWidthValue: "100%",				
            defaultHeightValue: "100%",			
            maxWidthValue: 1000,				
            maxHeightValue: 1000,				
            moveValue: 50,						
            zoomValue: 1.4,						
            thumbnailsWidthValue: 62,			
            thumbnailsHeightValue: 62,			
            thumbnailsBoxWidthValue: 410,		
            zoomerTheme: 'light'				
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
 
function widgets_compare(layout_type,widget_key,widget_title)
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
  if(widget_key == "store categories")
       open_widget(layout_type,dynamic_categories, widget_title); 
}
function open_widget(layout_type,widget_var, widget_title)
{
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
