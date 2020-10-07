<?php
  include 'includes/dbh.inc.php';
  $itemAdd = $_POST['itemAdd'];
  $sql = "SELECT * from list WHERE item='$itemAdd'";
  $result = mysqli_query($conn, $sql);

if (!$itemAdd == ''){
  if (!mysqli_num_rows($result) > 0) {
    $sql = "INSERT INTO list (item) VALUES ('$itemAdd');";
    mysqli_query($conn, $sql);
    header('Location: list.php?added=sucessful');
  }
  else {
    header('Location: list.php?error=useditem');
  }
}
else {
  header('Location: list.php?error=emptyitem');
  exit;
}
