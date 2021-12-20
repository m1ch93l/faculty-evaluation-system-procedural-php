<?php include_once'navbar.php'; 
    include_once'koneksyon.php';

    $id = $_GET['id'];
    $qry=mysqli_query($koneksyon, "SELECT * FROM students WHERE id = '$id' ");
    while($row=mysqli_fetch_array($qry)){
        $name = $row['firstname']." ".$row['lastname'];
        $sid = $row['id'];
    }
?>
<body>
    <div class="container-md py-5 my-5 shadow-lg">
        <div class="row">
            <h3>Subject Taken</h3>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="display" id="myTable" width="100%" cellspacing="0">
                        <thead style="background-color: #eddc02;">
                            <tr>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $qry=mysqli_query($koneksyon,"SELECT description,subject_enrolled.id as id FROM subject_enrolled INNER JOIN subject ON subject.id=subject_enrolled.subject_take INNER JOIN students ON students.id=subject_enrolled.student_id WHERE subject_enrolled.student_id = '$id' ");
                                while($row=mysqli_fetch_array($qry)){
                                ?>
                            <tr>
                                <td><?php echo $row['description'] ?></td>
                                <td><button class="btn btn-danger" type="button" onClick="deleteme(<?php echo $row['id']; ?>)" ><span class="fa fa-fw fa-trash"></span> DELETE</button></td>
                            </tr>
                            <?php } ?>
                        </tbody>
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

    function deleteme(delid)
{
    if(confirm("Do you really want to delete?")){
        window.location.href='delete-sinfo.php?delsinfo=' +delid+ '';
        return true;
    }
}
</script>
