<?php
    session_start();
    include_once'koneksyon.php';


    $username = mysqli_real_escape_string($koneksyon, $_POST['username']);
    $password = mysqli_real_escape_string($koneksyon, $_POST['password']);


        $query = "SELECT * FROM users WHERE username = '$username' ";
        $result = mysqli_query($koneksyon, $query);
        while($row = mysqli_fetch_array($result)){
        
            if(password_verify($password, $row['password']) && $row['usertype'] == 'admin') {
                //return true;
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['usertype'];
                $_SESSION['username'] = $row['username'];

                $qry = mysqli_query($koneksyon, "SELECT * FROM academic WHERE status='active' ");
                $row = mysqli_fetch_array($qry);
                $_SESSION['academic'] = $row['academic_year'];
                $_SESSION['semester'] = $row['semester'];
    
                header("Location: dashboard.php");
            }
            else{
                echo '<script>alert("User not found!");history.go(-1);</script>';
            }

    }
        $query1 = "SELECT * FROM students WHERE username = '$username' ";
        $result1 = mysqli_query($koneksyon, $query1);
        while($row = mysqli_fetch_array($result1)){
        
            if(password_verify($password, $row['password']) && $row['usertype'] == 'student') {
                //return true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['usertype'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['snum'] = $row['studentno'];
                $_SESSION['dept'] = $row['department_id'];

                $qry = mysqli_query($koneksyon, "SELECT * FROM academic ");
                while($row12 = mysqli_fetch_array($qry)){
                    $status = $row12['status'];
                }
                if($status == 'active'){
                $_SESSION['academic'] = $row12['academic_year'];
                $_SESSION['semester'] = $row12['semester'];
                header("Location: evaluate.php");
                }
                elseif($status == 'pending'){
                    echo '<script>alert("Sorry! The Evaluation has not yet Start!");history.go(-1);</script>';
                }
                elseif($status == 'closed'){
                    echo '<script>alert("Sorry! The Evaluation has been closed!");history.go(-1);</script>';
                }
                else{
                    header("Location: index.php");
                }
                
                
            }
            else{
                echo '<script>alert("User not found!");history.go(-1);</script>';
            }
    }

        $query2 = "SELECT * FROM faculties WHERE username = '$username' ";
        $result2 = mysqli_query($koneksyon, $query2);
        while($row = mysqli_fetch_array($result2)){
        
            if(password_verify($password, $row['password']) && $row['usertype'] == 'faculty') {
                //return true;
                $_SESSION['name'] = $row['fname'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['usertype'];
                $_SESSION['username'] = $row['username'];

                $qry = mysqli_query($koneksyon, "SELECT * FROM academic WHERE status='active' ");
                $row = mysqli_fetch_array($qry);
                $_SESSION['academic'] = $row['academic_year'];
                $_SESSION['semester'] = $row['semester'];
    
                header("Location: evaluation_result.php");
            }
            else{
                echo '<script>alert("User not found!");history.go(-1);</script>';
            }
    }
?>