<?php

  require ("smtpclass.php");
  
  $smtp=new SMTPMAIL;
  
  $from="tiggin<support@tiggin.info>";
  $to="srinivas<srinivas@adstag.in>";
  $cc="";
  //$cc="srinivas<srinivas@inbox.com>;sinu@zenbe.com";
  $subject="Welcome to Tiggin World";
  $body="This is test mail.don't reply it. verification problem..";

  if(!$smtp->send_smtp_mail($to,$subject,$body,$cc,$from))
	echo "Error in sending mail!<BR>Error: ".$smtp->error;
  else
	echo "Mail sent succesfully!";

?>