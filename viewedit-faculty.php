<head>
  <?php include'includes/header.php'; ?>
</head>
<body>
<?php
    include'includes/admin-navbar.php';
    include 'koneksyon.php';

    $id = $_GET['id'];

    $qryview = "SELECT * FROM faculties WHERE id = '$id'";
    $result = mysqli_query($koneksyon, $qryview);

    echo "<main class='mt-5 pt-3'>";
    echo "<div class='container-fluid'>";
    echo "<H2>FACULTY INFORMATION</H2>";

    if(mysqli_num_rows($result) > 0) {
        echo "<form action='update-faculty.php' method='post'>";
        $row = mysqli_fetch_assoc($result);

        echo "<input class='form-control' type='hidden' name='fid' value='".$row["id"]."'><br>";
        echo "Faculty No: <input class='form-control' type='text' readonly name='facnum' value='".$row["fno"]."'><br>";
        echo "First Name <input class='form-control text-capitalize' type='text' name='txfname' value='".$row["fname"]."'><br>";
        echo "Last Name:<input class='form-control text-capitalize' type='text' name='txlname' value='".$row["lname"]."'><br>";
        echo "Password: <input class='form-control' type='text' readonly value='".$row["view"]."'><br>";
        echo "<input class='form-control btn-primary' type='submit' value='UPDATE'>";
        echo "</form>";

        echo "<form action='faculty_list.php'>";
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
