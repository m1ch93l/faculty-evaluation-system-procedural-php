<?php

    include'koneksyon.php';

    $query = "SELECT COUNT(s_num) AS count FROM student_list ";

    $result =mysqli_query($koneksyon, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $output = "<br>".$row['count'];
    }

?>