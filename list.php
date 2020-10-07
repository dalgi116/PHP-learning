<?php
include 'includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <meta charset="utf-8">
    <head>
    <title>List of items</title>
    <h1>List of items</h1>
  </head>
  <body>

    <form action="additem.php" method="POST">
      <input type="text" name="itemAdd" placeholder="Add item...">
      <br>
      <button type="submit" name="submit">SUBMIT</button>
      <br>
      <br>
      <br>
    </form>

    <form action="deleteitem.php" method="POST">
      <input type="text" name="itemDel" placeholder="Delete item...">
      <br>
      <button type="submit" name="submit">SUBMIT</button>
    </form>

    <?php
      $sqlSearch = "SELECT * from list;";
      $resultSearch = mysqli_query($conn,$sqlSearch);

      echo "<br>Items in the list:<br><br>";
      while ($row = mysqli_fetch_assoc($resultSearch)) {
        echo $row['item']."<br>";
      }

     ?>
  </body>
</html>
