<?php include'navbar.php'; ?>
<style>
button{
 width: 100%;
  background-color: #6fbfe6;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover{
  background-color: #35afeb;
}
</style>
<body>
	<div class="student_list">
		<div class="content">
      <form action="new_student.php">
         <button type="submit">Add New</button>
      </form>
			<?php include'view.php'; ?>
		</div>
	</div>
</body>
