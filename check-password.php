<?php
    session_start();
    include_once'koneksyon.php';

    
    $username = mysqli_real_escape_string($koneksyon, $_POST["username"]);
    $password = mysqli_real_escape_string($koneksyon, $_POST["password"]);

    $query = "SELECT * FROM users WHERE username = '$username' ";
    $result = mysqli_query($koneksyon, $query);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            if(password_verify($password, $row["password"]) && $row["usertype"] == 'admin') {
                //return true;
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['usertype'];
                $_SESSION['username'] = $row['username'];

                header("Location: dashboard.php");
            }
            elseif(password_verify($password, $row["password"]) && $row["usertype"] == 'student') {
                //return true;
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['usertype'];
                $_SESSION['username'] = $row['username'];

                header("Location: evaluate.php");
            }
            elseif(password_verify($password, $row["password"]) && $row["usertype"] == 'faculty') {
                //return true;
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['usertype'];
                $_SESSION['username'] = $row['username'];

                header("Location: dashboard.php");
            }
            else{
                header("Location: index.php?error=Incorect User name or password");
            }
        }
    }
    else {
        header("Location: index.php");
    }
    
?>