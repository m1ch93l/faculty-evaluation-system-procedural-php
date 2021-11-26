<?php

    include 'koneksyon.php';

    $fnum = $_GET['del_fid'];

    $delete = "DELETE FROM faculties WHERE id = '$fnum' ";

    mysqli_query($koneksyon, $delete);

    header("location: faculty_list.php");

?>