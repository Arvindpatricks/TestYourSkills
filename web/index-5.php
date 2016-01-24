
<!DOCTYPE html>
<html>
<head>
<title>TestYourSkills.com</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lucid Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="file:///C:/Users/home/Downloads/compiler/web/Home.html";
            }
         //-->
      </script>
</head>
<body class="sticky-header left-side-collapsed"  onload="initMap()">
<section>
<!-- <div class="container">
 <h1>TestYourSkills Compiler</h1>
	 <div class="signin">
     	<form method="post" action="login.php">
	      	<input type="email" name="tysid" class="user" value=""  onblur="if (this.value == '') {this.value = '';}" placeholder="TYS Id" />
	      	<input type="password" name="pass" class="pass" value=""  onblur="if (this.value == '') {this.value = '';}" placeholder="Password"  />
	      	<label>
		  		<center><input type="checkbox" value="Remember-Me" /> Remember Me? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  		<a  href="./register.php" ><font color="#FFFFFF">Register Now</font></a></center>
		  	</label>
          	<input type="submit"  value="LOGIN" />
	 	</form>
	</div> 
</div>
<div class="footer">
     <p>Copyright &copy; 2015. All Rights Reserved | Design by <a href="http://craftydesigners.16mb.com/">Crafty Designers</a></p>
</div>-->
  <!--footer section start-->
  <div class="main-content">
  <!-- header-starts -->
			<div class="header-section">
		<div class="social_icons">
						<h2>TestYourSkills</h2>
						<div class="clearfix"> </div>
					</div>            	
					<div class="clearfix"></div>
			</div>
		<!-- //header-ends -->
  <div id="page-wrapper">
				<div class="graphs">
					<div class="col_3">
					<div class="col-md-3 widget widget1"></div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-mail-forward"></i>
								<div class="stats">
								  <h5><?=$col?> <span>Users</span></h5>
								  <div class="grow">
									<p>College Registration<br></p>
								  </div>
								</div>
							</div>
						</div>
						
						<!-- <div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-users"></i>
								<div class="stats">
								  <h5><?=$dep?> <span>Users</span></h5>
								  <div class="grow grow1">
									<p>Department Registration</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-eye"></i>
								<div class="stats">
								  <h5><?=$staff?> <span>Users</span></h5>
								  <div class="grow grow3">
									<p>Staffs Registration</p>
								  </div>
								</div>
							</div>
						 </div>     -->
						 <div class="col-md-3 widget">
							<div class="r3_counter_box">
								<i class="fa fa-usd"></i>
								<div class="stats">
								  <h5><?=$cont?><span>Users</span></h5>
								  <div class="grow grow2">
									<p>contestant Registration</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<!-- //switches -->
		<div class="col_1">
			<div class="col-md-4 span_8">
				<div class="activity_box">
					<h3>Contestant Ranking</h3>
					<div class="scrollbar scrollbar1" id="style-2">
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">John Smith</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box1">
					<h3>Login</h3>
					<form method="post" action="login.php">
					<br><br><br>
					<input type="email" class="dd" name="tysid" value="" placeholder="User Id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required>
					<br><br>
					<input type="password" class="dd" name="pass" value="" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required>
						<label>
						<br>
		  				<input type="checkbox" value="Remember-Me" /> Remember Me? &nbsp;
		  				<!-- <a  href="./register.php" ><font color="#FFFFFF">Register Now</font></a>
		  				 -->
		  				 </label><br><br>
          				<input type="submit"  value="LOGIN" />
	 				</form>
							<div class="activity-row activity-row1">
							<div class="clearfix"> </div>
						</div>
					
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box2">
					<h3>College Ranking</h3>
					<div class="scrollbar" id="style-2">
						<div class="activity-row activity-row1">
							<div class="single-bottom">
								<ul>
									<li>
										<input type="checkbox"  id="brand" value="">
										<label for="brand"><span></span> Sunt in culpa qui officia.</label>
									</li>
										
									
								</ul>
							</div>
						</div>
					</div>
					</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
				</div>

  			</div>
  
  </div>
    	
			<footer>
			   <p>&copy 2015. All Rights Reserved | Design by <a href="https://craftydesigners.16mb.com/" target="_blank">Crafty Designers.</a></p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>

</body>
</html>