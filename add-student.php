<?php
    include_once'navbar.php';
    include_once'koneksyon.php';

    $string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $pass = substr(str_shuffle($string),0,8);

    $department_id = $_POST['departmentid'];
    $snum = $_POST['snum'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $usertype = "student";
    $systempass = $pass;
    $password = password_hash($systempass, PASSWORD_BCRYPT);


    $dagdag = "INSERT INTO students (studentno, username, firstname, lastname, usertype, password, view, department_id) VALUES ('$snum','$fname','$fname','$lname', '$usertype','$password', '$systempass','$department_id')";
    mysqli_query($koneksyon, $dagdag);
    header("location: add_sub.php");
?>
