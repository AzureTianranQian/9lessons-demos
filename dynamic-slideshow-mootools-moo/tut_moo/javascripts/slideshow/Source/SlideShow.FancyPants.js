/*
---

name: SlideShow.FancyPants

description: An extremely fancy slideshow implementation--as fancy as your pants.

license: MIT-style license.

authors: Ryan Florence <http://ryanflorence.com>

requires:
  - /SlideShow.Labels
  - /SlideShow.Config
  - More/Fx.Move

provides:
  - SlideShow.FancyPants

...
*/

SlideShow.FancyPants = new Class({

	Extends: SlideShow.Labels,
	Implements: SlideShow.Config,
	
	options: {
		position: 'topLeft' 
	},

	initialize: function(element, options){
		this.element = document.id(element);
		this.buildFromConfig();
		this.parent(element, options);
		this.build();
		this.addEvent('show', function(data){
			var navItem = data.next.element.retrieve('navItem');
			this.indicator.move({
				relativeTo: navItem, 
				position: this.options.position
			});
		}.bind(this));
	},

	build: function(){
		this.indicator = new Element('i', {
			move: { duration: this.options.duration }
		}).position({
			relativeTo: this.slides[0].retrieve('navItem'),
			position: this.options.position
		}).inject(document.body); // <i> for indicator is semantic, right?!
	}

});
