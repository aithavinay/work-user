<?php
session_start();
$user=$_SESSION['userprofile'];


$username = "root";
$password = "";
$dbname = "NotaryHub";
$con = new mysqli("localhost",$username,$password,$dbname);
$sql = "Update userdata  SET username='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',password='$_POST[password]',Phone_Number='$_POST[phone]',city='$_POST[city]',state='$_POST[state]' where username ='$user'";

$con->query($sql);
$_SESSION['userprofile']=$_POST[fname];
header("location:user.php");

?> 
