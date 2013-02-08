<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=Content-type content="text/html; charset=utf-8">
	<title>index.html</title>
	
	<link rel="stylesheet" href="stylesheets/site.css" type="text/css" media="screen" charset="utf-8">
	
</head>
<body>

<div id=slideshow></div>


<?php
include 'lib/packager/packager.php';
$pkg = new Packager(array(
	"javascripts/mootools-core", 
	"javascripts/mootools-more",
	"javascripts/loop",
	"javascripts/slideshow",
	"javascripts/mootools-custom-event",
	"javascripts/mootools-mobile"
));

/*
write the file before including it in the HTML
you don't have to specify much, Packager figures
out the dependency maps for each file
*/
$pkg->write_from_components("javascripts/build.js", array(
	'Core/DOMReady',
	'Core/Request',
	'SlideShow/SlideShow.FancyPants', 
	'Mobile/Swipe', 
	'Mobile/Mouse'
));

/*
In production you'd remove all this Packager stuff and create your
custom build before deploying the web site.  There's no sense building 
every time somebody visits the page.

Packager has a command line interface for this task. Check out the readme
in /lib/packager of this demo
*/

?><!-- include the JavaScript file -->
<script type="text/javascript" charset="utf-8" src="javascripts/build.js"></script>
<script type="text/javascript" charset="utf-8" src="javascripts/app.js"></script>

</body>
</html>
