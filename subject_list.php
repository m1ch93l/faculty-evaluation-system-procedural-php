<?php include'navbar.php'; ?>

<body>
	<div class="main-body">
		<button class="openbtn" onclick="openNav()">Add New</button>
        	<div id="mySidepanel" class="new_sidepanel">
		      <h1 align="center">Add Subject</h1>
		      	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
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
		<?php include'view_subject_list.php'; ?>
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
