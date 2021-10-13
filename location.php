<?php
  include("includes/header.php")
?>
<!---username--->
    <div class="container pt-5 mt-5">
      <form action="location.php" method="post">
        <!---location--->
        <label for="where">Your Location:</label>
        <select id="where" name="where">
          <option value="">Select Location</option>
          <option value="SpaceStation">Space station</option>
          <option value="planet">Planet</option>
          <option value="rocket">Rocket</option>
          <option value="satelight">Satelight</option>
        </select>
        <!---recevier--->
        <label for="detail">More in detail:</label>
        <select id="detail" name="detail">
          <option class="empty" value="">Select Specific Location</option>
          <option class="SpaceStation" value="International Space Station">International Space Station</option>
          <option class="SpaceStation" value="Tiangong Space Station">Tiangong Space Station</option>

          <option class="planet" value="Mercury">Mercury</option>
          <option class="planet" value="Venus">Venus</option>
          <option class="planet" value="Earth">Earth</option>
          <option class="planet" value="Mars">Mars</option>
          <option class="planet" value="Jupiter">Jupiter</option>
          <option class="planet" value="Satern">Satern</option>
          <option class="planet" value="Uranus">Uranus</option>
          <option class="planet" value="Neptune">Neptune</option>
          <option class="planet" value="Pluto">Pluto</option>
          
          <option class="rocket" value="EOS-03">EOS-03</option>
          <option class="rocket" value="CMS-01">CMS-01</option>
          <option class="rocket" value="EOS-01">EOS-01</option>
          <option class="rocket" value="GSAT-30">GSAT-30</option>
          <option class="rocket" value="RISAT-2BR1">RISAT-2BR1</option>
          <option class="rocket" value="Cartosat-3">Cartosat-3</option>
          <option class="rocket" value="Chandrayaan2">Chandrayaan2</option>
          <option class="rocket" value="RISAT-2B">RISAT-2B</option>
          <option class="rocket" value="EMISAT">EMISAT</option>
          <option class="rocket" value="GSAT-31">GSAT-31</option>
          <option class="rocket" value="Microsat-R">Microsat-R</option>
          <option class="rocket" value="GSAT-7A">GSAT-7A</option>

          <option class="satelight" value="moon">Earth's Moon</option>
        </select>
    
        <!---submit--->
        <button class="btn btn-pink" type="submit"><i class="far fa-save fs-4 me-2"></i>Save changes</button>
      </form>
    </div>
    <!---css--->
    <style>
        select {
          width: 100%;
          padding: 12px; 
          border: 2px solid #ccc; 
          border-radius: 6px; 
          box-sizing: border-box;
          margin-top: 16px; 
          margin-bottom: 16px; 
          
        }
    </style>
    <script>
        $('#detail option').hide();
        $('#detail option.empty').show();
        $('#where').change(function(e) {
          $('#detail option').hide();
          $('#detail option.empty').show();
          $('#detail option.'+e.target.value).show();
        });
    </script>

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
