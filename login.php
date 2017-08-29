<?php

$message=''; // Variable To Store Error Message
if(isset($_POST['submit'])) {
	if (empty($_POST['uname']) || empty($_POST['psw'])) {
	$error = "Username or Password is invalid";
	}
	else
	{
	session_start();


	// code for check server side validation
		if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.?>
		<script>
		
		window.location.href='index.php?fail';
			
		</script><?php	
		}
		else{// Captcha verification is Correct. Final Code Execute here!		
		
   		include("connectdb.php");
		

		$username=$_POST['uname'];
		$password=$_POST['psw'];
		$sql ="SELECT * FROM userdata WHERE (username='$username' OR email='$username') AND password='$password'";
                $sql1="UPDATE `userdata` SET `last_login` = now() WHERE username='$username'";
		$result=$conn->query($sql);

			if ($result->num_rows > 0) {
                        
	
			while($row=$result->fetch_assoc()){
			$user= $row["username"];
			$id=$row['Id'];
			$status=$row['status'];
                        $result1=$conn->query($sql1);
                        
			}
				if($status== 0) {
				$message = "Sorry <b>$username</b>, your account is temporarily deactivated by the admin.";
				}else{
				$_SESSION['id'] = $id;
		            	$_SESSION['login_user']=$user;
		            	$_SESSION['message']=$message;
					header("location: DashBoard.php?logid=$id");
				}

 
			} 
			else {
 			echo "<script type='text/javascript'> alert('username or password Invalid ') </script>";
			}
	

		}
}	
}
$_SESSION['message']=$message;
?>
