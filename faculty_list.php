<?php include'navbar.php'; ?>

<body>
		<div class="content">
      <form class="f1" action="search_faculty.php" method="post">
        <label for="snum">Faculty Number:</label><br>
        <input type="text" id="txtsnum" name="txtsnum"><br>
        <input type="submit" id="btnsearch" name="btnsearch" value="SEARCH">
      </form>
      <form action="new_faculty.php">
         <button type="submit">Add New</button>
      </form>
			<?php include'view_faculty.php'; ?>
		</div>
</body>
