
//ebay.js
$("body").append('<div class="loader-image"></div>');
$(".loader-image").fadeIn();
$("#header-display").html(header_display);
$("#logo-content-IE9").html(logo_display); 
$("#es_header").append(header_background);
$(".navbar-collapse").first().append(main_menu); 
$("#footer-display").html(footer_display);
$("#es_formLinks").html(footer_menu);
$(".social-media-buttons").html(social_media_buttons_parts);
$(function($)
{ 
    
    $(".pagecontainer > table:eq(1) tr:first td:first").addClass("background-main");
    $(".pagecontainer > table:eq(1) tr:first td:first").addClass("background-style");
    $(".background-main table:eq(1)").addClass("rockscripts-content");
    $(".gallery table:eq(0)").removeClass("rockscripts-content");
    $("#rockscripts-template table:eq(1)").removeClass("rockscripts-content");
    $(".rockscripts-content tr:first").addClass("rockscripts-hide");
    $("#rockscripts-template .rockscripts-content tr:first").removeClass("rockscripts-hide");
    $(".rockscripts-content").find("br[clear = none]").remove();
    $("#LeftPanel").remove();    
    
});
$(document).ready(function() 
 {
     var array_eBay_urls = new Array();
     array_eBay_urls.push("http://"+window.location.host+"/"+store_name+"/")
     array_eBay_urls.push("http://"+window.location.host+"/"+store_name);
     array_eBay_urls.push(store_url);
     var store_listings_defined_in_layout = false;
     
 
     $(".v4sem").append(' | <a class="powered_link" href="http://etemplate.com" >Powered by: <img src="http://hosting.etemplate.com/default/images/rockscripts-small.png" class="rockscripts-logo-small"></a>');
     open_widget('layout-type-2',dynamic_categories, "Shop Categories"); 
     $('.pagecontainer td').each(function(nextIndex)
   {
     nextIndex = nextIndex + 1; 
    $(this).addClass('class-'+nextIndex);
   });
    body_width = $("body").width();
     switch(layout_type)
     {
      case 1:
        
          $(".layout-type-1").css("display","block");
          $(".layout-type-2").css("display","block");
          $(".layout-type-3").css("display","none");  
          $(".col-sm-6").css("width","77.1%");
          $(".col-sm-6").css("margin-right","0px");
          $(".layout-type-2 #v4-17").css("width","98%");
          $(".layout-type-2 div.v4stabl").css("width","102%");
         
         /*buld central area*/ 
         /*fix widths*/
         $(".layout-type-2 #v4-17").css("width","98%");
         $(".layout-type-2 div.v4stabl").css("width","102%");
         $(".layout-type-2 .Popular-categories .rc-box").css("width","30%");
         /*buld central area*/
        show_number_of_listings_requested(front_design_option_number_listings_on_front,array_eBay_urls);
        var html_collection = '<div id="fpcap" class="fpcc">'+$("#fpcap").html()+'</div>';
         if($("#v4-6").html()!=null)
         {              
             html_collection = html_collection.concat('<div id="v4-6" class="ctrlbr">'+$("#v4-6").html()+'</div>');
         }
         
      
      /*List View*/
      if($("#lvc").length > 0)
      {
          $(".col-sm-6").css("width","74%");
          $(".col-sm-3").css("margin-left","16px");
          table = $("#lvc").html();
          list_view = convert_table_to_div(table);         
          html_collection = html_collection.concat('<div class="listing-view">'+table+'</div>');
      }
      else
      {
              $("table.gallery").each(function()
      {
          details = $(this).find(".details").html();
     //  alert(details);
    
     details = convert_table_to_div(details);
   //  alert(table);
          picture = $(this).find(".camera").html();
          html_collection =html_collection.concat('<div class="left listing-box fade-products" ><div class="listing-details"><div class="listing-image">'+picture+'</div><div class="details-inner">'+details+'</div></div></div>');  
        //  alert(details)
      });
      }
     
          
      
      
        
   /// left_widgets.reverse();
    if(left_widgets!=false)
           {
              left_widgets.forEach(function(entry)
                {                                          
                  widgets_compare('layout-type-1',entry, capitalize(entry));                    
                });
           }  
           else
           {
              $(".layout-type-1").append("<i class='alert-icon'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Left Column has not active widgets");
           }
        //   center_widgets.reverse();
        object = is_page(document.location.href,pages_array);
        if(object != false)
        {
            $(".layout-type-2").html('<h3>'+object.title+'</h3><div>'+object.content+'</div>');
        }
        else
        {
           if(center_widgets!=false)
           {
               var index = 0;
                center_widgets.forEach(function(entry)
                {        
                    widgets_compare('layout-type-2',entry, capitalize(entry));
                    if(entry=="store listings")
                    {
                      open_store_listings(html_collection, front_design_option_is_active_listings_on_front,array_eBay_urls); 
                      store_listings_defined_in_layout = true;
                    }
                    if(index==center_widgets.length-1)
                    {
                        if(store_listings_defined_in_layout==false)
                        {
                            open_store_listings(html_collection, front_design_option_is_active_listings_on_front,array_eBay_urls);  
                        }
                    }
                  index++;  
                });
           } 
           else
           {
            open_store_listings(html_collection, front_design_option_is_active_listings_on_front,array_eBay_urls);   
           }
        }                         
         object = is_page(document.location.href,pages_array);
        if(object != false)
        {
            $(".layout-type-2").html('<h3>'+object.title+'</h3><div>'+object.content+'</div>');
        }
        else
        {
        /*   if(center_widgets!=false)
           {
                center_widgets.forEach(function(entry)
                {        
                    widgets_compare('layout-type-2',entry, capitalize(entry));
                });
           } */
        }    
      break;
      case 2:
          $(".layout-type-1").css("display","block");
          $(".layout-type-2").css("display","block");
          $(".layout-type-3").css("display","block");  
          $(".col-sm-6").css("width","54.4%");
          $(".container").css("padding-left","0%");
          $(".container").css("padding-right","0%");
          /*Load center Area if have thre columns*/
         body_width = $("body").width();
         show_number_of_listings_requested(front_design_option_number_listings_on_front,array_eBay_urls)  
         html_collection = '<div id="fpcap" class="fpcc">'+$("#fpcap").html()+'</div>';
          if($("#v4-6").html()!=null)
         html_collection =html_collection.concat('<div id="v4-6" class="ctrlbr">'+$("#v4-6").html()+'</div>');
      
      /*List View*/
      if($("#lvc").length > 0)
      {
          $(".col-sm-6").css("width","74%");
          $(".col-sm-3").css("margin-left","16px");
          table = $("#lvc").html();
          list_view = convert_table_to_div(table);         
           html_collection = html_collection.concat('<div class="listing-view">'+table+'</div>');
      }
      else
      {
              $("table.gallery").each(function()
      {
          details = $(this).find(".details").html();
     //  alert(details);
    
     details = convert_table_to_div(details);
   //  alert(table);
          picture = $(this).find(".camera").html();
          picture = picture.replace("140px","100%");
             if(body_width<=768)            
                html_collection =html_collection.concat('<div class="left listing-box3 fade-products"  ><div class="listing-details"><div class="listing-image">'+picture+'</div><div class="details-inner">'+details+'</div></div></div>');  
            else
             html_collection =html_collection.concat('<div class="left listing-box2 fade-products" ><div class="listing-details"><div class="listing-image">'+picture+'</div><div class="details-inner">'+details+'</div></div></div>');  
             
         
        //  alert(details)
      });
      
      }
        
      
      $("#CentralArea").remove();
      $(".grid").find(".gallery:eq(2)").css("width","49%");
      
        //  left_widgets.reverse();
        if(left_widgets!=false)
           {
          left_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-1',entry, capitalize(entry));
                });
           }
           else
           {
              $(".layout-type-1").append("<i class='alert-icon'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Left Column has not active widgets");
           }
         //  center_widgets.reverse();
         if(center_widgets!=false)
           {
               var index = 0;
                center_widgets.forEach(function(entry)
                {        
                    widgets_compare('layout-type-2',entry, capitalize(entry));
                    if(entry=="store listings")
                    {
                      open_store_listings(html_collection, front_design_option_is_active_listings_on_front,array_eBay_urls); 
                      store_listings_defined_in_layout = true;
                    }
                    if(index==center_widgets.length-1)
                    {
                        if(store_listings_defined_in_layout==false)
                        {
                            open_store_listings(html_collection, front_design_option_is_active_listings_on_front,array_eBay_urls);  
                        }
                    }
                  index++;  
                });
           } 
           else
           {
            open_store_listings(html_collection, front_design_option_is_active_listings_on_front,array_eBay_urls);   
           }
           if(right_widgets!=false)
           {
          //       right_widgets.reverse();
             right_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-3',entry, capitalize(entry));
                });
           }
           else
           {
              $(".layout-type-3").append("<i class='alert-icon'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Right Column has not active widgets");
           }
                $(".layout-type-2 .shop-now-button-small").fadeOut();
             object = is_page(document.location.href,pages_array);
        if(object != false)
        {
            $(".layout-type-2").html('<h3>'+object.title+'</h3><div>'+object.content+'</div>');
        }
        else
        {
        }    
      break;
      case 3:
          
          $(".layout-type-1").css("display","none");
          $(".layout-type-2").css("display","block");
          $(".layout-type-3").css("display","block");  
          /*fix widths*/
          $(".layout-type-1").remove();
        $(".col-sm-6").css("width","77%");
          $(".col-sm-6").css("margin-left","0px");
         $(".col-sm-3").css("width","22%");
         $(".layout-type-2 #v4-17").css("width","98%");
         $(".layout-type-2 div.v4stabl").css("width","102%");
          show_number_of_listings_requested(front_design_option_number_listings_on_front,array_eBay_urls)
         html_collection = '<div id="fpcap" class="fpcc">'+$("#fpcap").html()+'</div>';
          if($("#v4-6").html()!=null)
         html_collection =html_collection.concat('<div id="v4-6" class="ctrlbr">'+$("#v4-6").html()+'</div>')
          /*List View*/
     /*List View*/
      if($("#lvc").length > 0)
      {
          
          table = $("#lvc").html();
          list_view = convert_table_to_div(table);         
           html_collection = html_collection.concat('<div class="listing-view">'+table+'</div>');
      }
      else
      {
              $("table.gallery").each(function()
      {
          details = $(this).find(".details").html();
     //  alert(details);
    
     details = convert_table_to_div(details);
   //  alert(table);
          picture = $(this).find(".camera").html();
          html_collection =html_collection.concat('<div class="left listing-box fade-products" ><div class="listing-details"><div class="listing-image">'+picture+'</div><div class="details-inner">'+details+'</div></div></div>');  
        //  alert(details)
      });
      }
      
      $(".listing-image").find(".image").css("width","100%");
      $("#v4-6").css("margin","0px");
      $("#CentralArea").remove();
       //   center_widgets.reverse();
        if(center_widgets!=false)
           {
               var index = 0;
                center_widgets.forEach(function(entry)
                {        
                    widgets_compare('layout-type-2',entry, capitalize(entry));
                    if(entry=="store listings")
                    {
                      open_store_listings(html_collection, front_design_option_is_active_listings_on_front,array_eBay_urls); 
                      store_listings_defined_in_layout = true;
                    }
                    if(index==center_widgets.length-1)
                    {
                        if(store_listings_defined_in_layout==false)
                        {
                            open_store_listings(html_collection, front_design_option_is_active_listings_on_front,array_eBay_urls);  
                        }
                    }
                  index++;  
                });
           } 
           else
           {
            open_store_listings(html_collection, front_design_option_is_active_listings_on_front,array_eBay_urls);   
           }
         //        right_widgets.reverse();
          if(right_widgets!=false)
           {
             right_widgets.forEach(function(entry)
                {                    
                    widgets_compare('layout-type-3',entry, capitalize(entry));
                    if(entry=="store listings")
                    open_store_listings(html_collection, front_design_option_is_active_listings_on_front,array_eBay_urls);
                });
           }
           else
           {
              $(".layout-type-3").append("<i class='alert-icon'></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Right Column has not active widgets");
           }
            object = is_page(document.location.href,pages_array);
        if(object != false)
        {
            $(".layout-type-2").html('<h3>'+object.title+'</h3><div>'+object.content+'</div>');
        }
        else
        {
          
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
   //social media
   if(facebook_url != "")
   {
      $(".facebook-link").attr("href",facebook_url); 
      $(".facebook-link").fadeIn();
      $(".facebook-link").addClass("social-media-icon");
   }
    if(twiter_url != "")
   {
      $(".twiter-link").attr("href",twiter_url); 
      $(".twiter-link").fadeIn();
      $(".twiter-link").addClass("social-media-icon");
   }
    if(youtube_url != "")
   {
      $(".youtube-link").attr("href",youtube_url); 
      $(".youtube-link").fadeIn();
      $(".youtube-link").addClass("social-media-icon");
   }
    if(printerest_url != "")
   {
      $(".pinterest-link").attr("href",printerest_url); 
      $(".pinterest-link").fadeIn();
      $(".pinterest-link").addClass("social-media-icon");
   }
    if(linkedin_url != "")
   {
      $(".linkedin-link").attr("href",linkedin_url); 
      $(".linkedin-link").fadeIn();
      $(".linkedin-link").addClass("social-media-icon");
   }
      if(google_url != "")
   {
      $(".google-link").attr("href",google_url); 
      $(".google-link").fadeIn();
      $(".google-link").addClass("social-media-icon");
   }
  if(delicious_url != "")
   {
      $(".delicious-link").attr("href",delicious_url); 
      $(".delicious-link").fadeIn();
      $(".delicious-link").addClass("social-media-icon");
   }
   $("#mm_topnav ul li a").last().css("border-right","none");
  /*Fix Top buttons*/
  if($(".button-join-main-list-link"))  
      $(".button-join-main-list-link").attr("href","http://my."+site_domain+"/ws/eBayISAPI.dll?AcceptSavedSeller&linkname=includenewsletter&sellerid="+store_id);
  if($(".button-add-favorite-seller-link"))  
      $(".button-add-favorite-seller-link").attr("href","http://my."+site_domain+"/ws/eBayISAPI.dll?AcceptSavedSeller&linkname=includefavoritestore&sellerid="+store_id);
 
 
  //ipad sizes
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
/*fix dysplay options*/
  /*  link = $(this).find("li").attr("v");
    alert(link);
    $(this).find("li").find("a").attr("href",window.location.host+link)*/
            //window.location.host
$("#v4-9_mn").find("li").each(function()
{
     link = $(this).attr("v");
    $(this).find("a").attr("href","http://"+window.location.host+link);
});
$("#v4-15_mn").find("li").each(function()
{
     link = $(this).attr("v");
    $(this).find("a").attr("href","http://"+window.location.host+link);
});
$("#v4-8").hover(function()
{
    menu_dysplay_options = $("#v4-9_mn").html();
    $(this).append('<div id="v4-9_mn" class="mn">'+menu_dysplay_options+'</div>');
},
function(){
    $(this).find("#v4-9_mn").remove();
}
);
$("#v4-14").hover(function()
{
    menu_dysplay_options = $("#v4-15_mn").html();
    $(this).append('<div id="v4-15_mn" class="mn">'+menu_dysplay_options+'</div>');
},
function(){
    $(this).find("#v4-15_mn").remove();
}
);
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
   $(".tab_content").first().css("display","block");
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
 /*ficsome widths*/
 if(layout_type == 1 || layout_type == 3)
 {
     $(".layout-type-2 .Popular-categories .rc-box").css("width","30.5%");     
 }
  if(body_width<=400)
     {
          $("body").append('<div class="loader-image"></div>');
$(".loader-image").fadeIn();
         $(".col-sm-6").css("width","100%");
         $(".container").css("padding-left","0%");
          $(".container").css("padding-right","0%");
         $(".col-sm-6").css("margin-left","0px");
         $(".listing-box").css("width","94%"); 
         $(".listing-box3").css("width","94%");   
         $(".listing-box2").css("width","94%");       
         $(".loader-image").fadeOut();
          $(".layout-type-2 .promotion-plan").css("width","47%");
          $(".layout-type-2 .promotion-plan .promotion-plan-title").css("font-size","13px;");
     }
     
         if($(".countClass").length>0)
     {
        count = $(".countClass").text(); 
        if(count == "0")
         $("#v4-6").fadeOut();
     }
 //alert(document.URL)
 if(document.URL != store_url)
 {
      $("#v4-21").remove(); 
      $(".ctrlbr").remove();       
 }
 if(store_phone=="")
 {
     $(".phone_icon").remove();
 }
      $(".loader-image").fadeOut();
      
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
/*Open social media in a new browser tab*/
$(".social-media-buttons a").attr("target","_blank");
  /*copyright*/
 var date = new Date();
var year = date.getFullYear();
 $(".copyright").html("&copy;"+store_name+" "+year+". All rights reserved");
if(array_eBay_urls.indexOf(window.location.href)==(-1))            
             {
if (typeof front_design_option_display_widgets_categories != 'undefined') {
if(front_design_option_display_widgets_categories=="OFF")
    {
        $(".layout-type-2 .widget").css("display","none");
        $(".layout-type-2 .vTitle").css("display","none");
        $(".layout-type-2 .flexslider").css("display","none");
        $(".layout-type-2 .Our-Listings").css("display","inline");
    }
}}

 });

 $(window).load(function() 
 {
     $(".loader-image").fadeIn();
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
 
if(body_width >= 316 && body_width<=564)
    {
         $(".col-sm-3").addClass("hidden-xs");
         $(".container").css("width","100%");
            $(".container").css("padding-left","0px");
            $(".container").css("padding-right","0%");
             $(".listing-box3").css("width","94%");   
           $(".listing-box2").css("width","94%");  
           $(".listing-box").css("width","94%");  
           $(".col-sm-6").css("width","100%");
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
         $(".loader-image").fadeOut();
});

if(body_width >= 316 && body_width<=564)
    {
         $(".col-sm-3").addClass("hidden-xs");
         $(".container").css("width","100%");
            $(".container").css("padding-left","0px");
            $(".container").css("padding-right","0%");
             $(".listing-box3").css("width","94%");   
           $(".listing-box2").css("width","94%");  
           $(".listing-box").css("width","94%");  
           $(".col-sm-6").css("width","100%");
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

    $("a[rel^='prettyPhoto']").prettyPhoto({
            theme: 'pp_default',				
            opacity: 0.90,					
            overlay_gallery: true,				
            autoplay_slideshow: false,			
            slideshow: 5000					
    });
   //Fix some color issue
$(".time2 .label").css("color","black");
$(".camera .image img").css("width","100%");
$(".gallery").attr("width","");

var width_image = 0;
$(".Our-Listings ").find(".image").find("img").hover(function()
{
    $(this).closest(".fade-products").css("opacity","1");
   width_image   = $(this).width();
    
   $(this).animate({
            "width": width_image+30,
            "left": 50,
            "top":  50,
            
     }, 500 );
},
function(){
       width_image   = $(this).width();
    $(this).closest(".fade-products").css("opacity","0.78");
   $(this).animate({
            "width": 144,
            "left": 50,
            "top":  50,
            
     }, 600);
}
);
$(".Our-Listings").hover(function()
{
   $(this).find(".fade-products").css("opacity","0.78");
},
function(){
   $(this).find(".fade-products").css("opacity","1");
}
);
$(".loader-image").fadeOut();
$(".container").fadeIn();
  });
 
