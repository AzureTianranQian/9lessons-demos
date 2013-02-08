<?php
/**
* mod_mfdockmenu.php ,v 1.0
* @copyright (C) 2008 Marcofolio.net
* http://www.marcofolio.net/
*
* Joomla 1.0.x Module
* MF DockMenu is a module that allows you to create a Fish Eye menu
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

// Define parameters
$nritems = $params->def( 'nritems' );
$maxwidth = $params->def( 'maxwidth' );
$itemwidth = $params->def( 'itemwidth' );
$proximity = $params->def( 'proximity' );
$menutype = $params->def( 'menutype' );
$nameList[0] = $params->def( 'item1name' );
$imgList[0] = $params->def( 'item1img' );
$urlList[0] = $params->def( 'item1url' );
$nameList[1] = $params->def( 'item2name' );
$imgList[1] = $params->def( 'item2img' );
$urlList[1] = $params->def( 'item2url' );
$nameList[2] = $params->def( 'item3name' );
$imgList[2] = $params->def( 'item3img' );
$urlList[2] = $params->def( 'item3url' );
$nameList[3] = $params->def( 'item4name' );
$imgList[3] = $params->def( 'item4img' );
$urlList[3] = $params->def( 'item4url' );
$nameList[4] = $params->def( 'item5name' );
$imgList[4] = $params->def( 'item5img' );
$urlList[4] = $params->def( 'item5url' );
$nameList[5] = $params->def( 'item6name' );
$imgList[5] = $params->def( 'item6img' );
$urlList[5] = $params->def( 'item6url' );
$nameList[6] = $params->def( 'item7name' );
$imgList[6] = $params->def( 'item7img' );
$urlList[6] = $params->def( 'item7url' );
$nameList[7] = $params->def( 'item8name' );
$imgList[7] = $params->def( 'item8img' );
$urlList[7] = $params->def( 'item8url' );
$nameList[8] = $params->def( 'item9name' );
$imgList[8] = $params->def( 'item9img' );
$urlList[8] = $params->def( 'item9url' );
$nameList[9] = $params->def( 'item10name' );
$imgList[9] = $params->def( 'item10img' );
$urlList[9] = $params->def( 'item10url' );

if ($nritems == "" || $nritems > 10 || $nritems < 1)
{
	echo "<p>Number of items not correct, please check your module parameters.</p>";
}
else
{
	if ($menutype == 0)
	{
		echo "<div class=\"dock\" id=\"dock\">";
		echo "  <div class=\"dock-container\">";
		for ($i = 0; $i < $nritems; $i++)
		{
			echo "<a class=\"dock-item\" href=\"$urlList[$i]\"><img src=\"$GLOBALS[mosConfig_live_site]/modules/mod_mfdockmenu/images/$imgList[$i]\" alt=\"$nameList[$i]\" /><span>$nameList[$i]</span></a>\n";
		}
	}
	else if  ($menutype == 1)
	{
		echo "<div class=\"dock\" id=\"dock2\">";
		echo "  <div class=\"dock-container2\">";
		for ($i = 0; $i < $nritems; $i++)
		{
			echo "<a class=\"dock-item2\" href=\"$urlList[$i]\"><span>$nameList[$i]</span><img src=\"$GLOBALS[mosConfig_live_site]/modules/mod_mfdockmenu/images/$imgList[$i]\" alt=\"$nameList[$i]\" /></a>\n";
		}
	}
	echo "</div>";
	echo "</div>";
}
?>

<script type="text/javascript">
	$(document).ready(
		function()
		{
			$('#dock').Fisheye(
				{
					maxWidth: <?php echo $maxwidth; ?>,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container',
					itemWidth: <?php echo $itemwidth; ?>,
					proximity: <?php echo $proximity; ?>,
					halign : 'center'
				}
			)
			$('#dock2').Fisheye(
				{
					maxWidth: <?php echo $maxwidth; ?>,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container2',
					itemWidth: <?php echo $itemwidth; ?>,
					proximity: <?php echo $proximity; ?>,
					alignment : 'left',
					valign: 'bottom',
					halign : 'center'
				}
			)
		}
	);
</script>