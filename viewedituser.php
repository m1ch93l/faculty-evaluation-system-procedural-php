<?php include'includes/header.php'; ?>
<body>
    <?php
    include'includes/admin-navbar.php';
    include 'koneksyon.php';

    $datauser = $_GET['user'];

    $qryview = "SELECT * FROM users WHERE username='$datauser' ";
    $result = mysqli_query($koneksyon, $qryview);

    echo "<main class='mt-5 pt-3'>";
    echo "<div class='container-fluid'>";
    echo "<H2>USERS INFORMATION</H2>";

    if(mysqli_num_rows($result) > 0) {
        echo "<form action='#update.php' method='post'>";
        $row = mysqli_fetch_assoc($result);

        echo "Username: <input class='form-control' type='text' name='username' value='".$row["username"]."'><br>";
        echo "Name: <input class='form-control' type='text' name='name' value='".$row["usertype"]."'><br>";
        echo "<input class='form-control btn-primary' type='submit' value='UPDATE'>";
        echo "</form>";

        echo "<form action='user_list.php'>";
        echo "<button class='form-control btn-danger' type='submit'>Cancel</button>";
        echo "</form>";
        echo "</div>";
        echo "</main>";
    }
    else {
      echo "No records found";
    }
?>
</body>