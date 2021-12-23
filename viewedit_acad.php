<?php
    include'navbar.php';
    include 'koneksyon.php';

    $id = $_GET['id'];

    $qryview = "SELECT * FROM academic WHERE id = '$id'";
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
        .padding{
          position: absolute;
          top: 55%;
          left: 50%;
          transform: translate(-50%,-50%);
        }
        @media(max-width: 500px){
          .padding{
            width: 90%;
          }
        }
        ";
    echo "</style>";
    echo "<div class='main-body'>";
    echo "<div class='padding'>";
    echo "<H2>ACADEMIC INFORMATION</H2>";

    if(mysqli_num_rows($result) > 0) {
        echo "<form action='update-acad.php' method='post'>";
        $row = mysqli_fetch_assoc($result);

        echo "<input type='hidden' name='aId' value='".$row["id"]."'>";
        echo "Academic Year: <input type='text' name='acadyear' value='".$row["academic_year"]."'><br>";
        echo "Semester :<input type='text' name='sem' value='".$row["semester"]."'><br>";

        echo "<select name='status' class='form-select'>";
        echo " <option value='".$row['status']."'>".$row['status']."</option>";
        $res = mysqli_query($koneksyon, "SELECT * FROM status");
        while($row1 = mysqli_fetch_array($res)){
        echo " <option value='".$row1["eval_status"]." '>".$row1["eval_status"]."</option>";
            }
        echo"</select>";

        echo "<input type='submit' value='UPDATE'>";
        echo "</form>";

        echo "<form action='academic_list.php'>";
        echo "<button type='submit'>Cancel</button>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
    }
    else {
      echo "No records found";
    }

?>
