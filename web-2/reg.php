<?php
$colg =$_POST['colg'];

$name= $_POST['name'];
$dept =$_POST['dept'];
$dob = $_POST['date'];

$pass= $_POST['pass'];
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


$sql = "SELECT * FROM overall_count";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		
		
		
		if($colg=='smvec' && $dept=='cse'){
		$count=$row["smvec_cse"];
		$sql2 = "UPDATE overall_count SET smvec_cse=smvec_cse+1";
		
		$conn->query($sql2);
		}
		elseif ($colg=='smvec' && dept=='it'){
		$count=$row["smvec_it"];
		$sql2 = "UPDATE overall_count SET smvec_it=smvec_it+1";
		
		$conn->query($sql2);
		
		}
		elseif ($colg=='mit' && dept=='cse'){
		$count=$row["mit_cse"];
		$sql2 = "UPDATE overall_count SET mit_cse=mit_cse+1";
		
		$conn->query($sql2);
		
		}
		elseif ($colg=='mit' && dept=='it'){
		$count=$row["mit_it"];
		$sql2 = "UPDATE overall_count SET mit_it=mit_it+1";
		
		$conn->query($sql2);
		
		}

		$conn->close();
		$conn1 = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn1->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		
$tysid ="".$dept.($count+1)."@".$colg;		
$sql1 = "INSERT INTO account_details (regid,name,college,dob,pass,dept) VALUES ( '$tysid','$name','$colg',$dob,'$pass','$dept')";


if(mysqli_query($conn1, $sql1)){
echo"Success- Your TYS Id is : ".$tysid;
} else{
	echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
}		

		
	}
} else {
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$conn1->close();

?>