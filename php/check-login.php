<?php  
session_start();
include "../koneksyon.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

	if (empty($username)) {
		header("Location: ../index.php?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: ../index.php?error=Password is Required");
	}else {

		// Hashing the password
		$password = md5($password);
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($koneksyon, $sql);

        $sql1 = "SELECT * FROM student_list WHERE username='$username' AND password='$password' ";
        $result1 = mysqli_query($koneksyon, $sql1);

        $sql2 = "SELECT * FROM faculty_list WHERE username='$username' AND password='$password' ";
        $result2 = mysqli_query($koneksyon, $sql2);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);

        	if ($row['password'] === $password && $row['role'] == $role) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];

        		header("Location: ../dashboard.php");

        	}else {
        		header("Location: ../index.php?error=Incorect User name or password");
        	}
        }elseif(mysqli_num_rows($result1) === 1){
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result1);

        	if ($row['password'] === $password && $row['role'] == $role) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];

        		header("Location: ../evaluate.php");

        	}else {
        		header("Location: ../index.php?error=Incorect User name or password");
        	}
        }elseif(mysqli_num_rows($result2) === 1){
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result2);

        	if ($row['password'] === $password && $row['role'] == $role) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];

        		header("Location: ../evaluation_result.php");

        	}else {
        		header("Location: ../index.php?error=Incorect User name or password");
        	}
        }else {
        	header("Location: ../index.php?error=Incorect User name or password");
        }
	}
	
}else {
	header("Location: ../index.php");
}