$(function(){
/* ---------- preset my qtip style ---------- */
    $.fn.qtip.styles.mystyle = { // Last part is the name of the style
       width: 400,
       color: '#f04848',
       background: '#282828',
       fontSize : '10px',
       textAlign: 'left',
       border: {
          width: 2,
          radius: 3
       },
       lineHeight: "20px",
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

    /* ---------- Styling ---------- */
    var isMouseDown = false;
    // styling the submit buttons
    $(".input_submit, .input_submit_long").mousedown(function(){
        $(this).css({'box-shadow': '0 0 0 #F8504A', 'color': '#282828'});
        isMouseDown = true;
        return true;
    }).mouseup(function(){
        $(this).css({'box-shadow': '1px 1px 1px #F8504A', 'color': '#000', 'text-shadow': 'none'});
        isMouseDown = false;
        return true;
    }).mouseout(function(){
        $(this).css({'box-shadow': '1px 1px 1px #F8504A'});
        $(this).css({'color': '#000', 'text-shadow': 'none'});
    }).mouseover(function(){
        $(this).css({'color': '#ff0000', 'text-shadow': '#86859b 0 0 3px'});
        if (isMouseDown){
            $(this).css({'box-shadow': '0 0 0 #F8504A', 'color': '#ff0000'});
        }
    });

    // styling the link buttons
    $(".pagination a, .promote, .demote, .banned, .not_banned, .not_active, .is_active").mousedown(function(){
        $(this).css({'box-shadow': '0 0 0 #F8504A', 'color': '#282828'});
        isMouseDown = true;
        return true;
    }).mouseup(function(){
        $(this).css({'box-shadow': '1px 1px 1px #F8504A', 'color': '#000'});
        isMouseDown = false;
        return true;
    }).mouseout(function(){
        $(this).css({'color': '#000', 'text-shadow': 'none'});
        if (isMouseDown){
            $(this).css({'box-shadow': '1px 1px 1px #F8504A', 'color': '#000'});
        }
    }).mouseover(function(){
        $(this).css({'color': '#fff', 'text-shadow': '#86859b 0 0 3px'});
    });

    // remove button styling
    $(document).mouseup(function(){
        isMouseDown = false;
    });

});