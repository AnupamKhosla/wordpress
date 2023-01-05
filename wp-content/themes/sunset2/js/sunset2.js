/*
	@package sunset2-theme
	========================
		FRONT END JAVASCRIPT
	========================
*/	

jQuery(document).ready(function($){


	$(document).on('click','.sunset2-load-more:not(.loading)', function() {	
		console.log('clicked');
		var that = $(this);
		var page = $(this).data('page');
		var newPage = page+1;
		var ajaxurl = that.data('url');	
		var prev = that.data('prev');	
		if(typeof prev === 'undefined') {
			prev = 0;
		}


		that.addClass('loading').find('.text').slideUp(320);
		that.find('.sunset-icon').addClass('spin');	
		$.ajax({			
			url : ajaxurl,
			type : 'post',			
			data : {				
				page : page,
				prev: prev,
				action: 'sunset2_load_more'				
			},
			error : function( response ) {
				console.log(response);
			},
			success : function( response ) {				
				
				if(prev == 1) {
					$('.sunset2-posts-container').prepend(response);
					that.data('page', newPage-1);

				} else {
					$('.sunset-posts-container').append( response );
					that.data('page', newPage);
				}
				setTimeout(function(){					
					that.removeClass('loading').find('.text').slideDown(320);
					that.find('.sunset-icon').removeClass('spin');					
				}, 1000);				
			}			
		});	
	});


	!function(){
		//remove both starting and trailing slash from window.location.pathname
		//var pathname_og = window.location.pathname.replace(/^\/|\/$/g, "");
		var pathname_og = "wordpress";
		//on scroll
		$(window).scroll(function(){
			var scroll = $(window).scrollTop();
			var height = $(document).height();
			var windowHeight = $(window).height();			

			//check if ".page-limit" is within the viewport
			$(".page-limit").each(function(){
				var pageLimitTop = $(this).offset().top - scroll;
				if(pageLimitTop < windowHeight && pageLimitTop > windowHeight*0.9){	
					//remove trailing slash from window.location.pathname	
					console.log("/" + pathname_og +  $(this).attr('data-page'));
					history.replaceState(null, null,  "/" + pathname_og +  $(this).attr('data-page'));				
					return false;
				}			
			});
		});
	}();
});








