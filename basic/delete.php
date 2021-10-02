<?php
	$id=$_GET['id'];
	include('db_conn.php');
	mysqli_query($conn,"delete from `student` where id='$id'");
	header('location:student.php');
?>