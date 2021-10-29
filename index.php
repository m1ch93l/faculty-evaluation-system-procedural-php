<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>BCC Faculty Evaluation System</title>
	
</head>
<style>
	/*login form */
.center-div{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-45%, -45%);
  margin: 0;
  border: 1px solid #000;
  padding: 40px 40px;
}
</style>
<body>
      <div class="center-div">
      	<form 
      	      action="php/check-login.php" 
      	      method="post">
      	      <h1 align="center">LOGIN</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
		  <div>
		    <label for="username">User name</label><br>
		    <input type="text" 
		           name="username" 
		           id="username">
		  </div>
		  <div >
		    <label for="password">Password</label><br>
		    <input type="password" 
		           name="password" 
		           id="password">
		  </div>
		  <div>
		    <br><label >Select User Type:</label>
		  </div>
		  <select
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option value="faculty">Faculty</option>
			  <option value="admin">Admin</option>
		  </select><br>
		 
		  <br><button type="submit" name="btnsubmit">LOGIN</button>
		</form>
      </div>
</body>
</html>
<?php }else{
	header("Location: dashboard.php");
} ?>