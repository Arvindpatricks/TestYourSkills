	<!DOCTYPE HTML>
<html>
<head>

<link rel="stylesheet" id="js-hr-typography" type="text/css" href="https://d3keuzeb2crhkn.cloudfront.net/lib/typography/345134/hosts/https/d3keuzeb2crhkn.cloudfront.net/0ADEC9C5D0FF36841.css" data-noprefix />
<link href="https://d3keuzeb2crhkn.cloudfront.net/hackerrank/assets/hackerrank_libraries-0a6d5a99a344c17b110dbd11804c4151.css" media="all" rel="stylesheet" />
<link href="https://d3keuzeb2crhkn.cloudfront.net/hackerrank/assets/hackerrank-core-89343b0ae6f3b500474f85d0a321d8ae.css" media="all" rel="stylesheet" />
<link href="https://d3keuzeb2crhkn.cloudfront.net/hackerrank/assets/dashboard-21b1dbba10cf7e97f29f1a19d888d732.css" media="all" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.textcomplete/0.2.2/jquery.textcomplete.js"></script>
<script src="https://code.jquery.com/jquery-git2.js"></script>










<script type="text/javascript">
 $( document ).ready(function() {
	 alert('hello');
$('#textt').textcomplete([
    { // tech companies
        words: ['apple', 'google', 'facebook', 'github'],
        match: /\b(\w{1,})$/,
        search: function (term, callback) {
            callback($.map(this.words, function (word) {
                return word.indexOf(term) === 0 ? word : null;
            }));
        },
        index: 1,
        replace: function (word) {
            return word + ' ';
        }
    }
]);
    });


</script>

<title>TestYourSkills | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ke	ywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
   <link rel="stylesheet" href="styles2.css">
  
   <script src="script2.js"></script>
   <script type="text/javascript">
function defaultText(){
var e = document.getElementById("language");
var strUser = e.options[e.selectedIndex].text;
if(strUser=="Java"){
	$('#textt').val('import java.util.*;\nclass Solution{\n\tpublic static void main(String args[]){\n\tString str = "Hello World";\n\t}\n}');
}
else if(strUser=="C++"){
	$('#textt').val('#include<iostream.h>\n#include<ctype.h>\n\tint main(){\n\t\n\treturn 0;\n}');
	
}
else{
	$('#textt').val('#include<stdio.h>\n#include<ctype.h>\n\tint main(){\n\t\n\treturn 0;\n}');
	
}
}

function executeScript(str){
	alert(str);
	 if (str.length == 0) { 
	        document.getElementById("outputt").innerHTML = "";
	        return;
	    } else {
	        var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	                document.getElementById("outputt").innerHTML = xmlhttp.responseText;
	            }
	        };
	        xmlhttp.open("GET", "gethint.php?q=" +str,true);
	        xmlhttp.send();
	    }
}
   </script>
</head> 
   <?php 
