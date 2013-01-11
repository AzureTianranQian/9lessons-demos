<?php
$report="";
$error="";
  require ("smtpclass.php");
  
  if($_SERVER["REQUEST_METHOD"] == "POST")
	{
$smtp=new SMTPMAIL;
$from=$_POST['email']; 
 
$body=$_POST['msg']; 
 
 
  $to="Srinivas<srinivas@adstag.in>";
  $cc="";
  //$cc="srinivas<srinivas@inbox.com>;sinu@zenbe.com";
  $subject="Feedback from tiggin";
  

  if(!$smtp->send_smtp_mail($to,$subject,$body,$cc,$from))
	$error="Error in sending mail!<BR>Error: ".$smtp->error;
  else
	$report="Mail sent succesfully!";
	
	}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SMTP Feedback with JQuery slide effect</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	$(".button-slide").click(function(){
		$("#board").slideToggle("slow");
		$(this).toggleClass("active"); return false;
	});
	
	 
});
</script>

<style type="text/css">
body {
	margin: 0 auto;
	padding: 0;
	width: 360px;
	font: 75%/120% Arial, Helvetica, sans-serif;
}

#board {
	background:#dedede;
	height: 205px;display: none;
	width: 300px;border-bottom: solid 4px #006699;
	position:absolute;
	}
.button-slide {
	text-align: center;background-color:#006699;
	width: 94px;height: 21px;
	padding: 6px 6px 0 0;margin: 0 auto;display: block;
	font: bold 120%/100% Arial, Helvetica, sans-serif;
	color: #fff;text-decoration: none;
	position:fixed;
  }

</style>
</head><body>

<div style="display: none;" id="board" align="center"><br />
	<form id="form1" name="form1" method="post" action="">
  <table>
  <tr><td height="25px"></td></tr>
  <tr><td>
  Your Email :</td>
  <td>
  <input type="text" name="email" size="25"/>
  </td>
  
  <tr>
  <td valign="top" align="right">Message :</td><td>
  <textarea name="msg"  rows="5" cols="23"></textarea>
  </td>
  <tr><td>
  </td><td align="left"><input type="submit" value=" Send " /><?php echo $report; echo $error; ?></td>
  </tr></table>
  
</form>
</div>
<div align="center">
<a href="#" class="button-slide">Feedback </a></div><br /><br />

<div>
<h3>Click Feedback Button More Tutorials visit <a href="http://9lessons.blogspot.com" style="color:#0099CC">9lessons.blogspot.com</a></h3>
<br />
<h3>Original Tutorial Link <a href="http://9lessons.blogspot.com/2009/02/smtp-feedback-mail-class-with-jquery.html" style="color:#0099CC">Link..........@@</a></h3>
<br />
<h3>All 9lessons blog demos <a href="http://9lessons.110mb.com" style="color:#0099CC">9lessons.110mb.com</a></h3>
</div>
</body></html>