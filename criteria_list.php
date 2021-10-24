<?php include'navbar.php'; ?>

<body>
		<div class="main-body">
      <h1>Add Criteria</h1>
         <form action="dagdag_criteria.php" method="post">
            <label for="criteria">Criteria:</label><br>
            <input type="text" id="criteria" name="criteria"><br>
            <input type="submit" name="btnsubmit">
         </form>
         <form action="criteria_list.php">
             <button type="submit">Cancel</button>
          </form>
			<?php include'view_criterialist.php'; ?>
		</div>
</body>
