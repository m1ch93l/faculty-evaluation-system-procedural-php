<?php
include'navbar.php';
include 'koneksyon.php';

$clist = $_GET['clist'];

$qryview = "SELECT * FROM class_list WHERE id='$clist'";
$result = mysqli_query($koneksyon, $qryview);

echo "<style>";
echo "
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
echo "<div class='main-body'>";
echo "<H2>CLASS LIST</H2>";

if(mysqli_num_rows($result) > 0)
{
	echo "<form action='update_classlist.php' method='post'>";
		$row = mysqli_fetch_assoc($result);
	
echo "Course: <input type='text' name='crclm' value='".$row["curriculum"]."'><br>";
echo "Year <input type='text' name='lvl' value='".$row["level"]."'><br>";
echo "Section:<input type='text' name='section' value='".$row["section"]."'><br>";
echo "<input type='submit' value='UPDATE'>";
		
	echo "</form>";

  echo "<form action='class_list.php'>";
  echo "<button type='submit'>Cancel</button>";
  echo "</form>";
	echo "</div>";
}
else{
  echo "No records found";
}

?>
