<?php
include_once'koneksyon.php';

$eval = $_GET['id'];

mysqli_query($koneksyon, "DELETE FROM evaluation WHERE evaluationid = '$eval'");
header("location: eval-instructor.php");

?>