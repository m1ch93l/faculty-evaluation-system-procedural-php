<?php 
    include'navbar.php';
?>
<!DOCTYPE html>
<body>
	<div class="container py-5">
      <div class="row text-center">
          <h2>Welcome! <?=$_SESSION['name'] ?></h2>
          <h5>Academic Year: <?=$_SESSION['academic']?></h5>
          <hr>
          <?php
                $qry = mysqli_query($koneksyon, "SELECT description, evaluationid, subjectid FROM evaluation INNER JOIN faculties ON faculties.id = evaluation.facultyid
                INNER JOIN subject ON subject.id = evaluation.subjectid WHERE facultyid = {$_SESSION['id']}");
                while($row = mysqli_fetch_array($qry)){
                    echo "<h3>".$row['description']."</h3>";
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
</body>