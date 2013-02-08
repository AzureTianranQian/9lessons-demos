var slideshow;
if (Browser.isMobile) Fx.prototype.options.fps = 10;

window.addEvent('domready', function(){

	// create a slideshow fancy pants instance
	slideshow = new SlideShow.FancyPants('slideshow', {
		duration: 300,
		label: 'alt'
	});

	// navigate the slideshow with the keyboard
	window.addEvent('keydown', function(event){
		var next = ['down', 'right']
		, previous= ['up', 'left'];
		if (next.contains(event.key)) slideshow.showNext({ transition: 'pushUp' });
		if (previous.contains(event.key)) slideshow.showPrevious({ transition: 'pushDown' });
	});

	// navigate the slideshow with a touch device
	// swipe it left or right on your mobile device
	$(slideshow).addEvents({
		swipe: function(event){
			// this is admittadly too clever, but still fun.
			// click and drag left to right on desktop browsers
			// swipe on touch enabled devices
			slideshow['show' + ((event.direction == 'left') ? 'Next' : 'Previous')]({transition: 'blind' + event.direction.capitalize() })
		},
		mousedown: function(event){
			// so you dont' drag the image away on desktops
			event.stop();
		}
	});


});