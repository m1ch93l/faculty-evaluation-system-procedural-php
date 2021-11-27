<head>
	<title>HOME PAGE</title>
</head>
<?php include_once'navbar.php'; ?>
<body>
  <div class="container mx-1 my-3 py-5">
    <!-- Content Row -->
    <div class="row">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Total Students</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">

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

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Total Faculties</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
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
  </div>
</body>