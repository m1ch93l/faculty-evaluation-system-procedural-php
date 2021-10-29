<?php include'navbar.php'; ?>
<!--
<style>
	
.grid-container{
	display: grid;
	grid-gap: 50px 100px;
	grid-template-columns: auto auto auto;
	background-color: #1849d7;
	padding: 10px;
}
.grid-item{
	background-color: #fff;
	border: 1px solid rgba(0, 0, 0, 0.8);
	padding: 1px;
	font-size: 25px;
	text-align: center;
	width: 100%;
}
@media screen and (max-width: 700px) {
	.grid-container{
	display: grid;
	grid-template-columns: auto auto auto;
	background-color: #1849d7;
	display: inline-block;
	padding: 5px;
	height: auto;
	width: 100%;
}
</style>

<div class="content">
	<h5 class="f1">Welcome Administrator</h5>
	<div class="grid-container">
		<div class="grid-item fas fa-users">Total Students<?php include'count_student.php'; echo $output;?></div>
		<div class="grid-item fas fa-chalkboard-teacher">Total Faculty<?php include'count_faculty.php'; echo $output;?></div>
		<div class="grid-item">Questions Answered</div>
	</div>
</div>-->

<!--Main content -->
<div class="main-body">
	<h5>Welcome Administrator</h5>
		<div class="grid">
		  <div class="g-col-6">Total Students<?php include'count_student.php'; echo $output;?></div>
		  <div class="g-col-6"><?php include'count_faculty.php'; echo $output;?></div>

		  <div class="g-col-6"><?php include'count_faculty.php'; echo $output;?></div>
		  <div class="g-col-6">.g-col-6</div>
		</div>
</div>