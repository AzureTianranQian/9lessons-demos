/*
---

name: Loop

description: Runs a class method on a periodical

license: MIT-style license.

authors: Ryan Florence <http://ryanflorence.com>

docs: http://moodocs.net/rpflo/mootools-rpflo/Loop

requires:
- Core/Class

provides: [Loop]

...
*/

var Loop = new Class({

	loopCount: 0,
	isStopped: true,
	isLooping: false,
	loopMethod: function(){},

	setLoop: function(fn, delay){
		wasLooping = this.isLooping;
		if (wasLooping) this.stopLoop();
		this.loopMethod = fn;
		this.loopDelay = delay || 3000;
		if (wasLooping) this.startLoop();
		return this;
	},

	stopLoop: function(){
		this.isStopped = true;
		this.isLooping = false;
		clearInterval(this.periodical);
		return this;
	},

	startLoop: function(delay){
		if (this.isStopped){
			var delay = (delay) ? delay : this.loopDelay;
			this.isStopped = false;
			this.isLooping = true;
			this.periodical = this.looper.periodical(delay, this);
		};
		return this;
	},

	resetLoop: function(){
		this.loopCount = 0;
		return this;
	},

	looper: function(){
		this.loopCount++;
		this.loopMethod(this.loopCount);
		return this;
	}

});