<?php

include_once'koneksyon.php';

$acad_year = $_POST['academic_year'];
$sem = $_POST['semester'];
$status = $_POST['status'];

mysqli_query($koneksyon, "INSERT INTO academic(academic_year, semester, status) VALUES ('$acad_year', '$sem', '$status')");
header("location: academic_list.php");
?>