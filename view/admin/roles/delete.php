<?php
include "../../../connect.php";

$id = $_GET["id"];
$requet = "DELETE FROM `user_role` WHERE id = $id";
$result = mysqli_query($connect, $requet);

if ($result) {
  header("Location: roles.php?msg=User deleted successfully");
} else {
  echo "Failed: " . mysqli_error($connect);
}