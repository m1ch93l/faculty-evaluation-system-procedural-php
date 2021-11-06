<?php
    include'navbar.php';
    include 'koneksyon.php';

    $datauser = $_GET['user'];

    $qryview = "SELECT * FROM users WHERE username='$datauser' ";
    $result = mysqli_query($koneksyon, $qryview);

    echo "<div class='main-body'>";
    echo "<H2>STUDENT INFORMATION</H2>";

    if(mysqli_num_rows($result) > 0) {
        echo "<form action='#update.php' method='post'>";
        $row = mysqli_fetch_assoc($result);

        echo "Username: <input type='text' name='username' value='".$row["username"]."'><br>";
        echo "name:<input type='text' name='name' value='".$row["name"]."'><br>";
        echo "<input type='submit' value='UPDATE'>";
        echo "</form>";

        echo "<form action='user_list.php'>";
        echo "<button type='submit'>Cancel</button>";
        echo "</form>";
        echo "</div>";
    }
    else {
      echo "No records found";
    }
?>