function widgets_compare(layout_type,widget_key,widget_title)
{
  if(widget_key == "advertising")
       open_custom_widget(layout_type,front_advertisings, widget_title);  
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
   if(widget_key == "custom rich text")
       open_custom_widget(layout_type,welcome_text, widget_key); 
 if(widget_key == "special discounts")
       open_widget(layout_type,special_listings, widget_title);      
  if(widget_key == "new arrivals")
      open_widget(layout_type,arrivals_listings, widget_title);
    if(widget_key == "store listings")
 { 
     //do nothing
 } 
 if(widget_key == "browse by specifics")
      open_widgets_specifics(layout_type,specifics_array);
}
function open_widgets_specifics(layout_type,specifics_array)
{ console.log(specifics_array);
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
function open_store_listings(html_collection, front_design_option_is_active_listings_on_front,array_eBay_urls)
{
     var has_paginator = false;
     if($(".pager").length>0)
     {
         var paginator = $(".pager").html();
         paginator = convert_table_to_div_paginator(paginator);
         has_paginator = true;
        /* class_tag = $(".pager .pages").find("a").first().attr("class");
         if(class_tag!="disabled")
         has_paginator = true;   
     else
     var   paginator = ""; */
     }    
     else
     {
        var   paginator = ""; 
     }
     if(front_design_option_is_active_listings_on_front=="ON")
       {
        if(html_collection=='<div id="fpcap" class="fpcc">null</div>')
          open_widget('layout-type-2','<i class="alert-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This page does not exist', "Our Listings");
      else
        open_widget('layout-type-2',html_collection, "Our Listings"); 
        $(".fixed").css("width","100%");
        $(".listing-image").find(".image").css("width","100%");
        $("#v4-6").css("margin","0px");
        if(has_paginator)
        {
           $(".Our-Listings").append(paginator); 
        }
        
       }
       else
       {
           if(array_eBay_urls.indexOf(window.location.href)==(-1))            
             {
               if(html_collection=='<div id="fpcap" class="fpcc">null</div>')
                open_widget('layout-type-2','<i class="alert-icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This page does not exist', "Our Listings");
            else
              open_widget('layout-type-2',html_collection, "Our Listings"); 
                $(".fixed").css("width","100%");
                $(".listing-image").find(".image").css("width","100%");
                $("#v4-6").css("margin","0px");  
                 if(has_paginator)
                 $(".Our-Listings").append(paginator);
             }
       }$("#CentralArea").remove(); 
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
function open_custom_widget(layout_type,widget_var, widget_key)
{
    class_item = widget_key.replace(" ","-");
        $("."+layout_type).append('<div class="widget '+class_item+'">'+widget_var+'</div>');      
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
function convert_table_to_div(table)
{
     table = table.replace("<table","<div class='table' ");
     table = table.replace("</table>","</div> ");
     table = table.replace("<tr","<div class='row' ");
     table = table.replace("</tr>","</div>");
     table = table.replace("<td","<div class='record left' ");
     table = table.replace("</td>","</div>");
     table = table.replace("<tbody>","");
     table = table.replace("</tbody>","");
    return table;
}
function convert_table_to_div_paginator(table)
{ 
    table = table.replace("<td","<div class='record left' ");
    table = table.replace("<tr","<div class='row row-paginator' ");
    table = table.replace("</tr>","</div>");
    table = table.replace("<tbody>","");
    table = table.replace("</td>","</div>");
    table = table.replace('<td class="prev">',"<div class='record left'> ");
    table = table.replace('<td class="pages">',"<div class='record left'> ");
    table = table.replace('<td class="next">',"<div class='record right'> ");
    table = table.replace("</tbody>","");
    return table;
}
function ipad_sizes()
{
           if(body_width<=768 && body_width >=565)
    {
        if(layout_type == 1 || layout_type == 3)
        {
           // alert(body_width)
            $(".container").css("width","100%");
            $(".container").css("padding-left","0px");
            $(".container").css("padding-right","0%");
            $(".col-scontainerm-3").removeClass("hidden-xs");
           
        }
        if(layout_type == 2)
        {
          
            $(".container").css("width","100%");
            $(".container").css("padding-left","0px");
            $(".container").css("padding-right","0%");
            $(".col-sm-3").removeClass("hidden-xs");           
        }
    }
}

function is_page(url,array)
{
    for(var i=0; i<array.length;i++)
    {
        object = array[i];
        url = url.toLowerCase();
        url_compare = object.url;
        url_compare = url_compare.toLowerCase();
        if(url==url_compare)
          return object;
    }
    return false;
}
function show_number_of_listings_requested(front_design_option_number_listings_on_front,array_eBay_urls)
{
   if(array_eBay_urls.indexOf(window.location.href)>(-1)) 
    {
         numListings = $('.gallery').length;
        if(numListings > 0)
        {
            $( "td.gallery" ).each(function( index ) {
             if(index>front_design_option_number_listings_on_front-1)
             {
               $(this).remove(); 
             }
            });
        }
    }
   
}
function is_home()
{
    var array_eBay_urls = new Array();
     array_eBay_urls.push("http://"+window.location.host+"/"+store_name+"/")
     array_eBay_urls.push("http://"+window.location.host+"/"+store_name);
     array_eBay_urls.push(store_url);
    if(array_eBay_urls.indexOf(window.location.href)==(-1)) 
    return false;
    else
    return true;
}

function smoothScrollTop()
{
  jQuery('html,body').animate({scrollTop:'0'},'slow');
}