<?php 
include'navbar.php';
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->
</head>

<?php 
include_once("koneksyon.php");
?>

<script type="text/javascript" src="getData.js"></script>

<div class="main-body">
	<h2>Report</h2>		
	
	<div class="page-header">
        <h3>
			<select id="employee" class="form-control" >
				<option value="" selected="selected">Select Faculty</option>
				<?php
				$sql = "SELECT id, fname, lname, mname FROM faculty_list";
				$resultset = mysqli_query($koneksyon, $sql);
				while( $rows = mysqli_fetch_assoc($resultset) ) { 
				?>
				<option value="<?php echo $rows["id"]; ?>"><?php echo $rows["fname"]." ".$rows["mname"]." ".$rows["lname"]; ?></option>
				<?php }	?>
			</select>
        </h3>	
    </div>	
	<div class="hidden" id="errorMassage"></div>
	<label>Faculty: </label>
		<label id="empFname"></label>
		<label id="empMname"></label>
		<label id="empLname"></label>	  
</div>
