<?php

include 'koneksyon.php';

//SELECT column1, column2.. FROM tablename
//SELECT * FROM tablename

$s_num = $_GET['snum'];

$qryview = "SELECT * FROM student_list WHERE s_num='$s_num'";
$result = mysqli_query($koneksyon, $qryview);

echo "<H2>STUDENT INFORMATION</H2>";
if(mysqli_num_rows($result) > 0)
{
	echo "<form action='update.php' method='post'>";
	$row = mysqli_fetch_assoc($result);
	
	#echo "<td>".$row["s_num"]."</td>";
	#echo "<td>".$row["fname"]."</td>";
	#echo "<td>".$row["lname"]."</td>";
	#echo "<td>".$row["mname"]."</td>";
	
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