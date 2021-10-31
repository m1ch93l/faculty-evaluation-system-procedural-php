<?php

    include'koneksyon.php';

    $scode = $_POST['scode'];
    $description = $_POST['description'];

    $dagdag = "INSERT INTO subject_list (subject_code, description) VALUES ('$scode', '$description')";

    if (mysqli_query($koneksyon, $dagdag)){
        echo "New records has been added!";
    }
    else{
        echo "Error in adding new records";
    }
    header( "Location: subject_list.php" );

?>