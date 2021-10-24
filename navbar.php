<head>
<!-- sarili kong style -->
<link rel="stylesheet" type="text/css" href="css/main-content.css">

<!-- kinuha ko sa font awesome free 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">-->
    

</head>

<body>
<!-- The sidebar -->
  <div id="mySidemenu" class="sidemenu">
    <a href="javascript:void(0)" class="close" onclick="closeSM()">&times;</a>
    <div class="sm-wrapper">
      <!--<div class="logo"><img src="img/bcc.png" style="width: 70; height: 70; padding-left: 50px;"></div>-->
      <a class="fas fa-home" href="dashboard.php"> Dashboard</a>
      <a class="fas fa-book" href="subject_list.php"> Subject</a>
      <a class="fas fa-list-ul" href="class_list.php"> Classes</a>
      <a class="fas fa-layer-group" href="academic_list.php"> Academic Year</a>
      <a class="fas fa-question-circle" href="questionnaire.php"> Questionaire</a>
      <a class="fas fa-list-ol" href="criteria_list.php"> Evaluation Criteria</a>
      <a class="fas fa-chalkboard-teacher" href="faculty_list.php"> Faculty</a>
      <a class="fas fa-user-graduate" href="student_list.php"> Student</a>
      <a class="fas fa-flag" href="report.php"> Evaluation Report</a>
      <a class="fas fa-users" href="user_list.php"> Users</a>
      <a class="fas fa-sign-out-alt" href="logout.php"> Logout</a>
    </div>
  </div>
  <div id="pg-content">
    <div class="title_bg">
      <div style="font-size: 40px; cursor: pointer; color: #fff; display: inline-block; position: absolute; margin-left: 10px" onclick="openSM()">&#9776;</div>
      <h3 class="bcctitlebar">BCC FACULTY EVALUATION SYSTEM</h3>
    </div>
  </div>
</body>

<script>
  function openSM(){
    document.getElementById("mySidemenu").style.width = "450px";
    document.getElementById("pg-content").style.marginleft = "450px";
  }
  function closeSM(){
    document.getElementById("mySidemenu").style.width = "0";
    document.getElementById("pg-content").style.marginleft = "0";
  }
</script>