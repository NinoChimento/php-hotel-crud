<?php
  include __DIR__."/../database.php";
  $idRoom= $_GET["id"];

  if (empty($idRoom)) {
    die("errore id");
  }
  var_dump( $idRoom);
  $sql = "SELECT id, room_number, floor FROM stanze where id = $idRoom";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
  // output data of each row
  $rooms=[];
  while($row = $result->fetch_assoc()) {

  $rooms[]= $row;
  }
  } elseif ($result) {
  echo "0 results";
  } else {
  echo "query error";
  }
  $conn->close();
  var_dump($rooms);
 ?>
