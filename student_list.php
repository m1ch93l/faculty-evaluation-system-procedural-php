<?php 
if(isset($_POST['submit'])){
include'koneksyon.php';

$snum = $_POST['snum'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mname = $_POST['mname'];
$username = $_POST['username'];
$password = md5($password = $_POST['password']);


$dagdag = "INSERT INTO student_list (s_num, fname, lname, mname) VALUES ('$snum', '$fname', '$lname', '$mname')";

$query = mysqli_query($koneksyon, $dagdag);

if($query){

  $dagdag2 = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  $result = mysqli_query($koneksyon, $dagdag2);
  echo "The data has been Added";
  header("Location: student_list.php");
}else{
  echo"There was a problem";
}

}
?>

<body>
  <?php include'navbar.php'; ?>
		<div class="main-body">
      <form class="f1" action="search.php" method="post">
        <label for="snum">Student Number:</label><br>
        <input type="text" id="txtsnum" name="txtsnum"><br>
        <input type="submit" id="btnsearch" name="btnsearch" value="SEARCH">
      </form>

      <button class="openbtn" onclick="openNav()">Add New</button>
        <div id="mySidepanel" class="new_sidepanel">
        <h2 align="center">New Student</h2>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <form autocomplete="off" action="student_list.php" method="POST">
                <label for="fname">Student Number:</label><br>
                <input type="text" id="snum" name="snum">
                <label for="fname">First Name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Last Name:</label><br>
                <input type="text" id="lname" name="lname"><br>
                <label for="mname">Middle Name:</label><br>
                <input type="text" id="mname" name="mname"><br>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password:</label><br>
                <input type="text" id="password" name="password"><br>
                <input type="submit" name="submit">
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