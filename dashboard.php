<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include'includes/header.php'; 
?>
<body>
  <?php include'includes/admin-navbar.php'; ?>
  <main class="mt-5 pt-3" style="background-image: url(img/bcc_cover.jpg); background-repeat: no-repeat; background-size: cover; height: 569px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 fw-bold fs-3 bg-light mb-3">
          HOME
          <h2>Welcome! <?=$_SESSION['name'] ?></h2>
          <h5>Academic Year: <?=$_SESSION['academic']?></h5>
          <hr>
        </div>
      </div>
      <!-- Content Row -->
    <div class="row">

      <!--  Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow-lg h-100 py-2" style="color: #fff;background-color: #000080;">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-lg font-weight-bold text-light text-uppercase mb-1">
                              <a href="student_list.php" class="text-decoration-none text-light">Total Students</a></div>
                          <div class="h2 mb-0 font-weight-bold text-gray-800">

                          <?php require_once'koneksyon.php'; 
                            $query = "SELECT COUNT(studentno) AS count FROM students";
                            $result =mysqli_query($koneksyon, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $output = "<br>".$row['count'];
                            }
                            echo $output;
                            ?>
                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow-lg h-100 py-2" style="color: #fff;background-color: #000080;">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-lg font-weight-bold text-light text-uppercase mb-1">
                              <a href="faculty_list.php" class="text-decoration-none text-light">Total Faculties</a></div>
                          <div class="h2 mb-0 font-weight-bold text-gray-800">
                        <?php
                          $query2 = "SELECT COUNT(fno) AS count1 FROM faculties";
                            $result1 =mysqli_query($koneksyon, $query2);
                            while ($row = mysqli_fetch_assoc($result1)) {
                                $output1 = "<br>".$row['count1'];
                            }
                            echo $output1;
                            ?>
                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!--End Content Row -->
    </div>
  </main>
</body>
</html>