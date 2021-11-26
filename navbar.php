<?php 
   session_start();
   include "koneksyon.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id']))    { ?>

<head>
  <!-- bootsrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<!-- sarili kong style -->
<link rel="stylesheet" type="text/css" href="css/haynaku.css">

<!-- kinuha ko sa font awesome free -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

<!-- para mag-adopt yung pixels sa mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<script>
  function openSM(){
    document.getElementById("mySidemenu").style.width = "350px";
    document.getElementById("pg-content").style.marginleft = "350px";
  }
  function closeSM(){
    document.getElementById("mySidemenu").style.width = "0";
    document.getElementById("pg-content").style.marginleft = "0";
  }
</script>

</head>

<body>
<!-- The sidebar -->
<header>
<?php if ($_SESSION['role'] == 'admin') { ?>
  <div id="mySidemenu" class="sidemenu">
    <a href="javascript:void(0)" class="close" onclick="closeSM()">&times;</a>
    <div class="sm-wrapper">
      <?php
        require_once 'navbar-items/navbar_items.php';
        foreach ($items as $item) {
            echo "<a href='" . $item['pages'][0] . "'" . (in_array(basename($_SERVER['SCRIPT_NAME']), $item['pages']) ? " class='active'" : "") . ">";
            echo "<span class='fas fa-fw " . $item['icon'] . "'></span> ";
            echo $item['label'];
            echo "</a>";
        }
      ?>
    </div>
  </div>
  <div id="pg-content">
    <div class="title_bg">
      <div class="open" onclick="openSM()">&#9776;</div>
      <h1 class="mx-2 px-5 text-white">Evaluation System</h1>
    </div>
  </div>
<?php } elseif ($_SESSION['role'] == 'student') { ?>

      <div id="mySidemenu" class="sidemenu">
        <a href="javascript:void(0)" class="close" onclick="closeSM()">&times;</a>
        <div class="sm-wrapper">
          <?php
            require_once 'navbar-items/navbar_items_students.php';
            foreach ($items_students as $item22) {
                echo "<a href='" . $item22['pages'][0] . "'" . (in_array(basename($_SERVER['SCRIPT_NAME']), $item22['pages']) ? " class='active'" : "") . ">";
                echo "<span class='fas fa-fw " . $item22['icon'] . "'></span> ";
                echo $item22['label'];
                echo "</a>";
            }
          ?>
        </div>
      </div>
        <div id="pg-content">
          <div class="title_bg">
            <div style="font-size: 40px; cursor: pointer; color: #fff; display: inline-block; position: absolute; margin-left: 10px" onclick="openSM()">&#9776;</div>
            <h1 class="mx-2 px-5 text-white">Evaluation System</h1>
          </div>
        </div>
<?php }elseif ($_SESSION['role'] == 'faculty') { ?> 
  <div id="mySidemenu" class="sidemenu">
        <a href="javascript:void(0)" class="close" onclick="closeSM()">&times;</a>
        <div class="sm-wrapper">
          <?php
            require_once 'navbar-items/navbar_items_faculty.php';
            foreach ($items_faculty as $item33) {
                echo "<a href='" . $item33['pages'][0] . "'" . (in_array(basename($_SERVER['SCRIPT_NAME']), $item33['pages']) ? " class='active'" : "") . ">";
                echo "<span class='fas fa-fw " . $item33['icon'] . "'></span> ";
                echo $item33['label'];
                echo "</a>";
            }
          ?>
        </div>
      </div>
        <div id="pg-content">
          <div class="title_bg">
            <div style="font-size: 40px; cursor: pointer; color: #fff; display: inline-block; position: absolute; margin-left: 10px" onclick="openSM()">&#9776;</div>
            <h1 class="mx-2 px-5 text-white">Evaluation System</h1>
          </div>
        </div>
  </header>
</body>

} <?php } ?> } <?php }else{
  header("location: index.php");
} ?>