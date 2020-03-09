<?php
  include __DIR__ . "/server_show.php";
  include __DIR__ ."/../partials/header.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include __DIR__."/../partials/navbar.php" ?>
    <h1 class="text-center">Dettaglio Stanza</h1>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul class="list-group">
              <li class="list-group-item"> Id:<?php echo $room["id"]; ?></li>
              <li class="list-group-item">room_number:<?php echo $room["room_number"]; ?></li>
              <li class="list-group-item">floor:<?php echo $room["floor"]; ?></li>
              <li class="list-group-item">beds:<?php echo $room["beds"]; ?></li>
              <li class="list-group-item">created_at:<?php echo $room["created_at"]; ?></li>
              <li class="list-group-item">updated_at:<?php echo $room["updated_at"]; ?></li>

          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
