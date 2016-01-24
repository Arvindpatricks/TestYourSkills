<?php
session_start();

$filename='Solution.java';

//$_SESSION["tysid"].time().'.java';
//echo $filename;
$myfile = fopen($filename, "w") or die("Unable to open file!");
//echo $_POST['coding'];
$txt = $_POST['coding'];
fwrite($myfile, $txt);
fclose($myfile);


exec('javac '.$filename,$output,$resultCode);
if ($resultCode===0)
{
echo "\nCOmpilation success :"	;
//echo getcwd() . "<br>";

// Change directory
//chdir("coding");

// Get current directory
echo getcwd()."<br>";



echo exec("java Solution 2>&1");//this line executes it

// `$output` captures the output of command executed
	
	
}
else
{
	echo "fail";
	echo "Result: " . $resultCode . "\n";
	
}

?>