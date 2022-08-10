<?php

    include 'koneksyon.php';

    echo$snum = $_POST['txtstudentnum'];
    echo$fname = $_POST['txtfname'];
    echo$lname = $_POST['txtlname'];
    echo$dept = $_POST['departmentid'];
    echo$username = $_POST['uname'];

    //UPDATE tablename SET column1 = value1, column2 = value WHERE condition;

    mysqli_query($koneksyon,"UPDATE students SET username = '$username', firstname = '$fname', lastname='$lname', department_id='$dept' WHERE studentno = '$snum' ");

    header("location: student_list.php");
?>