session_start();
?>
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.html">Easy <span>Admin</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.html"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="index.html"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
						<li class="menu-list">
							<a href="#"><i class="lnr lnr-cog"></i>
								<span>Components</span></a>
								<ul class="sub-menu-list">
									<li><a href="grids.html">Grids</a> </li>
									<li><a href="widgets.html">Widgets</a></li>
								</ul>
						</li>
						<li><a href="forms.html"><i class="lnr lnr-spell-check"></i> <span>Forms</span></a></li>
						<li><a href="tables.html"><i class="lnr lnr-menu"></i> <span>Tables</span></a></li>              
						<li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>MailBox</span></a>
							<ul class="sub-menu-list">
								<li><a href="inbox.html">Inbox</a> </li>
								<li><a href="compose-mail.html">Compose Mail</a></li>
							</ul>
						</li>      
						<li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i> <span>Menu Levels</span></a>  
							<ul class="sub-menu-list">
								<li><a href="charts.html">Basic Charts</a> </li>
							</ul>
						</li>
						<li><a href="codes.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
						<li><a href="media.html"><i class="lnr lnr-select"></i> <span>Media Css</span></a></li>
						<li class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Pages</span></a> 
							<ul class="sub-menu-list">
								<li><a href="sign-in.html">Sign In</a> </li>
								<li><a href="sign-up.html">Sign Up</a></li>
								<li><a href="blank_page.html">Blank Page</a></li>
							</ul>
						</li>
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
									
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
							</li>
							<li class="login_box" id="loginContainer">
									<div class="search-box">
										<div id="sb-search" class="sb-search">
											<form>
												<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
												<input class="sb-search-submit" type="submit" value="">
												<span class="sb-icon-search"> </span>
											</form>
										</div>
									</div>
										<!-- search-scripts -->
										<script src="js/classie.js"></script>
										<script src="js/uisearch.js"></script>
											<script>
												new UISearch( document.getElementById( 'sb-search' ) );
											</script>
										<!-- //search-scripts -->
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 3 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 8 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p><?=$_SESSION['name']?><span>Admin</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="index-5.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					<div class="social_icons">
						<div class="col-md-4 social_icons-left">
							<a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
						</div>
						<div class="col-md-4 social_icons-left pinterest">
							<a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
						</div>
						<div class="col-md-4 social_icons-left twi">
							<a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
						</div>
						<div class="clearfix"> </div>
					</div>            	
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->
			<div id="page-wrapper">
			

<div id='cssmenu'>
<ul>
 
   
   <li ><a href='#'>Domains</a>
      <ul>
         <li ><a href='#'>Algorithm</a>
            
         </li>
         <li ><a href='#'>Data Structures</a>
            
         </li>
      </ul>
   </li>
   <li><a href='#' class='active'>Contests</a></li>
   <li><a href='#'>My Profile</a></li>
      <li><a href='#'>Leaderboard</a></li>
            <li><a href='#'>Companies</a></li>
      
   
</ul>
</div>




<br><br><br>









        <div class="graphs">
          <!--<div class="col_3">
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
          
           //switches -->
         <!-- question here -->
         <div class="activity_box">  <header><h3>Question<br>Id : <?=$_GET['ques_id']?></h3><br></header>
         
         
         
         
 <?php 
              $servername = "localhost";
              $username = "root";
              $password = "root";
              $dbname = "testyourskills";
              
              
              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
              
              $sql = "SELECT ques,ques_header FROM question where ques_id='".$_GET['ques_id']."'";
              $result = $conn->query($sql);
              
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                	echo "<header><h2>".$row['ques_header']."</h2></header>";
                	echo "<pre>".$row['ques']."</pre>";
                }
              
              }
              $conn->close();
 ?>
         
         
         
         
         
         
         
         </div>
         
         
         
          <div><div class="clearfix"> </div>
          <div class="activity_box1d" >
          </div><br>  
          <div class="activity_box">
          <header><h3>Code Area</h3><br>
         <form id="formm" method="post" action="result.php"> 
         <input type="hidden" name="ques_id" value="<?=$_GET['ques_id']?>"/>
         
          &nbsp;&nbsp;&nbsp;<select id="language" onchange="defaultText()">
             <option value="c" selected="selected">C</option>
               <option value="c++">C++</option>
               <option value="java">Java</option>
          </select></header><br>
            <textarea rows="10" style="width:100%;" id="textt" name="coding">

#include<stdio.h>
#include<ctype.h>
	int main(){

	return 0;
	}

            
            </textarea>
            <br><br>
            <div align="center">
			<input type="submit" value="RUN"/>
            </div>&nbsp;
        </form> 
          </div>
          
          </div>
          <br>
          <div><div class="clearfix"> </div>
         
        </div>

        </div>
  
  </div>












        <!--footer section start-->
			<footer>
			   <p>&copy 2015 Crafty Designers Admin Panel. All Rights Reserved</p>
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