<?php
require_once'koneksyon.php';

$id=$_GET['id'];
$status=$_GET['status'];

mysqli_query($koneksyon,"UPDATE academic SET status=$status WHERE id=$id");
header("location: academic_list.php");
?>