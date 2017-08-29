<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Online Login Form Responsive Widget Template :: w3layouts</title>
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






<script>

window.onload = function() { 
	document.myform.onsubmit = function()  { return checkForm(); }
	document.myform.lastNameInput.onblur = lastNameValidate;
        document.myform.userNameInput.onblur = userNameValidate;
	document.getElementById("mail").onblur = emailValidate; 
        document.getElementById("phno").onblur = PhoneValidate; 
        document.getElementById("pwd").onblur = PassValidate; 
} 

function firstNameValidate(){ 

	var firstNameInput = document.getElementById("fname"); 

	if(firstNameInput.value == "") {  
		document.getElementById("a1").innerHTML = "Required";
                
		return false; 
	} 
       if(firstNameInput.value.length < 6) {  
		document.getElementById("a1").innerHTML = "atleast six required";
		return false; 
                fname.focus();
	} 
      else{
	document.getElementById("a1").innerHTML = "";
}
}

function lastNameValidate() { 

	var lastNameInput = document.getElementById("lname");

	if(lastNameInput.value == "") { 
		document.getElementById("a2").innerHTML = "Required"; 
		
		return false; 
	} 
 else{
	document.getElementById("a2").innerHTML = "";
}
}
function userNameValidate() { 

	var userNameInput = document.getElementById("Uname");

	if(userNameInput.value == "") { 
		document.getElementById("a3").innerHTML = "user Name is required"; 
		
		return false; 
	} 
        if(userNameInput.value.length < 6) {  
		document.getElementById("a3").innerHTML = "atleast six required";
		return false; 
                
	}  else{
	document.getElementById("a3").innerHTML = "";
}
 
}

function emailValidate() { 
        var emailInput = document.getElementById("mail");
	if(emailInput.value == "") { 
		document.getElementById("a4").innerHTML = "Email address is required!"; 
		
		return false; 
	} else if(!validEmailAddress(emailInput.value)) { 
		document.getElementById("emailInputStatus").innerHTML = "Incorrect email address format!"; 
		document.getElementById("emailInputStatus").style.display = "block"; 
		emailInput.parentNode.className = "form-group has-warning has-feedback";
		document.getElementById("emailIcon").className = "glyphicon glyphicon-warning-sign form-control-feedback";
		return false; 
	} else{
	document.getElementById("a4").innerHTML = "";
}
        
}
 
function PhoneValidate() { 
        var Phonevalidate = document.getElementById("phno");
	if(Phonevalidate.value == "") { 
		document.getElementById("a5").innerHTML = "Required!"; 
		
		return false; 
	} 
    if(Phonevalidate.value.length <10) {  
		document.getElementById("a5").innerHTML = " Invalid";
		return false; 
                
	}  else{
	document.getElementById("a5").innerHTML = "";
}
        
         
}

function PassValidate() { 
        var Phonevalidate = document.getElementById("pwd");
	if(Phonevalidate.value == "") { 
		document.getElementById("a6").innerHTML = "pass is required!"; 
		
		return false; 
	} 
        if(Phonevalidate.value.length < 6) { 
		document.getElementById("a6").innerHTML = "length atleast six"; 
		
		return false; 
	} 
else{
document.getElementById("a6").innerHTML = ""; 
}
 
}

function confValidate() { 
        var Phonevalidate = document.getElementById("pwd");
        var cPhonevalidate = document.getElementById("cpwd");
        if(Phonevalidate.value.length < 6) { 
		document.getElementById("a6").innerHTML = "Enter valid one"; 
		
		return false; 
	} 
	if(Phonevalidate.value == cPhonevalidate.value) { 
		document.getElementById("a7").innerHTML = "matched"; 
		
		return false; 
	} 
       else{
document.getElementById("a7").innerHTML = "unmatched"; 
}
       
}
function checkForm() { 

	var valid = true; 
	if(!firstNameValidate()) valid = false;  
	if(!lastNameValidate()) valid = false;
        if(!userNameValidate()) valid = false; 
	if(!emailValidate()) valid = false; 
        if(!PhoneValidate()) valid = false; 
        if(!PassValidate()) valid = false;  
	
	//alert(valid); 
	return valid; 
}



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
				<center><h2><b>SignUp</b></h2></center>
			</div>
			<form  method="post" name="myform">
				<div class="pom-agile">
					<input placeholder="First Name" id="fname" name="fName" class="user" type="text" onblur="firstNameValidate()" >
					<span class="icon1"><i class="fa fa-user" id="a1" aria-hidden="true"></i></span>
				</div>
                                
				<div class="pom-agile">
					<input placeholder="Last Name" name="lName"  id="lname" class="user" type="text" onblur="lastNameValidate()" >
					<span class="icon1"><i class="fa fa-user" id="a2" aria-hidden="true"></i></span>
				</div>
                                <div class="pom-agile">
					<input placeholder="UserName" name="UName" id="Uname" class="user" type="text" onblur="userNameValidate()" >
					<span class="icon1"><i class="fa fa-user" id="a3" aria-hidden="true"></i></span>
				</div>
                                
				<div class="pom-agile">
					<input placeholder="E-mail" name="mail" id="mail" class="user" type="text" onblur="emailValidate()" >
					<span class="icon1"><i class="fa fa-user" id="a4" aria-hidden="true"></i></span>
				</div>
                                
				<div class="pom-agile">
					<input placeholder="Phone Number" name="phno" id="phno" class="user" type="text"  onblur="PhoneValidate()" >
					<span class="icon1"><i class="fa fa-user" id="a5" aria-hidden="true"></i></span>
				</div>
                                
				<div class="pom-agile">
					<input  placeholder="Password" name="Password" id="pwd" class="user" type="password" onblur="PassValidate()" >
					<span class="icon2"><i class="fa fa-unlock" id="a6" aria-hidden="true"></i></span>
				</div> 
                                <div class="pom-agile">
					<input  placeholder="Confirm Password" name="cPassword" id="cpwd" class="user" type="password" onblur="confValidate()" >
					<span class="icon2"><i class="fa fa-unlock" id="a7" aria-hidden="true"></i></span>
				</div>
				<div class="sub-w3l">
					

					<div class="right-w3l">
						<h6><a href="index12.php">Already Member?</a></h6><input type="submit" value="SignUp">
                                                
					</div>
                                           
				</div>
			</form>
                   
		</div>
	</div>
	<!--//main-->
	<!--footer-->
	<div class="footer">
		
	</div>
	<!--//footer-->
</div>
</body>
</html>
