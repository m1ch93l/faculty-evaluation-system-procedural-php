<?php include_once'navbar.php'; ?>
<body id="page-top">
    <!-- Begin Page Content -->
<div class="container-fluid py-5 my-5">

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
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Academic Year</td>
                            <td>Semester</td>
                        </tr>
                    </thead>
                    <?php while($row = mysqli_fetch_array($result)) {
                       echo'
                        <tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['academic_year'].'</td>
                            <td>'.$row['semester'].'</td>
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