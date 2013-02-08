<?php
/**
* mod_mftechnoratichart.php ,v 1.0
* @copyright (C) 2008 Marcofolio.net
* http://www.marcofolio.net/
*
* Joomla 1.0.x Module
* MF TechnoratiChart allows you to show off your Technorati Blog Reactions in a nice chart
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

$blogurl = $params->def( 'blogurl' );
$width = $params->def( 'width' );
$height = $params->def( 'height' );
$nrdays = $params->def( 'nrdays' );
$link = $params->def( 'link' );
$blogreactions = $params->def( 'blogreactions' );

if ($blogurl == "")
{
	echo "<p>No blog URL defined, please check your module parameters.</p>";
}
else
{
	if ($link != "" && $blogreactions == 0)
	{
		echo "<a href=\"$link\" title=\"Technorati Chart of $blogurl\" target=\"_blank\">";
	}
	else if ($blogreactions == 1)
	{
		echo "<a href=\"http://technorati.com/blogs/$blogurl?reactions\" title=\"Technorati Chart of $blogurl\" target=\"_blank\">";
	}
	?>
		<img src="http://www.technorati.com/chartimg?q=<?php echo $blogurl; ?>&days=<?php echo $nrdays; ?>&width=<?php echo $width; ?>&height=<?php echo $height; ?>&type=url" border="0" alt="Technorati Chart of <?php $blogurl?>" />
	<?php
	if ($link != "" && $blogreactions == 0)
	{
		echo "</a>";
	}
	else if ($blogreactions == 1)
	{
		echo "</a>";
	}
}
?>
