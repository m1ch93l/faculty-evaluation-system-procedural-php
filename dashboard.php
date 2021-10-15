<?php include'navbar.php'; ?>
<style>
.grid-container{
	display: grid;
	grid-gap: 50px 100px;
	grid-template-columns: auto auto auto;
	background-color: #2196f3;
	padding: 10px;
}
.grid-item{
	background-color: #f2da;
	border: 1px solid rgba(0, 0, 0, 0.8);
	padding: 20px;
	font-size: 30px;
	text-align: center;
}
@media screen and (max-width: 700px) {
	.grid-container{
	display: grid;
	grid-template-columns: auto auto auto;
	background-color: #2196f3;
	display: inline-block;
	padding: 5px;
	height: auto;
	width: 100%;
}
</style>
<div class="content">
	<h1 class="f1">Home Page</h1>
	<div class="grid-container">
		<div class="grid-item">Total Students<?php include'count_student.php'; echo $output;?></div>
		<div class="grid-item">Total Faculty<?php include'count_faculty.php'; echo $output;?></div>
		<div class="grid-item">Questions Answered</div>
	</div>
</div>