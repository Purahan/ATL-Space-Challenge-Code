<?php
 include('includes/header.php');
?>
    <section class="ftco-section mt-2 mt-md-5">
      <div class="container rounded shadow">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-lg-6">
                  <div class="contact-wrap w-100 ps-md-5 py-md-5 py-4 ps-4">
                    <h3>Add Contact</h3>
                    <p class="mb-4">We hope you enjoy chatting!</p>
                    <div id="form-message-warning" class="mb-4"></div>
                    <div id="form-message-success" class="mb-4">
                      Your contact was added!
                    </div>
                    <form method="post" action="add-contact.php" id="contactForm" name="contactForm" class="contactForm">
                      <?php if(!empty($error)) { ?>						
                        <div class="error alert alert-danger">
                          <i class="bi bi-exclamation-triangle"></i>
                            <?php echo $error;?>
                        </div>
                      <?php } ?>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control my-2" name="name" id="name" placeholder="Name" style="border-radius: 10px;" />
                            
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="email" class="form-control my-2" name="email" id="email" placeholder="Email" style="border-radius: 10px;" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="tel" class="form-control my-2" name="contact" id="Contact" placeholder="Contact no." style="border-radius: 10px;" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group"></div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="submit" value="Add contact" class="btn btn-pink" />
                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="w-100 social-media mt-5 p-4" id="footer" style="background: none; shadow: none; color: #444;">
                      <h3>Follow us here</h3>
                      <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bi bi-envelope"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch img--back">
                  <img src="https://images.pexels.com/photos/258109/pexels-photo-258109.jpeg" alt="none" class="w-100">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <style>
      #contactForm .error {
        color: red;
        font-size: 12px; }

      #message {
        resize: vertical; }

      #form-message-warning, #form-message-success {
        display: none; }

      #form-message-warning {
        color: red; }

      #form-message-success {
        color: #28a745;
        font-size: 18px;
        font-weight: 500; }

      .submitting {
        float: left;
        width: 100%;
        padding: 10px 0;
        display: none;
        font-size: 16px;
        font-weight: 500;
        color: #e3b04b; }
    </style>
    
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