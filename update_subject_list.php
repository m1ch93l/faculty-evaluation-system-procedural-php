<?php

    include_once'koneksyon.php';

    $id = $_POST['idid'];
    $scode = $_POST['txtsubcode'];
    $description = $_POST['description'];
    $facultyid = $_POST['facuid'];

    mysqli_query($koneksyon, "UPDATE subject SET code ='$scode', description ='$description', faculty_id='$facultyid' WHERE id = '$id' ");
    
    header("location: subject_list.php");

?>