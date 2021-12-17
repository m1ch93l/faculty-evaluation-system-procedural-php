<?php
include_once'koneksyon.php';

$info = $_GET['delsinfo'];

mysqli_query($koneksyon,"DELETE FROM subject_enrolled WHERE id = '$info' ");

header("location: student_list.php");
?>