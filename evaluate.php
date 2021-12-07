<body>
<?php include'navbar.php'; ?>
    <div class="main-body">
        <div class="container py-5">
        <h1>HELLO, <?=$_SESSION['username']?></h1>
            <div class="card my-5 text-center">
                    <div class="card my-5">
                    
                    <?php
                            $qry = mysqli_query($koneksyon, "SELECT departmentid, fname, lname, description FROM evaluation INNER JOIN department ON department.id = evaluation.departmentid
                            INNER JOIN faculties ON faculties.id = evaluation.facultyid INNER JOIN subject ON subject.id = evaluation.subjectid WHERE departmentid = {$_SESSION['dept']}");
                                while($row = mysqli_fetch_array($qry)){
                                    echo $row['fname']." ".$row['lname']."<br>";
                                    echo $row['description'];
                                         
                                        $qryview = "SELECT criteria, id as cid FROM criteria ";
                                        $result = mysqli_query($koneksyon, $qryview);
                                            while($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><?php echo $row['criteria']; ?></th>
                                                    <th>1</th>
                                                    <th>2</th>
                                                    <th>3</th>
                                                    <th>4</th>
                                                    <th>5</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $name = array();
                                                $tanong = "SELECT question FROM questions WHERE criteria_id = {$row['cid']}";
                                                $resulta = mysqli_query($koneksyon, $tanong);
                                                while($row1 = mysqli_fetch_array($resulta)){ ?>
                                                    <tr>
                                                        <td><?php echo $row1['question'];?></td>
                                                        <form>
                                                            <td><input type="radio" name="name[]" id="" value="1"></td>
                                                            <td><input type="radio" name="name[]" id="" value="2"></td>
                                                            <td><input type="radio" name="name[]" id="" value="3"></td>
                                                            <td><input type="radio" name="name[]" id="" value="4"></td>
                                                            <td><input type="radio" name="name[]" id="" value="4" checked></td>
                                                        </form>
                                                        
                                                    </tr>
                                                    <?php } ?>
                                            </tbody> 
                                        </table>
                                        
                                        <?php }  ?>
                              <?php } echo $name[]; ?>
                                                    
                    </div>
            </div>
        </div>
   </div>
</body>
