<?php
include __DIR__ ."/database.php";
function getAll($conn,$table)
{
  $sql = "SELECT * FROM $table";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
  // output data of each row
  $results=[];
  while($row = $result->fetch_assoc()) {

  $results[]= $row;
  }
  } elseif ($result) {
  $results =[];
  } else {
  $result= "query error";
  }
  return $results;
};
function getId($conn,$table,$id)
{
  $sql = "SELECT * FROM stanze Where id = $id";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
  // output data of each row
  $results=[];
  $results= $result->fetch_assoc();

} elseif ($result) {
  $results = [];
} else {
  $results = "query error";
}
return $results;
}



 ?>
