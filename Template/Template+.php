<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title><?php echo $title; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style_template+.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css' />
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<script src="js/progressbar.js" type="text/javascript"></script>
</head>
<body>
    
    <!--div class="topbar">
	
        <img class="logo" src="css/images/logo.png" width="100px" height="50px"/>
        <div class="nav"> 
            <ul>
                <li>Menu1</li>
                <li>Menu 2</li>
                <li>Menu 3</li>
            </ul> 
        </div>
    </div-->
    
    <!--style="background-color: #F9E; height: 50px; width: 100%; position: fixed; left:0px; top:0px;-->
    
    

	    <!-- top-nav -->
	    <nav class="top-nav">
		    <div class="shell">
			    <a href="#" class="nav-btn">HOMEPAGE<span></span></a>
			    <span class="top-nav-shadow"></span>
			    <ul>
				    <li class="active"><span><a href="Home.php">home</a></span></li>
				    <li><span><a href="#">services</a></span></li>
				    <li><span><a href="#">blog</a></span></li>
				    <li><span><a href="#">contact us</a></span></li>
				    <li><span><a href="#">about</a></span></li>
			    </ul>
		    </div>
	    </nav>
	    <!--header  id="header"></header-->
	    
	    <?php echo $content; ?>
	    
	    <!--div id="footer-push"></div>
	    <div  id="footer">
		    <span class="shadow-bottom"></span>

		    <div class="footer-bottom">
			    <div class="shell">
				    <nav class="footer-nav">
					    <ul>
						    <li><a href="#">Home</a></li>
						    <li><a href="#">About</a></li>
						    <li><a href="#">Services</a></li>
						    <li><a href="#">Projects</a></li>
						    <li><a href="#">Solutions</a></li>
						    <li><a href="#">Jobs</a></li>
						    <li><a href="#">Blog</a></li>
						    <li><a href="#">Contacts</a></li>
					    </ul>
					    <div class="cl">&nbsp;</div>
				    </nav>
				    <p class="copy">&copy; Copyright 2014</p>
			    </div>
		    </div>	
	    </div-->
    
</body>
</html>