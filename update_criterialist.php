<?php

    include 'koneksyon.php';

    $crtia = $_POST['criteria'];

    //UPDATE tablename SET column1 = value1, column2 = value WHERE condition;

    $update = "UPDATE criteria_list SET criteria = '$crtia' ";

    if (mysqli_query($koneksyon, $update))
    {
        echo "Record has been updated!";
    }
    else{
        echo "Error in updating record";
    }
    header("location: criteria_list.php");
?>