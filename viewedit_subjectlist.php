<?php
    include'navbar.php';
    include 'koneksyon.php';

    $scode = $_GET['id'];

    $qryview = "SELECT * FROM subject WHERE id='$scode'";
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

    if(mysqli_num_rows($result) > 0)
    {
        echo "<form action='update_subject_list.php' method='post'>";
        $row = mysqli_fetch_assoc($result);

        echo "<input type='hidden' name='id' value='".$row["id"]."'><br>";
        echo "Subject Code: <input type='text' name='txtscode' value='".$row["code"]."'><br>";
        echo "Description: <input type='text' name='txtdescription' value='".$row["description"]."'><br>";
        echo "<input type='submit' value='UPDATE'>";

        echo "</form>";

        echo "<form action='subject_list.php'>";
        echo "<button type='submit'>Cancel</button>";
        echo "</form>";
        echo "</div>";
    }
    else {
      echo "No records found";
    }

?>
