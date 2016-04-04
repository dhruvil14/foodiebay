<?php 
include('config.php');
?>
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
<script type="text/javascript">

$(document).ready(function()
{
	//slides the element with class "menu_body" when paragraph with class "menu_head" is clicked 
	$("#firstpane p.menu_head").click(function()
    {
		$(this).css({backgroundImage:"url(leftmenu/left.png)"}).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
       	$(this).siblings().css({backgroundImage:"url(leftmenu/left.png)"});
	});
	//slides the element with class "menu_body" when mouse is over the paragraph
	$("#secondpane p.menu_head").mouseover(function()
    {
	     $(this).css({backgroundImage:"url(down.png)"}).next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
         $(this).siblings().css({backgroundImage:"url(leftmenu/left.png)"});
	});
});
</script>
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


	

<!-- CONTENT 
================================================== -->

<!-- Product show -->
 <div class="portfolio s5" id="portfolio">
		  	<div  id="main_wrap">
            <h1> Desserts & Bakes in Delhi NCR </h1>
            <div class="top_line"> </div>
            
            <!-- left site start -->
            <div class="left_box">
            
<div id="firstpane" class="menu_list"> <!--Code for menu starts here-->
		<p class="menu_head">popularity</p>
		<div class="menu_body">
		<spn><a href="#">popularity-high tp law</a></span>
         <a href="#">rating high to law</a>
         <a href="#">cost high to law</a>	
		</div>
		<p class="menu_head">Header-2</p>
		<div class="menu_body">
			<a href="#">Link-1</a>
         <a href="#">Link-2</a>
         <a href="#">Link-3</a>	
		</div>
		<p class="menu_head">Header-3</p>
		<div class="menu_body">
          <a href="#">Link-1</a>
         <a href="#">Link-2</a>
         <a href="#">Link-3</a>			
       </div>
       <p class="menu_head">Header-3</p>
		<div class="menu_body">
          <a href="#">Link-1</a>
         <a href="#">Link-2</a>
         <a href="#">Link-3</a>			
       </div>
       <p class="menu_head">Header-3</p>
		<div class="menu_body">
          <a href="#">Link-1</a>
         <a href="#">Link-2</a>
         <a href="#">Link-3</a>			
       </div>
       <p class="menu_head">Header-3</p>
		<div class="menu_body">
          <a href="#">Link-1</a>
         <a href="#">Link-2</a>
         <a href="#">Link-3</a>			
       </div>
  </div>  <!--Code for menu ends here-->
          
           <div class="cate"> 
           <span  class="cate1"> Category </span> <br>
          
          
           
           
           </div> 
            
            
            </div> 
              <!-- left site end -->
            
             <!-- middle site start -->
            <div class="center_box"> 
            
              <!--code start-->
              <?php 
			  $location_name= $_REQUEST['location_name'];
              $city_id= $_REQUEST['city_id'];
			  $sql=mysql_query("select * from location where city_id='$city_id' and location_name='$location_name'");
			  $row=mysql_fetch_array($sql);
			  $location_id=$row['location_id'];
			  $sql1=mysql_query("select * from rest where location_id='$location_id'");
			   $count=mysql_num_rows($sql1);
			   if($count!=0)
			   {
		     	 while( $row1=mysql_fetch_array($sql1))
			     {
			 
			  ?>
            <div class="center_contbox"> 
            <div class="center_left">
           <div class="left_font"><a href="searching.php?id=<?php echo $row1['rest_id'];?>"><?php echo $row1['rest_name']; ?></a></div>
           
           <span class="left_skat">  <a href=""><?php echo $row1['area']; ?></a>  <?php echo $row1['address']; ?></span><br>
           <span class="left_skat">  Cuisines: <?php echo $row1['type']; ?></span><br>
           <span class="left_skat">Cost For 2: Rs. <?php echo $row1['cost']; ?></span> <br>
           
        <a href="searching.php?id=<?php echo $row1['rest_id'];?>">  <span class="btn_m">Menu </span></a> <span class="btn_m">420 photo </span> <span class="btn_m">303 review </span>
              </div>
              <div class="center_right">
             
             <span class="right_btn"> 3.8 
             </span> <em class="right_font">629 votes</em>
              </div>
             </div>
             <?php }}else{
				 ?>
				<div class="left_font">Records Not Found</div>
                 <?php
				 }?>
            <!--code end--> 
           
              
            
            
                
            
                
            
               
           
           
            </div>
            
             <!-- middle site end -->
             
             
             
             
             
             
            <!-- right site start --> 
            <div class="right_box"> 
            
            
            <div><img src="img/park.jpg"> </div>
            <div><img src="img/park.jpg"> </div>
            <div><img src="img/park.jpg"> </div>
            <div><img src="img/park.jpg"> </div>
            <div><img src="img/park.jpg"> </div>
            <div><img src="img/park.jpg"> </div>
            <div><img src="img/park.jpg"> </div>
            <div><img src="img/park.jpg"> </div>
            
            
            
            
            
            
            
            
            
            
            
             </div>
               <!-- right site end -->
            
		  		<h3>&nbsp;</h3>
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

</body>
</html>