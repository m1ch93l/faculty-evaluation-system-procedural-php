<?php

    include 'koneksyon.php';

    $snum = $_POST['txtstudentnum'];
    $fname = $_POST['txtfname'];
    $lname = $_POST['txtlname'];

    //UPDATE tablename SET column1 = value1, column2 = value WHERE condition;

    $update = "UPDATE students SET firstname = '$fname', lastname='$lname' WHERE studentno = '$snum' ";

    if (mysqli_query($koneksyon, $update))
    {
        echo "Record has been updated!";
    }
    else{
        echo "Error in updating record";
    }
    header("location: student_list.php");
?>