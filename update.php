<?php

    include 'koneksyon.php';

    $snum = $_POST['txtstudentnum'];
    $fname = $_POST['txtfname'];
    $lname = $_POST['txtlname'];
    $dept = $_POST['departmentid'];

    //UPDATE tablename SET column1 = value1, column2 = value WHERE condition;

    mysqli_query($koneksyon,"UPDATE students SET firstname = '$fname', lastname='$lname', department_id='$dept' WHERE studentno = '$snum' ");

    header("location: student_list.php");
?>