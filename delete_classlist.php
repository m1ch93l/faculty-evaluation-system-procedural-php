<?php

    include 'koneksyon.php';

    $class_list = $_GET['clist'];

    $delete = "DELETE FROM department WHERE id = '$class_list' ";

    if (mysqli_query($koneksyon, $delete))
    {
        echo "Record has been deleted!";
    }
    else{
        echo "Error in deleting record";
    }
    header("location: department.php");

?>