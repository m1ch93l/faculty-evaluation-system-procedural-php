<!DOCTYPE html>
<html lang="en">
<?php 
include'includes/header.php'; ?>
<body>
    <?php include'includes/admin-navbar.php'; ?>
    <main class="mt-5 pt-3" style="background-image: url(img/bcc_cover.jpg); background-repeat: no-repeat; background-size: cover; height: 569px;">
        <div class="container-fluid">
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
            <select class="form-select" name="departmentid">
                            <?php include_once'koneksyon.php'; 
                                $view = "SELECT * FROM department";
                                $result = mysqli_query($koneksyon, $view);
                                while($row = mysqli_fetch_array($result)){
                            ?>
                                <option value="<?php echo $row['id']; ?>"> <?php echo $row['course'] ." ".$row['year'].$row['section']; ?> </option>
                                <?php } ?>
                            </select><br>
                <input type="text" class="form-control" placeholder="Student No." name="snum"><br>
                <input type="text" class="form-control text-capitalize" placeholder="Fisrt Name" name="firstname"><br>
                <input type="text" class="form-control text-capitalize" placeholder="Last Name" name="lastname"><br>
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

    $qryview = "SELECT studentno, firstname, lastname, course, year, section, students.id as id FROM students INNER JOIN department ON department.id=students.department_id";
    $result = mysqli_query($koneksyon, $qryview);
    ?>
        <table class="display" id="myTable" width="100%" cellspacing="0">
            <thead style="background-color: #eddc02;">
                <tr>
                    <th>ID</th>
                    <th>Student No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Action</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['studentno']; ?></td>
                    <td class="text-capitalize"><?php echo $row['firstname']; ?></td>
                    <td class="text-capitalize"><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['course']." ".$row['year'].$row['section']; ?></td>
                    <td><a type="button" class="btn btn-success" href="student_info.php?id=<?php echo $row['id']; ?>"><span class="fa fa-fw fa-book"></span> VIEW SUBJECT</a></td>
                    <td><a type="button" class="btn btn-primary" href="viewedit.php?id=<?php echo $row['id']; ?>"><span class="fa fa-fw fa-edit"></span> EDIT</a></td>
                    <td><button class="btn btn-danger" type="button" onClick="deleteme(<?php echo $row['id']; ?>)" ><span class="fa fa-fw fa-trash"></span> DELETE</button></td>
                </tr>
            <?php $no++; } ?>
        </table>
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
        window.location.href='delete.php?del=' +delid+ '';
        return true;
    }
}

</script>
</html>