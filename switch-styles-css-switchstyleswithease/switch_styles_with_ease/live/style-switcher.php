<?php session_start(); require_once("include.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />

    <!-- This is our default style-sheet, it is Persistent and always enabled, it holds default values and the default layout styles, this one should always be here and 'on' -->
    <link rel="stylesheet" type="text/css" href="css/main.css"/>


    <!-- This is our Preferred style-sheet, it is enabled when the page is loaded, this is the one we want to overide with the swicther.We can do this by changing it to rel="alternate stylesheet" and replace which ever one selected (from below) the default by setting it to rel="stylesheet"> -->
    <?php outputStylesheet("default", "css/default-light.css"); ?>
    <?php outputStylesheet("relaxed-light", "css/relaxed-light.css"); ?>
    <?php outputStylesheet("dark", "css/default-dark.css"); ?>
    <?php outputStylesheet("relaxed-dark", "css/relaxed-dark.css"); ?>




    <!-- When either of the default layouts are selected IE6 should use ie-default, same goes for the relaxed layouts. -->

    <!--[if lte IE 6]>

     <?php outputStylesheet("default", "css/ie-default.css"); ?>
     <?php outputStylesheet("relaxed-light", "css/ie-relaxed.css"); ?>
     <?php outputStylesheet("dark", "css/ie-default.css"); ?>
     <?php outputStylesheet("relaxed-dark", "css/ie-relaxed.css"); ?>

    <![endif]-->


    <link rel="stylesheet" media="print" type="text/css" href="css/print.css"/>
    <title>.net style-switcher - provided by Nomensa</title>
  </head>
  <body>

    <div id="outer-wrap">

      <div id="header">
        <div id="switcher">
          <p>Display preference:</p>
          <!-- These are the switcher controls, the current one should have a strong tag instead of a link, they are in the same order as the stylesheets, i.e they relate to each other directly -->
          <ul>
            <?php outputSwitchControl("default", "Light colours with the default layout"); ?>
            <?php outputSwitchControl("relaxed-light", "Light colours with a relaxed layout", "Light colours with the default layout"); ?>
            <?php outputSwitchControl("dark", "Dark colours with the default layout"); ?>
            <?php outputSwitchControl("relaxed-dark", "Dark colours with a relaxed layout"); ?>

            <!--li class="default-light"><strong title="Light with default layout">Light colours with the default layout.</strong></li>
            <li class="relaxed-light"><a href="#" title="Light with relaxed layout">Light colours with a relaxed layout.</a></li>
            <li class="default-dark"><a href="#" title="Dark with default layout">Dark colours with the default layout</a></li>
            <li class="relaxed-dark"><a href="#" title="Dark with relaxed layout">Dark colours with a relaxed layout</a></li-->
          </ul>
        </div>

        <a href="#" id="dot-net-logo">
          <img src="#" alt=".net magazine" />
        </a>

        <a href="#" id="nomensa-logo">
          <img src="#" alt="Nomensa" />
        </a>
      </div><!-- end header -->


      <div id="navigation">
      <h2 class="rm">Main Menu</h2>
       <ul>
         <li><strong>home</strong></li>
         <li><a href="http://www.nomensa.com/contact.html">contact nomensa</a></li>
       </ul>
      </div><!-- end navigation -->

        <div id="content-wrapper">
          <div id="content">

            <h1><span class="dot">.</span>net style switcher <span class="text-small">provided by <a href="http://www.nomensa.com/">Nomensa</a></span></h1>

            <p>.net has commissioned Nomensa to provide expert opinion about creating a style-switcher for a website, in the form of a tutorial for its readers. In issue 177 of <a href="http://www.netmag.co.uk/">.net magazine</a> you will find the expert opinion from one of Nomensa's web accessibility experts, Mark Napthine. Mark provides you with the reasons and benefits of having a style-switcher implemented onto your website, and the knowledge on how to create a simple style-switcher yourself (this working example has even provided for you!)</p>

            <h2>About Nomensa</h2>

            <p>Nomensa are the digital design consultancy specialising in <a href="http://www.nomensa.com/usability.html">web usability</a> and <a href="http://www.nomensa.com/accessibility.html">web accessibility</a>. We dramatically increase our clients' performance in digital channels through customer-focused research and design. And the results?.....Our recommendations have helped our clients more than double website page impressions, triple website registrations, double sales conversions and triple website revenue.</p>

            <h2>How Nomensa can help</h2>
            <p>Although simple code snippets have been provided as part of the .net tutorial, we understand that creating a bespoke style-switcher can still be a daunting task, or simply a task that your web team does not have time to execute. Therefore, if you would like to discuss Nomensa helping you to implement a style-switcher onto your website, contact Caroline Risk today at <a href="mailto:crisk@nomensa.com">crisk@nomensa.com</a> or 0117 929 7333.</p>

          </div><!-- end content -->

          <div id="related">
            <h2 class="rm">Related Information</h2>
            <img src="images/common/net-mag.jpg" alt="The latest cover of .net magazine" />
            <span><a href="http://www.netmag.co.uk/">.net magazine</a> | <a href="http://www.netmag.co.uk/zine/latest-issue/issue-177">latest issue</a></span>
            <h3>Issue 177</h3>
            <p>.net issue 177 is now on sale! Discover how to build a style switcher.</p>
            <br class="cl"/>
          </div><!-- end related -->

        </div><!-- end content-wrapper -->

      <br class="cl"/>

      <div id="footer">
        <ul>
          <li>Tel. +44 (0)117 929 7333 |</li>
          <li><a href="mailto:info@nomensa.com">info@nomensa.com</a> |</li>
          <li>&copy; <a href="http://www.nomensa.com/">Nomensa</a> 2008</li>
        </ul>
      </div><!-- end footer -->

    </div><!-- end outer-wrap -->
  </body>
</html>
