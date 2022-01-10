<?php	
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-nav fixed-top">
	  <div class="container-fluid">
	  	<!-- on canvas trigger -->
	  	<button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
		  <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
		</button>
		<!-- end on canvas trigger -->
	    <a class="navbar-brand fw-bold text-uppercase me-auto" href="#">Faculty EvalSys</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <form class="d-flex ms-auto">
	        <div class="input-group my-3 my-lg-0">
			  <?=$_SESSION['username']?>
			</div>
	      </form>
	      <ul class="navbar-nav mb-2 mb-lg-0">
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            <i class="bi bi-person-circle"></i>
	          </a>
	          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
<!--
	            <li><a class="dropdown-item" href="#">Action</a></li>
	            <li><a class="dropdown-item" href="#">Another action</a></li>
-->
	            <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="logout.php">Log out</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<!--end navbar -->

	<!-- offcanvas -->
	<div class="offcanvas offcanvas-start bg-offc text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
		<div class="offcanvas-header">
			
		</div>
	  <div class="offcanvas-body p-0">
	    <nav class="navbar-dark">
	    	<ul class="navbar-nav">
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
	    	</ul>
	    </nav>
	  </div>
	</div>
	<!-- end offcanvas -->
	<?php }else{
		header("location: index.php");
	} ?>