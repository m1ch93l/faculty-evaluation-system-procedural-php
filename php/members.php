<?php  

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    
    $sql = "SELECT * FROM users ORDER BY id ASC";
    $res = mysqli_query($koneksyon, $sql);
}else{
	header("Location: index.php");
} 