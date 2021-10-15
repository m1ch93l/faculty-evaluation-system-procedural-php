<?php

include 'koneksyon.php';

$scode = $_GET['scode'];

$delete = "DELETE FROM subject_list WHERE subject_code = '$scode' ";

if (mysqli_query($koneksyon, $delete))
{
	echo "Record has been deleted!";
}
else{
	echo "Error in deleting record";
}
header("location: subject_list.php");
?>