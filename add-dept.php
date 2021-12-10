<?php
include_once'koneksyon.php';

$c = $_POST['course'];
$y = $_POST['year'];
$s = $_POST['section'];

$dagdag = mysqli_query($koneksyon, "INSERT INTO department(course, year, section) VALUES ('$c', '$y', '$s')");
header("location: department.php");
?>