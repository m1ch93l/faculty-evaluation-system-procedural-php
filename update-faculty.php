<?php

    include 'koneksyon.php';

    $fnum = $_POST['facnum'];
    $fname = $_POST['txfname'];
    $lname = $_POST['txlname'];

    $update = "UPDATE faculties SET fname = '$fname', lname='$lname' WHERE facnum = '$fnum' ";

    mysqli_query($koneksyon, $update)

    header("location: faculty_list.php");
?>