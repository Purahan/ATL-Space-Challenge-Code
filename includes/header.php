<?php
	//Start Session
	session_start();
?>
<?php
  $error='';
  $error_up='';

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "egalitarian";

  if (strpos($_SERVER["SCRIPT_FILENAME"], 'index.php') === false) {
    if(!isset($_SESSION['id'])){
      header("Location: index.php");
    }
  }

  if (strpos($_SERVER["SCRIPT_FILENAME"], 'add-contact.php') !== false) {
    
    if(!isset($_SESSION['id'])){
      header("Location: index.php");
    }

    if(!empty($_POST)){
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      $sql = 'SELECT id FROM users WHERE email="'.$_POST['email'].'"';
      $mail_check = $conn->query($sql);

      if ($mail_check->num_rows > 0) {
        while($row = $mail_check->fetch_assoc()) {
          $sql = 'INSERT INTO `contacts`(`saved_in`, `email`, `name`, `phone`) VALUES ('.$_SESSION['id'].', "'.$_POST['email'].'", "'.$_POST["name"].'", "'.$_POST['contact'].'")';
          $save_contact = $conn->query($sql);

          header("Location: msgs.php");
        }
      }
      else {
        $error = ' Account with your given email Id does not exists.';
      }
    }
  }

  if (strpos($_SERVER["SCRIPT_FILENAME"], 'msgs.php') !== false) {
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = 'SELECT c.id,c.name,u.profile_pic,u.id,u.status FROM contacts c JOIN users u ON(c.email=u.email) WHERE saved_in='.$_SESSION['id'];
    $msgs_contacts = $conn->query($sql);

  }
  if(!empty($_POST)) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if (strpos($_SERVER["SCRIPT_FILENAME"], 'location.php') !== false) {
      echo $sql = 'UPDATE `users` SET`status` = "I am on '.$_POST["detail"].'." WHERE email="'.$_SESSION["email"].'"';
      $save_status = $conn->query($sql);

      // header("Location: msgs.php");
    }

    if (strpos($_SERVER["SCRIPT_FILENAME"], 'index.php') !== false) {
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
              $_SESSION['pic'] = $row['profile_pic'];
              $_SESSION['modified_on'] = $row['modified_on'];
              $_SESSION['created_on'] = $row['created_on'];
              header("Location: location.php");
            }
          } else {
            $error=' Username or Password is incorrect.';
          }
        }
        $conn->close();
      }
      elseif ($_POST["type"] == "register") {
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          //die("Connection failed: " . $conn->connect_error);
          $error_up='  Error connecting to website. Please try again.';
        } else {

          $sql = "INSERT INTO `users` (full_name, email, pwd, phone, gender, dob, created_on, modified_on) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".md5($_POST['pwd'])."', '".$_POST['phone']."', '".$_POST['gender']."', '".$_POST['dob']."', '".date("Y-m-d")."', '".date("Y-m-d")."')";

          if ($conn->query($sql) === FALSE) {
            if ($conn->errno == 1062){
              $error_up='  You already have an account with this email id';
            } else{
            //print_r($conn);
              $error_up='  Error in saving data. Please try again.';
            }

          } else {
            $sql = "SELECT id, full_name, profile_pic, phone, dob, email, gender FROM `users` WHERE email='".$_POST['email']."')";
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
                $_SESSION['pic'] = $row['profile_pic'];
                $_SESSION['modified_on'] = $row['modified_on'];
                $_SESSION['created_on'] = $row['created_on'];

                header("Location: msgs.php");
              }
            }

            //redirect to another page
            header("Location: msgs.php");
          }
        }
        $conn->close();
      }
    }
  }
  if (strpos($_SERVER["SCRIPT_FILENAME"], 'profile.php') !== false) {
    if(!isset($_SESSION['id'])){
      header("Location: index.php");
    }
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "SELECT id, full_name, profile_pic, phone, dob, email, gender FROM `users` WHERE email='".$_SESSION['email']."'";
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
        $_SESSION['pic'] = $row['profile_pic'];
      }
    }
    
    $pic_location = '';
    if(!empty($_POST)) {
      if ($_FILES['profile-pic']['name'] != '') {
        $arrFileName=explode('.',$_FILES['profile-pic']['name']);
        $fileExt=$arrFileName[count($arrFileName)-1];
        $uniqueFilename = uniqid().'.'.$fileExt;
        move_uploaded_file($_FILES['profile-pic']['tmp_name'], "assets/img/users/".$uniqueFilename);
        $pic_location = "assets/img/users/".$uniqueFilename;
      }
      if ($pic_location === '') {
        $pic_location = $_SESSION['pic'];
      }

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
        $error='Error connecting to website. Please try again.';
      } else {
        $sql = "UPDATE users SET full_name='".$_POST['name']."', phone=".$_POST['phone'].", dob='".$_POST['dob']."', profile_pic='".$pic_location."', email='".$_POST['email']."', gender='".$_POST['gender']."', modified_on='".date("Y-m-d")."' WHERE id=".$_SESSION['id'];
        $result = $conn->query($sql);

        $sql = "SELECT id, full_name, phone, dob, email, gender, profile_pic FROM `users` WHERE id=".$_SESSION['id'];
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
          while($row = $result->fetch_assoc()) {
            // echo "name:".$row["first_name"]."<br> Email: ".$row["email"]."<br>";
            //$_SESSION['id'] = $row["Username"];
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['full_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['dob'] = $row['dob'];
            $_SESSION['pic'] = $row['profile_pic'];
            $_SESSION['modified_on'] = $row['modified_on'];
            header("Location: profile.php");
          }
        } else {
          $error=' We are unable to update your Profile. Please try again later';
        }
      }
      $conn->close();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Egalitarian</title>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/525fd5b530.js"crossorigin="anonymous"></script>
  </head>

  <body>

    <?php
    if (strpos($_SERVER["SCRIPT_FILENAME"], 'chat.php') !== false) {
      include('includes/chat-nav.php');
    }
    else {
      include('includes/nav.php');
    }
    ?>