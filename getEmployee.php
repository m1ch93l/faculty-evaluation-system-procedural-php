<?php
    include_once("koneksyon.php");
    if($_REQUEST['empid']) {
        $sql = "SELECT id, fname, lname, mname 
        FROM faculty_list 
        WHERE id='".$_REQUEST['empid']."'";
        $resultSet = mysqli_query($koneksyon, $sql);
        $empData = array();
        while( $emp = mysqli_fetch_assoc($resultSet) ) {
            $empData = $emp;
        }
        echo json_encode($empData);
    }
    else {
        echo 0;
    }
?>