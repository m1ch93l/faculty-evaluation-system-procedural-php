<?php
session_start();
include_once'koneksyon.php';

if(isset($_POST['save_multicheckbox']))
{

    $evalid = $_POST['eval-id'];
    $q = $_POST['quesid'];
    $rate = $_POST['rate'];

    foreach($evalid as $k){
        echo $k;
    }

    $sample = array();
    for($z=0; $z<count($evalid); $z++){
        $sample[] = array($evalid[$z], $q[$z], $rate[$z]); 
    }
    
}

?>