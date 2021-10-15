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
		<h1>Add Subject</h1>
		<form action="dagdag_subject.php" method="post">
    		<label for="scode">Subject Code:</label><br>
    		<input type="text" id="scode" name="scode"><br>
    		<label for="description">Description:</label><br>
    		<input type="text" id="description" name="description"><br>
    		<input type="submit" name="btnsubmit">
	   </form>
     <form action="subject_list.php">
         <button type="submit">Cancel</button>
      </form>
	</div>
	