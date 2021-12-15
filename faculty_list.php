
<?php include_once'navbar.php'; ?>
<body>
    <!-- Begin Page Content -->
<div class="container-fluid py-5 my-5">

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add Faculty
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">New Faculty</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="add-faculty.php" method="post">
            <div class="modal-body">
                <input type="text" class="form-control" placeholder="Faculty No." name="fnum"><br>
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
    <h6 class="m-0 font-weight-bold text-primary">Faculty List</h6>
</div>
<div class="card-body">
    <div class="table-responsive">

    <?php
    include_once'koneksyon.php';

    $qryview = "SELECT * FROM faculties";
    $result = mysqli_query($koneksyon, $qryview);
    ?>
        <table class="display" id="myTable" width="100%" cellspacing="0">
            <thead style="background-color: #eddc02;">
                <tr>
                    <th>ID</th>
                    <th>Faculty No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['fno']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><a type="button" class="btn btn-primary" href="viewedit-faculty.php?id=<?php echo $row['id']; ?>"><span class="fa fa-fw fa-edit"></span> EDIT</a></td>
                    <td><button class="btn btn-danger" type="button" onClick="deleteme(<?php echo $row['id']; ?>)" name="delete" ><span class="fa fa-fw fa-trash"></span> DELETE </button></td>
                </tr>
            <?php $no++; } ?>
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
        window.location.href='delete_faculty.php?del_fid=' +delid+ '';
        return true;
    }
}

</script>

