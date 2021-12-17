<?php
    include_once'navbar.php';
?>
<head>
    <script>
        if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</head>
<body>

<div class="container-md py-5 my-5 border shadow-lg">
    <div class="row">
        <div class="col-md-4">
            <div class="content-center">
            <div class="card m-1 shadow-sm bg-success">
            <div class="card-body">
                <form autocomplete="off" action="report.php" method="post">
                
                    <select class="form-select" name="instructor" >
                    <option disable selected>Select Faculty</option>
                    <?php
                    include_once'koneksyon.php';
                    $f = mysqli_query($koneksyon, "SELECT * FROM faculties");
                    while($row = mysqli_fetch_array($f)){
                ?>
                        <option value="<?php echo $row['id'] ?>" ><?php echo $row['fname']." ".$row['lname']; ?></option>
                        <?php } ?>        
                    </select>
                
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary" name="save" >Submit</button>
                </div>
                
                </form>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-8">
            
    <div class="border shadow-sm p-2">
        
        
    <?php
         if(isset($_POST['save']))
         {
                $fid = $_POST['instructor'];

                $qry=mysqli_query($koneksyon,"SELECT * FROM evaluation INNER JOIN subject_enrolled ON subject_enrolled.id=evaluation.sub_enrolled_id INNER JOIN students ON students.id=subject_enrolled.student_id INNER JOIN department ON department.id=students.department_id INNER JOIN subject ON subject_enrolled.subject_take=subject.id INNER JOIN faculties ON faculties.id=subject.faculty_id WHERE subject.faculty_id = '$fid' ");
                while($row = mysqli_fetch_array($qry)){
                    echo "<fieldset class='border border-info m-auto p-2 w-100' style='background-color: lightyellow;'>";
                    echo "<h3>Instructor: ".$row['fname']." ".$row['lname']."</h3>";
                    echo "<h5>Section Handled: ".$row['course']." ".$row['year'].$row['section']."</h5>";
                    echo "<h5>Subject: ".$row['description']."</h5>";
                    echo "</fieldset>";
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
            } ?>
            </div>
        </div>
    </div>
</div>
</body>