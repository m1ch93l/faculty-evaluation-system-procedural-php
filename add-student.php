<?php
    include_once'koneksyon.php';

    $string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $pass = substr(str_shuffle($string),0,5);

    $snum = $_POST['snum'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $usertype = "student";

    $systempass = $snum.$pass;
    $password = password_hash($systempass, PASSWORD_BCRYPT);

    $dagdag = "INSERT INTO students (studentno, firstname, lastname) VALUES ('$snum','$fname','$lname')";
    $g = mysqli_query($koneksyon, $dagdag);

    if($g){
        $dagdag1 = "INSERT INTO users (username, password, usertype, name) VALUES ('$fname','$password','$usertype','$fname')";
        $gna = mysqli_query($koneksyon, $dagdag1);
    }
    else{
        echo "no data";
    }
    header("location: student_list.php");
?>