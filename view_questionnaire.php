<?php 
	include'koneksyon.php';

	$qryview = "SELECT * FROM academic_list ";
	$result = mysqli_query($koneksyon, $qryview);

	echo "<h1>Questionnaire</h1>";
	if(mysqli_num_rows($result) > 0){
		echo "<table border='1' width='100%'>";
		echo "<tr align='center'>";
		echo "<td>No.</td>";
		echo "<td>Academic Year</td>";
		echo "<td>Semester</td>";
		echo "<td>Questions</td>";
		echo "<td>Answered</td>";
		echo "<td>Action</td>";
		echo "<td>Action</td>";
		echo "<tr>";
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['year']."</td>";
			echo "<td>".$row['semester']."</td>";
			echo "<td></td>";
			echo "<td></td>";
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
