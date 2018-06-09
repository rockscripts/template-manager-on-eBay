CKEDITOR.editorConfig = function (config) {
    config.toolbar_Full = [{
        name: 'document',
        items: ['Source', '-', 'Print']
    }, {
        name: 'clipboard',
        items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']
    }, {
        name: 'editing',
        items: ['Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker', 'Scayt']
    }, '/', {
        name: 'basicstyles',
        items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']
    }, {
        name: 'paragraph',
        items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl']
    }, {
        name: 'links',
        items: ['Link', 'Unlink', 'Anchor']
    }, {
        name: 'insert',
        items: ['Image', 'Flash', 'Table', 'PageBreak']
    }, {
        name: 'styles',
        items: ['Styles', 'Format', 'Font', 'FontSize']
    }, {
        name: 'colors',
        items: ['TextColor', 'BGColor']
    }, {
        name: 'code',
        items: ['Code']
    }];
    config.filebrowserBrowseUrl = 'http://rockscripts.org/designmanager/ckeditor/kcfinder/browse.php';
    config.filebrowserImageBrowseUrl = 'http://rockscripts.org/designmanager/ckeditor/kcfinder/browse.php?type=images';
    config.filebrowserFlashBrowseUrl = 'http://rockscripts.org/designmanager/ckeditor/kcfinder/browse.php?type=flash';
    config.filebrowserUploadUrl = 'http://rockscripts.org/designmanager/ckeditor/kcfinder/upload.php?type=files';
    config.filebrowserImageUploadUrl = 'http://rockscripts.org/designmanagerckeditor/kcfinder/upload.php?type=images';
    config.filebrowserFlashUploadUrl = 'http://rockscripts.org/designmanager/ckeditor/kcfinder/upload.php?type=flash';
    config.enterMode = 'CKEDITOR.ENTER_BR';
    config.shiftEnterMode = ' CKEDITOR.ENTER_P';
    config.height = 400;
    config.htmlEncodeOutput = false;
    config.entities = false;
    config.fillEmptyBlocks = false;
    config.tabSpaces = 0;
    config.basicEntities = false;
   config.entities_greek = false; 
   config.entities_latin = false; 
   config.entities_additional = '';
};