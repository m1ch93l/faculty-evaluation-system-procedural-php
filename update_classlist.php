<?php

    include 'koneksyon.php';

    $crclm = $_POST['crclm'];
    $lvl = $_POST['lvl'];
    $section = $_POST['section'];

    //UPDATE tablename SET column1 = value1, column2 = value WHERE condition;

    $update = "UPDATE class_list SET curriculum = '$crlm', level='$lvl', section='$section' ";

    if (mysqli_query($koneksyon, $update))
    {
        echo "Record has been updated!";
    }
    else{
        echo "Error in updating record";
    }
    header("location: class_list.php");

?>