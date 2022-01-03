<head>
  <?php include'includes/header.php'; ?>
</head>
<body>
<?php
    include'includes/admin-navbar.php';
    include 'koneksyon.php';

    $id = $_GET['id'];

    $qryview = "SELECT studentno,firstname,lastname,view,course,year,section, username FROM subject_enrolled INNER JOIN students ON students.id=subject_enrolled.student_id INNER JOIN department ON students.department_id=department.id WHERE students.id = '$id'";
    $result = mysqli_query($koneksyon, $qryview);

    
    echo "<main class='mt-5 pt-3'>";
    echo "<div class='container-fluid'>";
    echo "<H2>STUDENT INFORMATION</H2>";

    if(mysqli_num_rows($result) > 0) {
        echo "<form action='update.php' method='post'>";
        $row = mysqli_fetch_assoc($result);

        echo "Student Number: <input class='form-control' type='text' readonly name='txtstudentnum' value='".$row["studentno"]."'><br>";
        echo "First Name <input class='form-control' type='text' name='txtfname' value='".$row["firstname"]."'><br>";
        echo "Last Name: <input class='form-control' type='text' name='txtlname' value='".$row["lastname"]."'><br>";
        echo "UserName: <input class='form-control' type='text' name='uname' value='".$row["username"]."'><br>";
        echo "Password: <input class='form-control' type='text' readonly value='".$row["view"]."'><br>";
        
        echo "<select name='departmentid' class='form-select mb-3'>";

        echo "<option disabled selected value='".$row["deptid"]." '>  ".$row["course"]." ".$row["year"]."".$row["section"]." </option>";
        $res = mysqli_query($koneksyon, "SELECT * FROM department");
        while($row1 = mysqli_fetch_array($res)){
        echo " <option value='".$row1["id"]." '>".$row1["course"]." ".$row1["year"]."".$row1["section"]."</option>";
            }
        echo"</select>";
        echo "<input class='form-control btn-primary' type='submit' value='UPDATE'>";
        echo "</form>";

        echo "<form action='student_list.php'>";
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