

<?php
  include __DIR__ ."/server.php";

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
          <table>
            <th>Id</th>
            <th>Numero</th>
            <th>Piano</th>
            <th>Vedi</th>
            <th>Uptade</th>
            <th>Cancella</th>
          <?php if (!empty(rooms)) {
            foreach ($rooms as $stanza) { ?>
              <tr>
                <td> <?php echo $stanza["id"] ?></td>
                <td> <?php echo $stanza["room_number"] ?></td>
                <td> <?php echo $stanza["floor"] ?></td>
                <td><a href="show/show.php?id= <?php echo $stanza["id"] ?>">Vedi</a> </td>
                <td><a href="#">Uptade</a> </td>
                <td></td>
              </tr>
            <?php } ?>
          <?php } ?>

          </table>
        </div>
      </div>
    </div>
  </body>
</html>
