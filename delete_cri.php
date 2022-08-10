<?php
include_once'koneksyon.php';

$id = $_GET['crid'];

mysqli_query($koneksyon,"DELETE FROM criteria WHERE id ='$id' ");
header("location: question-list.php");
	?>}
