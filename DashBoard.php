<?php
include_once 'connectdb.php';
  session_start();
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
<script type="text/javascript">

	var fileobj;
	function ValidCaptcha(){
                      	var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      	var string2 = removeSpaces(document.getElementById('txtInput').value);
                      	if (string1 == string2)
			{
                       	ajax_file_upload(fileobj);
                      	}
                     	else{        
                       	document.getElementById("errorDisplay").innerHTML="enter correct captcha";
			
                      	}
                  	}
			function getExtension(filename) {
    			var parts = filename.split('.');
    			return parts[parts.length - 1];
			}

	function isFile() {
		var file=fileobj.type;
		var ext = file.split('/').pop();
		var ext1 = file.split('.').pop();
		var file_size=fileobj.size/1024;
    		var ext2=ext.toLowerCase()
		if(ext2=='jpg'||ext2=='pdf'||ext1=='document'||ext2=='jpeg'){
        
			if(file_size<500)
			{
			file_details();
			}
			else
			{
			document.getElementById("errorDisplay").innerHTML="file size must be less than 400KB";
			setTimeout(function(){
  			 window.location.reload(1);
			}, 3000);
			}
    		}
		else{
    		document.getElementById("errorDisplay").innerHTML="you can upload only jpg,pdf,jpeg,docx";
		setTimeout(function(){
  			 window.location.reload(1);
			}, 3000);
		}
	}

	
	function upload_file(e) 
	{
		e.preventDefault();
		fileobj = e.dataTransfer.files[0];
		var file=fileobj.type;		
		isFile();		
		}
	
        function file_explorer() {

            document.getElementById('selectfile').click();

            document.getElementById('selectfile').onchange = function() {

                fileobj = document.getElementById('selectfile').files[0];
		
                isFile();

            };
        }
	function file_details(){
	if(fileobj != undefined) {		
			
	            	var form_data = new FormData();                 	
	            	form_data.append('file', fileobj);
	            	$.ajax({
	                type: 'POST',
	                url: 'filedetails.php',
	                contentType: false,
	                processData: false,
	                data: form_data,
	                success:function(response) {
                    	if(confirm(response)!==true)
			{	
		       	location.reload();
			}else{
			
			var file_size=fileobj.size/1024;
		var details="you are uploading a file of size "+file_size.toFixed(0)+"KB Enter captcha and Proceed upload.";
		document.getElementById("drag_upload_file").innerHTML="<span style='color: green;'>"+details;
		x.style.color = "red";
			
			}
                   	$('#selectfile').val('');
	                }
	            });
	        }
	
		
	}
	function ajax_file_upload(file_obj) {
	     	if(file_obj != undefined) {		
			
	            	var form_data = new FormData();                 	
	            	form_data.append('file', file_obj);
	            	$.ajax({
	                type: 'POST',
	                url: 'upload.php',
	                contentType: false,
	                processData: false,
	                data: form_data,
	                success:function(response) {
			if (/^\s*SUCCESS\s*$/.test(response)) {
			document.getElementById("errorDisplay").innerHTML="File Already Exists, Please Rename The File";
			setTimeout(function(){
  			 window.location.reload(1);
			}, 3000);
    			
			}
			else{window.location=response;
			}
    	               	$('#selectfile').val('');
	                }
	            });
	        }

		}

</script>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />





 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel='stylesheet prefetch' href='https://drop-uploader.borisolhor.com/pe-icon-7-stroke/css/pe-icon-7-stroke.css'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


      

	<style>
	a{
		color:green;}
		.active11 {
	font-size: 25px;
	align-items: center;
	align-self: center;
	background: url('images.jpg') center ;
	border-radius: 100%;
	display: flex;
	flex-direction: column;
	min-height: 150px;
	justify-content: center;
	width: 150px;
}
.center{
top: 40%;
left:0px;
right:auto;
margin-left: 300px;
}
 .footer{
	background-color: #FFF;
position:fixed;
bottom: 0px;
width: 100%;
text-align: center;
}

