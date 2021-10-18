<?php
include'navbar.php';
include 'koneksyon.php';

$criterialist = $_GET['criteria-list'];

$qryview = "SELECT * FROM criteria_list WHERE id='$criterialist'";
$result = mysqli_query($koneksyon, $qryview);

echo "<style>";
echo ".f1{
  margin-top: 50px;
}
input[type=text], select {
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
button{
 width: 100%;
  background-color: #6fbfe6;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  background-color: #cdcbcb;
}
button:hover{
  background-color: #b4b3b3;
}
";
echo "</style>";
echo "<div class='content'>";
echo "<H2 class='f1'>CRITERIA LIST</H2>";

if(mysqli_num_rows($result) > 0)
{
	echo "<form action='update_criterialist.php' method='post'>";
		$row = mysqli_fetch_assoc($result);
	
echo "Course: <input type='text' name='criteria' value='".$row["criteria"]."'><br>";
echo "<input type='submit' value='UPDATE'>";
		
	echo "</form>";

  echo "<form action='criteria_list.php'>";
  echo "<button type='submit'>Cancel</button>";
  echo "</form>";
	echo "</div>";
}
else{
  echo "No records found";
}

?>
