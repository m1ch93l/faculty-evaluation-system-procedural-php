<?php
    include_once'navbar.php';
    include_once'koneksyon.php';

    
    $department_id = $_POST['departmentid'];
    $snum = $_POST['snum'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $usertype = "student";
    
    $str = "0123456789";
    $addmo = substr(str_shuffle($str),0,4);
    $uname = $fname.$addmo;

    $string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $pass = substr(str_shuffle($string),0,8);
    $systempass = $pass;
    $password = password_hash($systempass, PASSWORD_BCRYPT);


    $dagdag = "INSERT INTO students (studentno, username, firstname, lastname, usertype, password, view, department_id) VALUES ('$snum','$uname','$fname','$lname', '$usertype','$password', '$systempass','$department_id')";
    mysqli_query($koneksyon, $dagdag);
    header("location: add_sub.php");
?>
