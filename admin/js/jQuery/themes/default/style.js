$(function(){
/* ---------- preset my qtip style ---------- */
    $.fn.qtip.styles.mystyle = { // Last part is the name of the style
       width: 350,
       color: '#fff',
       background: '#000',
       fontSize : '12px',
       textAlign: 'left',
       border: {
          width: 2,
          radius: 3,
           color: '#000'
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
    
});