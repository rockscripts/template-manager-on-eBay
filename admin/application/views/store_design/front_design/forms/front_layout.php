<div class="alert  hide">
      <button class="close" type="button">x</button>
      <span id="message_content" class="message_content"></span>
</div>

<div class="new-tab-form-content" style="display: block;">

    <h4 class="widgettitle nomargin shadowed">Layout & Widgets</h4>

    <div class="widgetcontent bordered shadowed">

        <div class="content" style="margin-left:10px;margin-bottom:10px;" >
            
            <div class="layout-type row" >
                <label class="radio" >
                    <img src="<?=base_url()?>/themes/katniss/img/widgets-layout/layout.left.png" id="imglayoutLeft" title="Two Columns | Left"/>
                    <input type="radio" name="layoutType" id="radiolayoutLeft"  >
                </label>
                <label class="radio" >
                    <img src="<?=base_url()?>/themes/katniss/img/widgets-layout/three.layout.png"  id="imglayoutCenter" title="Three Columns | Left & Right"/>
                    <input type="radio" name="layoutType" id="radiolayoutCenter" >
                </label>
                <label class="radio"  >
                    <img src="<?=base_url()?>/themes/katniss/img/widgets-layout/layout.right.png" id="imglayoutRight" title="Two Columns | Right"/>
                    <input type="radio" name="layoutType" id="radiolayoutRight" >
                </label>
            </div>

            <div class="clearfix" style="margin-bottom:20px;"></div>

            <!-- BEGIN: XHTML widgets-container -->
            <div id="widgets-container" class="row-fluid" >

                <div id="widgetsAvailable" class="span3">
                    <h4  class="widgettitle widgettitlecustom">Available Widgets</h4>
                    <ul class="sortable-list available">
                        <?php foreach($availables as $widget) { ?>
                            <li class="sortable-item" id="<?=str_replace(" ","-",$widget)?>" w_n="<?=$widget?>">
                            
                            <?=$widget?></li>
                        <?php } ?>
                    </ul>

                </div>
                <div class="left widgetized-area">
                    <h4  class="widgettitle widgettitlecustom">Widgetized Area</h4>
                    <div id="layoutContainer" class="span9" >

                    <div class="span8" id="layoutLeft" style="margin-left:0px;">
                        <h5 class="muted" style="margin:10px;">Left Section</h5>
                        <ul class="sortable-list">
                            <?php 
                            if(isset($widgets[0]))
                                foreach($widgets[0] as $widget) { 
                            ?>
                                <li class="sortable-item" id="<?=str_replace(" ","-",$widget)?>" w_n="<?=$widget?>">
                              
                                <?=$widget?>
                                 <img onclick="$(this).parent().remove()" class="remove-widget" src="<?= base_url() ?>themes/katniss/img/delete.png"  title="Delete Widget" ></li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="span4" id="layoutCenter" style="margin-left:5px;">
                        <h5 class="muted" style="margin:10px;">Center Section</h5>
                        <ul class="sortable-list">
                            <?php 
                            if(isset($widgets[1]))
                                foreach($widgets[1] as $widget) { 
                            ?>
                                <li class="sortable-item" id="<?=str_replace(" ","-",$widget)?>" w_n="<?=$widget?>">
                                 
                                <?=$widget?>
                                <img onclick="$(this).parent().remove()" class="remove-widget" src="<?= base_url() ?>themes/katniss/img/delete.png"  title="Delete Widget" ></li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="hide" id="layoutRight" style="margin-left:5px;">
                        <h5 class="muted" style="margin:10px;">Right Section</h5>
                        <ul class="sortable-list">
                            <?php 
                            if(isset($widgets[2]))
                                foreach($widgets[2] as $widget) { 
                            ?>
                                <li class="sortable-item" id="<?=str_replace(" ","-",$widget)?>" w_n="<?=$widget?>">                              
                                <?=$widget?>
                                 <img onclick="$(this).parent().remove()" class="remove-widget" src="<?= base_url() ?>themes/katniss/img/delete.png"  title="Delete Widget" ></li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>  
                </div>
               

                <div class="clearer">&nbsp;</div>

            </div>
            <!-- END: XHTML widgets-container -->

            <hr>
            <button type="button" class="btn btn-primary" id="save-layout" data-loading-text="Saving...">Save Layout</button>

        </div>

    </div>

</div>

<script type="text/javascript">

jQuery(document).ready(function(){

    $ = jQuery ;

    // Loading
    type = <?=$type?> ;
    if ( type == 1 ) type = 'radiolayoutLeft' ;
    if ( type == 2 ) type = 'radiolayoutCenter';
    if ( type == 3 ) type = 'radiolayoutRight' ;
    $('#'+type).click();
    selectLayout(type);
    // End Loading

    $('#save-layout').click( function() {

        type = $('input[name=layoutType]:checked').attr('id');
        if ( type == 'radiolayoutLeft' )   type = 1 ;
        if ( type == 'radiolayoutCenter' ) type = 2 ;
        if ( type == 'radiolayoutRight' )  type = 3 ;

        var result = [];
        result.push(getWidgets("#layoutLeft li"));
        result.push(getWidgets("#layoutCenter li"));
        result.push(getWidgets("#layoutRight li"));

        jQuery.ajax({
            url: base_url+"index.php?/store_design/storedesign/save_layout/",
            async: false,
            type: "POST",    
            dataType: "json",
            data: { type : type , widgets : result } ,
            success: function(data) 
            {
                show_successfull_message("Layout was saved successful.");
            }
        });
    })

    $('#widgets-container .sortable-list').sortable({

        connectWith: '#widgets-container .sortable-list',

        placeholder: 'placeholder',

        start: function( event, ui ) {

            if ( ui.item.parent().hasClass('available') ) {

                var cl = $(ui.item).clone();

                cl.attr('style','');

                $(cl).insertBefore(ui.item);       

            }

        },

        stop: function( event, ui) {
                      ui.item.find("img").remove();
	     ui.item.append('  <img onclick="$(this).parent().remove()" class="remove-widget" src="<?= base_url() ?>themes/katniss/img/delete.png"  title="Delete Widget" ></li>');
                
            if ( ui.item.parent().hasClass('available') ) {

                ui.item.remove();

                // $(this).sortable('cancel');

            }

            section = "#" + ui.item.parent().parent().attr('id') + " ul";

            if ( $(section+" #"+ui.item.attr('id')).size() > 1 ) {

                ui.item.remove();

            }

        }

    });


    $('input[name=layoutType]').click( function(){
        
        var type = $(this).attr('id') ;
        
        selectLayout(type);
    })

    function selectLayout( type ) {
        
        if ( type == 'radiolayoutLeft' ) {
            
            $('.layout-type .radio img').css('border','none');
            $('#imglayoutLeft').css('border','4px solid #999');
            
            $('#layoutLeft').attr('class', 'span4') ;
            $('#layoutCenter').attr('class', 'span8') ;
            $('#layoutRight').attr('class', 'hide') ;
            //moveTo("#layoutRight li","#widgetsAvailable ul") ;
        }

        if ( type == 'radiolayoutCenter' ) {
            
            $('.layout-type .radio img').css('border','none');
            $('#imglayoutCenter').css('border','4px solid #999');
            
            $('#layoutLeft').attr('class', 'span3') ;
            $('#layoutCenter').attr('class', 'span6') ;
            $('#layoutRight').attr('class', 'span3') ;
        }

        if ( type == 'radiolayoutRight' ) {
            
            $('.layout-type .radio img').css('border','none');
            $('#imglayoutRight').css('border','4px solid #999');
            
            $('#layoutLeft').attr('class', 'hide') ;
            $('#layoutCenter').attr('class', 'span8') ;
            $('#layoutRight').attr('class', 'span4') ;
         //   moveTo("#layoutLeft li","#widgetsAvailable ul") ;
        }
    }

    function moveTo( source , destination ) {
        $(source).each(function(){
          //  var cl = $(source).clone();
           // $(destination).append(cl);
            $(source).remove();
        });
    }

    function getWidgets( section ) {
        var result = [] ;
        $(section).each(function(){
            result.push($(this).attr('w_n')) ;
        }); 
        return result;
    }

    jQuery('.alert .close').live("click", function(e) {
        jQuery(this).parent().hide();
    });


});

</script>
