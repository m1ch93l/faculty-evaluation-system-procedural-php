<?php include'navbar.php'; ?>

<body>
		<div class="content">
      <form class="f1" action="search.php" method="post">
        <label for="snum">Student Number:</label><br>
        <input type="text" id="txtsnum" name="txtsnum"><br>
        <input type="submit" id="btnsearch" name="btnsearch" value="SEARCH">
      </form>
      <form action="new_student.php">
         <button type="submit">Add New</button>
      </form>
			<?php include'view.php'; ?>
		</div>
</body>
