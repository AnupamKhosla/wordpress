/*
	@package sunset2-theme
	========================
		ADMIN PAGE JAVASCRIPT
	========================
*/	

jQuery(document).ready(function($){
	var mediaUploader;

	$('#upload-button').on('click', function(e) {
		e.preventDefault();
		if(mediaUploader){
			//console.log(mediaUploader);
			mediaUploader.open();
			return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose a Profile Picture',
			button: {
				text: 'Choose Picture'
			}, 
			multiple: false
		});	
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();			
			$('#profile-picture').val(attachment.url);
			// $('#profile-picture-preview').css('background-image', 'url('+attachment.url+')');
			$('#profile-picture-preview img').attr('src', attachment.url);
		});
		mediaUploader.open();
	});
});