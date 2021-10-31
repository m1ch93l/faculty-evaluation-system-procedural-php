<?php

    include 'koneksyon.php';

    $class_list = $_GET['clist'];

    $delete = "DELETE FROM class_list WHERE id = '$class_list' ";

    if (mysqli_query($koneksyon, $delete))
    {
        echo "Record has been deleted!";
    }
    else{
        echo "Error in deleting record";
    }
    header("location: class_list.php");

?>