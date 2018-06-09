// Original design work, including graphics and all related scripts, Copyright (c) OCDesignsOnline.com.au, All Rights Reserved. Used with permission by Body Art Jewellery Store.
 $("body").append('<div class="loader-image"></div>');
$(".loader-image").fadeIn();
jQuery(function($)
{
    
    $(".pagecontainer > table:eq(1) tr:first td:first").addClass("background-main");
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
         $(".layout-type-2 .Popular-categories .rc-box").css("width","32%");
         /*buld central area*/
     
         html_collection = '<div id="fpcap" class="fpcc">'+$("#fpcap").html()+'</div>';
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
          html_collection =html_collection.concat('<div class="left listing-box fade-products" ><div class="listing-details"><div class="listing-image">'+picture+'</div><div class="details-inner">'+details+'</div></div></div>');  
        //  alert(details)
      });
      }
     
          
          
      open_widget('layout-type-2',html_collection, "Our Listings"); 
      $(".fixed").css("width","100%");
      $(".listing-image").find(".image").css("width","100%");
      $("#v4-6").css("margin","0px");
      $("#CentralArea").remove();
      
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
          $(".col-sm-6").css("width","54.4%");
          $(".container").css("padding-left","0%");
          $(".container").css("padding-right","0%");
          /*Load center Area if have thre columns*/
         body_width = $("body").width();
               
         html_collection = '<div id="fpcap" class="fpcc">'+$("#fpcap").html()+'</div>';
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
      open_widget('layout-type-2',html_collection, "Our Listings"); 
      $("#CentralArea").remove();
      $(".grid").find(".gallery:eq(2)").css("width","49%");
      
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
          /*fix widths*/
          $(".layout-type-1").remove();
        $(".col-sm-6").css("width","77%");
          $(".col-sm-6").css("margin-left","0px");
         $(".col-sm-3").css("width","22%");
         $(".layout-type-2 #v4-17").css("width","98%");
         $(".layout-type-2 div.v4stabl").css("width","102%");
         
         html_collection = '<div id="fpcap" class="fpcc">'+$("#fpcap").html()+'</div>';
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
      open_widget('layout-type-2',html_collection, "Our Listings"); 
      $(".listing-image").find(".image").css("width","100%");
      $("#v4-6").css("margin","0px");
      $("#CentralArea").remove();
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
   jQuery(".tab_content").first().css("display","block");
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
     $(".layout-type-2 .Popular-categories .rc-box").css("width","32%");     
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
          
     }
     
   $(".loader-image").fadeOut();
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
  });
 
function widgets_compare(layout_type,widget_key,widget_title)
{
   
  if(widget_key == "advertising")
       open_widget(layout_type,front_advertisings, false);  
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
    if(widget_title == "Shop Categories")
    {
         class_item = widget_title.replace(" ","-");
         $("."+layout_type).append('<div class="vTitle '+class_item+'-title">'+widget_title+'</div><div class="widget visible-xs '+class_item+'">'+widget_var+'</div>');    
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
            $(".col-sm-3").removeClass("hidden-xs");
           
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
