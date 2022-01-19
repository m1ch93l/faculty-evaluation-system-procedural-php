<head>
  <?php include'includes/header.php'; ?>
</head>
<body>
<?php
    include'includes/admin-navbar.php';
    include 'koneksyon.php';

    $scode = $_GET['id'];

    $qryview = "SELECT subject.id as id, code, description, faculties.id as fid,fname,lname FROM subject INNER JOIN faculties ON faculties.id=subject.faculty_id WHERE subject.id='$scode'";
    $result = mysqli_query($koneksyon, $qryview);

   echo "<main class='mt-5 pt-3'>";
    echo "<div class='container-fluid'>";
    echo "<H2>Subject List</H2>";

        echo "<form action='update_subject_list.php' method='post'>";
        $row = mysqli_fetch_array($result);

        echo "<input class='form-control' type='hidden' name='idid' value='".$row["id"]."'><br>";
        echo "Subject Code: <input class='form-control' type='text' name='txtsubcode' value='".$row["code"]."'><br>";
        echo "Description: <input class='form-control' type='text' name='description' value='".$row["description"]."'><br>";
      
        echo "<select class='form-select' name='facuid'>";
        echo "<option selected value='".$row["fid"]."'>".$row["fname"]." ".$row["lname"]."</option>";

        $qry=mysqli_query($koneksyon,"SELECT * FROM faculties");
        while($rows=mysqli_fetch_array($qry)){
        echo "<option value='".$rows["id"]."'> ".$rows["fname"]." ".$rows["lname"]."</option>";
          }
        echo "<select>";

        echo "<input class='form-control btn-primary mt-3' type='submit' value='UPDATE'>";

        echo "</form>";

        echo "<form action='subject_list.php'>";
        echo "<button  class='form-control btn-danger' type='submit'>Cancel</button>";
        echo "</form>";
        echo "</div>";
        echo "</main>"

?>
</body>
