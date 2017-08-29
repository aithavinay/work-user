<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
     include("login.php");

 $message = $_SESSION['message'];
     if(isset($_SESSION['login_user'])){
		 include("functions.php");
			 
		 if(!isLoginSessionExpired()){
		   
               header("location:DashBoard.php");
             
		 }
		else {
			  $message = "Login Session is Expired. Please Login Again";
			  header("location:logout.php?session_expired=1");
		     }
	 
 }
if(isset($_SESSION['user12'])){

     $message=$_SESSION['user12'];
     //echo "<script>alert('$message')</script>";


 unset($_SESSION['user12']);
}

?> 	




<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Notary Hub</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/style12.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome12.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

$(document).ready(function(){


    $(".user").change(function(){
     var x,z=0;
      x=document.getElementById("mail").value  ;

    if(x.length!=z)  
       {  
      document.getElementById("a1").innerHTML="Invalid"; 
      x.focus();
         }
      
     if(x.length<=6)  
       {  
      document.getElementById("a1").innerHTML="Invalid"; 
      x.focus();
         }  
      
    if(x==123){
        alert("please enter valid username/email"); 
        document.getElementById("a1").innerHTML="Invalid one";        
       }
else{
 document.getElementById("a1").innerHTML=""; 
}

    });




  $(".pass").change(function(){
    
     var y;
      y=document.getElementById("pass").value  ;
      if(y.length<6){ 
 document.getElementById("a2").innerHTML="Invalid";   
  }else{
 document.getElementById("a2").innerHTML=""; 
}

    });



});




</script>




</head>
<body>
<!-- main -->
<div class="center-container">
	<!--header-->
	<div class="header-w3l">
		<center><h1>Notary Managment Repository</h1></center>
	</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">	
			<div class="wthree-pro">
				<center><h2>Login</h2></center>
			</div>
			<form action="login.php" method="post" name="myform"> 
				<div class="pom-agile">
					<input placeholder="E-mail/UserName" name="uname" id="mail" class="user" type="text" required="">
					<span class="icon1"><i class="fa fa-user" id="a1" aria-hidden="true"></i></span>
				</div>
				<div class="pom-agile">
					<input  placeholder="Password" name="psw" id="pass" class="pass" type="password" required="">
					<span class="icon2"><i class="fa fa-unlock" id="a2" aria-hidden="true"></i></span>
				</div>
				<div class="sub-w3l">
					<h6><a href="www.google.com">Forgot Password?</a></h6><br>

					<div class="right-w3l">
						<input type="submit" value="Login"> 
                                                <input style="float:'left'" type="submit" name="submit" onclick="window.location.href='signup12.php'" value="Sign Up">
                                                
					</div>
                                           
				</div>
			</form>
<div class="sub-w3l">
                   
</div>
		</div>
	</div>
	<!--//main-->
	<!--footer-->
	<div class="footer">
		<!--<p>&copy; 2017 Online Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p> -->
	</div>
	<!--//footer-->
</div>
</body>
</html>
