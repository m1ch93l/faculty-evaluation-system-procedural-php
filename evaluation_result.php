<?php 
    include'navbar.php';
?>
<!DOCTYPE html>
<body>
	<div class="container py-5">
      <div class="row text-center">
	      <h1>HELLO, <?=$_SESSION['name']?></h1>
          <?php
                $qry = mysqli_query($koneksyon, "SELECT description, evaluationid, subjectid FROM evaluation INNER JOIN faculties ON faculties.id = evaluation.facultyid
                INNER JOIN subject ON subject.id = evaluation.subjectid WHERE facultyid = {$_SESSION['id']}");
                while($row = mysqli_fetch_array($qry)){
                    echo "<h3>".$row['description']."</h3>";
                    $e = $row['evaluationid'];

                    $query = mysqli_query($koneksyon, "SELECT id FROM questions ");
                       while($row = mysqli_fetch_array($query)){
                          $id = $row['id'];

                            $qry1 = mysqli_query($koneksyon, "SELECT AVG(rate) as total, question FROM rate INNER JOIN questions ON questions.id = rate.questionid WHERE evalid = '$e' AND questionid = '$id' ");
                            while($row = mysqli_fetch_array($qry1)){ ?>
                            <div class="container">
                                <table>
                                    <thead>
                                        <td><?php echo $row['question']; ?></td>
                                    </thead>
                                    <tbody>
                                        <td><?php echo $row['total']; ?></td>
                                    </tbody>
                                </table> 
                            </div>      
                        <?php  }
                        }
                }
          ?>
      </div>
   </div>
</body>