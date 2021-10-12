<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bcc_evaluation";

$koneksyon = new mysqli($servername, $username, $password, $dbname);

if ($koneksyon->connect_error){
	die("connection failed:" . $koneksyon->connect_error);
}
?>