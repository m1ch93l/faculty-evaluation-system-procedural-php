<?php

    include 'koneksyon.php';

    $id = $_GET['del'];

    $delete = "DELETE FROM students WHERE id = '$id' ";

    $qry = mysqli_query($koneksyon, $delete);
   
    header("location: student_list.php");

?>