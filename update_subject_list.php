<?php

    include 'koneksyon.php';

    $id = $_POST['id'];
    $scode = $_POST['txtscode'];
    $description = $_POST['txtdescription'];

    $update = mysqli_query($koneksyon, "UPDATE subject SET code = '$scode', description = '$description' WHERE id = '$id' ");

    header("location: subject_list.php");

?>