<!DOCTYPE html>
<html lang="en">
<?php include'includes/header.php'; ?>
<body>
    <?php include'includes/admin-navbar.php'; ?>
    <main class="mt-5 pt-3" style="background-image: url(img/bcc_cover.jpg); background-repeat: no-repeat; background-size: cover; height: 569px;">
        <div class="container-fluid">
            <!-- Begin Page Content -->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add Academic Year
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">New Academic</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="add-acad.php" method="post">
            <div class="modal-body">
                <input type="text" class="form-control text-uppercase" placeholder="Academic Year" name="academic_year"><br>
                <input type="text" class="form-control text-uppercase" placeholder="Semester" name="semester"><br>
                <select class="form-select" name="status" id="">
                    <option value="1">Active</option>
                    <option value="2">Pending</option>
                    <option value="0">Closed</option>
                </select>
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
            <h6 class="m-0 font-weight-bold text-primary">Academic List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

            <?php
            include_once'koneksyon.php';

            $qryview = "SELECT * FROM academic";
            $result = mysqli_query($koneksyon, $qryview);
            ?>
                <table class="display" id="myTable" width="100%" cellspacing="0">
                    <thead style="background-color: #eddc02;">
                        <tr>
                            <th>ID</th>
                            <th>Academic Year</th>
                            <th>Semester</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no = 1;
                    while($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $row['academic_year'] ?></td>
                            <td><?php echo $row['semester'] ?></td>
                            <td><?php
                            if($row['status'] == 1){
                                echo '<a class="btn btn-primary" href="set_acad.php?id='.$row['id'].'&status=0">Active</a>';
                            }elseif($row['status'] == 2){
                                echo '<a class="btn btn-success" href="set_acad.php?id='.$row['id'].'&status=1">Pending</a>';
                            }else{
                                echo '<a class="btn btn-danger" href="set_acad.php?id='.$row['id'].'&status=2">Closed</a>';
                            }
                        ?></td>
                            <td><a type="button" class="btn btn-primary" href="viewedit_acad.php?id=<?php echo $row['id']; ?>"><span class="fa fa-fw fa-edit"></span> EDIT</a></td>
                            <td><button class="btn btn-danger" type="button" onClick="deleteme(<?php echo $row['id']; ?>)" name="delete" ><span class="fa fa-fw fa-trash"></span> DELETE </button></td>
                        </tr>
                    <?php $no++;} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!-- End of Main Content -->
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
        window.location.href='delete_acad.php?del_acad=' +delid+ '';
        return true;
    }
}
</script>
</html>