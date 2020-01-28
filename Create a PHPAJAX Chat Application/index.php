<?php

session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;


?>

<html>
  <head>
    <title>AJAX Chat</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="chat">

      <div class="messages">

      
      </div>
      <textarea class="entry" placeholder="Type here and hit return and shift + return for a new line."></textarea>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="js/chat.js"></script>
  </body>
</html>
