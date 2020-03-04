<?php
include __DIR__ ."/../account.php";
$idStanza = $_GET["id"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn && $conn->connect_error) {
echo "Connection failed: " . $conn->connect_error;
}
$sql = "SELECT * FROM stanze Where id = $idStanza";
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
 ?>
