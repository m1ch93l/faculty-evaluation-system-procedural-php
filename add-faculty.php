<?php
    include_once'navbar.php';
    include_once'koneksyon.php';

    $string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $pass = substr(str_shuffle($string),0,5);

    $fnum = $_POST['fnum'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $usertype = "faculty";

    $systempass = $fnum.$pass;
    $password = password_hash($systempass, PASSWORD_BCRYPT);

    $dagdag = "INSERT INTO faculties (fno, fname, lname) VALUES ('$fnum','$fname','$lname')";
    $g = mysqli_query($koneksyon, $dagdag);

    if($g){
        $dagdag1 = "INSERT INTO users (username, password, usertype, name) VALUES ('$fname','$password','$usertype','$fname')";
        $gna = mysqli_query($koneksyon, $dagdag1);
    ?>

            <div class="container py-5 my-5">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <h1>Your Password: <?php echo $systempass; ?></h1>
                                </div>
                                <a type="button" class="btn btn-primary" href="faculty_list.php">View Records</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    else{
        echo "no data";
    }
?>