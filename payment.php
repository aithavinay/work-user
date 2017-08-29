<?php
session_start();
include("connectdb.php");

$user=$_SESSION['userprofile'];
$sql ="SELECT * FROM userdata where username ='$user'" ;
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
$fname=$row['username'];
$lname=$row['lname'];
$mail=$row['email'];
$pass=$row['password'];
$phone=$row['Phone_Number'];

}
$user=$_SESSION['userprofile'];
	
// sQL Query To Fetch Complete Information Of User
$ses_sql="select id from userdata where username='$user'";
$result =$conn->query($ses_sql);

//$row = mysql_fetch_assoc($ses_sql);

$row = $result->fetch_assoc();
$login_session =$row['id'];

    // new file size in KB
    /*$new_size = $file_size/1024;  
	$size=$new_size+100;

	$price_sql="select amount_Rs from Price where file_size_Kbs between '$new_size' and '$size'";
	$result1 =$conn->query($price_sql);
	$row1 = $result1->fetch_array();
	
	$amount=$row1['amount_Rs'];*/
	$amount = $_SESSION['amount'];
	
    
	

?>        



<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />



<style>








.button {
    background-color: #00D7FF;
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


</style>







</head>
<body>

<div class="wrapper" method="post" >
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    NOTARY HUB
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
                <li>
                    <a href="documents.php">
                        <i class="pe-7s-note2"></i>
                        <p>Document List</p>
                    </a>
                </li>
                <li class="active">
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
			<!--	<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#">Payments</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                      
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               
                            </a>
                        </li>
                        <li class="dropdown">
                              
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="logout.php">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                
                            </div>
                            <div class="content">
                                <form method="POST" name="proform" action="pgRedirect.php">
                                   

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>ORDER_ID :</label>
                                                <input class="form-control" id="ORDER_ID" type="text" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>CUSTID :</label>
                                                <input class="form-control" id="CUST_ID" tabindex="2" type="text" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value=<?php echo "$login_session" ?>>
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row">
                                       
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">INDUSTRY_TYPE_IDN :</label>
                                                <input class="form-control" id="INDUSTRY_TYPE_ID" type="text" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Channel :</label>
                                               <input class="form-control" id="CHANNEL_ID" type="text" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Total Amount in Rupees :</label>
                                                <input class="form-control" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value=<?php echo "$amount" ?>>
                                            </div>
                                        </div>
                                    </div>

                                    
                                           

                                    

                        
                                    <input value="Pay now" class="button" type="submit"onclick=""></td>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title"><?php echo $lname ?><?php echo " " ?> <?php echo $fname ?><br />
                                         <small><?php echo $phone ?></small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> <?php echo $mail ?>
                                                  
                                                    
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

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
                    &copy; 2016 <a href="http://www.creative-tim.com">NOTARY HUB</a>, made with love for a better web
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
        <script src="js/validation.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
