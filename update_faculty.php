<?php

include 'koneksyon.php';

$fnum = $_POST['txtfacultynum'];
$fname = $_POST['txtfname'];
$lname = $_POST['txtlname'];
$mname = $_POST['txtmname'];

//UPDATE tablename SET column1 = value1, column2 = value WHERE condition;

$update = "UPDATE faculty_list SET fname = '$fname', lname='$lname', mname='$mname' WHERE f_num = '$fnum' ";

if (mysqli_query($koneksyon, $update))
{
	echo "Record has been updated!";
}
else{
	echo "Error in updating record";
}
header("location: faculty_list.php");
?>