

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
            foreach ($rooms as $stanza) {
              var_dump($stanza);
            }
          } ?>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="#">Vedi</a> </td>
            <td><a href="#">Uptade</a> </td>
            <td></td>
          </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
