<head>
  <?php include'includes/header.php'; ?>
</head>
<body>
<?php
    include'includes/admin-navbar.php';
    include 'koneksyon.php';

    $id = $_GET['id'];

    $qryview = "SELECT * FROM academic WHERE id = '$id'";
    $result = mysqli_query($koneksyon, $qryview);

    echo "<main class='mt-5 pt-3'>";
    echo "<div class='container-fluid'>";
    echo "<H2>ACADEMIC INFORMATION</H2>";

    if(mysqli_num_rows($result) > 0) {
        echo "<form action='update-acad.php' method='post'>";
        $row = mysqli_fetch_assoc($result);

        echo "<input type='hidden' name='aId' value='".$row["id"]."'>";
        echo "Academic Year: <input class='form-control text-uppercase' type='text' name='acadyear' value='".$row["academic_year"]."'><br>";
        echo "Semester :<input class='form-control text-uppercase' type='text' name='sem' value='".$row["semester"]."'><br>";
        echo "<label>Status:</label>";

        echo "<input class='form-control btn-primary' type='submit' value='UPDATE'>";
        echo "</form>";

        echo "<form action='academic_list.php'>";
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