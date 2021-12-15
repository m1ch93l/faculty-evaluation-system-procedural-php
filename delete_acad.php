<?php

    include 'koneksyon.php';

    $delacad = $_GET['del_acad'];

    mysqli_query($koneksyon,"DELETE FROM academic WHERE id = '$delacad' ");

    header("location: academic_list.php");

?>