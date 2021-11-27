<?php include_once'koneksyon.php';

$d = $_POST['department'];
$s = $_POST['subject'];
$i = $_POST['faculty'];

$add = "INSERT INTO evaluation (departmentid, subjectid, facultyid) VALUES ('$d', '$s', '$i')";
mysqli_query($koneksyon, $add);
header("locaction: eval-instructor.php");
?>