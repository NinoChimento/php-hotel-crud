<?php
  include __DIR__."/../database.php";
  $idRoom= $_GET["id"];

  if (empty($idRoom)) {
    die("errore id");
  }
  $sql = "SELECT * FROM stanze where id = $idRoom";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
  // output data of each row
  $room=[];
  while($row = $result->fetch_assoc()) {

  $room = $row;
  }
  }
  $conn->close();

  include __DIR__ ."/../partials/header.php";
 ?>

 <body>
   <?php include __DIR__."/../partials/navbar.php" ?>
   <form class="form-group" action="uptade_server.php" method="post">
     <div class="form-group">
       <label for="">Numero stanza</label>
       <input class="form-control" type="number" name="room_number" value="<?php echo $room["room_number"]; ?>">
     </div>
     <div class="form-group">
       <label for="Numero piano">Numero piano</label>
       <input class="form-control" type="number" name="floor_number" value="<?php echo $room["floor"]; ?>">
     </div>
     <div class="form-group">
       <label for="Numero Letti">Numero posti letto</label>
       <input class="form-control" type="number" name="beds" value="<?php echo $room["beds"]; ?>">
     </div>
     <input type="hidden" name="id" value="<?php echo $room["id"]; ?>">
     <input class="btn-danger form-control" type="submit" name="Salva" value="salva">
   </form>

 </body>
