<?php
include'navbar.php';
?>
<style>
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

input[type=submit] {
  width: 100%;
  background-color: #6fbfe6;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #35afeb;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.studentlist{
	width: 100%;
}
</style>
	<div class="content">
		<h1>Student List</h1>
		<form action="dagdag.php" method="post">
		<label for="snum">Student Number:</label><br>
		<input type="text" id="snum" name="snum"><br>
		<label for="fname">First Name:</label><br>
		<input type="text" id="fname" name="fname"><br>
		<label for="lname">Last Name:</label><br>
		<input type="text" id="lname" name="lname"><br>
		<label for="mname">Middle Name:</label><br>
		<input type="text" id="mname" name="mname"><br>
		<input type="submit" id="" name="btnsubmit">
	</form>
		<div class="studentlist">
			<?php include'view.php'; ?>
		</div>
	</div>
	