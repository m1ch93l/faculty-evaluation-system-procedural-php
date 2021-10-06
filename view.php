<?php 
include'koneksyon.php';

$qryview = "SELECT * FROM student_list";
$result = mysqli_query($koneksyon, $qryview);

echo "<h2>Student List</h2>";
if(mysqli_num_rows($result) > 0){
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>Student Number</td>";
	echo "<td>First Namer</td>";
	echo "<td>Last Name</td>";
	echo "<td>Middle Name</td>";
	echo "<tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
			echo "<td>".$row["s_num"]."</td>";
			echo "<td>".$row["fname"]."</td>";
			echo "<td>".$row["lname"]."</td>";
			echo "<td>".$row["mname"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
}
else
{
	echo "No records found!";
}
?>