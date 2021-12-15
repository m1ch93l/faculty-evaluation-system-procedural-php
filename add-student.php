<?php
    include_once'navbar.php';
    include_once'koneksyon.php';

    $string = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $pass = substr(str_shuffle($string),0,8);

    $departmet_id = $_POST['departmentid'];
    $snum = $_POST['snum'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $usertype = "student";

    $systempass = $pass;
    $password = password_hash($systempass, PASSWORD_BCRYPT);

    $dagdag = "INSERT INTO students (studentno, username, firstname, lastname, usertype, password, department_id, view) VALUES ('$snum','$fname','$fname','$lname', '$usertype','$password', '$departmet_id', '$systempass')";
    mysqli_query($koneksyon, $dagdag);

?>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                Password: 
                    <?php echo $systempass?>
                    <a href="student_list.php" type="button" class="btn btn-primary">View Records</a>
                </div>
            </div>
        </div>
    </div>
</body>
