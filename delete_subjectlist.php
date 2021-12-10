<?php

    include 'koneksyon.php';

    $scode = $_GET['del_sid'];

    $delete = "DELETE FROM subject WHERE id = '$scode' ";

    if (mysqli_query($koneksyon, $delete))
    {
        echo "Record has been deleted!";
    }
    else{
        echo "Error in deleting record";
    }
    header("location: subject_list.php");

?>