<?php 
session_start();
   include'koneksyon.php';
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {

   if ($_SESSION['role'] == 'admin')
   {
   	header("location: dashboard.php");
   }if ($_SESSION['role'] == 'student')
   {
   	header("location: evaluate.php");
   }if ($_SESSION['role'] == 'faculty')
   {
   	header("location: evaluation_result.php");
   }else
   { echo '<script>alert("You Dont have permission to jump this page!"); window.location.href="index.php"</script>'; }

}else{ echo '<script>alert("You Dont have permission to jump this page!"); window.location.href="index.php"</script>'; }

?>