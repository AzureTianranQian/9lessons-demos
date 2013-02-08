<?php
/**
* mod_mfreferral.php ,v 1.0
* @copyright (C) 2008 Marcofolio.net
* http://www.marcofolio.net/
*
* Joomla! 1.0.x Module
* MF Referral allows you to display a personal message to users
*  by locating where they came from
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

	/**
	* Initalize the variables
	**/
	
	// Textbox settings
	$box_bgcolor = $params->def( 'box_bgcolor', 'EEF0EF' );
	$box_useImage = $params->def( 'box_useImage', '1' );
	$box_txtStyle = $params->def( 'box_txtStyle', '2' );
	// 1 = Bold, 2 = Italic, 3 = Underline
	// 4 = Bold + Italic, 5 = Bold + Underline
	// 6 = Italic + Underline, 7 = Bold, Italic, Underline
	$box_txtAlign = $params->def( 'box_txtAlign', 'left' );
	$box_txtColor = $params->def( 'box_txtColor', 'CC3300' );
	$box_txtSize = $params->def( 'box_txtSize', '10' );
	$box_paddingTop = $params->def( 'box_paddingTop', '5' );
	$box_paddingRight = $params->def( 'box_paddingRight', '20' );
	$box_paddingBottom = $params->def( 'box_paddingBottom', '5' );
	$box_paddingLeft = $params->def( 'box_paddingLeft', '60' );
	$box_useBorderTop = $params->def( 'box_useBorderTop', '1' );
	$box_useBorderRight = $params->def( 'box_useBorderRight', '0' );
	$box_useBorderBottom = $params->def( 'box_useBorderBottom', '1' );
	$box_useBorderLeft = $params->def( 'box_useBorderLeft', '0' );
	$box_borderSize = $params->def( 'box_borderSize', '2' );
	$box_borderColor = $params->def( 'box_borderColor', '666666' );
	$box_borderStyle = $params->def( 'box_borderStyle', 'solid' );
	$box_button = $params->def( 'box_button', 'small' );

	// Referral settings
	$ref_new = $params->def( 'ref_new', '1' );
	$ref_new_msg = $params->def( 'ref_new_msg', 'You are new! If you like it here, please subscribe to my feed.' );
	$ref_new_icon = $params->def( 'ref_new_icon', 'rss.png' );

	// Social bookmarking websites
	$ref_digg = $params->def( 'ref_digg', '1' );
	$ref_digg_msg = $params->def( 'ref_digg_msg', 'Welcome <strong>Digg</strong> user! If you like this article, please consider a digg.' );
	$ref_digg_button = $params->def( 'ref_digg_button', '1' );
	$ref_reddit = $params->def( 'ref_reddit', '1' );
	$ref_reddit_msg = $params->def( 'ref_reddit_msg', 'Welcome <strong>Reddit</strong> user! If you like this article, please give me some points.' );
	$ref_reddit_button = $params->def( 'ref_reddit_button', '1' );
	$ref_delicious = $params->def( 'ref_delicious', '1' );
	$ref_delicious_msg = $params->def( 'ref_delicious_msg', 'Welcome <strong>del.icio.us</strong> user! Do not forget to save this page to your bookmarks.' );
	$ref_facebook = $params->def( 'ref_facebook', '1' );
	$ref_facebook_msg = $params->def( 'ref_facebook_msg', 'Welcome <strong>Facebook</strong> user!' );
	$ref_slashdot = $params->def( 'ref_slashdot', '1' );
	$ref_slashdot_msg = $params->def( 'ref_slashdot_msg', 'Welcome <strong>Slashdot</strong> user!' );
	$ref_technorati = $params->def( 'ref_technorati', '1' );
	$ref_technorati_msg = $params->def( 'ref_technorati_msg', 'Welcome <strong>Technorati</strong> user!' );
	$ref_stumbleupon = $params->def( 'ref_stumbleupon', '1' );
	$ref_stumbleupon_msg = $params->def( 'ref_stumbleupon_msg', 'Welcome <strong>StumbleUpon</strong> user! If you like this article, simply give it a thumbs up.' );
	$ref_fark = $params->def( 'ref_fark', '1' );
	$ref_fark_msg = $params->def( 'ref_fark_msg', 'Welcome <strong>Fark</strong> user!' );
	$ref_newsvine = $params->def( 'ref_newsvine', '1' );
	$ref_newsvine_msg = $params->def( 'ref_newsvine_msg', 'Welcome <strong>Newsvine</strong> user!' );
	$ref_blinklist = $params->def( 'ref_blinklist', '1' );
	$ref_blinklist_msg = $params->def( 'ref_blinklist_msg', 'Welcome <strong>Blinklist</strong> user!' );
	$ref_propeller = $params->def( 'ref_propeller', '1' );
	$ref_propeller_msg = $params->def( 'ref_propeller_msg', 'Welcome <strong>Propeller</strong> user!' );
	$ref_mybloglog = $params->def( 'ref_mybloglog', '1' );
	$ref_mybloglog_msg = $params->def( 'ref_mybloglog_msg', 'Welcome <strong>MyBlogLog</strong> user!' );
	$ref_magnolia = $params->def( 'ref_magnolia', '1' );
	$ref_magnolia_msg = $params->def( 'ref_magnolia_msg', 'Welcome <strong>Ma.gnolia</strong> user!' );
	$ref_squidoo = $params->def( 'ref_squidoo', '1' );
	$ref_squidoo_msg = $params->def( 'ref_squidoo_msg', 'Welcome <strong>Squidoo</strong> user!' );
	$ref_blogmarks = $params->def( 'ref_blogmarks', '1' );
	$ref_blogmarks_msg = $params->def( 'ref_blogmarks_msg', 'Welcome <strong>Blogmarks</strong> user!' );
	$ref_simpy = $params->def( 'ref_simpy', '1' );
	$ref_simpy_msg = $params->def( 'ref_simpy_msg', 'Welcome <strong>Simpy</strong> user!' );
	$ref_shoutwire = $params->def( 'ref_shoutwire', '1' );
	$ref_shoutwire_msg = $params->def( 'ref_shoutwire_msg', 'Welcome <strong>Shoutwire</strong> user!' );
	$ref_tailrank = $params->def( 'ref_tailrank', '1' );
	$ref_tailrank_msg = $params->def( 'ref_tailrank_msg', 'Welcome <strong>Tailrank</strong> user!' );
	$ref_dzone = $params->def( 'ref_dzone', '1' );
	$ref_dzone_msg = $params->def( 'ref_dzone_msg', 'Welcome <strong>DZone</strong> user!' );
	$ref_furl = $params->def( 'ref_furl', '1' );
	$ref_furl_msg = $params->def( 'ref_furl_msg', 'Welcome <strong>Furl</strong> user!' );
	$ref_sphinn = $params->def( 'ref_sphinn', '1' );
	$ref_sphinn_msg = $params->def( 'ref_sphinn_msg', 'Welcome <strong>Sphinn</strong> user! Please sphinn this article.' );
	$ref_sphinn_button = $params->def( 'ref_sphinn_button', '1' );
	$ref_designfloat = $params->def( 'ref_designfloat', '1' );
	$ref_designfloat_msg = $params->def( 'ref_designfloat_msg', 'Welcome <strong>Designfloat</strong> user! Do not forget to float this article if you like it.' );
	$ref_designfloat_button = $params->def( 'ref_designfloat_button', '1' );

	// Search engines
	$ref_google = $params->def( 'ref_google', '1' );
	$ref_google_msg = $params->def( 'ref_google_msg', 'Welcome <strong>Google</strong> user! Did you find what you were looking for? Have a nice stay.' );
	$ref_live = $params->def( 'ref_live', '1' );
	$ref_live_msg = $params->def( 'ref_live_msg', 'Welcome <strong>Live</strong> user! Did you find what you were looking for? Have a nice stay.' );
	$ref_yahoo = $params->def( 'ref_yahoo', '1' );
	$ref_yahoo_msg = $params->def( 'ref_yahoo_msg', 'Welcome <strong>Yahoo</strong> user! Did you find what you were looking for? Have a nice stay.' );

	// Custom websites
	$ref_custom1 = $params->def( 'ref_custom1', '1' );
	$ref_custom1_url = $params->def( 'ref_custom1_url', 'marcofolio.net' );
	$ref_custom1_msg = $params->def( 'ref_custom1_msg', 'Welcome <strong>Marcofolio.net</strong> user! You are using the <strong>mfReferral</strong> module.' );
	$ref_custom1_icon = $params->def( 'ref_custom1_icon', 'marcofolio.png' );
	$ref_custom2 = $params->def( 'ref_custom2', '1' );
	$ref_custom2_url = $params->def( 'ref_custom2_url', 'feedburner.com' );
	$ref_custom2_msg = $params->def( 'ref_custom2_msg', 'Welcome back RSS feed reader! I am sure you will like this new article.' );
	$ref_custom2_icon = $params->def( 'ref_custom2_icon', 'rss.png' );
	$ref_custom3 = $params->def( 'ref_custom3', '1' );
	$ref_custom3_url = $params->def( 'ref_custom3_url', 'joomla.org' );
	$ref_custom3_msg = $params->def( 'ref_custom3_msg', 'Welcome <strong>Joomla!.org</strong> visitor. This is the <strong>mfReferral</strong> module by Marcofolio.net.' );
	$ref_custom3_icon = $params->def( 'ref_custom3_icon', 'joomla.png' );
	$ref_custom4 = $params->def( 'ref_custom4', '0' );
	$ref_custom4_url = $params->def( 'ref_custom4_url', '' );
	$ref_custom4_msg = $params->def( 'ref_custom4_msg', '' );
	$ref_custom4_icon = $params->def( 'ref_custom4_icon', '' );
	$ref_custom5 = $params->def( 'ref_custom5', '0' );
	$ref_custom5_url = $params->def( 'ref_custom5_url', '' );
	$ref_custom5_msg = $params->def( 'ref_custom5_msg', '' );
	$ref_custom5_icon = $params->def( 'ref_custom5_icon', '' );


	// Other websites
	$ref_blogrush = $params->def( 'ref_blogrush', '1' );
	$ref_blogrush_msg = $params->def( 'ref_blogrush_msg', 'Welcome <strong>BlogRush</strong> user! Feel free to subscribe to my RSS feed if you liked this article.' );

	// Fixing some variables for CSS
	$box_txtSize = $box_txtSize . "px";
	$box_borderSize = $box_borderSize . "px";
	$box_padding = $box_paddingTop . "px " . $box_paddingRight . "px " . $box_paddingBottom . "px " . $box_paddingLeft . "px";


	// Get the server HTTP Referer
	$referral = $_SERVER['HTTP_REFERER'];
	// All to lowercase
	$referral = strtolower($referral);

	// Only get the referral website
	$referral = explode ("/", $referral);
	$referral = $referral[2];

	// Remove www. from the Referer
	if (substr ($referral, 0, 4) == "www.")
	{
		$referral = substr ("$referral", 4);
	}

	// Remove subdomain from the Referer
	// Fix for fake subdomain of del.icio.us & ma.gnolia.com
	if ($referral != "del.icio.us" && $referral != "ma.gnolia.com")
	{
		$referral = explode (".", $referral);
		$i = count($referral);
		$referral = $referral[$i-2] . "." . $referral[$i-1];
	}

	// Fix to cover all Google domains, such as Google.com, Google.co.uk, Google.nl etc.
	if (substr ($referral, 0, 6) == "google")
	{
		$referral = "google";
	}

	/**
	* Start Referral checking
	**/
	$message = "";

	// Social Bookmarking Websites
	if ($referral == "digg.com" && $ref_digg = "1")
	{
		$message = $ref_digg_msg;
		$icon = "digg.png";
		if ($ref_digg_button == "1")
		{
			if ($box_button == "small")
			{
				$button = "<script type=\"text/javascript\">digg_skin = 'compact'; digg_window = 'new';</script><script src=\"http://digg.com/tools/diggthis.js\" type=\"text/javascript\"></script>";
			}
			else
			{
				$button = "<script src=\"http://digg.com/tools/diggthis.js\" type=\"text/javascript\"></script>";
			}
		}
	}
	else if ($referral == "reddit.com" && $ref_reddit = "1")
	{
		$message = $ref_reddit_msg;
		$icon = "reddit.png";
		if ($ref_reddit_button == "1")
		{
			if ($box_button == "small")
			{
				$button = "<script type=\"text/javascript\" src=\"http://reddit.com/button.js?t=1\"></script>";
			}
			else
			{
				$button = "<script type=\"text/javascript\" src=\"http://reddit.com/button.js?t=3\"></script>";
			}
		}
	}
	else if ($referral == "del.icio.us" && $ref_delicious = "1")
	{
		$message = $ref_delicious_msg;
		$icon = "delicious.png";
	}
	else if ($referral == "facebook.com" && $ref_facebook = "1")
	{
		$message = $ref_facebook_msg;
		$icon = "facebook.png";
	}
	else if ($referral == "slashdot.org" && $ref_slashdot = "1")
	{
		$message = $ref_slashdot_msg;
		$icon = "slashdot.png";
	}
	else if ($referral == "technorati.com" && $ref_technorati = "1")
	{
		$message = $ref_technorati_msg;
		$icon = "technorati.png";
	}
	else if ($referral == "stumbleupon.com" && $ref_stumbleupon = "1")
	{
		$message = $ref_stumbleupon_msg;
		$icon = "stumbleupon.png";
	}
	else if ($referral == "fark.com" && $ref_fark = "1")
	{
		$message = $ref_fark_msg;
		$icon = "fark.png";
	}
	else if ($referral == "newsvine.com" && $ref_newsvine = "1")
	{
		$message = $ref_newsvine_msg;
		$icon = "newsvine.png";
	}
	else if ($referral == "blinklist.com" && $ref_blinklist = "1")
	{
		$message = $ref_blinklist_msg;
		$icon = "blinklist.png";
	}
	else if ($referral == "propeller.com" && $ref_propeller = "1")
	{
		$message = $ref_propeller_msg;
		$icon = "propeller.png";
	}
	else if ($referral == "mybloglog.com" && $ref_mybloglog = "1")
	{
		$message = $ref_mybloglog_msg;
		$icon = "mybloglog.png";
	}
	else if ($referral == "ma.gnolia.com" && $ref_magnolia = "1")
	{
		$message = $ref_magnolia_msg;
		$icon = "magnolia.png";
	}
	else if ($referral == "squidoo.com" && $ref_squidoo = "1")
	{
		$message = $ref_squidoo_msg;
		$icon = "squidoo.png";
	}
	else if ($referral == "blogmarks.net" && $ref_blogmarks = "1")
	{
		$message = $ref_blogmarks_msg;
		$icon = "blogmarks.png";
	}
	else if ($referral == "simpy.com" && $ref_simpy = "1")
	{
		$message = $ref_simpy_msg;
		$icon = "simpy.png";
	}
	else if ($referral == "shoutwire.com" && $ref_shoutwire = "1")
	{
		$message = $ref_shoutwire_msg;
		$icon = "shoutwire.png";
	}
	else if ($referral == "tailrank.com" && $ref_tailrank = "1")
	{
		$message = $ref_tailrank_msg;
		$icon = "tailrank.png";
	}
	else if ($referral == "dzone.com" && $ref_dzone = "1")
	{
		$message = $ref_dzone_msg;
		$icon = "dzone.png";
	}
	else if ($referral == "furl.net" && $ref_furl = "1")
	{
		$message = $ref_furl_msg;
		$icon = "furl.png";
	}
	else if ($referral == "sphinn.com" && $ref_sphinn = "1")
	{
		$message = $ref_sphinn_msg;
		$icon = "sphinn.png";
		if ($ref_sphinn_button == "1")
		{
			$button = "<script type=\"text/javascript\" src=\"http://sphinn.com/evb/button.php\"></script>";
		}
	}
	else if ($referral == "designfloat.com" && $ref_designfloat = "1")
	{
		$message = $ref_designfloat_msg;
		$icon = "designfloat.png";
		if ($ref_designfloat_button == "1")
		{
			if ($box_button == "small")
			{
				$button = "<script type=\"text/javascript\" src=\"http://www.designfloat.com/evb/button.php\"></script>";
			}
			else
			{
				$button = "<script type=\"text/javascript\" src=\"http://www.designfloat.com/evb2/button.php\"></script>";
			}
		}
	}

	// Search engines
	else if ($referral == "google" && $ref_google = "1")
	{
		$message = $ref_google_msg;
		$icon = "google.png";
	}
	else if ($referral == "live.com" && $ref_live = "1")
	{
		$message = $ref_live_msg;
		$icon = "live.png";
	}
	else if ($referral == "yahoo.com" && $ref_yahoo = "1")
	{
		$message = $ref_yahoo_msg;
		$icon = "yahoo.png";
	}

	// Custom websites
	else if ($referral == $ref_custom1_url && $ref_custom1 = "1")
	{
		$message = $ref_custom1_msg;
		$icon = $ref_custom1_icon;
	}
	else if ($referral == $ref_custom2_url && $ref_custom2 = "1")
	{
		$message = $ref_custom2_msg;
		$icon = $ref_custom2_icon;
	}
	else if ($referral == $ref_custom3_url && $ref_custom3 = "1")
	{
		$message = $ref_custom3_msg;
		$icon = $ref_custom3_icon;
	}
	else if ($referral == $ref_custom4_url && $ref_custom4 = "1")
	{
		$message = $ref_custom4_msg;
		$icon = $ref_custom4_icon;
	}
	else if ($referral == $ref_custom5_url && $ref_custom5 = "1")
	{
		$message = $ref_custom5_msg;
		$icon = $ref_custom5_icon;
	}


	// Other websites
	else if ($referral == "blogrush.com" && $ref_blogrush = "1")
	{
		$message = $ref_blogrush_msg;
		$icon = "blogrush.png";
	}
	else if ($ref_new = "1")
	{
		$message = $ref_new_msg;
		$icon = $ref_new_icon;
	}

	// Exclude your own domain or direct page loading
	$urlstring = $_SERVER['HTTP_HOST'];
	preg_match("/^(http:\/\/)?([^\/]+)/i", $urlstring, $result);
	$domain = $result[2];
	
	// Remove www. from the domain
	if (substr ($domain, 0, 4) == "www.")
	{
		$domain = substr ("$domain", 4);
	}

	// Remove any subdomain names domain
	$domain = explode (".", $domain);
	$i = count($domain);
	$domain = $domain[$i-2] . "." . $domain[$i-1];
	
	if ($referral != $domain && $referral != "." && $message != "")
	{
		// Create the message box
		echo "<!-- Start mfReferral Joomla! module by Marcofolio.net -->\n";
		echo "<p style=\"background: #$box_bgcolor";
		if ($box_useImage == "1")
		{
			echo " url(modules/mod_mfreferral/$icon) center no-repeat;";
			echo " background-position: 15px 50%;";
		}
		else
		{
			echo ";";
		}
		echo " text-align: $box_txtAlign;";
		echo "color: #$box_txtColor;";
		if ($box_txtStyle == "1" || $box_txtStyle == "4" || $box_txtStyle == "5" || $box_txtStyle == "7")
		{
			echo "font-weight: bold;";
		}
		if ($box_txtStyle == "2" || $box_txtStyle == "4" || $box_txtStyle == "6" || $box_txtStyle == "7")
		{
			echo "font-style: italic;";
		}
		if ($box_txtStyle == "3" || $box_txtStyle == "5" || $box_txtStyle == "6" || $box_txtStyle == "7")
		{
			echo "text-decoration: underline;";
		}
		echo "font-size: $box_txtSize;";
		echo "padding: $box_padding;";
		if ($box_useBorderTop == "1")
		{
			echo "border-top: $box_borderSize $box_borderStyle #$box_borderColor;";
		}
		if ($box_useBorderRight == "1")
		{
			echo "border-right: $box_borderSize $box_borderStyle #$box_borderColor;";
		}
		if ($box_useBorderBottom == "1")
		{
			echo "border-bottom: $box_borderSize $box_borderStyle #$box_borderColor;";
		}
		if ($box_useBorderLeft == "1")
		{
			echo "border-left: $box_borderSize $box_borderStyle #$box_borderColor;";
		}
		echo "\">\n$button$message\n</p>";
		echo "\n<!-- End mfReferral Joomla! module by Marcofolio.net -->";
	}
?>