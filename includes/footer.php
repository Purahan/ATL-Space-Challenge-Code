<?php
  $file="";
  $session='';
  if(strpos($_SERVER["SCRIPT_FILENAME"], 'index.php')===false) {
    $file="index.php";
  }
  if(!isset($_SESSION['id'])){
    $session = 'none';
  }
?>

    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Egalitarian</h3>
              <p>
                CHitkara International School, <br>
                Sector-25 West<br>
                Chandigarh, CH 160014<br>
                India <br><br>
                <strong>Phone:</strong> +91 95011 05703<br>
                <strong>Email:</strong> info@Egalitarian.com<br>
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=$file?>#hero">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=$file?>#about">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=$file?>#services">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=$file?>#team">Team</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=$file?>#contact">Contact Us</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Others</h4>
              <ul>
                <?php
                  if($session == 'none'){
                    echo '
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Register</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>';
                  }
                  else {
                    echo '
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Chat</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="contacts">My Contacts</a></li>';
                  }
                ?>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Join Our Newsletter</h4>
              <p>Join our newletter and get notified about our latest updates</p>
              <form action="" method="post">
                <input type="email" name="email" placeholder="Please type Your Email"><input type="submit" value="Subscribe">
              </form>
            </div>

          </div>
        </div>
      </div>

      <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Egalitarian</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Basic CSS from <a href="http://getbootstrap.com/">Bootstrap</a>.<br />
            Images from <a href="http://www.google.com">Google</a>.
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="https://www.facebook.com/ChitkaraSchool/" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/chitkaraschool/" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="" class="google-plus"><i class="bi bi-envelope"></i></a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>

</html>