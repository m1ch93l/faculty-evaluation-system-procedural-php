<?php

include'koneksyon.php';

$fnum = $_POST['fnum'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];

$dagdag = "INSERT INTO faculty_list (f_num, fname, lname, mname) VALUES ('$fnum', '$fname', '$lname', '$mname')";

if (mysqli_query($koneksyon, $dagdag)){
	echo "New records has been added!";
}
else{
	echo "Error in adding new records";
}
header( "Location: faculty_list.php" );
?>