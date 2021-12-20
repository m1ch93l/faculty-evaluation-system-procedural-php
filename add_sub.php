<?php
include_once'navbar.php';
?>
<body>
	<div class="container-md py-5">
		<div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm m-5">
                <form action="add-subject-taken.php" method="post">
                    <div class="card-header"><h4>Add Subject Taken</h4></div>
                    <div class="card-body">
                    <?php
                        include_once'koneksyon.php';
                        $dagdag=mysqli_query($koneksyon,"SELECT * FROM students");
                        while($row=mysqli_fetch_array($dagdag)){
                        	$sid=$row['id'];
                        }

                        $check=mysqli_query($koneksyon,"SELECT * FROM subject");
                        while($row=mysqli_fetch_array($check)){ ?>
                            <input type="hidden" value="<?php echo $sid; ?>" name="sid[]">
                        <h6><input type="checkbox" value="<?php echo $row['id']; ?>" name="sub_take[]"><?php echo " ".$row['description']; ?></h6>
                    <?php } ?>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="save">SAVE</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
	</div>
</body>