<?php
	session_start();
      $user=$_SESSION['userprofile'];
      include_once 'connectdb.php';
	//require_once('../config.php');
	
	//if(!isset($_SESSION['id'])) {
		//header('Location:../index.php');
    
	
?>
<?php

    include('session.php');
$_SESSION['userprofile']=$login_session;
$_SESSION['editprofile']=$login_session;
$_SESSION['editdb']=$login_session;
	include("functions.php");
	if(isset($_SESSION["login_user"])) {
	if(isLoginSessionExpired()) {
		header("Location:logout.php?session_expired=1");
	}
		 else{
		    	$_SESSION['timestamp']=time();		 
		 }
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Notary Hub</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.rihusoft.com" class="simple-text">
                    NotaryHub
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="DashBoard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="active">
                    <a href="documents.php">
                        <i class="pe-7s-note2"></i>
                        <p>Document List</p>
                    </a>
                </li>
                <li>
                 <a href="payment.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Payment</p>
                    </a>
                </li>
                <li>
                    <a href="settings.php">
                        <i class="pe-7s-config"></i>
                        <p>settings</p>
                    </a>
                </li>
                
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Documents List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">


                     
                        <li>
                          <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a> -->
                        </li>
                        <li class="dropdown">
                             <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret"></b>
                                    
                              </a> -->
                              
                        </li>
                        <li>
                        <!--   <a href="">
                                <i class="fa fa-search"></i>
                            </a> -->
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                          <!-- <a href="">
                               Account
                            </a> -->
                        </li>
                        <li class="dropdown">
               <!--
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <b class="caret"></b>
                              </a> -->
                             <!-- <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li> -->
                        <li>
                            <a href="logout.php">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<div >


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users Account Information</h4>
                              
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                       
                                    	<th><b>File Name</b></th>
                                    	<th><b>Type</b></th>
                                    	<th><b>Size(kb)</b></th>
                                    	<th><b>Uploaded Date</b></th>
					<th><b>view</b></th>
										
                                    </thead>
                                    <tbody>
										
																  
<?php
      $user=$_SESSION['userprofile'];
	
// SQL Query To Fetch Complete Information Of User
$ses_sql="select id from userdata where username='$user'";
$result =$conn->query($ses_sql);

//$row = mysql_fetch_assoc($ses_sql);

$row = $result->fetch_assoc();
$login_session =$row['id'];
	$sql="SELECT * FROM UPLOADS WHERE id='$login_session'" ;
	$result_set =$conn->query($sql);
	while($row = $result_set->fetch_assoc())
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
	<td><?php echo $row['date'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2017 <a href="http://www.rihusoft.com">Rihu Soft</a>
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
