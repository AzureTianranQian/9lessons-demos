<?php

// This is a sample code in case you wish to check the username from a mysql db table

if(isset($_POST['update']))
{
$update=addslashes($_POST['update']);

include("dbconfig.php");



     if(strlen($update)>0)
	 {

    $query = "insert into {$prefix}updates(message,post_date)VALUES ('$update',NOW())";
												
             mysql_query( $query);
	}


}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
 <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta content="en-us" http-equiv="Content-Language">

    <title>Tutorials</title>
    
   
   


	  
	  <script type="text/javascript">
String.prototype.parseURL = function() {
	return this.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&\?\/.=]+/, function(url) {
		
		
		return url.link(url);
		
			});
};
</script>


 <style type="text/css">
body {
     color: #000000;
	 background-color:#CCCCCC;
     background:#cccccc fixed repeat top left;
     font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
	 font-size:14px;
	}
	a
	{
	color:#FF6633;
	}
	.what
	{
	font-family:Arial, Helvetica, sans-serif;font-size:1.30em; padding-left:10px;
	}
	
	.content
	{
	padding-left:10px; background-color:#fff; border-bottom:dashed #0066CC 1px;
	}
	
</style>

  </head><body>
  
       <table align="center">
          <tbody>
            <tr>            
			<td width='455' valign="top">
				  <form action="" method="post">
			  <table width="100%" bgcolor="#FFFFFF">
			    <tr>
			    <td>
			
				<span class="what">What are you doing?</span>
				<a href="http://twitter.com/foxscan" target="_blank" style="color:#0066CC; font-size:12px">My twitter profile</a>  &nbsp; <a href="http://9lessons.blogspot.com" target="_blank" style="color:#000; font-size:12px">9Lessons tutorials </a> </td>
			  </tr>
			  <tr><td>&nbsp;&nbsp;<textarea rows="3" cols="55"  maxlength="145" class="box" name="update" id="update" ></textarea> </td></tr>
			  <tr>
			    <td align="right">
			  <input type="submit" value=" Update " id="mybut" class="update_button" />&nbsp; 
			  </td></tr>
			  
		    </table></form>
	
			  
			  </td></tr><tr><td>
			  
			 
					  
			  <table width="100%" border="0" cellpadding="0" cellspacing="0">
			  
			  <?php 
	 
	 include("dbconfig.php");
 $query4="select * from updates order by ms_id desc";
	  $result4 = mysql_query($query4);

while($row=mysql_fetch_array($result4))
{
$message=stripslashes($row["message"]);			
?>
<tr class="record">
<td width="51"><img src="foxscan.jpg" width="50" height="50"/></td>
<td width="7" align="right" ></td>
<td width="376" class="content">
<strong style="color:#006699;">foxscan/</strong>
<script type="text/javascript">
var test = "<?php echo $message; ?>";
document.write(test.parseURL());
</script>
</td>
<TD width="28" bgcolor="#FFFFFF"><a href="#" id="<?php echo $row["ms_id"]; ?>" class="delbutton"><img src="trash.png" style="background:#FFFFFF"/></a></TD>
 
<?php
 } 
 
 ?>
			
</table>
			  
 </div>
</td>  </tr>
          </tbody>
    </table>
      

      
  </div>
  
  <script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "POST",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>


  </body></html>