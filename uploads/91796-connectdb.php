 <?php

$hostname='localhost';
$user = 'root';
$password = 'rihu@123';
$dbname='NotaryHub';

$conn = new mysqli($hostname, $user, $password, $dbname);


if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

?>
