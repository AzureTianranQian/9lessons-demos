var myScroller1 = new Scroller(0, 0, 385,130, 0, 0); //(xpos, ypos, width, height, border, padding)


myScroller1.addItem("<span><h3><a href='http://9lessons.blogspot.com/2009/02/smtp-feedback-mail-class-with-jquery.html'>SMTP Feedback Mail class with jQuery Slide Effect.</a></h3></span><span>This post about feedback mail with nice slide effect using php SMTP class and jQuery. It's very useful to add your php websites as like contact/feedback page</span>");

myScroller1.addItem("<span><h3><a href='http://9lessons.blogspot.com/2009/02/displaying-rss-feed-with-php.html'>Displaying RSS Feed with PHP.</a></h3></span><span>This article explains to displaying RSS(XML format) feed like popurls.com (popular urls in one place) using simplexml_load_file() a PHP function. It's very useful to display your blog feeds as like Recent articles(headlines) list.</span>");


myScroller1.addItem("<span><h3><a href='http://9lessons.blogspot.com/2009/01/javascript-form-validation-innerhtml.html'>Some Clean Javascript Tips - Form Validation, Toggle Messages.</a></h3></span><span>Are you looking for a simple form validation javascript functions? just take a look at this article.This is very simple javascript functions that I have developed and used in some of my web projects useful to add client side information.</span>");


myScroller1.addItem("<span><h3<a href='http://9lessons.blogspot.com/2009/01/split-url-from-sentence-using-php.html'>Analyzing URLs as Links to the resource using a PHP function.</a></h3></span><span>This is PHP function split_url_fuction() writter for twitter like application that i am developing, useful to split URL from the updated sentence(posted message), then URL changing like tinyurl and link to the resource.</span>");

myScroller1.addItem("<span><h3<a href='http://9lessons.blogspot.com/2009/01/mysql-workbench-tutorials.html'>Visual Database Design with MySQL Workbench.</a></h3></span><span>Few days back I received one request about Mysql WorkBench Usage. So in this post I want to explain with screen shots to create a visual database design, follow these steps. I prepared this tutorial to improve your Database design Skills in Visual style.</span>");

myScroller1.addItem("<span><h3<a href='http://9lessons.blogspot.com/2009/01/htaccess-tutorials.html'>Add Security to your PHP projects using .htaccess file.</a></h3></span><span>Some days back I published an article about SQL Injection. In this article very small discussion about .htaccess file. After lots of requests I publish this article to add more security to your php application using .htaccess file.</span>");

myScroller1.addItem("<span><h3<a href='http://9lessons.blogspot.com/2009/01/delete-record-using-ajax-get-method-and.html'>Delete a Record with animation fade-out effect using jQuery and Ajax.</a></h3></span><span>Are you like Twitter and Yammer API? This post about how to delete a record with animation fade-out effect using Ajax and jQuery. I like Twitter API very much, it's clean and faster. So i prepared this jQuery tutorial delete action with out refreshing page.</span>");



//SET SCROLLER PAUSE
myScroller1.setPause(2000); //set pause beteen msgs, in milliseconds
