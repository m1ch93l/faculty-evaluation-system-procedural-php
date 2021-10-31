<?php

    include'koneksyon.php';

    $criteria = $_POST['criteria'];

    $dagdag = "INSERT INTO criteria_list (criteria) VALUES ('$criteria')";

    if (mysqli_query($koneksyon, $dagdag)){
        echo "New records has been added!";
    }
    else{
        echo "Error in adding new records";
    }
    header( "Location: criteria_list.php" );

?>