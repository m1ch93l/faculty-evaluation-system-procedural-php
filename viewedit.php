<?php
include'navbar.php';
include 'koneksyon.php';

$qryview = "SELECT * FROM student_list";
$result = mysqli_query($koneksyon, $qryview);

echo "<style>";
echo "input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  align-content: center;
}

input[type=submit]{
  width: 100%;
  background-color: #6fbfe6;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover{
  background-color: #35afeb;
}
";
echo "</style>";
echo "<div class='content'>";
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
echo "<input value='Cancel'><a href='student_list.php'></a>";
		
	echo "</form>";
	echo "</div>";

}

?>
