<?php

include 'koneksyon.php';

$criterialist = $_GET['criteria-list'];

$delete = "DELETE FROM criteria_list WHERE id= '$criterialist' ";

if (mysqli_query($koneksyon, $delete))
{
	echo "Record has been deleted!";
}
else{
	echo "Error in deleting record";
}
header("location: criteria_list.php");
?>