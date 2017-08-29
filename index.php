<?php
     include("login.php");

 $message = $_SESSION['message'];
     if(isset($_SESSION['login_user'])){
		 include("functions.php");
			 
		 if(!isLoginSessionExpired()){
		   
               header("location:DashBoard.php");
             
		 }
		else {
			  $message = "Login Session is Expired. Please Login Again";
			  header("location:logout.php?session_expired=1");
		     }
	 
 }
if(isset($_SESSION['user12'])){

     $message=$_SESSION['user12'];
     //echo "<script>alert('$message')</script>";


 unset($_SESSION['user12']);
}

?> 	

   
<script>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
	

<!doctype html>

<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Notary</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="header" class="navbar-fixed-top">
            <div class="container">
                <div class="main_menu wow fadeInDown" data-wow-duration="2s">	
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand our_logo" href="#">Notary Hub</a>
                                <div class="call_us">
                                    <i class="fa fa-phone"></i>
                                    +91 xxxxxxx
                                </div>	  
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="aboutus.html">About Us</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#" style="background:#6FB048;color:#fff;border-radius:2px;padding:5px 10px;margin-top:10px;">Get Stared</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>

                </div>
            </div>
        </header>
        <!--Home page style-->

        <!-- Sections -->
        <section id="bener" class="">
            <div class="bener_overlay">
                <div class="container">
                    <div class="bener_content">

<div class="cont_info_log_sign_up">
      <div class="col_md_login">
		  
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
 <form  method="post" action="login.php" align="center">
<?php if($message!="") { ?>
<div style="color:'red'"><?php echo $message; ?></div>
<?php } ?>
<table>
 <tr>   
 	<td><font color=white><b>UserName</b></font> </td>
    	<td><input style="background-color:'yellow';padding:4px" type="text"  name="uname" required></td>
   </tr>
 <tr>
	<td><font color=white><b>Password</b></font></td>
    	<td><input style="color:#000 ;padding:4px" type="password" name="psw" required> </td>
   </tr>


    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td align="right" valign="top"> Validation code:</td>
      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here</label>
        <br>
        <input id="captcha_code" name="captcha_code" type="text">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="submit" class="btn_login" type="submit" value="LOGIN" class="button1"></td>
    </tr>
 
 <tr><td>  <a href="#" align="right">Forget Password ?</a></td></tr>
 </table>
	</form>
  </div>
  </div>
	
	
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p>New to Notary hub?</p>

  <button class="btn_sign_up" onclick="window.location.href='signup.php'">SIGN UP</button>
</div>
  </div>
       </div>

    
    

    
 <div class="cont_form_login">
<a href="Login.html" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>
 
  </div>
  
   <div class="cont_form_sign_up">
<a href="signup.html"><i class="material-icons">&#xE5C4;</i></a>
     <h2>SIGN UP</h2>

  </div>

    </div>
    
  </div>
 </div>

  
    <script src="js/index.js"></script>
						
						            
                 <!-- /container -->
         
       
 </section>
              

        
        <section id="build" class="build sections">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="build_contant">
                            <h2>Built with High Attention to Details</h2>
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="build_img_rigth">
                            <img src="img/build.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Build Section -->


		


        <section id="healp" class="text-center">
            <div class="container">
                <div class="healp_contant">
                    <i class="fa fa-life-ring"></i>
                    <h2>Need Help?</h2>
                    <div class="separator"></div>
                    <p>Contact our Customer Support that is always ready to help you with any possible questions, problems or information.</p>
                    <a href="">support@wapik.com</a>
                </div>
            </div>
        </section><!-- End Healp Section -->

<?php
if(isset($_GET['fail']))
 {
  ?><script>
        alert("captcha does not matched");</script>
        <?php
 }
  ?>

        <!--Footer-->
        <footer id="footer">
            <div class="container">
			
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single_footer">
                            <h2>rihusoft</h2>
                            <ul>
                                <li><a href="">@: hi@wapik.com</a></li>
                                <li><a href="">p: +62 202 555 0117</a></li>
                                <li><a href="">a: 610 Overlook Circle Suite 323</a></li>
                                <li><a href="">Kalamazoo, MI 49009</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single_footer">
                            <h2>Company</h2>
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Pricing</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single_footer">
                            <h2>Others</h2>
                            <ul>
                                <li><a href="">Help & Support</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Terms</a></li>
                                <li><a href="">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single_footer">
                            <h2>Newsletter</h2>
                            <p>Subscribe to our newsletter and get all the cool news</p>

                            <form class="navbar-form navbar-left email_sender" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" ><i class="fa fa-paper-plane-o"></i></button>
                            </form>

                        </div>
                    </div>
					
                </div>

                <div class="footer_bottom">
                    <div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single_footer_bottom">
							   <p class="wow zoomIn" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All Rights Reserved</p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="single_footer_bottom pull-right">
								<ul>
									<li><a href="" class="s_f_1"><i class="fa fa-twitter"></i></a></li>
									<li><a href="" class="s_f_2"><i class="fa fa-facebook"></i></a></li>
									<li><a href="" class="s_f_3"><i class="fa fa-instagram"></i></a></li>
									<li><a href="" class="s_f_4"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="" class="s_f_5"><i class="fa fa-github"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
                </div><!-- End footer bottom -->
            </div>
        </footer>


        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		 <script src="js/index.js"></script>
    </body>
</html>
