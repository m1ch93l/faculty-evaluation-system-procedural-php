<?php 
include'koneksyon.php';

$qryview = "SELECT * FROM class_list ";
$result = mysqli_query($koneksyon, $qryview);

echo "<h1>Class List</h1>";
if(mysqli_num_rows($result) > 0){
	echo "<table border='1' width='100%'>";
	echo "<tr align='center'>";
	echo "<td>Department</td>";
	echo "<td>Year</td>";
	echo "<td>Section</td>";
	echo "<td>Action</td>";
	echo "<td>Action</td>";
	echo "<tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
			echo "<td>".$row['curriculum']."</td>";
			echo "<td>".$row['level']."</td>";
			echo "<td>".$row['section']."</td>";

			echo "<td align='center'><a href='viewedit_classlist.php?clist=".$row ["id"]."' >Edit</a></td>";

   			echo "<td align='center'>";
   			echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete_classlist.php?clist=".$row['id']."' >Delete</a>";
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
