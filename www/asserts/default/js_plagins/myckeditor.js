$( document ).ready(function() {
    var editor = CKEDITOR.replace( 'content', 
		{
			language: 'ru',
			height: 500,extraPlugins : 'mediaembed',
			filebrowserBrowseUrl     : '/asserts/default/js_plagins/kcfinder/browse.php?type=files',
			filebrowserImageBrowseUrl: '/asserts/default/js_plagins/kcfinder/browse.php?type=images',
			filebrowserFlashBrowseUrl: '/asserts/default/js_plagins/kcfinder/browse.php?type=flash',
			filebrowserUploadUrl     : '/asserts/default/js_plagins/kcfinder/upload.php?type=files',
			filebrowserImageUploadUrl: '/asserts/default/js_plagins/kcfinder/upload.php?type=images',
			filebrowserFlashUploadUrl: '/asserts/default/js_plagins/kcfinder/upload.php?type=flash'
		}
	);
 editor.config.toolbar_Full =
  [
    { name: 'document', items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
    { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
    { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
    { name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
    '/',
    { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
    { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
    { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
    { name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
    '/',
    { name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
    { name: 'colors', items : [ 'TextColor','BGColor' ] },
    { name: 'tools', items : [ 'Maximize', 'ShowBlocks','-' ] }
  ];
	if (typeof CKEDITOR !== 'undefined') {
	 
		CKEDITOR.on( 'instanceReady', function( ev ) {
			
			// Output paragraphs as <p>Text</p>.
			ev.editor.dataProcessor.writer.setRules( '*', {
				indent          : false,
				breakBeforeOpen : true,
				breakAfterOpen  : false,
				breakBeforeClose: false,
				breakAfterClose : true
			});
		});
	}
});