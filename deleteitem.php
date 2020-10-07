<?php
include 'includes/dbh.inc.php';
$itemDel = $_POST['itemDel'];


if (!$itemDel == ''){
  $sql = "DELETE from list WHERE item='$itemDel';";
  mysqli_query($conn, $sql);
  header('Location: list.php?delete=sucessful');
}
else {
  header('Location: list.php?error=emptyitem');
  exit;
}
