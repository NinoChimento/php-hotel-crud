<?php
// include __DIR__ ."/../database.php";
include_once __DIR__."/../function.php";
$idStanza = $_GET["id"];
$room = getId($conn,stanze,$idStanza);
// $sql = "SELECT * FROM stanze Where id = $idStanza";
// $result = $conn->query($sql);
// if ($result && $result->num_rows > 0) {
// // output data of each row
// $rooms=[];
// while($row = $result->fetch_assoc()) {
//
// $rooms[]= $row;
// }
// } elseif ($result) {
// echo "0 results";
// } else {
// echo "query error";
// }
$conn->close();
 ?>
