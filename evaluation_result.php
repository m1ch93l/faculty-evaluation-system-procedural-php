<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include'includes/header.php'; ?>
<body>
    <?php include'includes/faculty-navbar.php'; ?>
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row text-center shadow-lg">
          <h2>Welcome! <?=$_SESSION['name'] ?></h2>
          <h5>Academic Year: <?=$_SESSION['academic']?></h5>
          <hr>
          <?php include_once'koneksyon.php';
                $qry=mysqli_query($koneksyon,"SELECT * FROM evaluation INNER JOIN subject_enrolled ON subject_enrolled.id=evaluation.sub_enrolled_id INNER JOIN students ON students.id=subject_enrolled.student_id INNER JOIN department ON department.id=students.department_id INNER JOIN subject ON subject_enrolled.subject_take=subject.id INNER JOIN faculties ON faculties.id=subject.faculty_id WHERE faculties.id = {$_SESSION['id']}");
                while($row = mysqli_fetch_array($qry)){
                    echo "<h3>Subject: ".$row['description']."</h3>";
                    $e = $row['evaluationid'];

                    $query = mysqli_query($koneksyon, "SELECT id FROM questions ");
                       while($row = mysqli_fetch_array($query)){
                          $id = $row['id'];

                            $qry1 = mysqli_query($koneksyon, "SELECT AVG(rate) as sum, question FROM rate INNER JOIN questions ON questions.id = rate.questionid WHERE evalid = '$e' AND questionid = '$id' ");
                            while($row = mysqli_fetch_array($qry1)){ ?>
                            <div class="container">
                                <table>
                                    <thead style="background-color: #000080;">
                                        <tr>
                                            <th style="color: #fff"><?php echo $row['question']; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            $sum = $row['sum'];
                                            $total = $sum/5 * 100;

                                            echo "<td style='background-color: maroon; color: #fff;'>Performance: ".$total."%</td>";
                                            ?> 
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>      
                        <?php  }
                        }
                }
          ?>
      </div>
        </div>
    </main>
</body>
</html>