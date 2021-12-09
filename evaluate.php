
<body>
<?php include'navbar.php'; ?>
    <div class="main-body">
        <div class="container py-5">
        <h1>HELLO, <?=$_SESSION['username']?></h1>
            <div class="card my-5 text-center">
                    <div class="card my-5">
                        
                    <form autocomplete="off" action="rate.php" method="post">

                    <?php
                            $qry = mysqli_query($koneksyon, "SELECT departmentid, fname, lname, evaluationid, description, subjectid FROM evaluation INNER JOIN department ON department.id = evaluation.departmentid
                            INNER JOIN faculties ON faculties.id = evaluation.facultyid INNER JOIN subject ON subject.id = evaluation.subjectid WHERE departmentid = {$_SESSION['dept']}");
                                while($row = mysqli_fetch_array($qry)){
                                    echo "<h3>".$row['fname']." ".$row['lname']."</h3><br>";
                                    echo "<h3>".$row['description']."</h3>";
                                    $sample =  $row['evaluationid'];
                                    $sub_id = $row['subjectid'];

                                        $qryview = "SELECT criteria, id as cid FROM criteria ";
                                        $result = mysqli_query($koneksyon, $qryview);
                                            while($row = mysqli_fetch_array($result)){
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
                                                
                                                $tanong = "SELECT question, id as qid FROM questions WHERE criteria_id = {$row['cid']}";
                                                $resulta = mysqli_query($koneksyon, $tanong);
                                                while($row1 = mysqli_fetch_array($resulta)){
                                                    ?>
                                                    <tr>
                                                        <input type="hidden" name="sid[]" value="<?php echo $sub_id ?>" >
                                                        <input type="hidden" name="evalid[]" value="<?php echo $sample ?>" >
                                                        <input type="hidden" name="quesid[]" value="<?php echo $row1['qid'] ?>" >
                                                        <td><?php echo $row1['question'];?></td>
                                                        
                                                        <?php for($c=1;$c<=5;$c++): ?>
                                                            <td class="text-center">
                                                                    <input type="checkbox" name="rate[]" <?php echo $c == 5 ? "checked" : '' ?> value="<?php echo $c ?>">  
                                                            </td>
                                                        <?php endfor; ?>
                                                        
                                                    </tr>
                                                <?php } ?>
                                            </tbody> 
                                        </table>
                                        
                                        <?php }  ?>
                              <?php } ?>
                              <div class="form-group mt-3">
                                  <button type="submit" name="save_multicheckbox" class="btn btn-primary">Save</button>
                              </div>
                    </form>          
                    </div>
            </div>
        </div>
   </div>
</body>
