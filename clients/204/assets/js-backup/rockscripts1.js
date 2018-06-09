            
               loadScript("asyncLoader.min.js",hosting_client+'/assets/js/', function ()                            
    {
      asyncLoader(
            [
                hosting_client+'/assets/css/bootstrap.min.css',
                hosting_client+'/assets/css/listing_custom_css_code.css',
                hosting_client+'/assets/css/general_settings.css', 
                hosting_ajax+'dynamic_scripts_listings.js'
                
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
      