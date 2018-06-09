$(function(){
// styling the link buttons
    $(".pagination a, .banned, .not_banned, .not_active, .is_active").mousedown(function(){
        $(this).css({'box-shadow': '0 0 0 #282828', 'color': '#282828'});
        isMouseDown = true;
        return true;
    }).mouseup(function(){
        $(this).css({'box-shadow': '1px 1px 1px #282828', 'color': '#fff'});
        isMouseDown = false;
        return true;
    }).mouseout(function(){
        $(this).css({'color': '#fff', 'text-shadow': '1px 1px 1px #282828'});
        if (isMouseDown){
            $(this).css({'box-shadow': '1px 1px 1px #282828', 'color': '#fff'});
        }
    }).mouseover(function(){
        $(this).css({'color': '#000', 'text-shadow': '1px 1px 1px #f4f4f4'});
    });

    // remove button styling
    $(document).mouseup(function(){
        isMouseDown = false;
    });

    // submit button styling
    var isMouseDown = false;
    // styling the submit buttons
    $(".input_submit, .input_submit_long").mousedown(function(){
        $(this).css({'box-shadow': '0 0 0 #282828', 'color': '#282828'});
        isMouseDown = true;
        return true;
    }).mouseup(function(){
        $(this).css({'box-shadow': '1px 1px 1px #282828', 'color': '#000', 'text-shadow': 'none'});
        isMouseDown = false;
        return true;
    }).mouseout(function(){
        $(this).css({'box-shadow': '1px 1px 1px #282828', 'border': '1px solid #fff', 'color': '#282828'});
    }).mouseover(function(){
        $(this).css({'color': '#000', 'border': '1px solid #ccc'});
        if (isMouseDown){
            $(this).css({'box-shadow': '0 0 0 #282828', 'color': '#ff0000'});
        }
    });

/* ---------- preset my qtip style ---------- */
    $.fn.qtip.styles.mystyle = { // Last part is the name of the style
       width: 350,
       color: '#f4f4f4',
       background: '#838383',
       fontSize : '12px',
       textAlign: 'left',
       border: {
          width: 2,
          radius: 3,
           color: '#838383'
       },
       lineHeight: "18px",
       tip: 'bottomLeft',
       name: 'dark' // Inherit the rest of the attributes from the preset dark style
    };

    $(".qtip_first_name").qtip({
        content: LANG.first_name_requirements,
        show: 'mouseover',
        hide: 'mouseout',
        style: {
            name: 'mystyle' // Inherit from preset style
        },
        position: {
          corner: {
             target: 'topRight',
             tooltip: 'bottomLeft'
          }
        }
    });

    $(".qtip_last_name").qtip({
        content: LANG.last_name_requirements,
        show: 'mouseover',
        hide: 'mouseout',
        style: {
            name: 'mystyle'
        },
        position: {
          corner: {
             target: 'topRight',
             tooltip: 'bottomLeft'
          }
        }
    });

    $(".qtip_email").qtip({
        content: LANG.email_requirements,
        show: 'mouseover',
        hide: 'mouseout',
        style: {
            name: 'mystyle'
        },
        position: {
          corner: {
             target: 'topRight',
             tooltip: 'bottomLeft'
          }
        }
    });


    $(".qtip_username").qtip({
        content: LANG.username_requirements,
        show: 'mouseover',
        hide: 'mouseout',
        style: {
            name: 'mystyle'
        },
        position: {
          corner: {
             target: 'topRight',
             tooltip: 'bottomLeft'
          }
        }
    });

    $(".qtip_password").qtip({
        content: LANG.password_requirements,
        show: 'mouseover',
        hide: 'mouseout',
        style: {
            name: 'mystyle'
        },
        position: {
          corner: {
             target: 'topRight',
             tooltip: 'bottomLeft'
          }
        }
    });
        

});