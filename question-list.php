<!DOCTYPE html>
<html lang="en">
<?php 
include'includes/header.php'; ?>
<body>
    <?php include'includes/admin-navbar.php'; ?>
    <main class="mt-5 pt-3" style="background-image: url(img/bcc_cover.jpg); background-repeat: no-repeat; background-size: cover; height: 569px;">
        <div class="container-fluid">
            <div class="card my-5">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-md-7">
                        <div class="card-body" style="background-color: #000080; width: 18rem;">
                        <form action="add-criteria.php" method="post">  
                            <input type="text" class="form-control text-uppercase" placeholder="Criteria" name="criteria"><br>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                        </div>

                        <div class="card-body" style="background-color: #000080; width: 18rem;">
                        <form action="add-question.php" method="post"> 
                                <select class="form-select" name="criteriaid" id="">
                                <?php include_once'koneksyon.php'; 
                                    $view = "SELECT * FROM criteria";
                                    $res = mysqli_query($koneksyon, $view);
                                    while($row = mysqli_fetch_array($res)){
                                ?>
                                    <option value="<?php echo $row['id']; ?>"> <?php echo $row['criteria']; ?> </option>
                                    <?php } ?>
                                </select><br>
                                
                                    <input type="text" class="form-control" placeholder="Question" name="question"><br>
                                    <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-5 col-md-12">
                        <div class="card-body border" style="background-color: #ef7953;">
<!--
                            <div class="table-responsive">
                                <table class="display" id="myTable" width="100%" cellspacing="0">
                                    <thead style="background-color: #eddc02;">
                                        <tr>
                                            <th>Subject</th>
                                            <th>Faculty</th>
                                            <th>Course</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        /*
                                        <?php
                                        $view=mysqli_query($koneksyon, "SELECT evaluation.evaluationid as id, description,fname,lname,course,year,section FROM evaluation INNER JOIN subject_enrolled ON subject_enrolled.id=evaluation.sub_enrolled_id INNER JOIN subject ON subject_enrolled.subject_take=subject.id INNER JOIN faculties ON subject.faculty_id=faculties.id INNER JOIN students ON students.id=subject_enrolled.student_id INNER JOIN department ON department.id=students.department_id ");
                                        while($row=mysqli_fetch_array($view)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['description'] ?></td>
                                            <td><?php echo $row['fname']." ".$row['lname'] ?></td>
                                            <td><?php echo $row['course']." ".$row['year']." ".$row['section'] ?></td>
                                            <td><button class="btn btn-danger" type="button" onClick="deleteme(<?php echo $row['id']; ?>)" ><span class="fa fa-fw fa-trash"></span> DELETE</button></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
-->
            <?php
                                    $qryview = "SELECT * FROM criteria";
                                    $result = mysqli_query($koneksyon, $qryview);
                                        while($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase" scope="col"><?php echo $row['criteria']; ?></th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $tanong = "SELECT * FROM questions where criteria_id = {$row['id']}";
                                            $resulta = mysqli_query($koneksyon, $tanong);
                                            while($row1 = mysqli_fetch_array($resulta)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row1['question']; ?></td>
                                                    <?php for($c=1;$c<=5;$c++): ?>
                                                        <td style="width: 8%;">
                                                                <input type="checkbox" <?php echo $c == 5 ? : '' ?> value="<?php echo $c ?>">  
                                                        </td>
                                                    <?php endfor; ?>
                                                </tr>
                                                <?php } ?>
                                        </tbody> 
                                    </table>
                                    <?php } ?> 

                                    <div class="container-sm text-center">
                                        <div class="row m-auto">
                                            <form action="add-evaluation.php" method="post"> 
                                                <?php 
                                                    include_once'koneksyon.php';
                                                        $qry=mysqli_query($koneksyon, "SELECT * FROM subject_enrolled");
                                                        while($row=mysqli_fetch_array($qry)){ ?>
                                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="sub-en[]">
                                                <?php } ?>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                SAVE EVALUATION
                </button>
                                                <!-- modal-dialog-centered -->
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Save Evaluation</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        
                                                            <div class="modal-body">
                                                            make sure the evaluation has been all set!
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-primary">SAVE EVALUATION</button>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                    </div>
                                                <!-- end modal-dialog-centered -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                    
        </div>
    </main>
</body>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );

    function deleteme(delid)
{
    if(confirm("Do you really want to delete?")){
        window.location.href='delete_muna.php?delmuna=' +delid+ '';
        return true;
    }
}
</script>
</html>