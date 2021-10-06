<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bcc_evaluation_record";

$koneksyon = new mysqli($servername, $username, $password, $dbname);

if ($koneksyon->connect_error){
	die("connection Failed");
}
?>