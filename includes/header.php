<?php
	//Start Session
	session_start();
?>
<?php
  $error='';
  if(!isset($_SESSION['id'])) {
    if(!empty($_POST)) {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "egalitarian";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($_POST['type'] == "login") {
        // Check connection
        if ($conn->connect_error) {
          //die("Connection failed: " . $conn->connect_error);
          $error='Error connecting to website. Please try again.';
        } else {
          $sql = "SELECT id, full_name, profile_pic, phone, dob, email, gender FROM `users` WHERE email='".$_POST['email']."' AND pwd=MD5('".$_POST['pwd']."')";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          // output data of each row
            while($row = $result->fetch_assoc()) {
              //$_SESSION['id'] = $row["Username"];
              $_SESSION['id'] = $row['id'];
              $_SESSION['name'] = $row["full_name"];
              $_SESSION['email'] = $row["email"];
              $_SESSION['gender'] = $row["gender"];
              $_SESSION['phone'] = $row['phone'];
              $_SESSION['dob'] = $row['dob'];
              $_SESSION['pic'] = $_row['profile_pic'];
              header("Location: msgs.php");
            }
          } else {
            $error='Username or Password is incorrect.';
          }
        }
        $conn->close();
      }
      // if ($_POST['type'] == "sign-up") {

      // }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Name</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- FontAwesome Icons File -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/525fd5b530.js"crossorigin="anonymous"></script>
  </head>

  <body>

    <?php
        include('includes/nav.php');
    ?>