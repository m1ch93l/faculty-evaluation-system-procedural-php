<?php

    include 'koneksyon.php';

    $id = $_POST['fid'];
    $fname = $_POST['txfname'];
    $lname = $_POST['txlname'];

    $update = mysqli_query($koneksyon, "UPDATE faculties SET fname = '$fname', lname = '$lname' WHERE id = '$id' ");

    header("location: faculty_list.php");
?>