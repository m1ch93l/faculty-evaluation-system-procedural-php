<?php

    include'koneksyon.php';

    $rate = $_POST['rate'];

    $dagdag = "INSERT INTO choice (rate) VALUES ('$rate')";

   if(mysqli_query($koneksyon, $dagdag)){
        echo "New records has been added!";
    }
    else{
        echo "Error in adding new records";
    }
header("location: evaluate.php");
?>