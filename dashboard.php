<style>
  .bodybox{
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .container{
    width: 90%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 20px;
  }
  .box{
    height: 100px;
    border: 2px solid #000;
    position: relative;
  }
  h2{
    text-transform: uppercase;
    align-content: center;
    text-align: center;
    margin: 0;
  }
</style>
<head>
	<title>HOME PAGE</title>
</head>
<body>
  <?php include'navbar.php'; ?>
	<div class="main-body">
    <h1>HELLO, <?=$_SESSION['name']?></h1>
      <div class="bodybox">
          <div class="container">
            <div class="box">
              <h2>Total Students
                <?php

                    include'koneksyon.php';

                    $query = "SELECT COUNT(s_num) AS count FROM student_list ";

                    $result =mysqli_query($koneksyon, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $output = "<br>".$row['count'];
                    }
                    echo $output;
                ?>
              </h2>
            </div>
            <div class="box">
              <h2>Total Faculty
                <?php

                    include'koneksyon.php';

                    $query = "SELECT COUNT(fname) AS count FROM faculty_list ";

                    $result =mysqli_query($koneksyon, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $output = "<br>".$row['count'];
                    }
                    echo $output;
                ?>
              </h2>
            </div>
            <div class="box">
              <h2>Total Answered Question</h2>
            </div>
          </div>
      </div>
   </div>
</body>