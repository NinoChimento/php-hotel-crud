<?php
  include_once __DIR__."/../function.php";
  $idStanza = $_GET["id"];
  $sql = "SELECT prenotazioni.id, stanze.room_number,ospiti.name,ospiti.lastname
    FROM `prenotazioni`
    INNER JOIN stanze
    ON prenotazioni.stanza_id = stanze.id
    INNER JOIN prenotazioni_has_ospiti
    ON prenotazioni.id = prenotazioni_has_ospiti.prenotazione_id
    INNER JOIN ospiti
    ON prenotazioni_has_ospiti.ospite_id = ospiti.id
    WHERE prenotazioni.id = $idStanza";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
  $prenotazione = $result->fetch_assoc();
  }elseif ($result) {
  echo "0 results";
  } else {
  echo "query error";
  }
  $conn->close();

include __DIR__ ."/../partials/header.php";
?>
<body>
  <?php include __DIR__."/../partials/navbar.php" ?>
  <h1 class="text-center">Dettaglio Prenotazione</h1>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="list-group">
            <li class="list-group-item"> Id:<?php echo $prenotazione["id"]; ?></li>
            <li class="list-group-item">room_number:<?php echo $prenotazione["room_number"]; ?></li>
            <li class="list-group-item">floor:<?php echo $prenotazione["name"]; ?></li>
            <li class="list-group-item">beds:<?php echo $prenotazione["lastname"]; ?></li>

        </ul>
      </div>
    </div>
  </div>
</body>
</html>
