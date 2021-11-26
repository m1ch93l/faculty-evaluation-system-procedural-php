<?php
    include_once'navbar.php';
    include_once'koneksyon.php';

    $string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $pass = substr(str_shuffle($string),0,5);

    $departmet_id = $_POST['departmentid'];
    $snum = $_POST['snum'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $usertype = "student";

    $systempass = $snum.$pass;
    $password = password_hash($systempass, PASSWORD_BCRYPT);

    $dagdag = "INSERT INTO students (studentno, username, firstname, lastname, usertype, password, department_id) VALUES ('$snum','$fname','$fname','$lname', '$usertype','$password', '$departmet_id')";
    mysqli_query($koneksyon, $dagdag);

    header("Location: student_list.php");
?>