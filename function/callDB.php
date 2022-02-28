<?php





$host = "localhost:3306";
$username = "root";
$password='';
$dbname = "formtwo";



// Create connection

$conn = new mysqli($host,
$username,$password,$dbname);

if(!$conn){

echo 'Access denied';
}





 ?>
