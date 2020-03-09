<?php
  include_once __DIR__."/../function.php";
  $idStanza = $_GET["id"];
  $sql= "SELECT prenotazioni.id, stanze.room_number,ospiti.name,ospiti.lastname
FROM `prenotazioni`
INNER JOIN stanze
ON prenotazioni.stanza_id = stanze.id
INNER JOIN prenotazioni_has_ospiti
ON prenotazioni.id = prenotazioni_has_ospiti.prenotazione_id
INNER JOIN ospiti
ON prenotazioni_has_ospiti.ospite_id = ospiti.id
WHERE prenotazioni.id = 1"
?>
