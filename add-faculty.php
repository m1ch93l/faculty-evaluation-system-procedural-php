<?php
    include_once'navbar.php';
    include_once'koneksyon.php';

    $string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $pass = substr(str_shuffle($string),0,8);

    $fnum = $_POST['fnum'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $usertype = "faculty";

    $systempass = $pass;
    $password = password_hash($systempass, PASSWORD_BCRYPT);

    $dagdag = "INSERT INTO faculties (fno, username, fname, lname, usertype, password, view) VALUES ('$fnum','$fname', '$fname', '$lname','$usertype','$password', '$systempass')";
    mysqli_query($koneksyon, $dagdag);

    ?>