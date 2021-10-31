<?php

    include 'koneksyon.php';

    $fnum = $_GET['fnum'];

    $delete = "DELETE FROM student_list WHERE f_num= '$fnum' ";

    if (mysqli_query($koneksyon, $delete))
    {
        echo "Record has been deleted!";
    }
    else{
        echo "Error in deleting record";
    }
    header("location: faculty_list.php");

?>