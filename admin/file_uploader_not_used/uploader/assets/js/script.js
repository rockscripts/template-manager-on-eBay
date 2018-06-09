var ajaxUrl = 'uploader/ajax.php';
var assetsUrl = 'uploader/assets/';

$(function () {
    var object_id = $('#object_id').val(),
        user_id = $('#user_id').val(),
        type_id = $('#type_id').val();

    //Upload
    $('#fileupload').fileupload({
        url: ajaxUrl + '?action=upload&object_id='+object_id+'&user_id='+user_id+'&type_id='+type_id,
        fileInput: '#fileupload [type="file"]',
        autoUpload: true,
        previewCrop: true,
        filesContainer: '.files.images',
        always: function (e, data) {
            if (data.jqXHR.responseText == 'limit') {
                $('.fileinput-button, .webcam-snap').addClass('disabled');
                $('.alert.upload-max').show();
                setTimeout(function(){ $('.files .label-danger').parent().remove() }, 500);
                jqXHR.abort();
            }
        },
        completed: function (e, data)  {
            if (!$(data.context[0]).hasClass('image'))
                $('.files.attachments').append(data.context[0]);
        }
    });
    
    //Load existing images
    $('#fileupload').addClass('fileupload-processing');
    $.ajax({
        url: ajaxUrl + '?action=load&object_id='+object_id,
        dataType: 'json',
        context: $('#fileupload')[0]
    }).always(function () {
        $(this).removeClass('fileupload-processing');
    }).done(function (result) {
        var images = {},  attachments = {}, k =0, j = 0;

        if (result.files.length) {
            for (i in result.files)
                if (result.files[i].image)
                    images[k++] = result.files[i];
                else 
                    attachments[j++] = result.files[i];

            $('.files.images').html( tmpl('template-download', {files: images}) );
            $('.files.attachments').html( tmpl('template-download', {files: attachments}) );

            $(this).find('li.fade').addClass('in');
        }
    });

    $.get(ajaxUrl,{action:'check-limit', object_id: object_id}, function(data){
        if (data == 'limit') 
            $('.fileinput-button, .webcam-snap').addClass('disabled');
    });

    //Delete file
    $('.files').on('click', '.delete-file', function () {
        var item = $(this).closest('.template-download');
        $.post(ajaxUrl, {action: 'delete', file: item.attr('data-file'), image: item.hasClass('image') ? 1 : 0 });
        item.remove();
        $('.fileinput-button, .webcam-snap').removeClass('disabled');
        $('.alert.upload-max').hide();
    });

    //Delete all files
    $('.delete-all').on('click', function () {
        if (confirm("You are about to permanently delete all images.\n  'Cancel' to stop, 'OK' to delete.")) {
            $.post(ajaxUrl, {action: 'delete-all', object_id: object_id});
            $('.files li').remove();
            $('.fileinput-button, .webcam-snap').removeClass('disabled');
            $('.alert.upload-max').hide();
        }
    });

    //Edit file
    $('.files').on('click', '.edit-file', function() {
        var modal = $('#editModal'),
            title = $(this).closest('.template-download').find('.preview').attr('title'),
            descr = $(this).closest('.template-download').find('.description').html(),
            id    =  $(this).closest('.template-download').attr('id').replace('sort_', '');

        modal.find('#title').val( title );
        modal.find('#description').val( descr );
        modal.find('#file_id').val( id );
        modal.modal('show');
    });
    $('#editModal .save').on('click', function(){
        var modal = $('#editModal'),
            title = modal.find('#title').val(),
            descr = modal.find('#description').val(),
            id    = modal.find('#file_id').val(),
            li    = $('.files #sort_'+id);

        $.post(ajaxUrl, {action: 'save-info', title: title, description: descr, id: id});
        if (li.hasClass('image'))
            li.find('.preview a').attr('title', title);
        li.find('.preview').attr('title', title);
        
        li.find('.description').html(descr);
        modal.modal('hide');
    });
    //end edit

    //Crop thumbnail
    $('.files.images').on('click', '.crop-image', function() {
        var modal = $('#cropModal'),
            file  = $(this).closest('.template-download').attr('data-file'),
            url   = $(this).attr('data-url');

        $('#crop').html( $('<img />', {'src': url, 'data-file': file, 'data-width': $(this).attr('data-width'), 'data-height': $(this).attr('data-height')}) );
        modal.modal('show');
    });
    $('#cropModal').on('shown.bs.modal', function() {
        imgSelect.setSelection();
    }).on('hide.bs.modal', function(){
         imgSelect.removeSelection();
    });
    $('#cropModal .save').on('click', function() {
        imgSelect.save();
    });
    //end crop

    //Webcam snap
    $('.webcam-snap').on('click', function(){
        $('#webcamModal').modal('show');
    });
    $('#webcamModal').on('shown.bs.modal', function() {
        imgSelect.webcam();
    }).on('hide.bs.modal', function(){
        $('#webcamModal .new, #webcamModal .save').hide();
        $('#webcamModal .cancel, #webcamModal .capture').show();
    });
    $('#webcamModal .save').on('click', function() {
        $(this).prop('disabled', true);
        var image = $('#webcam-image').val();
        $.post(ajaxUrl,{action:'save-snapshot', image: image, object_id: object_id, user_id: user_id}, function(data) {
            if (data.limit) {
                $('.fileinput-button, .webcam-snap').addClass('disabled');
                $('.alert.upload-max').show();
                $('#webcamModal').modal('hide');
                return false;
            }
            var li = tmpl('template-download', data);
            $('.files.images').append(li);
            $('.files #sort_'+data.files[0]['id']).removeClass('fade');
            $('#webcamModal .save').prop('disabled', false);
            $('#webcamModal').modal('hide');
        },'json');
    });
    //end webcam

    //Sortable files
    $('.files.images').sortable({
        placeholder: "ui-state-highlight",
        update: function( event, ui ) {
            var order = $('.files.images').sortable('serialize');
            $.post(ajaxUrl, {action:'sort', order: order});
        }
    }).disableSelection();

    //Sortable files
    $('.files.attachments').sortable({
        placeholder: "ui-state-highlight",
        update: function( event, ui ) {
            var order = $('.files.attachments').sortable('serialize');
            $.post(ajaxUrl, {action:'sort', order: order});
        }
    }).disableSelection();

    $('[data-dismiss="alert"]').on('click', function() {
        $(this).parent().hide();
    });

});

