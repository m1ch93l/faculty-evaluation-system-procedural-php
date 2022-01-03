<!DOCTYPE html>
<html lang="en">
<?php
include'includes/header.php'; ?>
<body>
    <?php include'includes/admin-navbar.php'; ?>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add user
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">New User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="new_user.php" method="post">
            <div class="modal-body">
            <label for="username">Username:</label><br>
                        <input class="form-control" type="text" id="username" name="username"><br>
                        <label for="password">Password:</label><br>
                        <input class="form-control" type="text" id="password" name="password"><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
    </div>
    <hr>
        <?php
            include'koneksyon.php';

            $qryview = "SELECT * FROM users";
            $result = mysqli_query($koneksyon, $qryview);

            echo "<div class='main'>";
            echo "<h1>User List</h1>";
            if(mysqli_num_rows($result) > 0){
                echo "<table class='table'>";
                echo "<tr style='background-color: #eddc02;'>";
                echo "<th>ID</th>";
                echo "<th>Username</th>";
                echo "<th>Action</th>";
                echo "<th>Action</th>";
                echo "</tr>";
                $no = 1;
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td data-label='ID'>".$no."</td>";
                    echo "<td data-label='Username'>".$row['username']."</td>";
                    echo "<td><a type='button' class='btn btn-primary' href='viewedituser.php?user=".$row["username"]."' >Edit</a></td>";
                    echo "<td><a type='button' class='btn btn-danger' onClick=\"javascript: return confirm('Please confirm deletion');\" href='#delete.php?pass=".$row['password']."' >Delete</a></td>";
                    echo "</div>";
                    echo "</tr>";
                    echo "</tbody>";
                    $no++;
              }
              echo "</table>";
              echo "</div>";
            }
            else {
              echo "No records found!";
            }
        ?>
        </div>
    </main>
</body>
</html>