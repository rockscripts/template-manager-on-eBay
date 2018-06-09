

            include1("store_pages.js"); 
            
            include1("specifics_widgets.js");                          
            if(is_included_widget("advertising","left")||is_included_widget("advertising","center")||is_included_widget("advertising","right"))   
            include1("front_advertisings.js");
            if(is_included_widget("featured listings","left")||is_included_widget("featured listings","center")||is_included_widget("featured listings","right"))
            include1("featured_listing.js");
            if(is_included_widget("tabs","left")||is_included_widget("tabs","center")||is_included_widget("tabs","right"))
            {
            include1("front_tabs_titles.js");
            include1("front_tabs_content.js");
            }
            if(is_included_widget("image & video slider","left")||is_included_widget("image & video slider","center")||is_included_widget("image & video slider","right"))
            {
            include("jquery-ui-1.8.16.custom.min.js");
            include("jquery.prettyLoader.js");  
            include("jquery.prettyPhoto.js");  
            include("jquery.zoomer.js");  
            include("jquery.easing.1.3.js");  
            include1("front_slider.js");   
            }            
            if(is_included_widget("popular categories","left")||is_included_widget("popular categories","center")||is_included_widget("popular categories","right"))
            include1("popular_categories.js");                                 
            if(is_included_widget("custom rich text","left")||is_included_widget("custom rich text","center")||is_included_widget("custom rich text","right"))
            include1("welcome_text.js"); 
            if(is_included_widget("special discounts","left")||is_included_widget("special discounts","center")||is_included_widget("special discounts","right"))
            include1("special_listing.js"); 
            if(is_included_widget("new arrivals","left")||is_included_widget("new arrivals","center")||is_included_widget("new arrivals","right"))
            include1("arrivals_listing.js");
        
            include1("listing_categories.js");  
            include1("social_media.js");
            include("front_custom_js_code.js"); 
            
 function is_included_widget(widget_name,position)        
    {
        var result = false
      if(position=="left")
      {
       if(left_widgets!=false)
        {
         left_widgets.forEach(function(entry)
                {
                    if(widget_name==entry)
                     result = true;
                }); 
        }
                return result;
      }
      if(position=="center")
      {
           if(center_widgets!=false)
        {
       center_widgets.forEach(function(entry)
                {
                    if(widget_name==entry)
                     result = true;
                }); 
        }
                return result;
      }
      if(position=="right")
      {
          if(right_widgets!=false)
        {
       right_widgets.forEach(function(entry)
                {
                    if(widget_name==entry)
                     result = true;
                }); 
        }
                return result;
      }
    }