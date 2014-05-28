<?php

$name = ucfirst($_POST['name']);
$email = $_POST['email'];
$message = $_POST['message'];
$from = $name;
$to = "sandyludosky@gmail.com";
$subject = "SL.com message from".$name .$_POST['subject'];
?>
<p class="email_submitted">
<?php
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		echo "This is not an email format";
		exit;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sandy Ludosky | Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
		  body {
			  padding-top: 60px;
			  padding-bottom: 40px;
			  
		  }

		  .email_submitted {
		  padding: 10px 0;
		  font-size: 110%;
		  }
		  
		  .email_submitted a {
		  color: black;
		  transition: all .2s;
		  -o-transition: all .2s;
		  -webkit-transition: all .2s;
		  -moz-transition: all .2s;
		  text-decoration:none;
		  }
		  
		  .email_submitted a:hover {
		  color:#096;
		  }
		  
		  .fa-check {
		  color:#096; 
		  }

        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">   
        <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css">
        <link href="css/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
       
    </head>
    <body>

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="http://sandyludosky.com">Sandy Ludosky | Portfolio</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="#about">About Me</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#contact">Contact</a></li>
                             <li><a href="http://localhost/portfolio_project/blog/index.php">Blog</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                <!--this is where the extra blog pages will go-->
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form pull-right">
                            <input class="span2" type="search" placeholder="Search">
                            <button type="submit" class="btn">Let's Go!</button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
  <span id="about"></span>
        <div class="container">
              
  <aside class="skills">
         
          
          <div class="software clearfix">
				<ul class="adobe">
                	<li class="strong">Software</li><br>
                	<li><a href="#"><img id="id_display" src="img/icons.adobe/24/InDesign.png"></a></li>
                  <li><img id="fl_display" src="img/icons.adobe/24/Flash.png"></li>
                  <li><img id="dw_display" src="img/icons.adobe/24/Dreamweaver.png"></li>
                  <li><img id="ai_display" src="img/icons.adobe/24/Illustrator.png"></li>
                  <li><img id="fw_display" src="img/icons.adobe/24/Fireworks.png"></li>
                  <li><img id="ps_display" src="img/icons.adobe/24/Photoshop.png"></li>
                  
                  
                  <!--see later-->
                  <div id="id_nodisplay">In Design</div>
                  <div id="fl_nodisplay">Flash</div>
                  <div id="dw_nodisplay">Dreamweaver</div>
                  <div id="ai_nodisplay">Illustrator</div>
                  <div id="fw_nodisplay">Fireworks</div>
                  <div id="ps_nodisplay">Photoshop</div>
              </ul>
                 
                 
                  
                  
              <ul class="codeeditor">
              		<li class="strong">Code Editors</li>
                  <li>Notepad++</li>  
                  <li>Sublime Text</li> 
                  <li>Coda</li>               
              </ul>
            
        </div>  
        
        <hr class="line">
        
        <div class="languages_app clearfix">           
               <ul class="languages">
                 	<li class="strong">Language</li>
                	<li>HTML5, CSS3</li>
                  <li>Javascript, JQuery, Ajax</li>
                  <li>PHP, MySQL Database</li>  
                  <li>Actionscript 2</li>              
               </ul>
                
        		<ul class="application">
                 	<li class="strong">Web Application</li>
                	<li>Wordpress, Joomla</li>
                  <li>MojoMotor, Expression Engine</li>
                  <li>Bootstrap, Zurb Foundation</li>  	             
                </ul>
          
          </div>      
          
          <hr class="line">
                  
				<ul class="seo">
                	<li class="strong">Web Optimization</li>
                  <li>SEO, Social Media Marketing,<br> Google Analytics</li>
                  <li>Email Marketing (MailChimp,<br>Constant Contact)</li>                                  
               </ul>
                
           <br class="clearfix">    
        
    
        <!--latest blog post and other RSS feed go here-->
        
</aside>

   
<div class="main_content clearfix">


		
        <span id="contact"></span>
		<hr>
          
             
      	  <!--Contact Section-->
         <div  class="hero-unit clearfix">
              
         
      <h2>Contact</h2><span class="tick"><img src="img/tickleft.png" width="10" height="25"></span>
   
   		<div id="contact_form">       
        
        <p class="email_submitted">
        <?php
        if(mail($to, $subject,$message,$from)) {
            echo "<i class='fa fa-check'>&nbsp;</i>Email sent successfully.&nbsp;". "Thank You". '<br><br>' ."<a href='index.html'>Back to home page</a>";
            }else { echo "Failure Notice";
        
        }
        ?>
        </p>
        
        
        </div>
        
           
</div><!--END Contact Section-->


<hr>

<footer class="clearfix">
  <p>&copy; Company 2012</p>
</footer>

</div><!--End main content-->

</div> <!-- /container -->
        
        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/animate.js"></script>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox.js"></script>
          <script type="text/javascript" src="js/query.fancybox.pack.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox-buttons.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
        
        <script src="js/main.js"></script>
    	 <script type="text/javascript">
			$(document).ready(function() {
				$(".fancybox").fancybox();
			
			});
		</script>
			
  

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
