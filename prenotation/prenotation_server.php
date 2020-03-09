<?php
  include_once __DIR__."/../function.php";
  $prenotazioni = getAll($conn,prenotazioni);
  var_dump($prenotazioni);
 ?>
