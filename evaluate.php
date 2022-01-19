<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include'includes/header.php';
?>
<body>
    <?php include'includes/student-navbar.php'; ?>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <h2>Welcome! <?=$_SESSION['username'] ?></h2>
          <h5>Academic Year: <?=$_SESSION['academic'] ?></h5>
          <hr>
            <div class="card my-5 text-center shadow-lg">
                        
                    <form autocomplete="off" action="rate.php" method="post">

                    <?php include_once'koneksyon.php';
                            $qry=mysqli_query($koneksyon,"SELECT * FROM evaluation INNER JOIN subject_enrolled ON subject_enrolled.id=evaluation.sub_enrolled_id INNER JOIN students ON students.id=subject_enrolled.student_id INNER JOIN department ON department.id=students.department_id INNER JOIN subject ON subject_enrolled.subject_take=subject.id INNER JOIN faculties ON faculties.id=subject.faculty_id WHERE student_id = {$_SESSION['id']}");
                            while($row=mysqli_fetch_array($qry)){
                                echo "<h4>".$row['fname']." ".$row['lname']."</h4>";
                                echo "<h4>".$row['description']."</h4>";
                                $eval_id = $row['evaluationid'];
                            


                                        $qryview = "SELECT criteria, id as cid FROM criteria ";
                                        $result = mysqli_query($koneksyon, $qryview);
                                            while($row = mysqli_fetch_array($result)){
                                        ?>
                                        <table class="display" id="myTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th><?php echo $row['criteria']; ?></th>
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
                                                        <input type="hidden" name="evalid[]" value="<?php echo $eval_id ?>" >
                                                        <input type="hidden" name="quesid[]" value="<?php echo $row1['qid'] ?>" >
                                                        <td><?php echo $row1['question'];?></td>
                                                        
                                                        <?php for($c=1;$c<=5;$c++): ?>
                                                            <td style="width: 8%;">
                                                                    <input type="checkbox" name="rate[]" <?php echo $c == 5 ? : '' ?> value="<?php echo $c ?>">  
                                                            </td>
                                                        <?php endfor; ?>
                                                        
                                                    </tr>
                                                <?php } ?>
                                            </tbody> 
                                        </table>
                                        
                                        <?php }  ?>
                              <?php }  ?>
                              <div class="form-group mt-3">
                                  <button type="submit" name="save_multicheckbox" class="btn btn-primary">Submit Evaluation</button>
                              </div>
                    </form>          
                    
            </div>
        </div>
    </main>
</body>
</html>