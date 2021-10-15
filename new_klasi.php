<?php
include'navbar.php';
?>
<style>
input[type=text]{
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

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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
</style>
	<div class="content">
		<h1 class="f1">Add Class</h1>
		<form action="dagdag_klasi.php" method="post">
    		<label for="curriculum">Course:</label><br>
    		<input type="text" id="curriculum" name="curriculum"><br>
    		<label for="level">Year:</label><br>
    		<input type="text" id="level" name="level"><br>
    		<label for="section">Section:</label><br>
    		<input type="text" id="section" name="section"><br>
    		<input type="submit" name="btnsubmit">
	   </form>
     <form action="class_list.php">
         <button type="submit">Cancel</button>
      </form>
	</div>
	