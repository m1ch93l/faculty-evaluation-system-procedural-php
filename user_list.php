<?php include'navbar.php'; ?>
<body>
    <div class="main-body">
        <form action="new_user.php">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="text" id="password" name="password"><br>
            <button type="submit" name="btnsubmit">Add New</button>
        </form>
        <?php
            include'koneksyon.php';

            $qryview = "SELECT * FROM users";
            $result = mysqli_query($koneksyon, $qryview);

            echo "<h1>User List</h1>";
            if(mysqli_num_rows($result) > 0){
                echo "<table border='1' width='100%'>";
                echo "<tr align='center'>";
                echo "<td>Username</td>";
                echo "<td>Password</td>";
                echo "<td>Action</td>";
                echo "<td>Action</td>";
                echo "<tr>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['password']."</td>";
                    echo "<td align='center'><a href='#viewedit.php?snum=".$row ["s_num"]."' >Edit</a></td>";
                    echo "<td align='center'>";
                    echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='#delete.php?snum=".$row['s_num']."' >Delete</a>";
                    echo "</td>";
                    echo "</tr>";
              }
              echo "</table>";
            }
            else {
              echo "No records found!";
            }
        ?>
    </div>
</body>
