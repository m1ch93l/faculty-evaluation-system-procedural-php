<?php 
	include_once'koneksyon.php';

	$sid = $_POST['sid'];
	$subtake = $_POST['sub_take'];

	$mi = new MultipleIterator();
    $mi->attachIterator(new ArrayIterator($sid));
    $mi->attachIterator(new ArrayIterator($subtake));

    foreach ( $mi as $value ) {
        list($sid, $subtake) = $value;
        
        mysqli_query($koneksyon, "INSERT INTO subject_enrolled (student_id,subject_take) VALUES ('$sid','$subtake')");
    }
	header("location: student_list.php");
?>