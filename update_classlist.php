<?php

    include 'koneksyon.php';

    $id = $_POST['id'];
    $crclm = $_POST['crclm'];
    $lvl = $_POST['lvl'];
    $section = $_POST['section'];

    $update = mysqli_query($koneksyon, "UPDATE department SET course = '$crclm', year='$lvl', section='$section' WHERE id='$id'");

    header("location: department.php");

?>