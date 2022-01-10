<head>
  <?php include'includes/header.php'; ?>
</head>
<body>
<?php
    include'includes/admin-navbar.php';
    include 'koneksyon.php';

    $clist = $_GET['clist'];

    $qryview = "SELECT * FROM department WHERE id='$clist'";
    $result = mysqli_query($koneksyon, $qryview);

    echo "<main class='mt-5 pt-3'>";
    echo "<div class='container-fluid'>";
    echo "<H2>CLASS LIST</H2>";

    if(mysqli_num_rows($result) > 0) {
        echo "<form action='update_classlist.php' method='post'>";
        $row = mysqli_fetch_assoc($result);

        echo "ID: <input class='form-control' type='text' readonly name='id' value='".$row["id"]."'><br>";
        echo "Course: <input class='form-control text-uppercase' type='text' name='crclm' value='".$row["course"]."'><br>";
        echo "Year <input class='form-control text-uppercase' type='text' name='lvl' value='".$row["year"]."'><br>";
        echo "Section:<input class='form-control text-uppercase' type='text' name='section' value='".$row["section"]."'><br>";
        echo "<input class='form-control btn-primary' type='submit' value='UPDATE'>";

        echo "</form>";

        echo "<form action='department.php'>";
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