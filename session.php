<?php
 include("connectdb.php");
//session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql="select username from userdata where username='$user_check'";
$result =$conn->query($ses_sql);

//$row = mysql_fetch_assoc($ses_sql);

$row = $result->fetch_assoc();
$login_session =$row['username'];
if(!isset($login_session)){
$conn->close(); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