function show_uploader() {
    $('#uploadModal').modal('show');
}

var imgSelect = {
    webcamSnap: function () {
        $('#webcamModal .loading').css('display', 'inline-block');
        webcam.snap()
    },
    webcam: function () {
        $('#webcamModal .new, #webcamModal .save').hide();
        $('#webcamModal .cancel, #webcamModal .capture').show();

        webcam.set_api_url(ajaxUrl);
        webcam.set_swf_url(assetsUrl+'webcam.swf');
        webcam.set_shutter_sound(false);
        webcam.set_quality(90);
        $('#webcamModal .modal-body').html( webcam.get_html(540, 400) );

        webcam.set_hook( 'onComplete', function(data) {
            data = jQuery.parseJSON(data);
            if (data.files && data.files[0].name) {
                $('#webcam-image').val(data.files[0].name);
                $('#webcamModal .loading').hide();
                $('#webcamModal .new, #webcamModal .save').show();
                $('#webcamModal .cancel, #webcamModal .capture').hide();
            }
            else {
               imgSelect.webcam();
               alert.text('Webcam Error. Try again.');
            }
        });
    },
    updateSelection: function(img, selection) {
        $('#x1').val(selection.x1);
        $('#y1').val(selection.y1);
        $('#w').val(selection.width);
        $('#h').val(selection.height);
    },
    removeSelection: function () {
        $('#crop img').imgAreaSelect({remove: true});
    },
    setSelection: function(img) {
        $('#crop img').imgAreaSelect({
            aspectRatio: '1:1',
            onSelectChange: imgSelect.updateSelection,
            imageWidth: $('#crop img').attr('data-width'),
            imageHeight: $('#crop img').attr('data-height'),
        });
        $('[class^="imgareaselect-"]').css('z-index', 2040);
    },
    save: function() {
        var img = $('#crop img');
            loading = $('#cropModal .loading');
        if (img.length) {
            var x1 = $('#x1').val(),
                y1 = $('#y1').val(),
                w  = $('#w').val(),
                h  = $('#h').val();
            
            if (!w || !h)
                $('#cropModal').modal('hide');
            else
                $.ajax({
                    url: ajaxUrl,
                    type: 'POST',
                    dataType: 'json',
                    data: {action:'crop-thumbnail', image: img.attr('data-file'), 'x1': x1, 'y1': y1, 'w': w, 'h': h},
                    beforeSend: function() {
                        loading.css('display', 'inline-block');
                        $('#cropModal .save').prop('disabled', true);
                    },
                    success: function(data) {
                        $('.files.images [data-file="'+img.attr('data-file')+'"] .preview img').attr('src', data.image);
                        $('#cropModal').modal('hide');
                    },
                    complete: function() { $('#cropModal .save').prop('disabled', false); loading.hide(); },
                    error: function() { alert('Ajax Error') }
                });
        }
    },

};

