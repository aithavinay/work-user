<?php
include("connectdb.php");

$sql = "SELECT * from userdata ";
$result=$conn->query($sql);

?>

<!DOCTYPE HTML>
<html>
<head>
<title>UserData</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.html">Notary <span>Hub</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.html"><i class="lnr lnr-home"></i> </a>
			</div>

    <!-- left side end-->
    
    <!-- main content start-->
		<div class="main-content main-content4">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
											   	
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Michael<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="sign-up.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					
			
			</div>

			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Your Documents</h3>
					 <div class="xs tabls">
						<div class="bs-example4" data-example-id="contextual-table">
						<table class="table" border="1">
							<tr align="center" >
							  <th>S.no</th>
							  <th>User Name</th>
							  <th>Email ID</th>
							  <th>No.of Docs Uploaded</th>
							  
							</tr>
						  
<?php						
		while($row = $result->fetch_assoc())
{
 $Id=$row['Id'];
 $user=$row['username'];
 $mail=$row['email'];
 $pass=$row['password'];
	?>
					<tr>
					<td><?php echo $Id ?></td>
					<td><?php echo $user ?></td>
					<td><?php echo $mail ?></td>		  
					<td><?php echo $pass ?></td>	
					</tr>
<?php
}
							
$conn->close();
?>

							
							
						</table>
					   </div>

</body>
</html>

