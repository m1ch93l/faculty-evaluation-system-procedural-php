<?php
include'navbar.php';
include 'koneksyon.php';

$qryview = "SELECT * FROM student_list";
$result = mysqli_query($koneksyon, $qryview);

echo "<H2>STUDENT INFORMATION</H2>";
if(mysqli_num_rows($result) > 0)
{
	echo "<form action='update.php' method='post'>";
	$row = mysqli_fetch_assoc($result);
	
echo "Student Number: <input type='text' readonly name='txtstudentnum' value='".$row["s_num"]."'><br>";
echo "First Name <input type='text' name='txtfname' value='".$row["fname"]."'><br>";
echo "Last Name:<input type='text' name='txtlname' value='".$row["lname"]."'><br>";
echo "Middle Name<input type='text' name='txtmname' value='".$row["mname"]."'><br>";
echo "<input type='submit' value='UPDATE'>";
		
echo "</form>";

}
else
{
	echo "No record/s found!";	
}

?>