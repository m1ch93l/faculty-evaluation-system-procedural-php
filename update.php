<?php

    include 'koneksyon.php';

    $snum = $_POST['txtstudentnum'];
    $fname = $_POST['txtfname'];
    $lname = $_POST['txtlname'];
    $mname = $_POST['txtmname'];

    //UPDATE tablename SET column1 = value1, column2 = value WHERE condition;

    $update = "UPDATE student_list SET fname = '$fname', lname='$lname', mname='$mname' WHERE s_num = '$snum' ";

    if (mysqli_query($koneksyon, $update))
    {
        echo "Record has been updated!";
    }
    else{
        echo "Error in updating record";
    }
    header("location: student_list.php");
?>