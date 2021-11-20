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
        <button class="openbtn" onclick="openNav()">Add New</button>
            <div id="mySidepanel" class="new_sidepanel">
                <h2 align="center">New User</h2>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                    <form action="new_user.php">
                        <label for="username">Username:</label><br>
                        <input type="text" id="username" name="username"><br>
                        <label for="password">Password:</label><br>
                        <input type="text" id="password" name="password"><br>
                        <input type="submit" name="submit">
                    </form>
            </div>
        <?php
            include'koneksyon.php';

            $qryview = "SELECT * FROM users";
            $result = mysqli_query($koneksyon, $qryview);

            echo "<div class='main'>";
            echo "<h1>User List</h1>";
            if(mysqli_num_rows($result) > 0){
                echo "<table class='table'>";
                echo "<thead align='center'>";
                echo "<th>Username</th>";
                echo "<th>Action</th>";
                echo "</thead>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td data-label='Username'>".$row['username']."</td>";
                    echo "<td>";
                    echo "<div class='action_btn'>";
                    echo "<button class='fas fa-user-edit'><a href='viewedituser.php?user=".$row["username"]."' >Edit</a></button>";
                    echo "<button class='fas fa-trash'><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='#delete.php?pass=".$row['password']."' >Delete</a></button>";
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
<?php include'footer.php'; ?>