<?php 
	include'koneksyon.php';

	$qryview = "SELECT * FROM subject_list";
	$result = mysqli_query($koneksyon, $qryview);

	echo "<h1>Subject List</h1>";
	if(mysqli_num_rows($result) > 0){
		echo "<table border='1' width='100%'>";
		echo "<tr align='center'>";
		echo "<td>Subject Code</td>";
		echo "<td>Description</td>";
		echo "<td>Action</td>";
		echo "<td>Action</td>";
		echo "<tr>";
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row['subject_code']."</td>";
			echo "<td>".$row['description']."</td>";
			echo "<td align='center'><a href='viewedit_subjectlist.php?scode=".$row ["subject_code"]."' >Edit</a></td>";
			echo "<td align='center'>";
			echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete_subjectlist.php?scode=".$row['subject_code']."' >Delete</a>";
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else {
		echo "No records found!";
	}

?>
