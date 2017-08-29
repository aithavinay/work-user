
 <?php
if (isset($_POST["register"])) {
$user = $_POST["name"];
$mail = $_POST["email"];
$pass = $_POST["password"];
$phone= $_POST["phno"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "NotaryHub";

 session_start();


	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		// Captcha verification is incorrect.
		header('Location: http://localhost/NotaryHub/signup.php?fail');	
	}else{// Captcha verification is Correct. Final Code Execute here!		
		
	

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO NotaryHub.userdata (username, email, password,Phone_Number)
VALUES ('$user', '$mail', '$pass','$phone')";

$conn->query($sql);
 

header('location:index.php');

$conn->close();
}
}

?> 
