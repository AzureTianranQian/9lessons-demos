function baselineAlign(options) {

	// Create some configuration options, and give sensible defaults
	var settings = $.extend({
		'container' : false // specify a container to apply the margin to rather than the image itself
	}, options);

	return this.each(function(run) {
		var this_img = $(this);

		// we don't want to add a margin to images that are displayed inline, so exit now if this one is
		if(this_img.css('display') === 'inline') { return; }

		// if we're resizing there may be in-line styles applied already, reset them
		this_img.attr('style','');

		// shrink the image height to a whole pixel value to avoid rounding errors in the layout engine
		// NOTE, this introduces a very slight (un-noticable) difference in aspect ratio.
		var img_height = Math.floor(this_img.height());
		this_img.css("height",img_height);

		/* setup variables */
		var baseline        = parseFloat($("html").css("line-height").replace("px",""));
		var fontsize        = parseFloat($("html").css("font-size").replace("px",""));
		var total_footprint = img_height;

		// IF: the image is inside a container box
		if(settings.container !== false &&
			 this_img.parents(settings.container).length > 0
			){
				// find the specified container element
				var container = this_img.parents(settings.container);

				// reset JS applied margins on the container
				container.attr('style','');

				// expand the container height to a whole pixel value to avoid rounding errors in the layout engine
				var container_height = Math.ceil(container.height());
				container.css("height",container_height);

				total_footprint = Math.floor(container.outerHeight(false));
		}

		var remainder = parseFloat(total_footprint%baseline);
		var offset    = parseFloat(baseline-remainder);
		
		// avoid the text wrapping directly underneath, there needs to be at least 1/4 line-height gap
		if(offset<(baseline/4)) {	offset = offset+baseline; }

		// now apply the margin

		// we weren't passed a container, apply to the image
		if(settings.container === false) {
			this_img.css("margin-bottom",offset+"px");
			return; // stop processing this loop
		}

		// we were passed a container, which exists, so apply it to that
		if(this_img.parents(settings.container).length > 0) {
			this_img.parents(settings.container).css("margin-bottom",offset+"px"); 
			return;
		}

		// fallback in case the container doesn't exist, apply to the image itself
		this_img.css("margin-bottom",offset+"px");
	});
};