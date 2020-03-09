<?php
  include __DIR__."/../server/database.php";
  $roomNumber = $_POST["room_number"];
  $roomFloor =$_POST["floor_number"];
  $roomBeds = $_POST["beds"];
  $dataArrive  =$_POST["data_create"];
  $dataDeparture = $_POST["data_partenza"];
  echo $dataArrive;
  if (empty($roomNumber)) {
    die("devi riempire tutti i campi");
  }
  if (empty($roomFloor)) {
    die("devi riempire tutti i campi");
  }
  if (empty($roomBeds)) {
    die("devi riempire tutti i campi");
  }
    $stmt = $conn->prepare("INSERT INTO stanze (room_number,floor,beds,created_at,updated_at) VALUES ('$roomNumber','$roomFloor','$roomBeds','$dataArrive','$dataDeparture')");
    $stmt->bind_param("iiiss", $roomNumber, $roomFloor, $roomBeds,$dataArrive,$dataDeparture);
    $stmt->execute();
  // $sql = "INSERT INTO stanze (room_number,floor,beds,created_at,updated_at) VALUES ('$roomNumber','$roomFloor','$roomBeds','$dataArrive','$dataDeparture')";
  // $result = $conn->query($sql);
  header("location:http://localhost/php-hotel-crud/index.php");
 ?>
