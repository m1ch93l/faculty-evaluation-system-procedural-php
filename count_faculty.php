<?php

    include'koneksyon.php';

    $query = "SELECT COUNT(f_num) AS count FROM faculty_list ";

    $result =mysqli_query($koneksyon, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $output = "<br>".$row['count'];
    }

?>