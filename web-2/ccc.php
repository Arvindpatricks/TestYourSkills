<?php
$data = $_POST['coding'];
 
$my_file = 'code.cpp';
file_put_contents($my_file, $data);
 
system("gcc {$my_file} &> error.txt");
 
$error = file_get_contents("error.txt");
 
if($error=='')
    system("./a.out");
else
    echo $error;
?>