<?php
include_once __DIR__."/prenotation_server.php";
?>
<body>
  <?php include __DIR__."/../partials/header.php" ?>
  <?php include __DIR__."/../partials/navbar.php" ?>
  <h1 class="text-center">Prenotazioni Ospiti</h1>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table">
          <th>Id</th>
          <th>Id prenotazione</th>
          <th>created_at</th>
          <th>updated_at</th>
          <th>vedi</th>
        <?php if (!empty(rooms)) {
          foreach ($prenotazioni as $prenotazione) { ?>
            <tr>
              <td> <?php echo $prenotazione["id"] ?></td>
              <td> <?php echo $prenotazione["stanza_id"] ?></td>
              <td> <?php echo $prenotazione["created_at"] ?></td>
              <td> <?php echo $prenotazione["updated_at"] ?></td>
              <td><a href="show_prenotation.php?id=<?php echo $prenotazione["id"] ?>">Vedi</a> </td>

            </tr>
          <?php } ?>
        <?php } ?>

        </table>
      </div>
    </div>
  </div>
</body>
</html>
