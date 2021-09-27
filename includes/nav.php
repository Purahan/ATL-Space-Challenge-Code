<?php
$headerClass='';
$file='';
$activeClass="";
if(strpos($_SERVER["SCRIPT_FILENAME"], 'index.php')!==false) {
  $headerClass='header-transparent';
  $activeClass=" active";
}
if(strpos($_SERVER["SCRIPT_FILENAME"], 'index.php')===false) {
  $file="index.php";
  $headerClass='header-inner-pages ';
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
            <li><a class="nav-link scrollto<?=$activeClass?>" href="<?=$file?>#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="<?=$file?>#about">About</a></li>
            <li><a class="nav-link scrollto" href="<?=$file?>#services">Services</a></li>
            <li><a class="nav-link scrollto " href="<?=$file?>#portfolio">Portfolio</a></li>
            <li><a class="nav-link scrollto" href="<?=$file?>#team">Team</a></li>
            <li><a class="nav-link scrollto" href="<?=$file?>#contact">Contact</a></li>
            <li><a class="nav-link <?=$sign_in_active?>" href="#">Sign In</a></li>
            <li><a class="nav-link <?=$register_active?>" href="#">Register</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->