//Bootstrap moodal+transition
+function(e){"use strict";var t=function(t,n){this.options=n;this.$element=e(t);this.$backdrop=this.isShown=null;if(this.options.remote)this.$element.load(this.options.remote)};t.DEFAULTS={backdrop:true,keyboard:true,show:true};t.prototype.toggle=function(e){return this[!this.isShown?"show":"hide"](e)};t.prototype.show=function(t){var n=this;var r=e.Event("show.bs.modal",{relatedTarget:t});this.$element.trigger(r);if(this.isShown||r.isDefaultPrevented())return;this.isShown=true;this.escape();this.$element.on("click.dismiss.modal",'[data-dismiss="modal"]',e.proxy(this.hide,this));this.backdrop(function(){var r=e.support.transition&&n.$element.hasClass("fade");if(!n.$element.parent().length){n.$element.appendTo(document.body)}n.$element.show();if(r){n.$element[0].offsetWidth}n.$element.addClass("in").attr("aria-hidden",false);n.enforceFocus();var i=e.Event("shown.bs.modal",{relatedTarget:t});r?n.$element.find(".modal-dialog").one(e.support.transition.end,function(){n.$element.focus().trigger(i)}).emulateTransitionEnd(300):n.$element.focus().trigger(i)})};t.prototype.hide=function(t){if(t)t.preventDefault();t=e.Event("hide.bs.modal");this.$element.trigger(t);if(!this.isShown||t.isDefaultPrevented())return;this.isShown=false;this.escape();e(document).off("focusin.bs.modal");this.$element.removeClass("in").attr("aria-hidden",true).off("click.dismiss.modal");e.support.transition&&this.$element.hasClass("fade")?this.$element.one(e.support.transition.end,e.proxy(this.hideModal,this)).emulateTransitionEnd(300):this.hideModal()};t.prototype.enforceFocus=function(){e(document).off("focusin.bs.modal").on("focusin.bs.modal",e.proxy(function(e){if(this.$element[0]!==e.target&&!this.$element.has(e.target).length){this.$element.focus()}},this))};t.prototype.escape=function(){if(this.isShown&&this.options.keyboard){this.$element.on("keyup.dismiss.bs.modal",e.proxy(function(e){e.which==27&&this.hide()},this))}else if(!this.isShown){this.$element.off("keyup.dismiss.bs.modal")}};t.prototype.hideModal=function(){var e=this;this.$element.hide();this.backdrop(function(){e.removeBackdrop();e.$element.trigger("hidden.bs.modal")})};t.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove();this.$backdrop=null};t.prototype.backdrop=function(t){var n=this;var r=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var i=e.support.transition&&r;this.$backdrop=e('<div class="modal-backdrop '+r+'" />').appendTo(document.body);this.$element.on("click.dismiss.modal",e.proxy(function(e){if(e.target!==e.currentTarget)return;this.options.backdrop=="static"?this.$element[0].focus.call(this.$element[0]):this.hide.call(this)},this));if(i)this.$backdrop[0].offsetWidth;this.$backdrop.addClass("in");if(!t)return;i?this.$backdrop.one(e.support.transition.end,t).emulateTransitionEnd(150):t()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");e.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one(e.support.transition.end,t).emulateTransitionEnd(150):t()}else if(t){t()}};var n=e.fn.modal;e.fn.modal=function(n,r){return this.each(function(){var i=e(this);var s=i.data("bs.modal");var o=e.extend({},t.DEFAULTS,i.data(),typeof n=="object"&&n);if(!s)i.data("bs.modal",s=new t(this,o));if(typeof n=="string")s[n](r);else if(o.show)s.show(r)})};e.fn.modal.Constructor=t;e.fn.modal.noConflict=function(){e.fn.modal=n;return this};e(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(t){var n=e(this);var r=n.attr("href");var i=e(n.attr("data-target")||r&&r.replace(/.*(?=#[^\s]+$)/,""));var s=i.data("modal")?"toggle":e.extend({remote:!/#/.test(r)&&r},i.data(),n.data());t.preventDefault();i.modal(s,this).one("hide",function(){n.is(":visible")&&n.focus()})});e(document).on("show.bs.modal",".modal",function(){e(document.body).addClass("modal-open")}).on("hidden.bs.modal",".modal",function(){e(document.body).removeClass("modal-open")})}(window.jQuery)+function(e){"use strict";function t(){var e=document.createElement("bootstrap");var t={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var n in t){if(e.style[n]!==undefined){return{end:t[n]}}}}e.fn.emulateTransitionEnd=function(t){var n=false,r=this;e(this).one(e.support.transition.end,function(){n=true});var i=function(){if(!n)e(r).trigger(e.support.transition.end)};setTimeout(i,t);return this};e(function(){e.support.transition=t()})}(window.jQuery);

//imgAreaSelect
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(m($){18 W=2v.4T,D=2v.4S,F=2v.4R,u=2v.4Q;m V(){C $("<4P/>")};$.N=m(T,c){18 O=$(T),1F,A=V(),1k=V(),I=V().r(V()).r(V()).r(V()),B=V().r(V()).r(V()).r(V()),E=$([]),1K,G,l,17={v:0,l:0},Q,M,1l,1g={v:0,l:0},12=0,1J="1H",2k,2j,1t,1s,S,1B,1A,2o,2n,14,1Q,a,b,j,g,f={a:0,b:0,j:0,g:0,H:0,L:0},2u=R.4O,1M=4N.4M,$p,d,i,o,w,h,2p;m 1n(x){C x+17.v-1g.v};m 1m(y){C y+17.l-1g.l};m 1b(x){C x-17.v+1g.v};m 1a(y){C y-17.l+1g.l};m 1z(3J){C 3J.4L-1g.v};m 1y(3I){C 3I.4K-1g.l};m 13(32){18 1i=32||1t,1h=32||1s;C{a:u(f.a*1i),b:u(f.b*1h),j:u(f.j*1i),g:u(f.g*1h),H:u(f.j*1i)-u(f.a*1i),L:u(f.g*1h)-u(f.b*1h)}};m 23(a,b,j,g,31){18 1i=31||1t,1h=31||1s;f={a:u(a/1i||0),b:u(b/1h||0),j:u(j/1i||0),g:u(g/1h||0)};f.H=f.j-f.a;f.L=f.g-f.b};m 1f(){9(!1F||!O.H()){C}17={v:u(O.2t().v),l:u(O.2t().l)};Q=O.2Y();M=O.3H();17.l+=(O.30()-M)>>1;17.v+=(O.2q()-Q)>>1;1B=u(c.4J/1t)||0;1A=u(c.4I/1s)||0;2o=u(F(c.4H/1t||1<<24,Q));2n=u(F(c.4G/1s||1<<24,M));9($().4F=="1.3.2"&&1J=="21"&&!2u["4E"]){17.l+=D(R.1q.2r,2u.2r);17.v+=D(R.1q.2s,2u.2s)}1g=/1H|4D/.1c(1l.q("1p"))?{v:u(1l.2t().v)-1l.2s(),l:u(1l.2t().l)-1l.2r()}:1J=="21"?{v:$(R).2s(),l:$(R).2r()}:{v:0,l:0};G=1n(0);l=1m(0);9(f.j>Q||f.g>M){1U()}};m 1V(3F){9(!1Q){C}A.q({v:1n(f.a),l:1m(f.b)}).r(1k).H(w=f.H).L(h=f.L);1k.r(I).r(E).q({v:0,l:0});I.H(D(w-I.2q()+I.2Y(),0)).L(D(h-I.30()+I.3H(),0));$(B[0]).q({v:G,l:l,H:f.a,L:M});$(B[1]).q({v:G+f.a,l:l,H:w,L:f.b});$(B[2]).q({v:G+f.j,l:l,H:Q-f.j,L:M});$(B[3]).q({v:G+f.a,l:l+f.g,H:w,L:M-f.g});w-=E.2q();h-=E.30();2O(E.3f){15 8:$(E[4]).q({v:w>>1});$(E[5]).q({v:w,l:h>>1});$(E[6]).q({v:w>>1,l:h});$(E[7]).q({l:h>>1});15 4:E.3G(1,3).q({v:w});E.3G(2,4).q({l:h})}9(3F!==Y){9($.N.2Z!=2R){$(R).U($.N.2z,$.N.2Z)}9(c.1T){$(R)[$.N.2z]($.N.2Z=2R)}}9(1j&&I.2q()-I.2Y()==2){I.q("3E",0);3x(m(){I.q("3E","4C")},0)}};m 22(3D){1f();1V(3D);a=1n(f.a);b=1m(f.b);j=1n(f.j);g=1m(f.g)};m 27(2X,2w){c.1P?2X.4B(c.1P,2w):2X.1r()};m 1d(2W){18 x=1b(1z(2W))-f.a,y=1a(1y(2W))-f.b;9(!2p){1f();2p=11;A.1G("4A",m(){2p=Y})}S="";9(c.2D){9(y<=c.1W){S="n"}X{9(y>=f.L-c.1W){S="s"}}9(x<=c.1W){S+="w"}X{9(x>=f.H-c.1W){S+="e"}}}A.q("2V",S?S+"-19":c.26?"4z":"");9(1K){1K.4y()}};m 2S(4x){$("1q").q("2V","");9(c.4w||f.H*f.L==0){27(A.r(B),m(){$(J).1r()})}$(R).U("P",2l);A.P(1d);c.2f(T,13())};m 2C(1X){9(1X.3z!=1){C Y}1f();9(S){$("1q").q("2V",S+"-19");a=1n(f[/w/.1c(S)?"j":"a"]);b=1m(f[/n/.1c(S)?"g":"b"]);$(R).P(2l).1G("1x",2S);A.U("P",1d)}X{9(c.26){2k=G+f.a-1z(1X);2j=l+f.b-1y(1X);A.U("P",1d);$(R).P(2T).1G("1x",m(){c.2f(T,13());$(R).U("P",2T);A.P(1d)})}X{O.1O(1X)}}C Y};m 1w(3C){9(14){9(3C){j=D(G,F(G+Q,a+W(g-b)*14*(j>a||-1)));g=u(D(l,F(l+M,b+W(j-a)/14*(g>b||-1))));j=u(j)}X{g=D(l,F(l+M,b+W(j-a)/14*(g>b||-1)));j=u(D(G,F(G+Q,a+W(g-b)*14*(j>a||-1))));g=u(g)}}};m 1U(){a=F(a,G+Q);b=F(b,l+M);9(W(j-a)<1B){j=a-1B*(j<a||-1);9(j<G){a=G+1B}X{9(j>G+Q){a=G+Q-1B}}}9(W(g-b)<1A){g=b-1A*(g<b||-1);9(g<l){b=l+1A}X{9(g>l+M){b=l+M-1A}}}j=D(G,F(j,G+Q));g=D(l,F(g,l+M));1w(W(j-a)<W(g-b)*14);9(W(j-a)>2o){j=a-2o*(j<a||-1);1w()}9(W(g-b)>2n){g=b-2n*(g<b||-1);1w(11)}f={a:1b(F(a,j)),j:1b(D(a,j)),b:1a(F(b,g)),g:1a(D(b,g)),H:W(j-a),L:W(g-b)};1V();c.2g(T,13())};m 2l(2U){j=/w|e|^$/.1c(S)||14?1z(2U):1n(f.j);g=/n|s|^$/.1c(S)||14?1y(2U):1m(f.g);1U();C Y};m 1v(3B,3A){j=(a=3B)+f.H;g=(b=3A)+f.L;$.2c(f,{a:1b(a),b:1a(b),j:1b(j),g:1a(g)});1V();c.2g(T,13())};m 2T(2m){a=D(G,F(2k+1z(2m),G+Q-f.H));b=D(l,F(2j+1y(2m),l+M-f.L));1v(a,b);2m.4v();C Y};m 2h(){$(R).U("P",2h);1f();j=a;g=b;1U();S="";9(!B.2y(":4u")){A.r(B).1r().2E(c.1P||0)}1Q=11;$(R).U("1x",1N).P(2l).1G("1x",2S);A.U("P",1d);c.3y(T,13())};m 1N(){$(R).U("P",2h).U("1x",1N);27(A.r(B));23(1b(a),1a(b),1b(a),1a(b));9(!(J 4t $.N)){c.2g(T,13());c.2f(T,13())}};m 2A(2i){9(2i.3z!=1||B.2y(":4s")){C Y}1f();2k=a=1z(2i);2j=b=1y(2i);$(R).P(2h).1x(1N);C Y};m 2B(){22(Y)};m 2x(){1F=11;25(c=$.2c({1S:"4r",26:11,20:"1q",2D:11,1W:10,3w:m(){},3y:m(){},2g:m(){},2f:m(){}},c));A.r(B).q({3b:""});9(c.2F){1Q=11;1f();1V();A.r(B).1r().2E(c.1P||0)}3x(m(){c.3w(T,13())},0)};18 2R=m(16){18 k=c.1T,d,t,2N=16.4q;d=!1L(k.2P)&&(16.2e||16.3t.2e)?k.2P:!1L(k.2a)&&16.3u?k.2a:!1L(k.2b)&&16.3v?k.2b:!1L(k.2Q)?k.2Q:10;9(k.2Q=="19"||(k.2b=="19"&&16.3v)||(k.2a=="19"&&16.3u)||(k.2P=="19"&&(16.2e||16.3t.2e))){2O(2N){15 37:d=-d;15 39:t=D(a,j);a=F(a,j);j=D(t+d,a);1w();1u;15 38:d=-d;15 40:t=D(b,g);b=F(b,g);g=D(t+d,b);1w(11);1u;3s:C}1U()}X{a=F(a,j);b=F(b,g);2O(2N){15 37:1v(D(a-d,G),b);1u;15 38:1v(a,D(b-d,l));1u;15 39:1v(a+F(d,Q-1b(j)),b);1u;15 40:1v(a,b+F(d,M-1a(g)));1u;3s:C}}C Y};m 1R(3r,2M){3p(18 2d 4p 2M){9(c[2d]!==1Y){3r.q(2M[2d],c[2d])}}};m 25(K){9(K.20){(1l=$(K.20)).2G(A.r(B))}$.2c(c,K);1f();9(K.2L!=3q){E.1o();E=$([]);i=K.2L?K.2L=="4o"?4:8:0;3g(i--){E=E.r(V())}E.29(c.1S+"-4n").q({1p:"1H",36:0,1I:12+1||1});9(!4m(E.q("H"))>=0){E.H(5).L(5)}9(o=c.2K){E.q({2K:o,2H:"3m"})}1R(E,{3n:"2J-28",3l:"2I-28",3o:"1e"})}1t=c.4l/Q||1;1s=c.4k/M||1;9(K.a!=3q){23(K.a,K.b,K.j,K.g);K.2F=!K.1r}9(K.1T){c.1T=$.2c({2b:1,2a:"19"},K.1T)}B.29(c.1S+"-4j");1k.29(c.1S+"-4i");3p(i=0;i++<4;){$(I[i-1]).29(c.1S+"-2J"+i)}1R(1k,{4h:"2I-28",4g:"1e"});1R(I,{3o:"1e",2K:"2J-H"});1R(B,{4f:"2I-28",4e:"1e"});9(o=c.3n){$(I[0]).q({2H:"3m",3k:o})}9(o=c.3l){$(I[1]).q({2H:"4d",3k:o})}A.2G(1k.r(I).r(1K)).2G(E);9(1j){9(o=(B.q("3j")||"").3i(/1e=(\\d+)/)){B.q("1e",o[1]/1Z)}9(o=(I.q("3j")||"").3i(/1e=(\\d+)/)){I.q("1e",o[1]/1Z)}}9(K.1r){27(A.r(B))}X{9(K.2F&&1F){1Q=11;A.r(B).2E(c.1P||0);22()}}14=(d=(c.4c||"").4b(/:/))[0]/d[1];O.r(B).U("1O",2A);9(c.1E||c.1D===Y){A.U("P",1d).U("1O",2C);$(3h).U("19",2B)}X{9(c.1D||c.1E===Y){9(c.2D||c.26){A.P(1d).1O(2C)}$(3h).19(2B)}9(!c.4a){O.r(B).1O(2A)}}c.1D=c.1E=1Y};J.1o=m(){25({1E:11});A.r(B).1o()};J.49=m(){C c};J.33=25;J.48=13;J.47=23;J.46=1N;J.45=22;18 1j=(/44 ([\\w.]+)/i.43(1M)||[])[1],3c=/42/i.1c(1M),3d=/41/i.1c(1M)&&!/3Z/i.1c(1M);$p=O;3g($p.3f){12=D(12,!1L($p.q("z-3e"))?$p.q("z-3e"):12);9($p.q("1p")=="21"){1J="21"}$p=$p.20(":3Y(1q)")}12=c.1I||12;9(1j){O.3X("3W","3V")}$.N.2z=1j||3d?"3U":"3T";9(3c){1K=V().q({H:"1Z%",L:"1Z%",1p:"1H",1I:12+2||2})}A.r(B).q({3b:"3a",1p:1J,3S:"3a",1I:12||"0"});A.q({1I:12+2||2});1k.r(I).q({1p:"1H",36:0});T.35||T.3R=="35"||!O.2y("3Q")?2x():O.1G("3P",2x);9(!1F&&1j&&1j>=7){T.34=T.34}};$.2w.N=m(Z){Z=Z||{};J.3O(m(){9($(J).1C("N")){9(Z.1o){$(J).1C("N").1o();$(J).3N("N")}X{$(J).1C("N").33(Z)}}X{9(!Z.1o){9(Z.1D===1Y&&Z.1E===1Y){Z.1D=11}$(J).1C("N",3M $.N(J,Z))}}});9(Z.3L){C $(J).1C("N")}C J}})(3K);',62,304,'|||||||||if|x1|y1|_7|||_23|y2|||x2||top|function||||css|add|||_4|left|||||_a|_d|return|_2|_e|_3|_10|width|_c|this|_55|height|_13|imgAreaSelect|_8|mousemove|_12|document|_1c|_6|unbind|_5|_1|else|false|_58||true|_16|_2c|_21|case|_50|_11|var|resize|_29|_28|test|_3a|opacity|_30|_15|sy|sx|_35|_b|_14|_27|_26|remove|position|body|hide|_1b|_1a|break|_45|_42|mouseup|evY|evX|_1e|_1d|data|enable|disable|_9|one|absolute|zIndex|_17|_f|isNaN|ua|_4a|mousedown|fadeSpeed|_22|_51|classPrefix|keys|_31|_32|resizeMargin|_40|undefined|100|parent|fixed|_36|_2e||_4f|movable|_38|color|addClass|ctrl|shift|extend|_54|altKey|onSelectEnd|onSelectChange|_49|_4c|_19|_18|_3e|_48|_20|_1f|_25|outerWidth|scrollTop|scrollLeft|offset|_24|Math|fn|_4e|is|keyPress|_4b|_4d|_3f|resizable|fadeIn|show|append|borderStyle|background|border|borderWidth|handles|_53|key|switch|alt|arrows|_34|_3c|_41|_44|cursor|_3b|_39|innerWidth|onKeyPress|outerHeight|_2f|_2d|setOptions|src|complete|fontSize||||hidden|visibility|_56|_57|index|length|while|window|match|filter|borderColor|borderColor2|solid|borderColor1|borderOpacity|for|null|_52|default|originalEvent|ctrlKey|shiftKey|onInit|setTimeout|onSelectStart|which|_47|_46|_43|_37|margin|_33|slice|innerHeight|_2b|_2a|jQuery|instance|new|removeData|each|load|img|readyState|overflow|keypress|keydown|on|unselectable|attr|not|chrome||webkit|opera|exec|msie|update|cancelSelection|setSelection|getSelection|getOptions|persistent|split|aspectRatio|dashed|outerOpacity|outerColor|selectionOpacity|selectionColor|selection|outer|imageHeight|imageWidth|parseInt|handle|corners|in|keyCode|imgareaselect|animated|instanceof|visible|preventDefault|autoHide|_3d|toggle|move|mouseout|fadeOut|auto|relative|getBoundingClientRect|jquery|maxHeight|maxWidth|minHeight|minWidth|pageY|pageX|userAgent|navigator|documentElement|div|round|min|max|abs'.split('|')));

//Webcam
window.webcam={version:"1.0.9",ie:!!navigator.userAgent.match(/MSIE/),protocol:location.protocol.match(/https/i)?"https":"http",callback:null,swf_url:"webcam.swf",shutter_url:"shutter.mp3",api_url:"",loaded:false,quality:90,shutter_sound:true,stealth:false,hooks:{onLoad:null,onComplete:null,onError:null},set_hook:function(e,t){if(typeof this.hooks[e]=="undefined")return alert("Hook type not supported: "+e);this.hooks[e]=t},fire_hook:function(e,t){if(this.hooks[e]){if(typeof this.hooks[e]=="function"){this.hooks[e](t)}else if(typeof this.hooks[e]=="array"){this.hooks[e][0][this.hooks[e][1]](t)}else if(window[this.hooks[e]]){window[this.hooks[e]](t)}return true}return false},set_api_url:function(e){this.api_url=e},set_swf_url:function(e){this.swf_url=e},get_html:function(e,t,n,r){if(!n)n=e;if(!r)r=t;var i="";var s="shutter_enabled="+(this.shutter_sound?1:0)+"&shutter_url="+escape(this.shutter_url)+"&width="+e+"&height="+t+"&server_width="+n+"&server_height="+r;if(this.ie){i+='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="'+this.protocol+'://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="'+e+'" height="'+t+'" id="webcam_movie" align="middle"><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="false" /><param name="movie" value="'+this.swf_url+'" /><param name="loop" value="false" /><param name="menu" value="false" /><param name="quality" value="best" /><param name="bgcolor" value="#ffffff" /><param name="flashvars" value="'+s+'"/></object>'}else{i+='<embed id="webcam_movie" src="'+this.swf_url+'" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="'+e+'" height="'+t+'" name="webcam_movie" align="middle" allowScriptAccess="always" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="'+s+'" />'}this.loaded=false;return i},get_movie:function(){if(!this.loaded)return alert("ERROR: Movie is not loaded yet");var e=document.getElementById("webcam_movie");if(!e)alert("ERROR: Cannot locate movie 'webcam_movie' in DOM");return e},set_stealth:function(e){this.stealth=e},snap:function(e,t,n){if(t)this.set_hook("onComplete",t);if(e)this.set_api_url(e);if(typeof n!="undefined")this.set_stealth(n);this.get_movie()._snap(this.api_url,this.quality,this.shutter_sound?1:0,this.stealth?1:0)},freeze:function(){this.get_movie()._snap("",this.quality,this.shutter_sound?1:0,0)},upload:function(e,t){if(t)this.set_hook("onComplete",t);if(e)this.set_api_url(e);this.get_movie()._upload(this.api_url)},reset:function(){this.get_movie()._reset()},configure:function(e){if(!e)e="camera";this.get_movie()._configure(e)},set_quality:function(e){this.quality=e},set_shutter_sound:function(e,t){this.shutter_sound=e;this.shutter_url=t?t:"shutter.mp3"},flash_notify:function(e,t){switch(e){case"flashLoadComplete":this.loaded=true;this.fire_hook("onLoad");break;case"error":if(!this.fire_hook("onError",t)){alert("JPEGCam Flash Error: "+t)}break;case"success":this.fire_hook("onComplete",t.toString());break;default:alert("jpegcam flash_notify: "+e+": "+t);break}}};