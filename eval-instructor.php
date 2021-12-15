<?php include_once'navbar.php';
?>
<body>
    <div class="container m-auto py-5">
        <div class="row m-auto">
            <div class="col bg-success">
                <form action="restriction.php" method="post">
                <div class="card">
                    
                    <select class="form-select" name="faculty" id="">
                        <?php include_once'koneksyon.php';
                            $qry = "SELECT * FROM faculties";
                            $f = mysqli_query($koneksyon, $qry);
                            while ($row = mysqli_fetch_array($f)){
                        ?>
                        <option value="<?php echo $row['id']; ?>" selected><?php echo $row['fname']." ".$row['lname']; ?></option>
                        <?php } ?>
                    </select>
                    
                </div><br>
                <div class="card">
                
                    <select class="form-select" name="department" id="">
                        <?php
                            $qry = "SELECT * FROM department";
                            $d = mysqli_query($koneksyon, $qry);
                            while ($row = mysqli_fetch_array($d)){
                        ?>
                        <option value="<?php echo $row['id']; ?>" selected><?php echo $row['course']." ".$row['year']."".$row['section']; ?></option>
                        <?php } ?>
                    </select>

                </div><br>
                <div class="card">
                
                    <select class="form-select" name="subject" id="">
                        <?php
                            $qry = "SELECT * FROM subject";
                            $s = mysqli_query($koneksyon, $qry);
                            while ($row = mysqli_fetch_array($s)){
                        ?>
                        <option value="<?php echo $row['id']; ?>" selected><?php echo $row['code']." ".$row['description']; ?></option>
                        <?php } ?>
                    </select>
  
                </div><br>
                <button type="submit" class="btn btn-primary">Add to List</button>
                </form>
            </div>
            <div class="col bg-success">
                <div class="card">
                    <table class="display" id="myTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Faculty Name</th>
                            <th>Department</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    <?php
                           $result = mysqli_query($koneksyon, "SELECT fname, lname, course, year, section, description, evaluationid FROM faculties INNER JOIN evaluation ON faculties.id = evaluation.facultyid INNER JOIN department ON department.id = evaluation.departmentid INNER JOIN subject ON subject.id = evaluation.subjectid");
                           while($row = mysqli_fetch_array($result)){
                               echo "<tr>";
                               echo "<td>".$row['fname']." ".$row['lname']."</td>";
                               echo "<td>".$row['course']." ".$row['year']."".$row['section']."</td>";
                               echo "<td>".$row['description']."</td>";
                               echo "<td><a href='delete-eval-ins.php?id=".$row['evaluationid']."' type='button' class='btn btn-danger'>Delete</a></td>";
                               echo "</tr>";
                           }
                        ?>
                        </table>
                </div>
            </div>
            <div class="form-group"><br>
                <a type="button" class="btn btn-primary" href="question-list.php">View Questions</a>
            </div>
        </div>
    </div>
</body>
<script>
     $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>