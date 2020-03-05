<?php
  include __DIR__."/../server/database.php";
  include __DIR__."/../partials/header.php";
 ?>
<body>
  <?php include __DIR__."/../partials/navbar.php"; ?>
  <form class="form-group" action="inner_server.php" method="post">
    <div class="form-group">
      <label for="">Numero stanza</label>
      <input class="form-control" type="number" name="room_number" value="">
    </div>
    <div class="form-group">
      <label for="Numero piano">Numero piano</label>
      <input class="form-control" type="number" name="floor_number" value="">
    </div>
    <div class="form-group">
      <label for="Numero Letti">Numero posti letto</label>
      <input class="form-control" type="number" name="beds" value="">
    </div>
    <div class="form-group">
      <label for="data creazione">Data Arrivo</label>
      <input class="form-control" type="date" name="data_create" value="">
    </div>
    <div class="form-group">
      <label for="data creazione">Data Partenza</label>
      <input class="form-control" type="date" name="data_partenza" value="">
    </div>
    <input type="hidden" name="id" value="">
    <input class="btn-danger form-control" type="submit" name="Salva" value="salva">
  </form>
</body>
