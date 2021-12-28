<?php
include_once'koneksyon.php';

$del = $_POST['delmuna'];

mysqli_query($koneksyon,"DELETE FROM evaluation WHERE evaluationid = '$del' ");
header("location: question-list.php");
?>