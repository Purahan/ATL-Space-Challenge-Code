    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top herder-scrolled header-inner-pages">
      <div class="container d-flex align-items-center justify-content-left">

        <h1 class="link-light">
          <a href="msgs.php" class="link-light fs-4">
            <?php
              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);

              $sql = 'SELECT c.name,u.profile_pic,u.id FROM contacts c JOIN users u ON(c.email=u.email) WHERE saved_in='.$_SESSION['id'].' AND u.id='.$_GET["with"];
              $msgs_with = $conn->query($sql);

              if ($msgs_with && $msgs_with->num_rows > 0 ) {
                while($row = $msgs_with->fetch_assoc()) {
                  $p2_id = $row['id'];
                  $p2_name = $row['name'];
                  $p2_pic = $row['profile_pic'];
                  echo '<i class="bi bi-chevron-left"></i> <img src="'.$p2_pic.'" class="rounded-circle" width="35" alt="'.$p2_name.'" /> '.$p2_name;
                }
              }

              $sql = 'SELECT id FROM groups WHERE FIND_IN_SET("'.$_SESSION["id"].'", user_ids) AND FIND_IN_SET("'.$_GET['with'].'", user_ids)';
              $msgs_room = $conn->query($sql);

              if ($msgs_room && $msgs_room->num_rows > 0 ) {
                while($row = $msgs_room->fetch_assoc()) {
                  $room = "room-".$row['id'];
                  $room_id = $row['id'];
                }
              }

              else {
                $sql = 'INSERT INTO `groups`(`user_ids`) VALUES ("'.$_GET["with"].','.$_SESSION["id"].'")';
                $msgs_room = $conn->query($sql);

                $sql = 'SELECT id FROM groups WHERE FIND_IN_SET("'.$_SESSION["id"].'", user_ids) AND FIND_IN_SET("'.$_GET['with'].'", user_ids)';
                $msgs_room = $conn->query($sql);

                if ($msgs_room && $msgs_room->num_rows > 0 ) {
                  while($row = $msgs_room->fetch_assoc()) {
                    $room = "room-".$row['id'];
                    $room_id = $row['id'];
                  }
                }
              }
            ?>
          </a>
        </h1>

      </div>
    </header><!-- End Header -->