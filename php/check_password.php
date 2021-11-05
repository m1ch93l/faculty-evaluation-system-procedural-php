<?php
    session_start();
    include'../koneksyon.php';

    if(empty($_POST["username"]) && empty($_POST["password"])) {
        echo '<script>alert("Both Fields are required")</script>';
    }
    elseif ($_POST['role'] == 'admin') {
        $username = mysqli_real_escape_string($koneksyon, $_POST["username"]);
        $password = mysqli_real_escape_string($koneksyon, $_POST["password"]);

        $query = "SELECT * FROM users WHERE username = '$username' ";
        $result = mysqli_query($koneksyon, $query);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                if(password_verify($password, $row["password"])) {
                    //return true;
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['username'] = $row['username'];

                    header("Location: ../dashboard.php");
                }
                else {
                    //return false;
                    header("Location: ../index.php?error=Incorect User name or password");
                }
            }
        }
        else {
            header("Location: ../index.php?error=Incorect User name or password");
        }
    }
    elseif ($_POST['role'] == 'faculty') {
        $username = mysqli_real_escape_string($koneksyon, $_POST["username"]);
        $password = mysqli_real_escape_string($koneksyon, $_POST["password"]);

        $query = "SELECT * FROM faculty_list WHERE username = '$username' ";
        $result = mysqli_query($koneksyon, $query);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                if(password_verify($password, $row["password"])) {
                    //return true;
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['username'] = $row['username'];

                    header("Location: ../evaluation_result.php");
                }
                else {
                    //return false;
                    header("Location: ../index.php?error=Incorect User name or password");
                }
            }
        }
        else {
            header("Location: ../index.php?error=Incorect User name or password");
        }
    }
    elseif ($_POST['role'] == 'student') {
        $username = mysqli_real_escape_string($koneksyon, $_POST["username"]);
        $password = mysqli_real_escape_string($koneksyon, $_POST["password"]);

        $query = "SELECT * FROM student_list WHERE username = '$username' ";
        $result = mysqli_query($koneksyon, $query);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                 if(password_verify($password, $row["password"])) {
                    //return true;
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['username'] = $row['username'];

                    header("Location: ../evaluate.php");
                 }
                 else {
                    //return false;
                    header("Location: ../index.php?error=Incorect User name or password");
                 }
            }
        }
        else {
            header("Location: ../index.php?error=Incorect User name or password");
        }
    }
    
?>