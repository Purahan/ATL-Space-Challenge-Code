<?php
 include('includes/header.php');
?>
    <main id="main">


      <!-- ======= Blog Section ======= -->
      <section id="main">
        <div class="d-flex mx-0 mx-md-5 mt-1 mt-md-3 flex-column h-100 bg-light rounded-3 shadow-lg p-4">
          <div class="py-2 p-md-3">
            <!-- Title + add contact button-->
            <div class="d-sm-flex align-items-center justify-content-between pb-2 text-center text-sm-start">
              <h1 class="h3 mb-3 text-nowrap">Your messages<span class="d-inline-block align-middle bg-faded-success text-success fs-ms fw-medium rounded-1 py-1 px-2 ms-2">1</span></h1>
              <div class="mb-3"><a class="btn btn-outline-pink" href="add-contact.php"><i class="bi bi-plus"></i>Add Contact</a></div>
            </div>
            
            <!-- Toolbar-->
            <div class="d-flex align-items-center justify-content-between bg-secondary-msg py-2 px-3">
              <div class="py-1">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="select-all" data-master-checkbox-for="#message-list">
                  <label class="form-check-label" for="select-all">Select all</label>
                </div>
              </div>
              <div class="py-1">
                <div class="btn-group dropdown">
                  <button class="dropdown-toggle btn btn-light btn-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                  <div class="dropdown-menu dropdown-menu-end my-1">
                    <a class="dropdown-item" href="#"><i class="bi bi-eye-slash me-2 align-middle mt-n1"></i>Mark unread</a>
                    <a class="dropdown-item" href="#"><i class="bi bi-arrow-90deg-left fs-ms me-2 align-middle mt-n1"></i>Reply</a>
                    <a class="dropdown-item" href="#"><i class="bi bi-arrow-90deg-right me-2 fs-ms align-middle mt-n1"></i>Forward</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i class="bi bi-trash fs-ms me-2 align-middle mt-n1"></i>Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Message list (table)-->
            <table class="table table-hover border-bottom">
              <tbody id="message-list">

              <?php
                if ($msgs_contacts && $msgs_contacts->num_rows > 0 ) {
                    while($row = $msgs_contacts->fetch_assoc()) {
                      $numMSG = $msgs_contacts->num_rows;
                      echo '
                    <!-- Message -->
                    <tr id="item-message-2">
                      <td class="py-3 align-middle ps-2 pe-0" style="width: 2.5rem;">
                        <div class="form-check ms-2 me-0">
                          <input class="form-check-input" type="checkbox" id="message-2" data-checkbox-toggle-class="bg-faded-primary" data-bs-target="#item-message-2">
                          <label class="form-check-label" for="message-2"></label>
                        </div>
                      </td>
                      <td class="py-3 align-middle"><a class="d-block d-sm-flex align-items-center text-decoration-none link-dark" href="chat.php?with='.$row['id'].'">
                        <img class="rounded-circle mb-2 me-3 mb-sm-0" src="'.$row['profile_pic'].'" alt="'.$row['name'].'" width="42">
                        '.$row['name'].'
                          <div class="fs-sm ps-sm-3">
                            <div class="d-sm-flex text-heading align-items-center">
                              <div class="ms-sm-auto text-muted fs-xs position-absolute end-8 top-10">Aug 05,2020</div>
                            </div>
                            <div class="pt-1 text-body text-muted">'.$row["status"].'</div>
                          </div></a></td>
                    </tr>';
                  }
                }
                else {
                  echo "You don't have any <a href='contacts.php'>contacts</a> saved. Please <a href='add-contact.php'>Create a new contact</a>, to chat with anyone.";
                }
              ?>
              </tbody>
            </table>
            <!-- Pagination-->
            <nav class="d-md-flex justify-content-between align-items-center text-center text-md-start pt-3">
              <div class="d-md-flex align-items-center w-100"><span class="fs-sm text-muted me-md-3">Showing 1 of 1 messages</span>
                <div class="progress w-100 my-3 mx-auto mx-md-0" style="max-width: 10rem; height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 100%;background-color: #e43c5c;" aria-valuenow="" aria-valuemin="0" aria-valuemax="<?=$numMSG?>"></div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </section><!-- End Blog Section -->

    </main><!-- End #main -->
    
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