.button {
    background-color: purple; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {width: 250px;height:150px;}
.button1:hover {background-color: #3e8e41}
.button2:hover {background-color:red}

 		#drop_file_zone {

	        background-color:  #fff;

	        border: #044f95 2px dashed;

	        width: 500px;

	        height: 150px;

	        padding: 45px;

	        font-size: 18px;
		border-radius: 10px;

	    }

	    #drag_upload_file {

	        width:70%;

	        margin:0 auto;

	    }

	    #drag_upload_file p {

	        text-align: center;

	    }

	    #drag_upload_file #selectfile {

	        display: none;

	    }
		#file_details {

	        background-color:'';

	        width: 800px;

	        font-size: 16px;
		
		
	}
	#errorDisplay{
	height:50px;
	color:red;
	font-size:18px;
	}
	.textBox1{
  	
  	background-repeat:no-repeat;
  
	font-size:20px;
	width:150px;
	
	
	background-color: #ccd1d1 ;
        text-align:center;
} 
	.textBox2{
	font-size:16.5px;
	width:150px;
        text-align:center;
	color:black;
} 
</style>

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

</head>
<body onload="Captcha();">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="sidebar-4.jpg">

    <!--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Notary Hub
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.html">
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
<!--
				<li class="active-pro">
                    <a href="index.html">
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class=""></i>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class=""></i>
                                    <b class=""></b>
                                    
                              </a>
                             
                        </li>
                        <li>
                           <a href="">
                                <i class=""></i>
                            </a>
                        </li>
                    </ul>

                 <ul class="nav navbar-nav navbar-right">
                  <!--         <li>
                           <a href="">
                               Account
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Dropdown
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
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
         
<div style="margin-left:10px">
<div class="w3-container">
  <div class="dashboard clearfix">
<div style="height:50px">
 <h3 style="text-align : left"> Welcome <?php echo $login_session; ?> </h3>
</div>
<center>
 <ul class="tiles" >
<button class="button button1" onclick="window.location.href='user.php'"><b>Account Details</b></button>
<button class="button button1" onclick="window.location.href='documents.php'"><b>View Documents</b></button>
<button class="button button1" onclick="window.location.href='index.html'"><b>Download Documnets</b></button>
<button class="button button1" onclick="window.location.href='payment.php'"><b>Payment</b></button>
<!--
<button class="button button1" onclick="window.location.href='index.html'"><b>Settings</b></button>
<button class="button button1" onclick="window.location.href='index.html'"><b>Help</b></button>      -->
    </ul>

<div id="errorDisplay">
</div>
<form method="POST" action="" enctype="multipart/form-data">
	<div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
		<div id="drag_upload_file"><div class="form-group">
	        	<p>Drop File Here Or Click To Upload</p></div>
	        	
	        	<p><input type="button" value="Select File" onclick="file_explorer();"></p>	
         		<input type="file" id="selectfile">
	    	</div>
	</div></br>
	<div id="file_details">
	
	<div class="form-group">
	
             	<p><input type="text" id="mainCaptcha"  class="textBox1" disabled/></p>
		<div class=" w3-xlarge">
		<a href='javascript: Captcha();'><i class="glyphicon glyphicon-refresh"></i></a></div></p>
              	<!--<input type="button" id="refresh" value="Refresh" onclick="Captcha();" />
		click <a href='javascript: Captcha();'>here</a> to refresh.-->
            	<p><input type="text" id="txtInput"  class="textBox2" placeholder="Enter Captcha" />  </p>      
            	<input id="Button1" class="btn btn-info btn-fill"type="button" value="Upload" onclick="ValidCaptcha();"/></br>
		<!--<button type="submit" class="btn btn-info btn-fill" onclick="ValidCaptcha();">Upload</button>-->          
		<!--<input type="submit" name="submit"  id="mySubmit" value="Submit" onclick="ajax_file_upload(fileobj);" disabled>-->
                </form>
		<a href="documents.php">click here to view files.</a></label></div>
  	</div><!--end dashboard--> 
	</center>
	</div></div>


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
                <p>
                    &copy 2017 <a href="http://www.rihusoft.com">RihuSoft</a>
                </p>
            </div>
        </footer>

    </div>
</div>


<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<!--<script src='https://drop-uploader.borisolhor.com/js/drop_uploader.js'></script>-->

    <script src="js/captcha.js"></script>


</body>
<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Admin Dashboard</b>."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
