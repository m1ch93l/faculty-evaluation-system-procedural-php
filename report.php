<?php include'navbar.php'; ?>

<body>
		<div class="content">
			<h1 class="f1">Report</h1>
			<section style="text-align: center;">
				<label>Select Faculty</label>
				<select>
					<?php
					$connect = new mysqli("localhost","root","");

					if ($connect -> connect_errno)
					{
				  		echo "Failed to connect to MySQL: " . $connect -> connect_error;
				  		exit();
					}

						$connect -> select_db("bcc_evaluation");
					if ($result = $connect -> query("SELECT * FROM `faculty_list`")) 
	  				{
				  		
					}
					while($row = mysqli_fetch_array($result)) 
					{
						echo "<option>" .$row['fname']." ".$row['mname']." ".$row['lname'].  "</option>";
					}
						echo "</select>";
					?>
				</select>
			</section>
			<section>
				<h1>Evaluation Report</h1>
				<?php
				include 'koneksyon.php';

				$qryview = "SELECT * FROM faculty_list";
				$result = mysqli_query($koneksyon, $qryview);

				if(mysqli_num_rows($result) > 0)
					{
						echo "<form action='#update.php' method='post'>";
							$row = mysqli_fetch_assoc($result);
						
					echo "Faculty: <input type='text' readonly name='txtstudentnum' value='".$row["fname"]." ".$row["lname"]." ".$row["mname"]."' style='border: none; width: 200px;'>";
					//echo "First Name <input type='text' readonly name='txtfname' value='".$row["fname"]."'><br>";
					//echo "Last Name:<input type='text' name='txtlname' value='".$row["lname"]."'><br>";
					//echo "Middle Name<input type='text' name='txtmname' value='".$row["mname"]."'><br>";
					//echo "<input type='submit' value='UPDATE'>";
							
						echo "</form>";

					  echo "<form action='#student_list.php'>";
					  echo "<button type='submit'>Cancel</button>";
					  echo "</form>";
						echo "</div>";
					}
					else{
					  echo "No records found";
					}
				?>
			</section>
		</div>
</body>
