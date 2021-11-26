<?php

    include 'koneksyon.php';

    $id = $_GET['del'];

    $delete = "DELETE FROM students WHERE person_id = '$id' ";

    $qry = mysqli_query($koneksyon, $delete);

    if($qry){
        $delete1 = "DELETE FROM user"
    }
   
    header("location: student_list.php");

?>