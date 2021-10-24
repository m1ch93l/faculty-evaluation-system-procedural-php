<head>
<!-- sarili kong style -->
<link rel="stylesheet" type="text/css" href="css/main-content.css">

<!-- kinuha ko sa font awesome free -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

<!-- para mag-adopt yung pixels sa mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>

<body>
<!-- The sidebar -->
  <div id="mySidemenu" class="sidemenu">
    <a href="javascript:void(0)" class="close" onclick="closeSM()">&times;</a>
    <div class="sm-wrapper">
      <!--<div class="logo"><img src="img/bcc.png" style="width: 70; height: 70; padding-left: 50px;"></div>-->

      <?php
        require_once 'navbar_items.php';
        foreach ($items as $item) {
            echo "<a href='" . $item['page'] . "'" . (basename($_SERVER['SCRIPT_NAME']) == $item['page'] ? " class='active'" : "") . ">";
            echo "<span class='fas fa-fw " . $item['icon'] . "'></span> ";
            echo $item['label'];
            echo "</a>";
        }
      ?>
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