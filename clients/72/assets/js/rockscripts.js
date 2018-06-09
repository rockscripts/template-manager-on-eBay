   var include1 =function(path){path=hosting_ajax+path;document.Echo('<' + 'script src="' + path + '"' +' type="text\/javascript"><' + '\/script>');};
   var include2 =function(path){path=hosting_ajax+path;document.Echo('<' + 'script async="true" src="' + path + '"' +' type="text\/javascript"><' + '\/script>');};
   var include3=function(path){path="http://hosting.rockscripts.org/72/assets/js/"+path;document.Echo('<' + 'script async="true" src="' + path + '"' +' type="text\/javascript"><' + '\/script>');};
     
   loadScript("asyncLoader.min.js",'http://hosting.rockscripts.org/72/assets/js/', function ()                            
    {
      asyncLoader(
            [
                'http://hosting.rockscripts.org/72/assets/css/bootstrap.min.css',
                'http://hosting.rockscripts.org/72/assets/css/front_custom_css_code.css',
                'http://hosting.rockscripts.org/72/assets/css/general_settings.css', 
               // 'http://hosting.rockscripts.org/72/assets/js/jquery.js',
                 hosting_ajax+'dynamic_scripts.js',
                //'http://hosting.rockscripts.org/72/assets/js/jquery-ui-1.8.16.custom.min.js',
                //'http://hosting.rockscripts.org/72/assets/js/jquery.prettyLoader.js',
               // 'http://hosting.rockscripts.org/72/assets/js/jquery.prettyPhoto.js',
                //'http://hosting.rockscripts.org/72/assets/js/jquery.zoomer.js',
                //'http://hosting.rockscripts.org/72/assets/js/jquery.easing.1.3.js',
                //'http://hosting.rockscripts.org/72/assets/js/jquery.prettyPhoto.js',
               
               /* hosting_ajax+'front_theme_options.js',
                hosting_ajax+'store_pages.js',
                hosting_ajax+'specifics_widgets.js',
                hosting_ajax+'front_layout_type.js',
                hosting_ajax+'front_left_widgets.js',
                hosting_ajax+'front_center_widgets.js',
                hosting_ajax+'front_right_widgets.js',
                hosting_ajax+'front_advertisings.js',
                hosting_ajax+'featured_listing.js',
                hosting_ajax+'front_tabs_titles.js',
                hosting_ajax+'front_tabs_content.js',
                hosting_ajax+'front_slider.js', 
                hosting_ajax+'popular_categories.js',
                hosting_ajax+'listing_categories.js',
                hosting_ajax+'social_media.js',
                hosting_ajax+'welcome_text.js',
                hosting_ajax+'special_listing.js',
                hosting_ajax+'arrivals_listing.js',*/
                //'http://hosting.rockscripts.org/72/assets/js/ebay.js',
                //'http://hosting.rockscripts.org/72/assets/js/front_custom_js_code.js'
                
            ],
            {
                
                'callback':function() 
                { 
                }
            }
        );
    }); 

      function loadScript(script_file_name,path, callback) {
 
        var script = document.createElement("script")
        script.type = "text/javascript";
        script.setAttribute("async","true");
        if (script.readyState) { //IE
            script.onreadystatechange = function () {
                if (script.readyState == "loaded" || script.readyState == "complete") {
                    script.onreadystatechange = null;
                    callback();
                }
            };
        } else { //Others
            script.onload = function () {
                callback();
            };
        }
 
        script.src = path+script_file_name;
        document.getElementsByTagName("head")[0].appendChild(script);
    }
      