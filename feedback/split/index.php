<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xml:lang="en">
    <head>
        <?php
	error_reporting(0);
		
 

$updata ="";
$fa="";
$cnt_fa="";
$se="";
$cnt_se="";
include("tiny_url.php");
include("split_url_function.php");

if(isset($_POST['update']))
{
$update=addslashes($_POST['update']);

    

}

?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="en-us" />
        <title>Tutorials</title>
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
    </head>
    <body spellcheck="false">
        <table align="center">
            <tbody>
			<tr>
			  <td style="padding-bottom:10px;" align="left"><span class="what">Split URL using a PHP function </span></td>
			</tr>
                <tr>
                    <td width="455" valign="top">
                    <form method="post" action="">
                        <table width="100%" bgcolor="#ffffff">
                            <tbody>
                                <tr>
                                    <td><span class="what">What are you doing?</span> 				<a style="color: rgb(0, 102, 204); font-size: 12px;" target="_blank" href="http://twitter.com/foxscan">My twitter profile</a>  &nbsp; <a style="color: rgb(0, 0, 0); font-size: 12px;" target="_blank" href="http://9lessons.blogspot.com">9Lessons tutorials </a></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp;<textarea id="update" name="update" class="box" maxlength="145" cols="55" rows="3"></textarea></td>
                                </tr>
                                <tr>
                                    <td align="right"><input type="submit" class="update_button" id="mybut" value=" Update " />&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    </td>
                </tr>
                <tr>
                    <td>
                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                        <tbody>
                            <tr class="record">
                                <td width="51"><img height="50" width="50" src="http://9lessons.110mb.com/foxscan.jpg" alt="" /></td>
                                <td width="7" align="right">&nbsp;</td>
                                <td width="376" class="content"><strong style="color: rgb(0, 102, 153);">foxscan/</strong>   
<?php echo split_tiny_function($update); ?>
								
								</td>
                                <td width="28" bgcolor="#ffffff"><a class="delbutton" id="<?php echo $row["ms_id"]; ?>" href="#"><img style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" src="http://9lessons.110mb.com/trash.png" alt="" /></a></td>
                            </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td><a href="http://9lessons.blogspot.com/2009/01/split-url-from-sentence-using-php.html">Original Tutorial Link</a></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>