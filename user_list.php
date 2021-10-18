<?php include'navbar.php'; ?>

<body>
		<div class="content">
      <form class="f1" action="#new_student.php">
         <button type="submit">Add New</button>
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
            else
            {
              echo "No records found!";
            }

            ?>

		</div>
</body>
