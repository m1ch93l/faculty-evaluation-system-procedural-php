<?php include'koneksyon.php';

$snum = $_POST['snum'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];

$dagdag = "INSERT INTO student_list (s_num, fname, lname, mname) VALUES ('$snum', '$fname', '$lname', '$mname')";

if (mysqli_query($koneksyon, $dagdag)){
	echo "New records has been added!";
}else{
	echo "Error in adding new records";
}
header( "Location: student_list.php" );
?>