$( document ).ready(function() {
    var editor = CKEDITOR.replace( 'content', 
		{
			language: 'ru',
			customConfig: '../ckeditor_config.js',
			filebrowserBrowseUrl     : '/asserts/default/js_plagins/kcfinder/browse.php?type=files',
			filebrowserImageBrowseUrl: '/asserts/default/js_plagins/kcfinder/browse.php?type=images',
			filebrowserFlashBrowseUrl: '/asserts/default/js_plagins/kcfinder/browse.php?type=flash',
			filebrowserUploadUrl     : '/asserts/default/js_plagins/kcfinder/upload.php?type=files',
			filebrowserImageUploadUrl: '/asserts/default/js_plagins/kcfinder/upload.php?type=images',
			filebrowserFlashUploadUrl: '/asserts/default/js_plagins/kcfinder/upload.php?type=flash'
		}
	);
	
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