<?php

    include'koneksyon.php';

    $crclm = $_POST['curriculum'];
    $lvl = $_POST['level'];
    $section = $_POST['section'];

    $dagdag = "INSERT INTO class_list (id, curriculum, level, section) VALUES ('','$crclm', '$lvl', '$section')";

    if (mysqli_query($koneksyon, $dagdag)){
        echo "New records has been added!";
    }
    else{
        echo "Error in adding new records";
    }
    header( "Location: class_list.php" );

?>