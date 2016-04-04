<script type="text/javascript" src="login/js/jquery.leanModal.min.js"></script>
<link type="text/css" rel="stylesheet" href="login/popup.css" />


<?php 

include('config.php');
?>
<header> 
<aside>

<aside>
<div class="listen1">

<?php
if(isset($_SESSION['usr_id']))
{ 
echo $_SESSION['username'];
?>
<span class="sign"><a id="" href="logout.php">Logout</a></span>
<span class="sign"><a id="" href="order12.php">Order</a></span>
<?php  }
else

{ ?>
<div style="float:left;"> <span class=""><a id="modal_trigger" href="#modal">Login</a></span></div> 
 <div style="float:left;"> <span class=""> <a id="modal_trigger1" href="#modal1" >Register here!  </a> </span> </div>
<?php } ?>

</div>
 </aside>
 </header>
 <div class="container">
<div id="modal" class="popupContainer" style="display:none;">
<span class="modal_close"> <img src="login/popup_x.png"></span>
<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
					<span class="icon">	 </span>
						<span class="icon_title"> Already registered?</span>
						
					</a>
	
				</div>
<!-- Username & Password Login form -->
			<div class="use_login">
           <form action="" method="post">
					<label>Email / Username</label>
					<input type="text" name="username" />
					<br />

					<label>Password</label>
					<input type="password" name="psssword" />
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						<label for="remember">Remember me !</label>  
                        <label> <a href="#" class="forgot_password">Forgot password?</a></label>
                       
					</div>

                  <div class="action_btns">
					<div class="one_half"><input type="submit" name="login" value="Sign In"></div>
				</div>
                <br>
                <label for="remember"> Don't have an account?<!-- <a href="" id="register_form" class="reg_password"> Register here!  </a>--></label> 
                 
				</form>

				
			</div>
</div>
            
            <!-- Register Form -->
           
		</section>
	</div>
</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 110, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".use_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			alert("fff");
			//$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".use_login").show();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>


<!---mrra bhart mahan-->
 <div class="container">
<div id="modal1" class="popupContainer" style="display:none;">
<span class="modal_close"> <img src="login/popup_x.png"></span>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
					<span class="icon">	 </span>
						<span class="icon_title">registered?</span>
						
					</a>
	
				</div>
<!-- Username & Password Login form -->
			<div class="use_login">
           <form method="post" action="">
					<label> Name</label>
					<input type="text" name="name" />
					<br />

						<label>E-Mail</label>
					<input type="text" name="email" />
					<br />
                    
                    <label>Password</label>
					<input type="text" name="password" />
					<br />
			
					<div class="action_btns">
						
						<div class="one_half"><input type="submit" name="register" value="Register" class="btn_red"></div>
					</div>
                    <br>
                  <label>   Already have an account? 
                    
                  
				</form>
				
			</div>
</div>
            
        <!-- Register Form -->

		</section>
	</div>
</div>

<script type="text/javascript">
	$("#modal_trigger1").leanModal({top : 110, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
	// Calling Register Form
		$("#register_form").click(function(){
			alert("fff");
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".use_login").show();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>

<?php 
if(isset($_POST['login']))
{

$username=$_POST['username'];       
$password=$_POST['psssword'];		

$query="select * from user_login where email='$username' and  password='$password'";
$result=mysql_query($query) or die(mysql_error());  
$row=mysql_fetch_array($result);
$usr_id=$row['id'];
$name=$row['name'];

$count=mysql_num_rows($result);

if($count==1)
{
  $_SESSION['username']=$username;
  $_SESSION['password']=$password;
 $_SESSION['usr_id']=$usr_id;
 $id=$_SESSION['usr_id'];
 $_SESSION['name']=$name;
 

?>
  <script>
                document.location.href = this.location.href
				</script>
<?php

}
else
{
	?>
    <script>
	alert("wrong");
	</script>
    
	<?php
}

}
?>

<?php
            if(isset($_POST['register']))
			{
				
				$name=$_POST['name'];
				$email=$_POST['email'];
				$passsword=$_POST['password'];
				$sql="insert into user_login(name,email,password) values('$name','$email','$passsword')";
				$res=mysql_query($sql);
				
				
				?>
                <script>
                document.location.href = this.location.href
				</script>
                <?php
                
				
				}
				 ?>