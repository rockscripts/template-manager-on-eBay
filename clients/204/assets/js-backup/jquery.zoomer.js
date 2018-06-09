/* -------------------------------------------------------------	Class: jQquery Zoomer!	Description: Image zooming & Panning + lightbox tool	Author: pezflash - http://www.codecanyon.net/user/pezflash	Version: 1.0---------------------------------------------------------------- */
(function ($) {
    $.zoomer = {
        version: '1.0'
    };
    $.zoomer = function (settings) {
        settings = jQuery.extend({ /*----- DEFAULT SETTINGS - NOTE: HTML SETTINGS WILL OVERWRITE THESE ONES -----*/
            defaultWidthValue: 361,
            /*	INITIAL VIEWER IMAGE WIDTH (IN PIXELS) */ defaultHeightValue: 361,
            /*	INITIAL VIEWER IMAGE HEIGHT (IN PIXELS) */ maxWidthValue: 1000,
            /*	MAXIMUM WIDTH VALUE (IN PIXELS) */ maxHeightValue: 1000,
            /*	MAXIMUM HEIGHT VALUE (IN PIXELS) */ moveValue: 50,
            /*	MOVE AMOUNT (IN PIXELS) */ zoomValue: 1.4,
            /*	ZOOMING FACTOR */ thumbnailsWidthValue: 85,
            /*	THUMBNAILS WIDTH (IN PIXELS) */ thumbnailsHeightValue: 78,
            /*	THUMBNAILS HEIGHT (IN PIXELS) */ thumbnailsBoxWidthValue: 370,
            /*	THUMBNAILS CONTENT BOX WIDTH (IN PIXELS) */ zoomerTheme: 'dark' /*	THEME STYLE - OPTIONS: 'light' 'dark' 'compact' */
        }, settings); /* SET THEME FOR CONSOLE IMAGES */
        $.zoomer.setImageTheme = function (value) {
            return '<img src="http://rockscripts.org/mobile/images/console_' + settings.zoomerTheme + '/' + value + '.png">';
        }; /* MOVE FUNCTION */
        $.zoomer.move = function (i, value) {
            var y = i.position().top;
            var x = i.position().left;
            var yValue;
            var xValue;
            var itemWidth = i.width();
            var itemHeight = i.height();
            if (value == 'up') {
                yValue = y + settings.moveValue;
                if (yValue > 0) yValue = 0;
                i.stop(true, true).animate({
                    top: yValue
                });
            }
            if (value == 'down') {
                yValue = y - settings.moveValue;
                if (settings.defaultHeightValue + Math.abs(yValue) > itemHeight) yValue = settings.defaultHeightValue - itemHeight;
                i.stop(true, true).animate({
                    top: yValue
                });
            }
            if (value == 'left') {
                xValue = x + settings.moveValue;
                if (xValue > 0) xValue = 0;
                i.stop(true, true).animate({
                    left: xValue
                });
            }
            if (value == 'right') {
                xValue = x - settings.moveValue;
                if (settings.defaultWidthValue + Math.abs(xValue) > itemWidth) xValue = settings.defaultWidthValue - itemWidth;
                i.stop(true, true).animate({
                    left: xValue
                });
            }
        }; /* ZOOM FUNCTION */
        $.zoomer.zoom = function (i, value) {
            var y = i.position().top;
            var x = i.position().left;
            var yValue;
            var xValue;
            var itemWidth = i.width();
            var itemHeight = i.height();
            var widthValue;
            var heightValue;
            if (value == 'in') {
                if (itemHeight < settings.maxHeightValue) {
                    widthValue = itemWidth * settings.zoomValue;
                    if (widthValue > settings.maxWidthValue) widthValue = settings.maxWidthValue;
                    xValue = x - ((widthValue - itemWidth) / 2);
                    if (xValue > 0) xValue = 0;
                    if (settings.defaultWidthValue + Math.abs(xValue) > widthValue) xValue = settings.defaultWidthValue - widthValue;
                    heightValue = itemHeight * settings.zoomValue;
                    if (heightValue > settings.maxHeightValue) heightValue = settings.maxHeightValue;
                    yValue = y - ((heightValue - itemHeight) / 2);
                    if (yValue > 0) yValue = 0;
                    if (settings.defaultHeightValue + Math.abs(yValue) > heightValue) yValue = settings.defaultHeightValue - heightValue;
                    if (heightValue == settings.defaultHeightValue) {
                        $.zoomer.stopDrag(i);
                    } else {
                        $.zoomer.startDrag(i);
                    }
                    i.stop(true, true).animate({
                        height: heightValue,
                        width: widthValue,
                        top: yValue,
                        left: xValue
                    });
                }
            }
            if (value == 'out') {
                if (itemHeight > settings.defaultHeightValue) {
                    widthValue = itemWidth / settings.zoomValue;
                    if (widthValue < settings.defaultWidthValue) widthValue = settings.defaultWidthValue;
                    xValue = x + ((itemWidth - widthValue) / 2);
                    if (xValue > 0) xValue = 0;
                    if (settings.defaultWidthValue + Math.abs(xValue) > widthValue) xValue = settings.defaultWidthValue - widthValue;
                    heightValue = itemHeight / settings.zoomValue;
                    if (heightValue < settings.defaultHeightValue) heightValue = settings.defaultHeightValue;
                    yValue = y + ((itemHeight - heightValue) / 2);
                    if (yValue > 0) xValue = 0;
                    if (settings.defaultHeightValue + Math.abs(yValue) > heightValue) yValue = settings.defaultHeightValue - heightValue;
                    if (heightValue == settings.defaultHeightValue) {
                        $.zoomer.stopDrag(i);
                    } else {
                        $.zoomer.startDrag(i);
                    }
                    i.stop(true, true).animate({
                        height: heightValue,
                        width: widthValue,
                        top: yValue,
                        left: xValue
                    });
                }
            }
            if (value == 'reset') {
                $.zoomer.stopDrag(i);
                i.stop(true, true).animate({
                    height: settings.defaultHeightValue,
                    width: settings.defaultWidthValue,
                    top: 0,
                    left: 0
                });
            }
        }; /* DRAGGING FUNCTIONS - LIMIT ON BOUNDARIES*/
        $.zoomer.startDrag = function (i) {
            var topLimit = 0;
            var leftLimit = 0;
            i.draggable({
                start: function (event, ui) {
                    if (ui.position != undefined) {
                        topLimit = ui.position.top;
                        leftLimit = ui.position.left;
                    }
                },
                drag: function (event, ui) {
                    topLimit = ui.position.top;
                    leftLimit = ui.position.left;
                    var bottomLimit = i.height() - settings.defaultHeightValue;
                    var rightLimit = i.width() - settings.defaultWidthValue;
                    if (ui.position.top < 0 && ui.position.top * -1 > bottomLimit) topLimit = bottomLimit * -1;
                    if (ui.position.top > 0) topLimit = 0;
                    if (ui.position.left < 0 && ui.position.left * -1 > rightLimit) leftLimit = rightLimit * -1;
                    if (ui.position.left > 0) leftLimit = 0;
                    ui.position.top = topLimit;
                    ui.position.left = leftLimit;
                }
            });
            i.css("cursor", "move");
        };
        $.zoomer.stopDrag = function (i) {
            i.draggable("destroy");
            i.css("cursor", "default");
        }; /* ASIGN MAIN TARGET AND RESIZE ELEMENTS */
        var z = $(".zoomer");
        z.find(".holder").css('width', settings.defaultWidthValue);
        z.find(".holder .image").css('height', settings.defaultHeightValue);
        z.find(".holder .image").css('width', settings.defaultWidthValue);
        z.find(".thumbs").css('width', settings.thumbnailsBoxWidthValue);
        z.find(".thumbs img").css('width', settings.thumbnailsWidthValue);
        z.find(".thumbs img").css('height', settings.thumbnailsHeightValue);
        var i = z.find(".holder .image .target");
        i.css('height', settings.defaultHeightValue);
        i.css('width', settings.defaultWidthValue); /* ASIGN BUTTON ACTIONS & IMAGES (THEME) */
        $("#zoomerLeft").click(function () {
            $.zoomer.move(i, 'left');
        }).prepend($.zoomer.setImageTheme('left'));
        $("#zoomerRight").click(function () {
            $.zoomer.move(i, 'right');
        }).prepend($.zoomer.setImageTheme('right'));
        $("#zoomerUp").click(function () {
            $.zoomer.move(i, 'up');
        }).prepend($.zoomer.setImageTheme('up'));
        $("#zoomerDown").click(function () {
            $.zoomer.move(i, 'down');
        }).prepend($.zoomer.setImageTheme('down'));
        $("#zoomerIn").click(function () {
            $.zoomer.zoom(i, 'in');
        }).prepend($.zoomer.setImageTheme('in'));
        $("#zoomerOut").click(function () {
            $.zoomer.zoom(i, 'out');
        }).prepend($.zoomer.setImageTheme('out'));
        $("#zoomerReset").click(function () {
            $.zoomer.zoom(i, 'reset');
        }).prepend($.zoomer.setImageTheme('reset'));
        $("#zoomerView").click(function () {
            $(".lightbox a[href='" + i.attr("src") + "']:eq(0)").trigger("click");
        }).prepend($.zoomer.setImageTheme('view')); /* IMAGE REPLACEMENT & PRETTYLOADER */
        $.prettyLoader();
        z.find(".thumbs img").click(function () {
            $.zoomer.stopDrag(i);
            $.prettyLoader.show();
            var id = $(this).attr("id");
            i.stop(true, true).animate({
                height: settings.defaultHeightValue,
                width: settings.defaultWidthValue,
                top: 0,
                left: 0
            }, 300, function () {
                i.stop(true, true).fadeTo('fast', 0, function () {
                    var $newImg = $("<img src='" + id + "' style='display:none;'>");
                    $newImg.load(function () {
                        i.attr("src", id);
                        i.stop(true, true).fadeTo('slow', 1, 'linear');
                        $.prettyLoader.hide();
                    });
                });
            });
        });
        return this;
    };
})(jQuery);