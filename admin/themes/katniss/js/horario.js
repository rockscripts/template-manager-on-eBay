/*

 * 	Additional function for wysiwyg.html

 *	Written by ThemePixels	

 *	http://themepixels.com/

 *

 *	Built for Katniss Premium Responsive Admin Template

 *  http://themeforest.net/category/site-templates/admin-templates

 */



	jQuery(document).ready(function()  
{
  jQuery(".close-dialog1").click(function()
  {
    jQuery("#myModal_point").addClass("hide") ;
    ajax_unset_session_delimitaciones();
  })   
  jQuery(".button_next").click(function()
  {
    jQuery(".button_previous").removeClass("hide");
   
  }) ;
  jQuery(".wizard_save_assign_tasks").click(function()
  {
    /*save task assigned for horario into database*/
    save_point_to_calendar();
    jQuery("#myModal_point").addClass("hide")
    ajax_unset_session_delimitaciones();  
    
    
  }) ;
  
       
});
function save_point_to_calendar()
{
   start = jQuery("#start_horario").val();
        end = jQuery("#end_horario").val();
        allday = jQuery("#allday_horario").val();    
   base_url = jQuery("#base_url").val();
     jQuery.ajax({

      url: base_url+"index.php?/horario/guardar_tareas_asignadas",
      async: false,
      type: "POST", 
       data:{"start":start,"end":end,"allday":allday} ,    
      dataType: "json",
      success: function(data) 
      { 
          alert("Las Delimitaciones han sido agregadas al sistema.") ;   
      }

    })
     
}
function add_hide_field(content_id, id, value)
{
  
   jQuery('<input>').attr({
    type: 'hidden',
    id: id,  
    name: id,
    value: value
}).appendTo(content_id);   
} 
function ajax_load_one_course_data(course_id,trimestres,course_name,c_name)
{
    var result = "";
   base_url = jQuery("#base_url").val();
     jQuery.ajax({

      url: base_url+"index.php?/horario/ajax_load_curso_data",
      async: false,
      type: "POST",    
      data:{"course_id":course_id,"trimestres":trimestres,"course_name":course_name,"c_name":c_name} ,  
      dataType: "json",
      success: function(data) 
      { 
       result = data.html;         
      }

    })
    return result;    
}  
function  clean_hidden_field(id)
{
 jQuery(id).remove();  
}
function ajax_load_courses()
{
     base_url = jQuery("#base_url").val();
     jQuery.ajax({

      url: base_url+"index.php?/cursos/ajax_wizard_asignar_programacion",
      async: false,
      type: "POST",       
      dataType: "html",
      success: function(data) { 
       jQuery(".modal-body").html(data); 
        
      }

    })
}
function one_course_full_with()
{
    jQuery("#myModal_point").css("height","100%");
    jQuery("#myModal_point").css("left","28%");
    jQuery("#myModal_point").css("top","255px");
    jQuery("#myModal_point").css("width","99%");
    
}

function ajax_delete_delimitacion_from_system(id)
{
  base_url = jQuery("#base_url").val();
  var result = "";
 jQuery.ajax({
            url: base_url+"index.php?/horario/ajax_delete_delimitacion_from_system",
            async: false,
            type: "POST", 
            data: {'id':id}, 
            dataType: "json", 
            success: function(response) 
            {
                /*alert("#resultados_aprendizaje_view_for_competencias_"+id_competencia)
                jQuery("#resultados_aprendizaje_view_for_competencias_"+id_competencia).html(response.html_load_resultados_aprendizaje);*/
                result = response;
                //alert(response.html_load_resultados_aprendizaje)
            }
        });
        return result;    
}

function ajax_load_tareas_de_actividad_h(id_actividad,id_course,trimestre)
{
  base_url = jQuery("#base_url").val();
  var result = "";
 jQuery.ajax({
            url: base_url+"index.php?/cursos/ajax_load_tareas_de_actividades",
            async: false,
            type: "POST", 
            data: {'course_id':id_course,'id_actividad':id_actividad,"trimestre":trimestre},
            dataType: "json", 
            success: function(response) 
            {
                /*alert("#resultados_aprendizaje_view_for_competencias_"+id_competencia)
                jQuery("#resultados_aprendizaje_view_for_competencias_"+id_competencia).html(response.html_load_resultados_aprendizaje);*/
                result = response;
                //alert(response.html_load_resultados_aprendizaje)
            }
        });
        return result;  
}
function ajax_load_delimitaciones_de_tarea_horario(id_tarea,id_course,trimestre,id_actividad,duracion)
{
  base_url = jQuery("#base_url").val();
  user_id = jQuery("#user_id_selected").val();
    //alert(base_url);
var result= "";
    jQuery.ajax({

      url: base_url+"index.php?/cursos/ajax_load_delimitaciones_de_tarea_horario",

      async: false,

      type: "POST",

      data: {'course_id':id_course,'id_tarea':id_tarea,"trimestre":trimestre,'id_actividad':id_actividad,"duracion":duracion,"user_id":user_id},

      dataType: "json",

      success: function(response) 

      {

        //alert(data)

        

         result = response;

        

         

      }

        });
        return result;  
}
function ajax_add_session(course_id,id_actividad,id_tarea,delimitacion_id,duracion,trimestre)
{
 base_url = jQuery("#base_url").val();
  user_id = jQuery("#user_id_selected").val();
    //alert(base_url);

    jQuery.ajax({

      url: base_url+"index.php?/horario/ajax_add_session",

      async: false,

      type: "POST",

      data: {'course_id':course_id, 'id_actividad':id_actividad,'id_tarea':id_tarea, 'delimitacion_id':delimitacion_id,'duracion':duracion,'trimestre':trimestre,'user_id':user_id},

      dataType: "json",

      success: function(response) 

      {

        //alert(data)

        

        

        

         

      }

        });
   

}
function ajax_unset_session_delimitaciones()
{
 base_url = jQuery("#base_url").val();
    //alert(base_url);

    jQuery.ajax({

      url: base_url+"index.php?/horario/ajax_delete_session_delimitaciones",

      async: false,

      type: "POST",

      

      dataType: "json",

      success: function(data)   

      {  
       
      }

    })    
}
function ajax_delete_session(course_id,id_actividad,id_tarea,delimitacion_id,duracion,trimestre)

{

   base_url = jQuery("#base_url").val();
   user_id = jQuery("#user_id_selected").val();
    //alert(base_url);

    jQuery.ajax({

      url: base_url+"index.php?/horario/ajax_delete_session",

      async: false,

      type: "POST",

      data: {'course_id':course_id, 'id_actividad':id_actividad,'id_tarea':id_tarea, 'delimitacion_id':delimitacion_id,'duracion':duracion,'trimestre':trimestre,'user_id':user_id}, 

      dataType: "json",

      success: function(data)   

      {  
       
      }

    }) 

}
function get_all_delimitation(course_id, id_actividad,id_tarea,trimestre)
{
  base_url = jQuery("#base_url").val();
   user_id = jQuery("#user_id_selected").val();
    //alert(base_url);

    jQuery.ajax({

      url: base_url+"index.php?/horario/ajax_load_delimitation_to_horario",

      async: false,

      type: "POST",

      data: {'course_id':course_id, 'id_actividad':id_actividad,'id_tarea':id_tarea,'trimestre':trimestre}, 

      dataType: "json",

      success: function(data)   

      {  
       alert(data);
      }

    })   
}