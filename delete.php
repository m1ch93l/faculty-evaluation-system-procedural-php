<?php

include 'koneksyon.php';

$snum = $_GET['snum'];


//DELETE FROM tablename WHERE condition;

$delete = "DELETE FROM student_list WHERE s_num='$snum' ";

if (mysqli_query($koneksyon, $delete))
{
	echo "Record has been deleted!";
}
else{
	echo "Error in deleting record";
}




?>