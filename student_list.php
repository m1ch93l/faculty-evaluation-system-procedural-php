<?php include'navbar.php'; ?>
<style>
.student_list{
	width: 100%;
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
}

button:hover{
  background-color: #35afeb;
}
button a{
  text-decoration: none;
  color: #fff;
  width: 100%;
}
</style>
<body>
	<div class="student_list">
		<div class="content">
			<button><a href="new_student.php">Add New</a></button>
			<?php include'view.php'; ?>
		</div>
	</div>
</body>
