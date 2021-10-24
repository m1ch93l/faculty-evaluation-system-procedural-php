<?php include'navbar.php'; ?>

<body>
		<div class="main-body">
	      <button class="openbtn" onclick="openNav()">Add New</button>
	        <div id="mySidepanel" class="new_sidepanel">
      			<h1 align="center">Add Class</h1>
      				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
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
			<?php include'view_classlist.php'; ?>
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
