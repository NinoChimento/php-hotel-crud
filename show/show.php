<?php
  include __DIR__ . "/server_show.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul>
            <?php foreach ($rooms as $stanza) {?>
              <li> Id:<?php echo $stanza["id"]; ?></li>
              <li>room_number:<?php echo $stanza["room_number"]; ?></li>
              <li>floor:<?php echo $stanza["floor"]; ?></li>
              <li>beds:<?php echo $stanza["beds"]; ?></li>
              <li>created_at:<?php echo $stanza["created_at"]; ?></li>
              <li>updated_at:<?php echo $stanza["updated_at"]; ?></li>
            <?php } ?>

          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
