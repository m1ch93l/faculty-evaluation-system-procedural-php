<?php
session_start();
include_once'koneksyon.php';

if(isset($_POST['save_multicheckbox']))
{

    $q = $_POST['quesid'];
    $rate = $_POST['rate'];
    
    $mi = new MultipleIterator();
    $mi->attachIterator(new ArrayIterator($q));
    $mi->attachIterator(new ArrayIterator($rate));

    foreach ( $mi as $value ) {
        list($q, $rate) = $value;
        
        $dagdag = mysqli_query($koneksyon, "INSERT INTO rate (questionid, rate) VALUES ('$q', '$rate')");
    }
}
?>
