<?php 
   session_start();
   include "koneksyon.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id']))    { ?>

<head>
<!-- sarili kong style 
<link rel="stylesheet" type="text/css" href="css/main-content.css"> -->

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

<style>
  /* Main Content */
body{
  margin: 0;
  background-color: #eae7dc;
}

/* side menu */
.sm-wrapper{
  margin-top: 10px;
}

.sidemenu{
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #000080;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 10px;
}
.sidemenu a{
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 16px;
  color: #fff;
  display: block;
  letter-spacing: 2px;
  margin-bottom: 15px;
  transition: 0.3s;
}
.sidemenu .close{
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 50px;
  margin-left: 50px;
}
.sm-wrapper a:hover,
.sm-wrapper a.active {
  background-color: #b09335;
}

/* main content */
.title_bg{
  background-color: #000080;
  position: absolute;
  width: 100%;
}
.bcctitlebar{
  margin-left: 60px;
  color: #fff;
}
#pg-content{
  transition: margin-left 0.5s;
}
.main-body{
  padding-top: 80px;
  margin-left: 10px;
  margin-right: 10px;
}
/* form collapse */

.new_sidepanel  {
  width: 0;
  position: fixed;
  z-index: 1;
  height: 100%;
  top: 0;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 10px;
}

.new_sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  text-decoration: none;
  color: black;
}

.new_sidepanel form{
  padding-left: 10px;
  padding-right: 10px;
}

.openbtn {
  font-size: 15px;
  cursor: pointer;
  background-color: #000080;
  color: white;
  padding: 10px 15px;
  border: none;
  text-align: left;
}

.openbtn:hover {
  background-color:#002900;
}

.new_sidepanel form input[type=text]{
  width: 100%;
  padding: 7px 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  align-content: center;
}

.new_sidepanel form input[type=submit]{
  width: 100%;
  background-color: #000080;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.new_sidepanel form input[type=submit]:hover{
  background-color: #35afeb;
}
.new_sidepanel button{
 width: 100%;
  background-color: #000080;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  background-color: gray;
}
.new_sidepanel button:hover{
  background-color:#cdcbcb ;
}
.open{
  font-size: 40px;
  cursor: pointer;
  color: #fff;
  display: inline-block;
  position: absolute;
  margin-left: 10px
}
@media(max-width: 500px){
  .open{
    font-size: 55px;
  }
}
</style>

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
      <h3 class="bcctitlebar">BCC FACULTY EVALUATION SYSTEM</h3>
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
          <!--<a class="fas fa-book" href="evaluate.php"> Evaluate</a>
          <a class="fas fa-sign-out-alt" href="logout.php"> Logout</a> -->
        </div>
      </div>
        <div id="pg-content">
          <div class="title_bg">
            <div style="font-size: 40px; cursor: pointer; color: #fff; display: inline-block; position: absolute; margin-left: 10px" onclick="openSM()">&#9776;</div>
            <h3 class="bcctitlebar">BCC FACULTY EVALUATION SYSTEM</h3>
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
          <!--<a class="fas fa-book" href="evaluate.php"> Evaluate</a>
          <a class="fas fa-sign-out-alt" href="logout.php"> Logout</a> -->
        </div>
      </div>
        <div id="pg-content">
          <div class="title_bg">
            <div style="font-size: 40px; cursor: pointer; color: #fff; display: inline-block; position: absolute; margin-left: 10px" onclick="openSM()">&#9776;</div>
            <h3 class="bcctitlebar">BCC FACULTY EVALUATION SYSTEM</h3>
          </div>
        </div>
  </header>
</body>

} <?php } ?> } <?php }else{
  header("location: index.php");
} ?>