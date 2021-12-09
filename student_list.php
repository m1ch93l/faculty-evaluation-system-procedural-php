<?php include_once'navbar.php'; ?>
<body>
    <!-- Begin Page Content -->
<div class="container-fluid py-5 my-5">

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add Student
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">New Student</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="add-student.php" method="post">
            <div class="modal-body">
            <select class="form-select" name="departmentid" id="">
                            <?php include_once'koneksyon.php'; 
                                $view = "SELECT * FROM department";
                                $result = mysqli_query($koneksyon, $view);
                                while($row = mysqli_fetch_array($result)){
                            ?>
                                <option value="<?php echo $row['id']; ?>"> <?php echo $row['course'] ." ".$row['year'].$row['section']; ?> </option>
                                <?php } ?>
                            </select><br>
                <input type="text" class="form-control" placeholder="Student No." name="snum"><br>
                <input type="text" class="form-control" placeholder="Fisrt Name" name="firstname"><br>
                <input type="text" class="form-control" placeholder="Last Name" name="lastname"><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
    </div>
    <hr>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Student List</h6>
</div>
<div class="card-body">
    <div class="table-responsive">

    <?php
    include_once'koneksyon.php';

    $qryview = "SELECT * FROM students";
    $result = mysqli_query($koneksyon, $qryview);
    ?>
        <table class="display" id="myTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <td>Student No.</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Action</td>
                    <td>Action</td>
                </tr>
            </thead>
            <?php while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['studentno']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><a type="button" class="btn btn-primary" href="viewedit.php?id=<?php echo $row['id']; ?>">EDIT</a></td>
                    <td><input class="btn btn-danger" type="button" onClick="deleteme(<?php echo $row['id']; ?>)" name="delete" value="DELETE"></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
</div>

</div>
<!-- End of Main Content -->


</body>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );

function deleteme(delid)
{
    if(confirm("Do you really want to delete?")){
        window.location.href='delete.php?del=' +delid+ '';
        return true;
    }
}

</script> 