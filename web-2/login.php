<?php
$tysid = $_POST['tysid'];
$pass = $_POST['pass'];
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

$sql = "SELECT * FROM account where tysid='".$tysid."' and password='".$pass."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$name=$row['name'];
		$role=$row['designation'];
		session_start();
		$_SESSION['name']=$name;
		$_SESSION['role']=$role;
		$_SESSION["tysid"] = $tysid;
		if($role=='principal'){
			header('Location: ../hod/home-p.php');
				
		}
		elseif ($role=='hod'){
			header('Location: ../hod/home-h.php');
				
		}
		elseif ($role=='staff'){
			header('Location: ../hod/home-staff.php');
		
		}
		elseif($role=='admin'){
			header('Location: ./indexAdmin.php');
		}
		elseif ($role=='student'){
			header('Location: ./student-home.php');
		
		}
	}
} else {
			header('Location: ./index1.php');
}
$conn->close();


?>