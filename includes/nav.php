<?php
  $headerClass='';
  $file='';
  $activeClass="";
  $session='';
  if(strpos($_SERVER["SCRIPT_FILENAME"], 'index.php')!==false) {
    $headerClass='header-transparent';
    $activeClass=" active";
    $file="#hero";
  }
  if(strpos($_SERVER["SCRIPT_FILENAME"], 'index.php')===false) {
    $file="index.php";
    $headerClass='header-inner-pages ';
  }
  if(!isset($_SESSION["id"]) === true) {
    include('includes/sign-in-modal.php');
    include('includes/sign-up-modal.php');
    $session='none';
  }
?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top <?=$headerClass?>">
      <div class="container d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo"></a>
        <h1 class="logo">
          <a href="index.php">
            <img src="assets/img/logo.png" alt="Logo" class="img-fluid">Egalitarian
          </a>
        </h1>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto<?=$activeClass?>" href="<?=$file?>">Home</a></li>
            
            <?php 
              if($session == "none") {
                echo '
                <li><a class="nav-link scrollto" href="<?=$file?>#about">About</a></li>
                <li><a class="nav-link scrollto" href="<?=$file?>#services">Services</a></li>
                <li><a class="nav-link scrollto " href="<?=$file?>#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="<?=$file?>#team">Team</a></li>
                <li><a class="nav-link scrollto" href="<?=$file?>#contact">Contact Us</a></li>
                <hr />
                <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-signin">Login</a></li>
                <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-signup">Register</a></li>';
              }
              else {
                echo '
                <li><a class="nav-link" href="profile.php">My Profile</a></li>
                <li><a class="nav-link" href="contacts.php">My Conacts</a></li>
                <li><a class="nav-link" href="msgs.php">Messages</a></li>
                <li><a class="nav-link" href="add-contact.php">Add New Contact</a></li>
                <li><a class="nav-link" href="location.php">Change Status</a></li>
                <hr />
                <li><a class="nav-link" href="log-out.php">Log-out<i class="bi bi-box-arrow-right"></i></a></li>';
              }
            ?>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->