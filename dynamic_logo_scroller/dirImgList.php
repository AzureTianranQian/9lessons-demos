<?php
// Set which extensions should be approved in the XML file
$extensions = array
(
  'jpg', 'JPG',
  'png', 'PNG',
  'gif', 'GIF',
  'bmp', 'BMP'
);
 
// Echo the header (XML)
header("Content-Type: application/xml;charset=ISO-8859-1");
 
// Prepare the XML file
echo '<?xml version="1.0" encoding="ISO-8859-1"?>' . "\r\n";
echo "<images>\r\n";
 
// Get the files from the current directory
if (file_exists ("./"))
{
  if (is_dir ("./"))
  {
    $dh = opendir ("./") or die (" Directory Open failed !");
    
    // Prepare the images array
    $imgs = array();
    while ($file = readdir ($dh))
    {
      // Only get the files ending with the correct extension
      if ( in_array( substr($file, -3), $extensions ) )
      {
        array_push($imgs, $file);
      }
    }
  Closedir ($dh);
  }
  
  // Sort the array
  sort($imgs);
  
  // Reverse the array so Flash will display it
  // In the correct alfabatical way
  $imgs = array_reverse($imgs);
  
  // Crazy work-around to show all images
  // by adding an empty XML node
  // Hey, it works ;).
  echo ('   <image src="" link="" />');
  
  foreach ($imgs as $img)
  {
  	// Get the URL
  	$url = explode("___url_", $img);
  	// Remove the extension
  	$url = substr($url[1], 0, -4);
  	
    // Return all images in XML format
    echo ('   <image src="' . $img . '" link="'. $url .'" />');
    echo "\r\n";
  }
}
echo "</images>";
?>