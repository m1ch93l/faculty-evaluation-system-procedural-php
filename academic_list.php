<?php include'navbar.php'; ?>

<body>
		<div class="main-body">
			<button class="openbtn" onclick="openNav()">Add New</button>
        		<div id="mySidepanel" class="new_sidepanel">
			      <h1 align="center">New Academic</h1>
		            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		            <form action="#dagdag_academic.php" method="post">
		                <label for="acad">Academic Year</label><br>
		                <input type="text" id="acad" name="acad"><br>
		                <label for="sem">Semester</label><br>
		                <input type="text" id="sem" name="sem"><br>
		                <input type="submit" name="btnsubmit">
		             </form>
		             <form action="academic_list.php">
		                 <button type="submit">Cancel</button>
		            </form>
		        </div>
			<?php include'view_academiclist.php'; ?>
		</div>

</body>

<script>

function openNav() {
  document.getElementById("mySidepanel").style.width = "350px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}

</script>