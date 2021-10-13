<?php
  include('includes/header.php');
?>
<?php
  $with = $_GET['with'];
  if(!empty($_POST)) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = 'INSERT INTO chat (group_id, from_user, msg, time) VALUES ('.$room_id.', '.$_SESSION['id'].', "'.$_POST["msg"].'", "'.date("d/m/Y")." ".date("h:i")." ".date("a").'")';
    $msgs_send = $conn->query($sql);


    require __DIR__ . '/vendor/autoload.php';

    $options = array(
      'cluster' => 'ap2',
      'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
      '7d6d1261df2074dfee25',
      'd19ca48ac707e09206a8',
      '1275618',
      $options
    );

    $data['user'] = $_SESSION['id'];
    $data['message'] = $_POST['msg'];
    $data['time'] = date("d/m/Y")." ".date("h:i")." ".date("a");
    $pusher->trigger($room, 'my-event', $data);
  }
?>
<section class="msger mx-0 mb-0">
  <main class="msger-chat pt-5">
    <?php
      $sql = 'SELECT from_user, msg, time FROM chat WHERE group_id='.$room_id;
      $msgs_get = $conn->query($sql);

      if ($msgs_get && $msgs_get->num_rows > 0 ) {
        while($row = $msgs_get->fetch_assoc()) {
          if ($row['from_user'] ===  $_SESSION['id']) {
            $from_side = "right";
            $from_name = "Me";
            $from_pic = $_SESSION['pic'];
          }
          else {
            $from_side = "left";
            $from_name = $p2_name;
            $from_pic = $p2_pic;
          }
          echo '
        <div class="msg '.$from_side.'-msg" onload="scroll_bottom()">
          <div class="msg-img" style="background-image: url('.$from_pic.')"></div>
  
          <div class="msg-bubble">
            <div class="msg-info">
              <div class="msg-info-name">'.$from_name.'</div>
              <div class="msg-info-time">'.$row['time'].'</div>
            </div>
  
            <div class="msg-text">'.$row['msg'].'</div>
          </div>
        </div>';
        }
      }
      else {

      }
    ?>

  </main>
  <form class="msger-inputarea" method="post" action="chat.php?with=<?=$p2_id?>">
    <div class="input-group my-3 mr-3 mb-3">
      <input type="text" class="form-control" id="text-input" placeholder="Write message..." name="msg" aria-label="Recipient's username" aria-describedby="button-addon2">
      <button class="btn btn-success" id="send-btn" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
          <path fill="currentColor" d="M1.101 21.757L23.8 12.028 1.101 2.3l.011 7.912 13.623 1.816-13.623 1.817-.011 7.912z"></path>
        </svg>
      </button>
    </div>
  </form>
</section>
<style>
  :root {
    --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    --msger-bg: #fff;
    --border: 2px solid #ddd;
    --left-msg-bg: #ececec;
    --right-msg-bg: #579ffb;
  }

  html {
    box-sizing: border-box;
  }

  *,
  *:before,
  *:after {
    margin: 0;
    padding: 0;
    box-sizing: inherit;
  }

  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: var(--body-bg);
    font-family: Helvetica, sans-serif;
  }

  .msger {
    display: flex;
    flex-flow: column wrap;
    justify-content: space-between;
    width: 100%;
    padding: 0;
    margin: 25px 10px;
    height: calc(100% - 50px);
    border: var(--border);
    border-radius: 5px;
    background: var(--msger-bg);
    box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
  }

  .msger-chat {
    flex: 1;
    overflow-y: auto;
    margin: 0;
    padding: 10px;
  }

  .msger-chat::-webkit-scrollbar {
    width: 6px;
  }

  .msger-chat::-webkit-scrollbar-track {
    background: #ddd;
  }

  .msger-chat::-webkit-scrollbar-thumb {
    background: #bdbdbd;
  }

  .msg {
    display: flex;
    align-items: flex-end;
    margin-bottom: 10px;
  }

  .msg:last-of-type {
    margin: 0;
  }

  .msg-img {
    width: 50px;
    height: 50px;
    margin-right: 10px;
    background: #ddd;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-radius: 50%;
  }

  .msg-bubble {
    max-width: 450px;
    padding: 15px;
    border-radius: 15px;
    background: var(--left-msg-bg);
  }

  .msg-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
  }

  .msg-info-name {
    margin-right: 10px;
    font-weight: bold;
  }

  .msg-info-time {
    font-size: 0.85em;
  }

  .left-msg .msg-bubble {
    border-bottom-left-radius: 0;
  }

  .right-msg {
    flex-direction: row-reverse;
  }

  .right-msg .msg-bubble {
    background: var(--right-msg-bg);
    color: #fff;
    border-bottom-right-radius: 0;
  }

  .right-msg .msg-img {
    margin: 0 0 0 10px;
  }

  .msger-chat {
    background-color: #fcfcfe;
    background-image: url("https://wallpaperaccess.com/full/3204572.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    }
</style>


<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
  const msgerForm = $(".msger-inputarea");
  const msgerInput = $("#text-input");
  const msgerChat = $(".msger-chat");
  <?php
    echo '
  const PERSON2_img = "'.$p2_pic.'";
  const PERSON_img = "'.$_SESSION['pic'].'";
  const PERSON2_name = "'.$p2_name.'";
  const PERSON_name = "'.$_SESSION['name'].'";
    ';
  ?>
  var audio = new Audio('assets/sounds/notification.wav');

  
  
  // msg recieve Code start
  Pusher.logToConsole = true;

  var pusher = new Pusher('7d6d1261df2074dfee25', {
    cluster: 'ap2'
  });

  var channel = pusher.subscribe('<?=$room?>');
  channel.bind('my-event', function(data) {
    console.log(data);
    appendMessage(PERSON2_name, PERSON2_img, 'left', data.message, data.time);

  });
  // msg recieve code end

  // Msg Create Function
  function appendMessage(name, img, side, text, time) {
    audio.play();
    let msgHTML = `
      <div class="msg ${side}-msg">
        <div class="msg-img" style="background-image: url(${img})"></div>

        <div class="msg-bubble">
          <div class="msg-info">
            <div class="msg-info-name">${name}</div>
            <div class="msg-info-time">${time}</div>
          </div>

          <div class="msg-text">${text}</div>
        </div>
      </div>
    `;

    // let list = document.createElement("div");
    // list.innerHTML = msgHTML;
    msgerChat.append(msgHTML);
    msgerChat.animate({scrollTop: msgerChat.prop("scrollHeight")});
  }
  $(document).ready(function() {
    msgerChat.animate({scrollTop: msgerChat.prop("scrollHeight")});
  });
</script>
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