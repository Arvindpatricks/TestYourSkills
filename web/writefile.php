<?php
session_start();

$filename='Solution.java';

//$_SESSION["tysid"].time().'.java';
//echo $filename;
$myfile = fopen($filename, "w") or die("Unable to open file!");
$txt = $_POST['coding'];
fwrite($myfile, $txt);
fclose($myfile);


exec('javac '.$filename,$output,$resultCode);
if ($resultCode===0)
{
echo "\nOutput :"	;
echo exec("java Solution 2>&1");//this line executes it

// `$output` captures the output of command executed
	
	
}
else
{
	echo "fail";
	echo "Result: " . $resultCode . "\n";
	
}

if($resul)

?>