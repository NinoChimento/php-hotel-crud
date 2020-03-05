<?php
  include __DIR__."/../server/database.php";
  $roomNumber = $_POST["room_number"];
  $roomFloor =$_POST["floor_number"];
  $roomBeds = $_POST["beds"];
  if (empty($roomNumber)) {
    die("devi riempire tutti i campi");
  }
  if (empty($roomFloor)) {
    die("devi riempire tutti i campi");
  }
  if (empty($roomBeds)) {
    die("devi riempire tutti i campi");
  }
 ?>
