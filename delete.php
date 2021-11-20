<?php

    include 'koneksyon.php';

    $row_id = $_GET['del_id'];

    $delete = "DELETE FROM students WHERE id = '$row_id' ";

    if (mysqli_query($koneksyon, $delete))
    {
        echo "Record has been deleted!";
    }
    else{
        echo "Error in deleting record";
    }
    header("location: student_list.php");

?>