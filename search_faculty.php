<?php
    include'navbar.php';
    include 'koneksyon.php';

    $snum = $_POST['txtsnum'];

    //SELECT column1, column2.. FROM tablename
    //SELECT * FROM tablename

    $qryview = "SELECT * FROM faculty_list WHERE f_num = '$snum'";
    $result = mysqli_query($koneksyon, $qryview);

    echo "<style>";
        echo ".f1{
          margin-top: 50px;
        }
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
    echo "<div class='content'>";

    echo "<H2 class='f1'>STUDENT INFORMATION</H2>";
    if(mysqli_num_rows($result) > 0) {
        echo "<table BORDER='1'>";
        echo"<tr>";
        echo "<td>STUDENT NUMBER</td>";
        echo "<td>FIRST NAME</td>";
        echo "<td>LAST NAME</td>";
        echo "<td>MIDDLE NAME</td>";
        echo"</tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo"<tr>";
                echo "<td>".$row["f_num"]."</td>";
                echo "<td>".$row["fname"]."</td>";
                echo "<td>".$row["lname"]."</td>";
                echo "<td>".$row["mname"]."</td>";

            echo"</tr>";
        }
        echo "</table>";
        echo "</div>";

    }
    else {
        echo "No record/s found!";
    }

?>