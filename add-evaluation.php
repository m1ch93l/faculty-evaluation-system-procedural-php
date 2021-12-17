<?php 
		include_once'koneksyon.php';

$sub = $_POST['sub-en'];

$mi = new MultipleIterator();
    $mi->attachIterator(new ArrayIterator($sub));

    foreach ( $mi as $value ) {
        list($sub_e) = $value;
        
        $dagdag = mysqli_query($koneksyon, "INSERT INTO evaluation (sub_enrolled_id) VALUES ('$sub_e')");
    }
    	header("location: question-list.php");
?>