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
    <h1 class="text-center">Dettaglio Stanza</h1>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul class="list-group">
            <?php foreach ($rooms as $stanza) {?>
              <li class="list-group-item"> Id:<?php echo $stanza["id"]; ?></li>
              <li class="list-group-item">room_number:<?php echo $stanza["room_number"]; ?></li>
              <li class="list-group-item">floor:<?php echo $stanza["floor"]; ?></li>
              <li class="list-group-item">beds:<?php echo $stanza["beds"]; ?></li>
              <li class="list-group-item">created_at:<?php echo $stanza["created_at"]; ?></li>
              <li class="list-group-item">updated_at:<?php echo $stanza["updated_at"]; ?></li>
            <?php } ?>

          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
