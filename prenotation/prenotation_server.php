<?php
  include_once __DIR__."/../function.php";
  $prenotazioni = getAll($conn,prenotazioni);
  $conn->close();
  // var_dump($prenotazioni);
 ?>
