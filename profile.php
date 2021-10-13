<?php
 include('includes/header.php');
?>
    <main id="main">
        <div class="d-flex mx-md-5 mx-0 mb-0 mb-md-5 mt-5 flex-column h-100 bg-light rounded-3 shadow-lg p-4">
            <div class="py-2 p-md-3">
                <!-- Title + Delete link-->
                <div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-start">
                    <h1 class="h3 mb-2 text-nowrap">Profile info</h1>
                </div>
                <!-- Content-->
                <input type="hidden" name="type" value="profile-edit">
                <div class="bg-secondary-msg rounded-3 p-4 mb-4">
                    <form action="profile.php" method="post" enctype="multipart/form-data">
                        <div class="d-block d-sm-flex align-items-center">
                            <img class="d-block rounded-circle mx-sm-0 mx-auto mb-3 mb-sm-0" src="<?=$_SESSION['pic']?>" id="profile-pic-img" alt="<?=$_SESSION['name']?>" width="110">
                            <div class="ps-sm-3 text-center text-sm-start">
                                <label for="profile-pic" class="btn btn-light shadow btn-sm mb-2"><i class="bi bi-arrow-repeat"></i> Change avatar</label>
                                <?php
                                    $pic = str_replace("assets/img/users/","",$_SESSION['pic']);
                                ?>
                                <input type="file" name="profile-pic" id="profile-pic" class="invisible" accept="image/*" onchange="img_changed()">
                                <div class="p mb-0 fs-ms text-muted">Upload JPG, GIF or PNG image. 300 x 300 required.</div></div>
                            </div>
                        </div>
                        <?php if(!empty($error)) { ?>						
                            <div class="error alert alert-danger">
                                <i class="bi bi-exclamation-triangle"></i>
                                <?php echo $error;?>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-name">Full Name</label>
                                    <input class="form-control" type="text" id="account-name" style="border-radius: 10px;" name="name" value="<?=$_SESSION['name']?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-email">Email address</label>
                                    <input class="form-control" type="email" style="border-radius: 10px;" name="email" id="account-email" value="<?=$_SESSION['email']?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-phone">Phone no.</label>
                                    <div class="input-group">
                                        <span class="position-absolute" style="z-index: 20; left: 3%; top: 18%;">+91</span>
                                        <input class="form-control" name="phone" style="border-radius: 10px; padding-left: 50px;" type="tel" id="account-phone" value="<?=$_SESSION['phone']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-gender">Gender</label>
                                    <select class="form-select" name="gender" style="border-radius: 10px;" id="account-gender">
                                        <option value="">Select Gender</option>

                                        <?php
                                            if($_SESSION['gender'] == "m") {
                                                echo '
                                                <option value="f">Female</option>
                                                <option value="m" selected="true">Male</option>';
                                            }
                                            else {
                                                echo '
                                                <option value="f" selected="true">Female</option>
                                                <option value="m">Male</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3 pb-1">
                                    <label class="form-label px-0" for="account-dob">Date of Birth</label>
                                    <input class="form-control" type="date" style="border-radius: 10px;" name='dob' id="account-dob" value="<?=$_SESSION['dob']?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="form-check d-block">
                                        <input class="form-check-input" type="checkbox" id="show-email" checked="">
                                        <label class="form-check-label" for="show-email">Show my email to registered users</label>
                                    </div>
                                    <button class="btn btn-pink mx-md-5 mx-0 mt-3 mt-sm-0" type="submit">
                                        <i class="far fa-save fs-4 me-2"></i>Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main><!-- End #main -->
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