<?php 
	include'koneksyon.php';

	$qryview = "SELECT * FROM academic_list ";
	$result = mysqli_query($koneksyon, $qryview);

	echo "<h1>Academic List</h1>";
	if(mysqli_num_rows($result) > 0){
		echo "<table border='1' width='100%'>";
		echo "<tr align='center'>";
		echo "<td>School Year</td>";
		echo "<td>Semester</td>";
		echo "<td>System Default</td>";
		echo "<td>Status</td>";
		echo "<td>Action</td>";
		echo "<td>Action</td>";
		echo "<tr>";
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row['year']."</td>";
			echo "<td>".$row['semester']."</td>";
			echo "<td>".$row['is_default']."</td>";
			echo "<td>".$row['status']."</td>";
			echo "<td align='center'><a href='#viewedit_classlist.php?clist=".$row ["id"]."' >Edit</a></td>";
			echo "<td align='center'>";
			echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='#delete_classlist.php?clist=".$row['id']."' >Delete</a>";
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else {
		echo "No records found!";
	}

?>
