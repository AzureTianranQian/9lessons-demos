/*
---

name: SlideShow.Labels

description: Dynamically creates labels for each slide in a slideshow

license: MIT-style license.

authors: Ryan Florence <http://ryanflorence.com>

requires:
  - /SlideShow

provides:
  - SlideShow.Labels

...
*/

SlideShow.Labels = new Class({

	Extends: SlideShow,

	options: {
		label: false,
		navClassName: 'slideshow-nav',
		inject: function(element, relativeElement){
			element.inject(relativeElement, 'after');
		}
	},

	initialize: function(element, options){
		this.parent(element, options);
		this.buildLabels();
	},

	buildLabels: function(){
		this.nav = new Element('ul.' + this.options.navClassName);
		this.slides.each(function(slide, index){
			var item = new Element('li').addEvent('click', this.show.pass(index, this)).inject(this.nav);
			if (this.options.label) item.set('html', slide.get(this.options.label));
			slide.store('navItem', item);
		}, this);
		this.options.inject(this.nav, this.element);
	}

});
