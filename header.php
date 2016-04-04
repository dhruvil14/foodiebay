<?php 
//session_start();
//echo $_SESSION['city'];
include('config.php');
?>
<?php
session_start();
if(isset($_SESSION['usr_id']))
{ 
$name= $_SESSION['name'];
$id=$_SESSION['usr_id'];
}
?>



<script>
var decoded;
var ct1;
function ct(m)
{
 ct1=document.getElementById('city').value;
	
	

	//alert(ct1);
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search.php",
	data:{"data":searchid,"ct":ct1},
	cache: false,
	success: function(html)
	{
		//alert(html);
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	 decoded = $("<div/>").html($name).text();
	if($('#searchid').val(decoded))
	{
		cgh(decoded,ct1);
		}
	
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (!$clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
if(t)
{
	alert("ll");
	}
	
	}	
</script>
<script>
function cgh(m,c)
{
	
	var lo=m;
	var co=c;
	window.location.href="menu-search.php?location_name="+lo+"&city_id="+co+"";
	
	}
</script>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>

<script type="text/javascript">

</script>
<style type="text/css">
	body{ 
		font-family:Tahoma, Geneva, sans-serif;
		font-size:18px;
	}
	.content{
		width:900px;
		margin:0 auto;
	}
	#searchid
	{
		width:500px;
		border:solid 1px #000;
		padding:10px;
		font-size:14px;
	}
	#result
	{
		position:absolute;
		width:500px;
		padding:10px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
	}
	.show
	{
		padding:10px; 
		border-bottom:1px #E27011 solid;
		font-size:15px; 
		height:15px;
	}
	.show:hover
	{
		background:#E87400;
		color:#FFF;
		cursor:pointer;
	}
</style>

<div class="subMenu" >
        
      			<div class="wrap">
				
				<div class="logo"><a href="index.php" ><img src="./images/logo1.png"/></a></div>
				
				 <div class="search_box">
                 	
	           <table cellpadding="0" cellspacing="0">
            <tr>
               <td><div>  City </div></td>
              
                <td>
                	<form method="post" name="searchform" id="searchform" action="menu-search.php">
		<div>
			<!--/*<input type="text" class="input_search"  placeholder="tacos, cheap dinner, Max's "/>*/-->
            <select id="city" name="cty" onchange="ct()" style="width:120px; height:40px;">
            <option>Select City</option>
            <?php 
			$sql=mysql_query("select * from seek_city");
            while($row=mysql_fetch_array($sql))
            {

			?>
            <option value="<?php echo $row['city_id']?>"><?php echo $row['city_name']?></option>
            <?php }?>
            </select>
            
           
	
                </td>
                <td width="10"> </td>
                <td><div>  Location </div></td>
            <td>
                	</div>
		<div>
			 <input type="text" class="search" id="searchid" name="searc" placeholder="Select Location"  />
             <div id="result" ></div>
		</div>
         
		
		</form>
		
	
                </td>    
                
                <td width="15"> </td>
                <td>
                <div class="login_icon"> </div> </td>
                <td> <div><?php include('inc.php'); ?></div></td>
        
            </tr>
        </table>
        
        
 
 </div> <!-- End Search Box --> 



<!--<div class="inner">
		 		<a href="index.php" id="sTop" class="subNavBtn">Home</a> 
				<a href="about_us.php" id="s1" class="subNavBtn">About Me</a>
				<!--f<a href="#" id="s2" class="subNavBtn">Blog</a>
				<a href="#" id="s3" class="subNavBtn">Advertise</a>-->
			
	<!--			<a href="#" id="s5" class="subNavBtn end">Contact</a>
			  </div> -->
          
		 	
			   
	            	
               
	
	    </div>	
        
             
   
        
	    <!-- nav -->
		<script type="text/javascript" 	src="js/jquery.smint.js"></script>
		<script type="text/javascript">
		$(document).ready( function() {
		    $('.subMenu').smint({
		    	'scrollSpeed' : 1000
		    });
		});
		</script>
		<script>
		window.addEventListener("load",function() {
		  setTimeout(function(){
		    window.scrollTo(0, 1);
		  }, 0);
		});</script>
	   </div>
       
       