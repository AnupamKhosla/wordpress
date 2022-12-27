/*
	@package sunset2-theme
	========================
		ace js initialization
	========================
*/	

var editor = ace.edit("customCss");
editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/css");


jQuery(document).ready(function($) {
	$('#save-custom-css-form').on('submit', function() {		
		$('#sunset2_css').val(editor.getSession().getValue());
	});
});
