<?php
  $headerClass='';
  $file='';
  $activeClass="";
  $sign_in_active='';
  $register_active='';
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
  if(strpos($_SERVER["SCRIPT_FILENAME"], 'sign-up.php') !== false) {
    $register_active='active';
  }
  if(!isset($_SESSION["id"]) === true) {
    include('includes/sign-in-modal.php');
    $session='none';
  }
?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top <?=$headerClass?>">
      <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">Tempo</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

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
                <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-signin">Login</a></li>
                <li><a class="nav-link <?=$register_active?>" href="#">Register</a></li>';
              }
              else {
                echo '
                <li><a class="nav-link" href=profile.php">My Profile</a></li>
                <li><a class="nav-link" href="#">My Conacts</a></li>
                <li><a class="nav-link" href="msgs.php">Messages</a></li>';
              }
            ?>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->