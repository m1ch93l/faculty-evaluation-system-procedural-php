<?php include_once'navbar.php'; ?>
<body id="page-top">
    <!-- Begin Page Content -->
<div class="container-fluid py-5 my-5">

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add Subject
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">New Subject</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="add-subject.php" method="post">
            <div class="modal-body">
                <input type="text" class="form-control" placeholder="Subject Code" name="code"><br>
                <input type="text" class="form-control" placeholder="Description" name="description"><br>
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
            <h6 class="m-0 font-weight-bold text-primary">Subject List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

            <?php
            include_once'koneksyon.php';

            $qryview = "SELECT * FROM subject";
            $result = mysqli_query($koneksyon, $qryview);
            ?>
                <table class="display" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Subject Code</td>
                            <td>Description</td>
                        </tr>
                    </thead>
                    <?php while($row = mysqli_fetch_array($result)) {
                       echo'
                        <tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['code'].'</td>
                            <td>'.$row['description'].'</td>
                        </tr>
                       ';
                    } ?>
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
</script>