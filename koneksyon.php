<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fes";

    $koneksyon = new mysqli($servername, $username, $password, $dbname);

    if ($koneksyon->connect_error){
        die("connection failed:" . $koneksyon->connect_error);
    }

?>