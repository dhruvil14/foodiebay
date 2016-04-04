<!DOCTYPE HTML>
<html>
<head>
<title>Foodiebay</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript"src="jquery.js"></script>
<!---strat-slider---->

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

$(document).ready(function() {

	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});
</script>
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
<script>
function mu()
{
	
$('#result123').html('');
	}
</script>
<script>
function sub(a)
{ 
var id =a;
	
	$.ajax({
	type: "POST",
	url: "submenu.php",
	data:{"id":id},
	cache: false,
	success: function(html)
	{
	fl=1;
	
	var split1 = html.split(/!/);
	
	var d=split1[0];
	
	
	
	var len=split1.length;
	
 for ( var i=0;i<len-1;i++)
 {
	   var parentdiv=document.getElementById('result123');
	var childdiv=document.createElement('div');
	
	var w1=split1[i];
	
	var pri=w1.split(/#/);
	 var ord=pri[0];
	 var p=pri[1];
	 
	 
	
	var w="<div class=soap-box>"; 
	 w+= "<div class=soap-innerbox1><img src=images/veg-icon.png> <span class=cate_font>"+ord+"</span> </div>";
w+="<div class=soap-innerbox2><span class=rs-font>"+p+"</span> <br><span class=jumato-btn><a href='javascript:void(0)' onclick=\"order('" + ord + "','" + p + "')\" >+</a></span></div>"
	w+="</div>"
	
  childdiv.innerHTML=w;
		  parentdiv.appendChild(childdiv);
	

 }
	//$("#").html(w).show();
	
	if(fl==0)
{

 $("#result123").load(location.href + " #result123 > ");
 
}
	}
	
	
	});
}
</script>
<script>

 var clicks = 0;
 var text=0;
   var text1="";   
function order(m,p)

{
	 clicks += 1;
	 
	text1 +=(",")+m;
	  
	 
	  text=text+parseInt(p);
	
	document.getElementById('price').value=text;
	document.getElementById('order').value=text1;
	
	
	
	
	}
</script>
<script>


</script>




</head>
<body onload="initialize()">
<!-- start header -->
<div class="header"> 
  
  <!-- start top-nav-->
  <div class="h_right">
    <?php include('header.php')?>
    <!-- end smart_nav * --> 
    
  </div>
</div>
<!---//End-header---> 

<!-- CONTENT 
================================================== --> 

<!-- Product show -->
<div class="portfolio s5" id="portfolio">
  <div  id="main_wrap">
    <div class="top_line"> </div>
    <?php 
			include('config.php');
			$rest_id=$_REQUEST['id'];
			$sql=mysql_query("select * from rest where rest_id='$rest_id'");
			
			
			$row=mysql_fetch_array($sql);
			$restro= $row['rest_name'];
			?>
    <div class="tab_topbox">
      <div class="tab_imgbox"><?php echo "<img src=".$row['thumb'].">"; ?> </div>
      <div class="tab_cont">
        <div> <span class="darb"><?php echo $row['rest_name']; ?>,</span> <?php echo $row['area']; ?> </div>
        <span> <?php echo $row['address']; ?></span>
        <div> <img src="img/star.png"><a href="#" >(1 rating)</a></div>
      </div>
      <div class="tab_cont1"><span><img src="img/res.png"> </span> <br>
        <?php echo $row['type']; ?></div>
      <div class="tab_cont1"> <img src="img/online.png"><br>
        </span><?php echo $row['time']; ?></div>
      <div class="tab_cont1"><img src="img/open.png"><br>
        Open at <?php echo $row['open']; ?></div>
      <div class="tab_cont1"> <img src="img/order.png"><br>
        Min. order <?php echo $row['cost']; ?></div>
    </div>
    <div class="container">
      <ul class="tabs">
        <li><a href="#tab1">Menu</a></li>
        <li><a href="#tab2">Info</a></li>
        <li><a href="#tab3">Reviews</a></li>
       <li><a href="#tab4">Coupons</a></li>
      
      </ul>
      <div class="tab_container">
        <div id="tab1" class="tab_content"> 
          
          <!--left Section start-->
          <div class="tab_left">
            <div class="leftcate_box">
              <div>
                <select class="cate_select">
                  <option> Category </option>
                  <option> Veg </option>
                  <option> Nonveg </option>
                  <option> All </option>
                </select>
              </div>
              <div class="spacer"> </div>
              <?php 
		$sql1=mysql_query("select * from menu where rest_id='$rest_id'");
		while($row1=mysql_fetch_array($sql1))
		{
		
		?>
              <!--  <div class="soap-cate"> <a href="#"> Soap  </a> </div>
       <ul>-->
              <ul>
                <li>
                  <div class="soap-cate" ><a href="#" id="subid" onClick="sub(<?php echo $row1['menu_id'] ?>),mu()"> <?php echo $row1['item_name'];?></a> </div>
                  
                  
                </li>
              </ul>
              <?php } ?>
            </div>
          </div>
          
          <!--left Section end--> 
           <!--center Section start-->
          <div class="tab_center">
            <div class="center_inrbox">
              <input type="text" placeholder="Search Menu Item" class="search_menu">
              <div class="soap"> Soup </div>
              <div > 
                <!--code start-->
                
                <div id="result123"> </div>
              </div>
              <!--code end--> 
              
              <!--code start--> 
              
              <!--code end--> 
              
            </div>
          </div>
          <!--center Section end--> 
          <!--right start-->
          <div class="tab_right">
            <div style="box-shadow:1px 1px 1px 1px #CCC; border-radius:4px; margin-bottom:6px;">
            <div class="cate1"> Your Order </div>
            <div class="cate1">
            <form action="" method="post">
              <select class="select" name="order">
                <option>Delivery </option>
                <option>Pickup </option>
              </select>
              </div>
              <div class="cate1">
                <select class="select1" name="location">
                  <option>Select delivery location </option>
                  <option>Noida </option>
                </select>
              </div>
              
              <div class="cate1"> RS.
                <input type="text" id="price" name="price" readonly>
                <div>
                <div class="cate1"> order.
                <input type="text" id="order" name="order" readonly>
                <div>
                </div>
                  <input type="text" name="coupn" value="" placeholder="your coupan code">
                </div>
              </div>
              </div>
              <div class="order_box"> <span >Minimum order of ₹ 250 is needed. Please add food worth ₹ 250 more.</span> </div>
              <div>
                <input type="submit"  name="submit" class="jumato-btn" value="submit">
              </div>
            </form>
            <div class="cate"> Allergy & dietary information</div>
          </div>
          <!--right end--> 
          
        </div>
        <?php
			if(isset($_POST['submit']))
			{
		    $flag=0;	
			$order=$_POST['order'];
			$location=$_POST['location'];
			 $price=$_POST['price'];
			
				 $coupan=$_POST['coupn'];
				 
				if (!empty($coupan))
				 {
				 $query=mysql_query("select * from coupan");
				 while ($row=mysql_fetch_array($query))
				 {
				if($row['coupan']==$coupan)
				{
					$flag=1;
			    $number = preg_replace("/[^0-9]/", '', $coupan);
				 $lastprice=$price-$number;
				 echo $lastprice;
				 if(isset($_SESSION['usr_id']))
			{
				
					$indiatimezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($indiatimezone);
$myvar=  $date->format( 'Y-m-d H:i:s' );
				$sql="insert into order1(userid,name,amoun,date,restro,ord) values ('$id','$name','$lastprice','$myvar','$restro')";
				$re=mysql_query($sql);
				
				}	
				
				 $del=mysql_query("delete from coupan where coupan='$coupan'");
				 if($del)
				 {
					 
					 echo '<script type="text/javascript">
					 var t="<?php  ?>"
					 
					 
					 alert();</script>'; 
					 }
				}
				   }
				   if($flag==0)
				   
				   {
					 	echo '<script type="text/javascript">alert("Coupan Not Match");</script>';  
					   
					   }
				 }
				 else{
					 
					 
					 if(isset($_SESSION['usr_id']))
			{
				
				$indiatimezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($indiatimezone);
$myvar=  $date->format( 'Y-m-d H:i:s' );

				$sql="insert into order1(userid,name,amoun,date,restro,ord) values ('$id','$name','$price','$myvar','$restro','$order')";
				$re=mysql_query($sql);
				
				}	
				
					 echo $price;
					 }
			

			
				}
			
			?>
        </div>

        <!--tab 1 end--> 
        
        <!--tab second start-->
        <div id="tab2" class="tab_content"> 
        
        
          <!--left start-->
          <div class="info_box">
          
            <div class="info_heading"> More Info About <?php echo $row['rest_name']; ?></div>
            <span class="info_font">  <?php echo $row['area']; ?> 
        <?php echo $row['address']; ?></span>
            <div class="home_delve"> Home Delivery Information </div>
            <div> <span class="span_font"> Pure Vegetarian </span> <span class="span_space"> No </span> </div>
            <div> <span class="span_font"> Online Payment </span> <span class="span_space"> Yes </span> </div>
            <div> <span class="span_font"> Min. Order </span> <span class="span_space1"> <?php echo $row['cost']; ?> </span> </div>
            <div> <span class="span_font"> Delivery Conditions </span> <span class="span_space"> Free Home Delivery Within 2 Kms Radius From The Restaurant. </span> </div>
         <!--   <div class="review">Reviews About Baby Dragon </div> -->
            <div class="spacer10"> </div>
            <div class="text_align"> Food quality is superb here.</div>
            <div class="some_box">
              <div class="some_boxleft">
                <div class="name_text"> Jayant Roy </div>
              </div>
              <div class="some_boxright">
                <div class="span_font1">Superb Chinese dishes! We have been ordering 
                  from this baby dragon outlet at jasola through justeat and truly mind 
                  blowing taste they give in their dishes. Just under 500 you can have 
                  very authentic Chinese gravies, rice and noodles at your plan me and 
                  blowing taste they give in their dishes. Just under 500 you can have 
                  very authentic Chinese gravies, rice and noodles at your plan me and
                  roommate generally goes for chicken dishes in shezwan, Manchurian, chilly or kungpao varities. In rice and noodles my personal favourites are chicken fried rice and chilli garlic noodles. 
                  They have many fancy dishes in gravy and noodles but these are the ones i like and they make all these very well.</div>
              </div>
            </div>
            <div class="some_box">
              <div class="some_boxleft">
                <div class="name_text"> Jayant Roy </div>
              </div>
             
            </div>
          </div>
          <!--left end--> 
          
          <!--right start-->
          <div class="info_rightbox">
            <div class="map_box">
            
            <form action="#" onsubmit="showAddress(this.address.value); return false">
      
      <p>
        <input type="text" style="width:350px" name="address" style="visibility:hidden;" value="<?php echo $row['address']; ?>" />
      <p>To view us on map, please click <input type="submit" value="Here"></p>
      </p>
      <div id="map_canvas" style="width: 400px; height: 400px"></div>
    </form>

            
            
            </div>
            
           
          </div>
          
          <!--right end--> 
          
        </div>
       
        
        <!--tab second end-->
        <div id="tab3" class="tab_content">
         <?php
		if(isset($_POST['submit1']))
		{
			
		
		 $rev=$_POST['rev'];
			$insert="insert into review (userid,name,review,revrestid) values ('$id','$name','$rev','$rest_id')";
			$result=mysql_query($insert);
			
			if($result)
			{
			echo '<script type="text/javascript">alert("Thanks for your review!");</script>';	
				
				}
			
			
			}
		
		
		?>
          <div style="width:600px; height:auto;">
            <h2>Reviews</h2>
            <form action="" method="post">
              <div class="revview"> Your Review </div>
              <div class="revview1">
                <textarea name="rev" class="review_text"></textarea>
              </div>
              <div class="revview2">
              
              <?php  if(isset($_SESSION['usr_id']))
{
	?>
                <input type="submit" name="submit1" class="jumato-btn">
                
                <?php } else
				
				{  ?>
                
                <input type="submit" name="rr" onClick="alert('Please Login First!')" class="jumato-btn">
                <?php  }  ?>
              </div>
              <br>
            </form>
            
            
            <div style="border:1px solid #CCC; height:1px; margin-top:20px; width:100%;"> &nbsp; </div>
            
           <?php $sql1="select * from review where revrestid='$rest_id'" ;
		   $res=mysql_query($sql1);
		   while($row=mysql_fetch_array($res))
		   {
		  ?>
          <div class="revview_text">
              <div class="review_font"><?php echo $row['name']; ?></div>
              <span><?php echo $row['review'] ?> </span>
               </div>
               
               <?php  }  ?>
               
          
        </div>
        
        </div>
        
        <div id="tab4" class="tab_content">
        <div style="color:#936"> Coupans</div>
         
          <?php
		 $sql=mysql_query("select * from coupan");
		 while($row=mysql_fetch_array($sql))
		 {
		 
		 
		 ?>
          <p1>
          <?php  echo $row['coupan'];  ?>
          </p>
          <?php  }  ?>
      
    </div>
    <h3>&nbsp;</h3>
    </h1>
  </div>
</div>

<!--  End CONTENT 
================================================== -->

<div class="footer">
  <div class="wrap">
    <div class="copy-right">
      <p><a href="about_us.php">About Us</a></p>
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
    
    
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw"
      type="text/javascript"></script>
    <script type="text/javascript">

    var map = null;
    var geocoder = null;

    function initialize() {
      if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map_canvas"));
        map.setCenter(new GLatLng(37.4419, -122.1419), 1);
        map.setUIToDefault();
        geocoder = new GClientGeocoder();
      }
    }

    function showAddress(address) {
      if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              alert(address + " not found");
            } else {
              map.setCenter(point, 15);
              var marker = new GMarker(point, {draggable: true});
              map.addOverlay(marker);
              GEvent.addListener(marker, "dragend", function() {
                marker.openInfoWindowHtml(marker.getLatLng().toUrlValue(6));
              });
              GEvent.addListener(marker, "click", function() {
                marker.openInfoWindowHtml(marker.getLatLng().toUrlValue(6));
              });
	      GEvent.trigger(marker, "click");
            }
          }
        );
      }
    }
    </script>

    
    
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>