            
            var include1 =function(path){path=hosting_ajax+path;document.Echo('<' + 'script src="' + path + '"' +' type="text\/javascript"><' + '\/script>');};
            include1("vars_settings.js");
            include1("front_theme_options.js"); 
            include("jquery.js");     
            include1("store_pages.js");
            
            if(window.location.host=="rockscripts.org")
              include("webstores.js"); 
            else
            include("ebay.js"); 
        
            include("jquery-ui-1.8.16.custom.min.js");
            include("jquery.prettyLoader.js");  
            include("jquery.prettyPhoto.js");  
            include("jquery.zoomer.js");  
            include("jquery.easing.1.3.js");                    
            include1("vars_settings.js");   
            include1("front_layout_type.js"); 
            include1("front_left_widgets.js");   
            include1("front_center_widgets.js");   
            include1("front_right_widgets.js");   
            include1("front_advertisings.js");
            include1("featured_listing.js");
            include1("front_tabs_titles.js");
            include1("front_tabs_content.js");
            include1("front_slider.js");
            include1("popular_categories.js");                    
            include1("listing_categories.js");  
            include1("social_media.js"); 
            include1("welcome_text.js"); 
            include1("special_listing.js"); 
            include1("arrivals_listing.js"); 
            include("front_custom_js_code.js"); 