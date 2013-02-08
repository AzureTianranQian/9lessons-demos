/*
---

name: SlideShow.Config

description: Builds slides from xhr-ed text file

license: MIT-style license.

authors: Ryan Florence <http://ryanflorence.com>

requires:
  - /SlideShow
  - Core/Element

provides:
  - SlideShow.Config
  - String.toSlideShowImageData

...
*/

SlideShow.Config = new Class({

	options: {
		configUrl: 'images.txt'
	},
    
	buildFromConfig: function(){
		new Request({
			url: this.options.configUrl,
			async: false
		}).addEvent('onComplete', function(response){
			this.configData = this.parse(response);
			this.buildSlides();
		}.bind(this)).send();
	},
    
	parse: function(text){
		var data = [];
		text.replace('\r','').split('\n').each(function(line){
			if (!line.length) return;
			data.include(line.toSlideShowImageData());
		});
		return data;
	},
    
	buildSlides: function(){
		this.configData.each(function(item){
			new Element('img', {
				src: item.src,
				alt: item.alt
			}).inject(this.element);
		}, this);
	}
 
});

String.implement({
	toSlideShowImageData: function(){
		var match = this.match(/".+"/)
		, alt = match ? match[0].replace(/"/g,'') : ''
		, src = this.replace('"' + alt + '"', '').trim();
		return {alt: alt, src: src};
	}
});