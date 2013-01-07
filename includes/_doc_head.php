<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title><?php echo $sitetitle ?></title>
  
  <!-- Included CSS Files (Uncompressed) -->
  
  <link rel="stylesheet" href="stylesheets/foundation.css">
  <link rel="stylesheet" href="stylesheets/presentation.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="stylesheets/fonts.css">
  
  <link rel="stylesheet" type="text/css" href="apps/showcase/css/style.css" />
  
  
  <!-- Included CSS Files (Compressed) -->
  <!--<link rel="stylesheet" href="stylesheets/foundation.min.css">-->
  <link rel="stylesheet" href="stylesheets/app.css">
  
  <!-- Typography -->
  <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Dosis:200,400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  
  <!-- Icons -->
  <link rel="stylesheet" href="stylesheets/general_enclosed_foundicons.css">
  <link rel="stylesheet" href="stylesheets/fc-webicons.css">

  <script src="javascripts/modernizr.foundation.js"></script>
  <!--[if lte IE 7]><style>.support-note .note-ie{display:block;}</style><![endif]-->
  
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  
  <!-- Scroll to Navigation -->
  <script src="javascripts/jquery.scrollTo-1.4.3.1-min.js"></script>
  <script src="javascripts/jquery.localscroll.js"></script>
  <script type="text/javascript">
		$(document).ready(function() {
   			$('#pagelinks').localScroll({duration:800});
		});
		
		$(document).ready(function() {
   			$('#nav').localScroll({duration:800});
		});
</script>


</head>
<body>
 
 
 
 <!-- BEGIN TOP SECTIONS -->
  
  
  
  <div id="TopSections">
  
  	<div id="top-bar">
   
                
    	<div class="row">
        	<section>
            	<nav class="top-bar">
                	<ul class="right">
                    	
                    	
                        <li><a class="fc-webicon facebook" href="#">Facebook</a></li>
                        <li>&nbsp;&nbsp;</li>
                        <li><a class="fc-webicon twitter" href="#">Twitter</a></li>
                    </ul>
                </nav>
            </section>
        </div>
    </div>
    
    
    <div id="navbar">
  	<div class="row">
    	<section>
        	<nav>
            	<ul id="pagelinks" class="nav-bar left">
                	<li><a href="#"><span class="foundicon-home"></span>home</a></li>
                    <li><a href="#exploresection"><span class="foundicon-search"></span>explore</a></li>
                    <li><a href="#shopsection"><span class="foundicon-cart"></span>shop</a></li>
                </ul>
     <!--<ul style="list-style:none;" class="logo"><li><a href="#"><img src="images/newlogo.png"/></a></li></ul>-->
                <ul id="nav" class="nav-bar right">
                	<li><a href="#"><span class="foundicon-idea"></span>create</a></li>
                    <li><a href="#aboutsection"><span class="foundicon-people"></span>about</a></li>
                    <li><a href="#"><span class="foundicon-mic"></span>press</a></li>
                </ul>
            </nav>
        </section>
    </div>
  </div>
  <ul class="logo"><li><a href="#"><img src="images/newlogo.png"/></a></li></ul>
    
  </div>
  
  
  <!-- END TOP SECTIONS -->