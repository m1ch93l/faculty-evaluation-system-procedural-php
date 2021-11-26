<?php
include_once'koneksyon.php';

$criteria = $_POST['criteria'];

$add = "INSERT INTO criteria (criteria) VALUES ('$criteria')";

mysqli_query($koneksyon, $add);
header("location: question-list.php");
?>