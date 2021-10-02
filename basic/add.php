<?php
	include('conn.php');
	
	$id=$_POST['id'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$year_section=$_POST['year_section'];
	$department=$_POST['department'];
		
	mysqli_query($conn,"insert into `user` (id,firstname,lastname,year_section,department) values ('$id','$firstname','$lastname','$year_section','$department')");
	header('location:student.php');
	
?>