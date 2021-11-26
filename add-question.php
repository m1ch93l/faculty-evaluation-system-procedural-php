<?php
include_once'koneksyon.php';

$q = $_POST['question'];
$id = $_POST['criteriaid'];

$add = "INSERT INTO questions (criteria_id, question) VALUES ('$id','$q')";

mysqli_query($koneksyon, $add);
header("location: question-list.php");
?>