<?php
  include('includes/header.php');
?>
<section class="contactcards mt-5 px-5">
  <div class="infobar">
    <p>
        <?php
          $conn = new mysqli($servername, $username, $password, $dbname);

          $sql = 'SELECT c.phone, c.email, c.name, u.profile_pic, u.id FROM contacts c JOIN users u ON(c.email=u.email) WHERE saved_in='.$_SESSION['id'];
          $contacts = $conn->query($sql);

          if ($contacts->num_rows > 0) {
            // output data of each row
            echo '
            <span> '.$contacts->num_rows.' contact(s)</span>
          </p>
        </div>
        <div class="contacts">
          <span class="add"></span>
          <table id="contacts_card" border="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Contact</th>
              </tr>
            </thead>
            <tbody>';
            while($row = $contacts->fetch_assoc()) {
              echo '
            <tr>
              <td class="pe-2">
                <img src="'.$row["profile_pic"].'" alt="'.$row["name"].'" class="avatar"> '.$row["name"].'
              </td>
              <td class="pe-2">
                <a href="mailto:'.$row["email"].'"><button class="btn btn-pink"><i class="far fa-envelope"></i></button></a>
                <a href="tel:+91'.$row["phone"].'"><button class="btn btn-pink"><i class="fas fa-phone-alt"></i></button></a>
                <a href="chat.php?with='.$row["id"].'"><button class="btn btn-pink"><i class="far fa-comment-dots"></i></button></a>
              </td>
            </tr>
            ';
            }
          }
          else {
            echo "You don't have any contacts saved. Please <a href='add-contact.php'>add a contact</a>.";
          }
        ?>
      </tbody>
    </table>
  </div>
</section>
<style>
  @import url("https://fonts.googleapis.com/css?family=Montserrat:400,800,600");

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body,
  html {
    font-family: "Montserrat", sans-serif;
  } 

  .avatar {
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }

  section.contactcards {
    background: #f8f9fb;
  }

  section.contactcards .infobar p {
    font-size: 16px;
    color: #000;
    font-weight: 600;
  }

  section.contactcards .contacts {
    position: relative;
    margin: 20px 0;
  }

  section.contactcards .contacts span.add {
    position: absolute;
    right: 10px;
    cursor: pointer;
  }

  section.contactcards .contacts span.add svg {
    color: #777;
  }

  section.contactcards .contacts table {
    width: 100%;
    border-collapse: collapse;
  }

  section.contactcards .contacts table thead {
    border-bottom: 10px solid #f8f9fb;
  }

  section.contactcards .contacts table thead th {
    text-transform: uppercase;
    text-align: left;
    font-size: 12px;
    color: #777;
    font-weight: 600;
  }

  section.contactcards .contacts table tbody tr {
    border-radius: 3px;
    border-bottom: 10px solid #f8f9fb;
  }

  section.contactcards .contacts table tbody tr td {
    font-size: 14px;
    color: #000;
    font-weight: 600;
    padding: 30px 0px;
    background: #fff;
    border: 0px;
    margin: 0px;
  }

  section.contactcards .contacts table tbody tr td span.label {
    display: inline-block;
    background: #ededfb;
    color: #8a88d6;
    padding: 5px 12px;
    border-radius: 12px;
  }

  section.contactcards .contacts table tbody tr td span.label:not(:last-child) {
    margin-right: 10px;
  }

  section.contactcards .contacts table tbody tr td:first-child {
    padding-left: 10px;
  }
</style>
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