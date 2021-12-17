<?php
    include'navbar.php';
    include 'koneksyon.php';

    $scode = $_GET['id'];

    $qryview = "SELECT subject.id as id, code, description, faculties.id as fid,fname,lname FROM subject INNER JOIN faculties ON faculties.id=subject.faculty_id WHERE subject.id='$scode'";
    $result = mysqli_query($koneksyon, $qryview);

    echo "<style>";
        echo "
        input[type=text], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          align-content: center;
        }
        
        input[type=submit]{
          width: 100%;
          background-color: #6fbfe6;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover{
          background-color: #35afeb;
        }
        button{
         width: 100%;
          background-color: #6fbfe6;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          background-color: #cdcbcb;
        }
        button:hover{
          background-color: #b4b3b3;
        }
        ";
    echo "</style>";
    echo "<div class='container-sm p-5 py-5'>";
    echo "<H2>Subject List</H2>";

        echo "<form action='update_subject_list.php' method='post'>";
        while($row = mysqli_fetch_array($result)){

        echo "<input type='hidden' name='idid' value='".$row["id"]."'><br>";
        echo "Subject Code: <input type='text' name='txtsubcode' value='".$row["code"]."'><br>";
        echo "Description: <input type='text' name='description' value='".$row["description"]."'><br>";
 }     
        echo "<select class='form-select' name='facuid'>";
        echo "<option selected disabled value='".$row["fid"]."'>".$row["fname"]." ".$row["lname"]."</option>";

        $qry=mysqli_query($koneksyon,"SELECT * FROM faculties");
        while($rows=mysqli_fetch_array($qry)){
        echo "<option value='".$rows["id"]."'> ".$rows["fname"]." ".$rows["lname"]."</option>";
          }
        echo "<select>";

        echo "<input type='submit' value='UPDATE'>";

        echo "</form>";

        echo "<form action='subject_list.php'>";
        echo "<button type='submit'>Cancel</button>";
        echo "</form>";
        echo "</div>";

?>
