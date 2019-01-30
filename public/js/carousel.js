// Javascript

var currentPanel = 1;
var totalPanels = 0;
var autoPlay = true;
var timePassed = 0;
var timeToChange = 5;
var photoWidth = 0;
var windowFocus = true;

//set up initial carousel slide
function initializeCarousel(){
	$('#car_wrap .car_caption_content').html(
		$('#car_panels .car_panel:first .car_caption_content').html()
	);
	$('.car_nav a.car_nav_item:first').addClass('selected');
	$('.car_photos').animate({opacity: 1.0}, 1500, 'swing');
	
	//set autoAdvance once the carousel is ready
	setInterval(autoAdvance, 1000);
}

//carousel autoplay
function autoAdvance(){
	if(window.timePassed == window.timeToChange){
		window.timePassed = 0;
		if(window.autoPlay == true && window.windowFocus == true ) {
			if(window.currentPanel == window.totalPanels){	
				$('.car_nav a.car_nav_item:nth-child(1)').trigger('click');
			}else{
				$('.car_nav a.car_nav_item:nth-child('+(window.currentPanel
					+1)+')').trigger('click');
			}
		}
	} else {
		window.timePassed += 1;
	}
	/*debug*/ $('.autoPlay').html('autoPlay = '+window.autoPlay);
	/*debug*/ $('.timePassed').html('timePassed = '+window.timePassed);
}

$(document).ready(function(){
	
	window.onfocus = function(){ windowFocus = true; }
	window.onblur = function(){ windowFocus = false; }
	window.photoWidth = $('#car_wrap').width();
	
	//Preload
	$(window).load(function(){
		window.initializeCarousel();
	});
	
	/*debug*/ $('.autoPlay').html('autoPlay = '+window.autoPlay);
	/*debug*/ $('.timePassed').html('timePassed = '+window.timePassed);
	/*debug*/ $('.timeToChange').html('timeToChange = '+window.timeToChange);
	/*debug*/ $('.currentPanel').html('currentPanel = '+window.currentPanel);
	
	//run autoAdvance function every second
	
	//pause the animation on mouseover
	$('#car_wrap').hover(
		function(){
			window.autoPlay = false;
			$(this).removeClass('autoplay');
		},
		function(){
			window.autoPlay = true; window.timePassed = 0;
			$(this).addClass('autoplay');
		}
	);

	//start caruosel after window has loaded
	$(window).load(function(){
		initializeCarousel();
	});
	
	//generate navigation
	$('#car_panels .car_panel').each(function(index){
		//set thumbnail image attributes
		var thumbSrc = $(this).find('.car_photo_thumb').attr('src');
		var thumbAlt = $(this).find('.car_photo_thumb').attr('alt');
		$('.car_nav').append('<a class="car_nav_item"><img class="car_photo_thumb" src="'+thumbSrc+'" alt="'+thumbAlt+' " /></a>');
		window.totalPanels = index + 1;
		/*debug*/ $('.totalPanels').html('totalPanels = '+window.totalPanels);
	});
	
	//generate photo lineup
	$('img.car_photo').each(function(index){
		var photoWidth = $('#car_wrap').width();
		var photoPosition = index * photoWidth;
		$('.car_photos').append('<img class="car_photo" style="left:'+photoPosition+'" src="'+$(this).attr('src')+'" alt="'+$(this).attr('alt')+'" width="'+photoWidth+'"/>');
		$('.car_photos').css('width', photoPosition+photoWidth);
	});
	
	//set up nav links
	$('.car_nav a.car_nav_item').click(function(index){
		$('.car_nav a.car_nav_item').removeClass('selected');
		$(this).addClass('selected');
		var navClicked = $(this).index();
		var carWidth = $('#car_wrap').width();
		var distanceToMove = carWidth * (-1);
		var newPhotoPositon = navClicked * distanceToMove + 'px';
		var newCaption = $('.car_caption').get(navClicked + 1);
		
		window.currentPanel = navClicked + 1;
		/*debug*/ $('.currentPanel').html('currentPanel = '+window.currentPanel);
		
		//slide to the left by width of wrapper
		$('.car_photos').stop().animate({left: newPhotoPositon}, 1000);
		
		//set new caption
		$('.car_caption_content').stop().animate({opacity: 0.0}, 800, 'swing', function(){
			var newHTML = $(newCaption).html();
			$('#car_wrap .car_caption').html(newHTML);
			$('#car_wrap .car_caption_content').delay(50).stop().animate({opacity: 1.0}, 800, 'swing');
		});
	});
	

});
