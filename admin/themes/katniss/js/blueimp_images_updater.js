function blueimp_remove_image(src,type)
{
 jQuery(".loader-image").fadeIn();
 var result = "";
 base_url = "http://"+window.location.hostname+"/";
  jQuery.ajax({
   url: base_url+"store_design/validate/blueimp_remove_image",
   async: true,
   type: "POST",  
   data: {"src":src,"type":type},
   dataType: "json"
 });
}