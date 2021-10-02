<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$id=$_POST['id'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$year_section=$_POST['year_section'];
	$department=$_POST['department'];
	
	mysqli_query($conn,"update `student` set id='$id', firstname='$firstname', lastname='$lastname',year_section='$year_section', department='$department' where id='$id'");
	header('location:student.php');
?>