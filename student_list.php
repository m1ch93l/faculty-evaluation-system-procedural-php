<?php

    if(isset($_POST['submit'])){
    include'koneksyon.php';

    $snum = $_POST['snum'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $username = $_POST['username'];
    $pw = $_POST['password'];
    $password = password_hash($pw, PASSWORD_BCRYPT);
    $name = $_POST['fname'];


    $dagdag = "INSERT INTO student_list (s_num, fname, lname, mname, username, password, name) VALUES ('$snum', '$fname', '$lname', '$mname', '$username', '$password', '$name')";

    if (mysqli_query($koneksyon, $dagdag)){
      echo "New records has been added!";
    }
    else{
      echo "Error in adding new records";
    }
    header( "Location: student_list.php" );

    }

?>

<style>
    /*Table design*/
    main{
      margin:0;
      padding:20px;
      font-family: sans-serif;
      position: relative;
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
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
.search{
  padding: 9px 15px;
  margin-bottom: 5px;
}
</style>
<body>
  <?php include'navbar.php'; ?>
    <div class="main-body">

        <input class="search" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Student Number" title="Type in a name"><br>

        <button class="openbtn" onclick="openNav()">Add New</button>
        <div id="mySidepanel" class="new_sidepanel">
            <h2 align="center">New Student</h2>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <form autocomplete="off" action="student_list.php" method="POST">
                <label for="fname">Student Number:</label><br>
                <input type="text" id="snum" name="snum">
                <label for="fname">First Name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Last Name:</label><br>
                <input type="text" id="lname" name="lname"><br>
                <label for="mname">Middle Name:</label><br>
                <input type="text" id="mname" name="mname"><br>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="password">Password:</label><br>
                <input type="text" id="password" name="password"><br>
                <input type="submit" name="submit">
             </form>
             <form action="student_list.php">
                 <button type="submit">Cancel</button>
            </form>
        </div>

        <?php
            include'koneksyon.php';

            $qryview = "SELECT * FROM student_list";
            $result = mysqli_query($koneksyon, $qryview);

            echo "<div class='main'>";
            echo "<h1>Student List</h1>";
            if(mysqli_num_rows($result) > 0){
                echo "<table class='table' id='myTable'>";
                echo "<thead align='center'>";
                echo "<th>Student Number</th>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Middle Name</th>";
                echo "<th>Action</th>";
                echo "</thead>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td data-label='Student Number'>".$row['s_num']."</td>";
                    echo "<td data-label='First Name'>".$row['fname']."</td>";
                    echo "<td data-label='Last Name'>".$row['lname']."</td>";
                    echo "<td data-label='Middle Name'>".$row['mname']."</td>";
                    echo "<td>";
                    echo "<div class='action_btn'>";
                    echo "<button class='fas fa-user-edit'><a href='viewedit.php?snum=".$row ["s_num"]."' >Edit</a></button>";
                    echo "<button class='fas fa-trash'><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete.php?snum=".$row['s_num']."' >Delete</a></button>";
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
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</body>
<?php include'footer.php'; ?>