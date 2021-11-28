<?php include_once'navbar.php';
?>
<body>
    <div class="container m-auto py-5">
        <div class="row">
            <div class="col bg-success">
                <form action="restriction.php" method="post">
                <div class="card">
                    
                    <select name="faculty" id="">
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
                
                    <select name="department" id="">
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
                
                    <select name="subject" id="">
                        <?php
                            $qry = "SELECT * FROM subject";
                            $s = mysqli_query($koneksyon, $qry);
                            while ($row = mysqli_fetch_array($s)){
                        ?>
                        <option value="<?php echo $row['id']; ?>" selected><?php echo $row['code']." ".$row['description']; ?></option>
                        <?php } ?>
                    </select>
  
                </div><br>
                <button type="submit" class="btn btn-primary">ADD TO LIST</button>
                </form>
            </div>
            <div class="col">
                <div class="card">
                <table class="display" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>First Name</td>
                            <td>Department</td>
                            <td>Subject</td>
                        </tr>
                    </thead>
                    <tr>
                    <?php
                        $result = mysqli_query($koneksyon, "SELECT facultyid FROM evaluation");
                        while ($row = mysqli_fetch_array($result)){
                            $res = mysqli_query($koneksyon, "SELECT * FROM faculties WHERE id = {$row['facultyid']}");
                            while ($row = mysqli_fetch_array($res)){
                                    echo $row['fname'];
                            }
                        }
                        ?>
                    
                    
                        <?php 
                             $result = mysqli_query($koneksyon, "SELECT departmentid FROM evaluation");
                             while ($row = mysqli_fetch_array($result)){
                                 $res = mysqli_query($koneksyon, "SELECT * FROM department WHERE id = {$row['departmentid']}");
                                 while ($row = mysqli_fetch_array($res)){
                                     echo $row['course']." ".$row['year'].$row['section'];
                                 }
                             }
                        ?>
                    
                    
                        <?php
                             $result = mysqli_query($koneksyon, "SELECT subjectid FROM evaluation");
                             while ($row = mysqli_fetch_array($result)){
                                 $res = mysqli_query($koneksyon, "SELECT * FROM subject WHERE id = {$row['subjectid']}");
                                 while ($row = mysqli_fetch_array($res)){
                                    echo $row['description'];
                                 }
                             }
                        ?>
                    </tr>
                </table>
                </div>
                
            </div>
        </div>
    </div>
</body>
<script>
     $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>