<?php

    if(isset($_POST['submit'])){
    include'koneksyon.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $username = $_POST['username'];
    $pw = $_POST['password'];
    $password = password_hash($pw, PASSWORD_BCRYPT);
    $name = $_POST['fname'];

    $dagdag = "INSERT INTO faculty_list (fname, lname, mname, username, password, name) VALUES ( '$fname', '$lname', '$mname','$username', '$password', '$name')";

    if (mysqli_query($koneksyon, $dagdag)){
      echo "New records has been added!";
    }
    else{
      echo "Error in adding new records";
    }
    header( "Location: faculty_list.php" );

    }

?>

<style>
    /*Table design*/
    main{
      margin:0;
      padding:20px;
      font-family: sans-serif;
    }
    *{
      box-sizing: border-box;
    }

    .table{
      width: 100%;
      border-collapse: collapse;
    }

    .table td,.table th{
      padding:12px 15px;
      border:1px solid gray;
      text-align: center;
      font-size:16px;
    }

    .table th{
      background-color: darkblue;
      color:#ffffff;
    }

    .table tbody tr:nth-child(even){
      background-color: #f5f5f5;
    }
    .action_btn a{
      cursor: pointer;
      text-decoration: none;
    }

    /*responsive*/

    @media(max-width: 500px){
      .table thead{
        display: none;
      }

      .table, .table tbody, .table tr, .table td{
        display: block;
        width: 100%;
      }
      .table tr{
        margin-bottom:15px;
      }
      .table td{
        text-align: right;
        padding-left: 50%;
        text-align: right;
        position: relative;
      }
      .table td::before{
        content: attr(data-label);
        position: absolute;
        left:0;
        width: 50%;
        padding-left:15px;
        font-size:15px;
        font-weight: bold;
        text-align: left;
      }
    }
</style>
<body>
    <?php include'navbar.php'; ?>
    <div class="main-body">
        <form action="faculty_list.php" method="post">
            <label for="snum">Faculty Number:</label><br>
            <input type="text" id="txtsnum" name="txtsnum"><br>
            <input type="submit" id="btnsearch" name="btnsearch" value="SEARCH">
        </form>

        <button class="openbtn" onclick="openNav()">Add New</button>
        <div id="mySidepanel" class="new_sidepanel">
            <h1 align="center">New Faculty</h1>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <form action="dagdag_faculty.php" method="post">
                <label for="fname">First Name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Last Name:</label><br>
                <input type="text" id="lname" name="lname"><br>
                <label for="mname">Middle Name:</label><br>
                <input type="text" id="mname" name="mname"><br>
                <input type="submit" name="btnsubmit">
            </form>
            <form action="faculty_list.php">
                <button type="submit">Cancel</button>
            </form>
        </div>
        <?php
            include'koneksyon.php';

            $qryview = "SELECT * FROM faculty_list";
            $result = mysqli_query($koneksyon, $qryview);

            echo "<div class='main'>";
            echo "<h1>Faculty List</h1>";
            if(mysqli_num_rows($result) > 0) {
                echo "<table class='table'>";
                echo "<thead align='center'>";
                echo "<tr>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Middle Name</th>";
                echo "<th>Action</th>";
                echo "</tr>";
                echo "</thead>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td data-label='First Name'>".$row['fname']."</td>";
                    echo "<td data-label='Last Name'>".$row['lname']."</td>";
                    echo "<td data-label='Middle Name'>".$row['mname']."</td>";
                    echo "<td>";
                    echo "<div class='action_btn'>";
                    echo "<button class='fas fa-user-edit'><a href='viewedit_faculty.php?id=".$row ["id"]."' >Edit</a></button>";
                    echo "<button class='fas fa-trash'><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete_faculty.php?id=".$row['id']."' >Delete</a></button>";
                    echo "</div>";
                    echo "</td>";
                    echo "</tr>";
                    echo "</tbody>";
              }
              echo "</table>";
              echo "</div>";
            }
            else {
              echo "No records found!";
            }
        ?>
    </div>
</body>

<script>

    function openNav() {
      document.getElementById("mySidepanel").style.width = "350px";
    }

    function closeNav() {
      document.getElementById("mySidepanel").style.width = "0";
    }

</script>


