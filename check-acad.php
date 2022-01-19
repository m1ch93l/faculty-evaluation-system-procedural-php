<?php
session_start();
include_once'koneksyon.php';

$qry = mysqli_query($koneksyon, "SELECT * FROM academic ");
while($row = mysqli_fetch_array($qry)){
    $status = $row['status'];
            
    if($status == '1'){
    $_SESSION['academic'] = $row['academic_year'];
    $_SESSION['semester'] = $row['semester'];
    echo '<script>window.location.href="evaluate.php";</script>';
    }
    elseif($status == '2'){
        echo '<script>alert("Sorry! The Evaluation has not yet Start!");history.go(-1);</script>';
    }
    elseif($status == '0'){
        echo '<script>alert("Sorry! The Evaluation has been closed!");history.go(-1);</script>';
    }
    else{
        header("Location: index.php");
    }
}
?>