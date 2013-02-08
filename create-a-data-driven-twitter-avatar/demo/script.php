<?php
	// uses https://github.com/jmathai/twitter-async
	include 'EpiCurl.php';
	include 'EpiOAuth.php';
	include 'EpiTwitter.php';
	
	// Calculate which image to show, based upon the inbox count.
	$inboxcount=0;
	if ( isset( $_GET['count'] ) ) $inboxcount = (int)$_GET['count'];
	if ( $inboxcount < 10 ) {
		$imagename = 'n' . $inboxcount;
	} else {
		$imagename = ceil( $inboxcount/10 );
		if ($imagename > 5 ) $ imagename = 5;
	}
	$filename = dirname( __FILE__ ) . '/' . $imagename . '.png';
	
	// push the image to twitter
	// you’ll need to get your various twitter API keys from https://dev.twitter.com/apps/new
	$twitterObj = new EpiTwitter( $consumer_key, $consumer_secret, $token, $secret );
	$twitterObj->post( '/account/update_profile_image.json', array( '@image' => "@$filename" ) );

	// yes, it is really THAT easy
?>
