<?php

    include 'koneksyon.php';

    $scode = $_POST['txtscode'];
    $description = $_POST['txtdescription'];

    //UPDATE tablename SET column1 = value1, column2 = value WHERE condition;

    $update = "UPDATE subject_list SET  subject_code = '$scode', description = '$description' ";

    if (mysqli_query($koneksyon, $update))
    {
        echo "Record has been updated!";
    }
    else{
        echo "Error in updating record";
    }
    header("location: subject_list.php");

?>