<?php

    include_once'koneksyon.php';

    $code = $_POST['code'];
    $description = $_POST['description'];

    $dagdag = "INSERT INTO subject (code, description) VALUES ('$code', '$description')";

    mysqli_query($koneksyon, $dagdag);
        
    header( "Location: subject_list.php" );

?>