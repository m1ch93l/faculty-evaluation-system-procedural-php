<?php
 /*  
    $servername = "mysql5037.site4now.net";
    $username = "a7cc3f_fes";
    $password = "teamcapslock25";
    $dbname = "db_a7cc3f_fes";
 */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fes";

    $koneksyon = new mysqli($servername, $username, $password, $dbname);

    if ($koneksyon->connect_error){
        die("connection failed:" . $koneksyon->connect_error);
    }

?>