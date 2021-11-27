<?php
    session_start();
    include_once'koneksyon.php';

    $username = mysqli_real_escape_string($koneksyon, $_POST["username"]);
    $password = mysqli_real_escape_string($koneksyon, $_POST["password"]);

    
        $query = "SELECT * FROM users";
        $result1 = mysqli_query($koneksyon, $query);
        while($row = mysqli_fetch_array($result1)){
        
            if(password_verify($password, $row["password"]) && $row["username"] == $username) {
                //return true;
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['usertype'];
                $_SESSION['username'] = $row['username'];
    
                header("Location: dashboard.php");
            }
            else{
                header("Location: index.php");
            }
    }
    $query = "SELECT * FROM students";
        $result11 = mysqli_query($koneksyon, $query);
        while($row = mysqli_fetch_array($result11)){
        
            if(password_verify($password, $row["password"]) && $row["username"] == $username) {
                //return true;
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['usertype'];
                $_SESSION['username'] = $row['username'];
    
                header("Location: dashboard.php");
            }
            else{
                header("Location: index.php");
            }
    }
    
   
    /*
    if($result){
        $query1 = "SELECT * FROM students WHERE username = '$username'";
        $result1 = mysqli_query($koneksyon, $query1);
        while($row = mysqli_fetch_array($result1)) {
            if($row["usertype"] == 'admin'){
                if(password_verify($password, $row["password"]) && $row["usertype"] == 'student') {
                    //return true;
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['role'] = $row['usertype'];
                    $_SESSION['username'] = $row['username'];
    
                    header("Location: evaluate.php");
                }
            }
        }
    }
    if($result1){
        $query2 = "SELECT * FROM faculties WHERE username = '$username'";
        $result2 = mysqli_query($koneksyon, $query2);
        while($row = mysqli_fetch_array($result2)) {
            if(password_verify($password, $row["password"]) && $row["usertype"] == 'faculty') {
                //return true;
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['usertype'];
                $_SESSION['username'] = $row['username'];

                header("Location: evaluation_result.php");
            }
        }

        header("Location: index.php");
    }*/
?>