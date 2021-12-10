<?php
    include_once'navbar.php';
?>
<body>
    <div class="container py-5"> 
        <div class="card" style="width: 18rem;">
        <div class="card-title m-auto">
            Select Faculty:
        </div>
        <div class="card-body">
            <form autocomplete="off" action="report.php" method="post">
            <?php
                include_once'koneksyon.php';
                $f = mysqli_query($koneksyon, "SELECT * FROM faculties");
                while($row = mysqli_fetch_array($f)){
            ?>
                <select class="form-select" name="instructor" >
                    <option value="<?php echo $row['id'] ?>" ><?php echo $row['fname']." ".$row['lname']; ?></option>
                </select>
            <?php } ?>
            <hr>
            <button type="submit" class="btn btn-primary" name="save" >OK</button>
            
            </form>
            </div>
        </div>
    </div>

    <div class="container">
    <fieldset class="border border-info p-2 w-100">
					   <legend  class="w-auto">Ratings</legend>
					   <p>5 = Strongly Agree, 4 = Agree, 3 = Uncertain, 2 = Disagree, 1 = Strongly Disagree</p>
					</fieldset>
    <?php
         if(isset($_POST['save']))
         {
                $fid = $_POST['instructor'];

                $qry = mysqli_query($koneksyon, "SELECT description, evaluationid, subjectid, fname, lname FROM evaluation INNER JOIN faculties ON faculties.id = evaluation.facultyid
                INNER JOIN subject ON subject.id = evaluation.subjectid WHERE facultyid = '$fid' ");
                while($row = mysqli_fetch_array($qry)){
                    echo "<h3>".$row['fname']." ".$row['lname']."</h3>";
                    echo "<h5>".$row['description']."</h5>";
                    $e = $row['evaluationid'];
                    

                    $query = mysqli_query($koneksyon, "SELECT id FROM questions ");
                       while($row = mysqli_fetch_array($query)){
                          $id = $row['id'];

                            $qry1 = mysqli_query($koneksyon, "SELECT AVG(rate) as total, question FROM rate INNER JOIN questions ON questions.id = rate.questionid WHERE evalid = '$e' AND questionid = '$id' ");
                            while($row = mysqli_fetch_array($qry1)){ ?>
                            <div class="container">
                                <table>
                                    <thead>
                                        <tr>
                                            <th><?php echo $row['question']; ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['total']; ?></td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>      
                        <?php  }
                        }
                    }
            } ?>
    </div>
</body>