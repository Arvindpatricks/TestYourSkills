
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "testyourskills";


// Create connection
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
	die("Connection failed: " . $conn2->connect_error);
}

$emailid = $_POST['emailid'];
$password = $_POST['password'];
$universityid = $_POST['universityid'];
$name = $_POST['name'];
$department = $_POST['department'];
$dateofbirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$college = $_POST['college'];
$interests = $_POST['interests'];
$year = $_POST['year'];
$photo = $_POST['photo'];
$resume = $_POST['resume'];


$sql = "INSERT INTO  students(emailid,password,univ_reg_id,name,dept,dob,gender,college,interests,year,dp,resume)
VALUES ( '$emailid','$password','$universityid','$name','$department','$dateofbirth','$gender','$college','$interests','$year','$photo','$resume')";


if(mysqli_query($conn2, $sql)){
	
	header("Location: ./index-5.php");
	
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$conn2->close();

?>