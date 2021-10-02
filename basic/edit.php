<?php
	include('db_conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `student` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>ID:</label><input type="text" value="<?php echo $row['id']; ?>" name="id">
		<label>Firstname:</label><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname">
		<label>Lastname:</label><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname">
		<label>Year_Section:</label><input type="text" value="<?php echo $row['year_section']; ?>" name="year_section">
		<label>Department:</label><input type="text" value="<?php echo $row['department']; ?>" name="department">
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>