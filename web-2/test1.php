<!DOCTYPE html>
<html>
<head>
<title>Test-1 | Tech Developers Compiler</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lucid Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

</head>
<body>
<?php 
session_start();
?>
<div class="container">
<h1>Tech Developers Compiler</h1>
<font color="FFFFFF" >Welcome <?=$_SESSION['name']?> !!</font>

	<div class="test">
	<form action="writefile.php" method="post">
		<select>
			<option value="c">C</option>
			<option value="c++">C++</option>
			<option value="java">Java</option>
		</select>
       	<textarea name="coding" class="edit1" id="mytextarea" rows="15" cols="100" ></textarea>
		<input type="submit" value="Run"/>
		</br></br></br>
		<textarea class="edit1" id="output" rows="5" cols="100" ></textarea>
	 </form>	
	</div>
</div>
<div class="footer">
     <p>Copyright &copy; 2015. All Rights Reserved | Design by <a href="http://craftydesigners.16mb.com/">Crafty Designers</a></p>
</div>
</body>
</html>