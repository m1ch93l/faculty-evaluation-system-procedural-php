<?php

    include_once'koneksyon.php';

    $code = $_POST['code'];
    $description = $_POST['description'];
    $firstlast = $_POST['firstlastname'];

    $dagdag = "INSERT INTO subject (code, description, faculty_id) VALUES ('$code', '$description','$firstlast')";

    mysqli_query($koneksyon, $dagdag);
        
    header( "Location: subject_list.php" );

?>