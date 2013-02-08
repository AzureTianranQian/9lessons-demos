  <?php

     $style = "default";

     /*
       First check the request for a style parameter. If there is a request parameter
       set, then use this style and set it in the session for future requests

       If no request param specified then look for a value stored in the session.
       If no value then use defualt above.
     */


     if($_REQUEST['style']) {
         $style = $_REQUEST['style'];
         $_SESSION['style'] = $style;
     } else if($_SESSION['style']) {
         $style = $_SESSION['style'];
     }

     function outputStylesheet($title, $href) {
         global $style;

         $rel = $title == $style? "stylesheet" : "alternate stylesheet";
         echo "<link rel=\"$rel\" title=\"$title\" type=\"text/css\" href=\"$href\"/>\n\n";
     }


     function outputSwitchControl($title, $description) {
         global $style;

         echo "<li class=\"$title\">";

         if($style == $title) {

             echo "<strong title=\"$description\">$title</strong>";
         } else {
             echo "<a href=\"?style=$title\" title=\"$description\">$description</a>\n";
         }
         echo "</li>";
     }


   ?>



