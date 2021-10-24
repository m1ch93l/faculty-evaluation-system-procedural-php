<head>
<!-- sarili kong style -->
<link rel="stylesheet" type="text/css" href="css/main-content.css">

<!-- kinuha ko sa font awesome free -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    

</head>

<body>
<!-- The sidebar -->
  <div id="mySidemenu" class="sidemenu">
    <a href="javascript:void(0)" class="close" onclick="closeSM()">&times;</a>
    <div class="sm-wrapper">
      <!--<div class="logo"><img src="img/bcc.png" style="width: 70; height: 70; padding-left: 50px;"></div>-->
      <a href="dashboard.php">
          <span class="fas fa-fw fa-home"></span>
          Dashboard
      </a>
      <a href="subject_list.php">
          <span class="fas fa-fw fa-book"></span>
          Subject
      </a>
      <a href="class_list.php">
          <span class="fas fa-fw fa-list-ul"></span>
          Classes
      </a>
      <a href="academic_list.php">
          <span class="fas fa-fw fa-layer-group"></span>
          Academic Year
      </a>
      <a href="questionnaire.php">
          <span class="fas fa-fw fa-question-circle"></span>
          Questionaire
      </a>
      <a href="criteria_list.php">
          <span class="fas fa-fw fa-list-ol"></span>
          Evaluation Criteria
      </a>
      <a href="faculty_list.php">
          <span class="fas fa-chalkboard-teacher"></span>
          Faculty
      </a>
      <a href="student_list.php">
          <span class="fas fa-fw fa-user-graduate"></span>
          Student
      </a>
      <a href="report.php">
          <span class="fas fa-fw fa-flag"></span>
          Evaluation Report
      </a>
      <a href="user_list.php">
          <span class="fas fa-fw fa-users"></span>
          Users
      </a>
      <a href="logout.php">
          <span class="fas fa-fw fa-sign-out-alt"></span>
          Logout
      </a>
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