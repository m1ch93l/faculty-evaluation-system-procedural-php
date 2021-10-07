<?php

include 'koneksyon.php';


$snum = $_POST['txtsnum'];

//SELECT column1, column2.. FROM tablename
//SELECT * FROM tablename

$qryview = "SELECT * FROM student_list WHERE s_num = '$snum'";
$result = mysqli_query($koneksyon, $qryview);


echo "<H2>STUDENT INFORMATION</H2>";
if(mysqli_num_rows($result) > 0)
{
	echo "<table BORDER='1'>";
	echo"<tr>";
	echo "<td>STUDENT NUMBER</td>";
	echo "<td>FIRST NAME</td>";
	echo "<td>LAST NAME</td>";
	echo "<td>MIDDLE NAME</td>";
	echo"</tr>";
	while($row = mysqli_fetch_assoc($result))
	{
		echo"<tr>";
			echo "<td>".$row["s_num"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["mname"]."</td>";
			
		echo"</tr>";
	}
	echo "</table>";

}
else
{
	echo "No record/s found!";	
}

?>