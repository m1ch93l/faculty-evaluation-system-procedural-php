<?php 
include'koneksyon.php';

$qryview = "SELECT * FROM faculty_list";
$result = mysqli_query($koneksyon, $qryview);

echo "<h1>Faculty List</h1>";
if(mysqli_num_rows($result) > 0){
	echo "<table border='1' width='100%'>";
	echo "<tr align='center'>";
	echo "<td>Faculty Number</td>";
	echo "<td>First Name</td>";
	echo "<td>Last Name</td>";
	echo "<td>Middle Name</td>";
	echo "<td>Action</td>";
	echo "<td>Action</td>";
	echo "<tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
			echo "<td>".$row['f_num']."</td>";
			echo "<td>".$row['fname']."</td>";
			echo "<td>".$row['lname']."</td>";
			echo "<td>".$row['mname']."</td>";
			echo "<td align='center'><a href='viewedit_faculty.php?fnum=".$row ["f_num"]."' >Edit</a></td>";

   			echo "<td align='center'>";
   			echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete_faculty.php?fnum=".$row['f_num']."' >Delete</a>";
   			echo "</td>";

		echo "</tr>";
	}
	echo "</table>";
}
else
{
	echo "No records found!";
}

?>
