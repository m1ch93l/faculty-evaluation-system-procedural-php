<?php
session_start();
include_once'koneksyon.php';

if(isset($_POST['save_multicheckbox']))
{
    $e = $_POST['evalid'];
    $q = $_POST['quesid'];
    $rate = $_POST['rate'];
    
    $mi = new MultipleIterator();
    $mi->attachIterator(new ArrayIterator($e));
    $mi->attachIterator(new ArrayIterator($q));
    $mi->attachIterator(new ArrayIterator($rate));

    foreach ( $mi as $value ) {
        list($e, $q, $rate) = $value;
        
        $dagdag = mysqli_query($koneksyon, "INSERT INTO rate (evalid, questionid, rate) VALUES ('$e', '$q', '$rate')");
    }
}
?>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>


<div class="d-flex justify-content-center py-5 my-5">
    <div class="text-center">
        <div class="card bg-light" style=" width: 18rem;">
            <div class="card-header">
                Thank you!
            </div>
            <div class="card-body">
                The Evaluation has been submitted!
            </div>
            <div class="card-footer">
                <a href="logout.php" type="button" class="btn btn-primary">LOG OUT</a>
            </div>
        </div>
    </div>
</div>
    
</body>
