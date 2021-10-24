<?php include'navbar.php'; ?>

<body>
		<div class="main-body">
      <form class="f1" action="search.php" method="post">
        <label for="snum">Student Number:</label><br>
        <input type="text" id="txtsnum" name="txtsnum"><br>
        <input type="submit" id="btnsearch" name="btnsearch" value="SEARCH">
      </form>

      <button class="openbtn" onclick="openNav()">Add New</button>
        <div id="mySidepanel" class="new_sidepanel">
        <h1 align="center">New Student</h1>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <form action="dagdag.php" method="post">
                <label for="snum">Student Number:</label><br>
                <input type="text" id="snum" name="snum"><br>
                <label for="fname">First Name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Last Name:</label><br>
                <input type="text" id="lname" name="lname"><br>
                <label for="mname">Middle Name:</label><br>
                <input type="text" id="mname" name="mname"><br>
                <input type="submit" name="btnsubmit">
             </form>
             <form action="student_list.php">
                 <button type="submit">Cancel</button>
            </form>
        </div>
			<?php include'view.php'; ?>
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