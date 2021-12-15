<?php

    include 'koneksyon.php';

    $id = $_POST['aId'];
    $ay = $_POST['acadyear'];
    $s = $_POST['sem'];
    $st = $_POST['status'];

    $update = mysqli_query($koneksyon, "UPDATE academic SET academic_year = '$ay', semester = '$s', status = '$st' WHERE id = '$id' ");

    header("location: academic_list.php");
?>