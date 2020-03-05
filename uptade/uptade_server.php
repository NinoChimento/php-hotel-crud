<?php
  include __DIR__."/../database.php";
  $roomId = $_POST["id"];
  $roomNumber = $_POST["room_number"];
  $roomFloor = $_POST["floor_number"];
  $roomBeds = $_POST["beds"];
  if (empty($roomId)) {
    die("numero id sbagliato");
  }
  if (empty($roomFloor)) {
    die("piano vuoto");
  }
  if (empty($roomNumber)) {
    die("numero stanza vuoto");
  }
  if (empty($roomBeds)) {
    die("numero letti vuoto");
  }
  $sql = "UPDATE stanze SET room_number = $roomNumber,floor = $roomFloor,beds = $roomBeds WHERE ID = $roomId";
  $result = $conn->query($sql);
  header("location:http://localhost/php-hotel-crud/show/show.php?id=$roomId");
 ?>
