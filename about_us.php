<!DOCTYPE HTML>
<html>
<head>
<title> | About Us :: </title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="js/jquery.min.js"></script>
	 		<!---strat-slider---->
	    <link rel="stylesheet" type="text/css" href="css/slider.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
			<script type="text/javascript">
				$(function() {
				
					$('#da-slider').cslider({
						autoplay	: true,
						bgincrement	: 450
					});
				
				});
			</script>
		<!---//strat-slider---->
		 <!-- scroll -->
		 <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <!-- //scroll -->
</head>
<body>
 <!-- start header -->
 	<div class="header">
 
 
		<!-- start top-nav-->
		<div class="h_right">
      
   
		<?php include('header.php')?>
			<!-- start smart_nav * -->
	        <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item"><a  href="#">Home</a></li>
	                <li class="nav-item"><a href="#" class="scroll">About Me</a></li>
	          
	                <li class="nav-item"><a href="#" class="scroll">Advertise</a></li>
	                            	               
	                <li class="nav-item"><a href="#contact"  class="scroll">Contact Us</a></li>
	                <div class="clear"></div>
	            </ul>
	        </nav>
	        <script type="text/javascript" src="js/responsive.menu.js"></script>
			<!-- end smart_nav * -->
            
            
		</div>
		
    
        
	  </div>
<!---//End-header--->

	<!-- start slider -->
<div class="slider_bg sTop">
<!-- start main -->
				
 			<!---//End-da-slider----->
 </div>
	

<!-- CONTENT 
================================================== -->

<!-- Product show -->
 <div class="portfolio s5" id="portfolio">
		  	<div class="wrap">
            <br><br><br>
		  		<h3>About Us</h3>
				<br>
		  		<h1>
     <div class="g-person" data-width="350" data-href="//plus.google.com/u/0/100242499794645707246" data-layout="landscape" data-rel="author"></div>             
                
      </h1>          
                
               
              
               								  						
			</div>   		 
   		 </div>	




   
        
  <!--  End CONTENT 
================================================== -->

			
 <div class="footer">
	<div class="wrap">
		<div class="copy-right">
			<p> &copy; Copyright 2014 All Rights Reserved.</p>	
		</div>	
		 <div class="social-icons-set">
								<ul>
									<li><a class="facebook" href="#"> </a></li>
									<li><a class="twitter" href="#"> </a></li>
									<li><a class="vimeo" href="#"> </a></li>
									<li><a class="rss" href="#"> </a></li>
									<li><a class="gplus" href="#"> </a></li>
									<li><a class="pin" href="#"> </a></li>
									<div class="clear"> </div>
								</ul>
							</div>
							<div class="clear"> </div>
	</div>
</div>	
 <!-- scroll_top_btn -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
         
         
         <script src="https://apis.google.com/js/platform.js" async defer></script>

</body>
</html>