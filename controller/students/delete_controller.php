<?php
require __DIR__ ."/../../connect.php";
include  __DIR__ ."/../../model/functions.php";

$id = $_GET["id"];
$requet = DeleteStudents();
$result = $connect->prepare($requet);

if ($result) {
  $result->bind_param("i",$id);
  if($result->execute()){
    
    header("Location: ../../view/admin/students/students.php?msg=Student deleted successfully");
  }
} else {
  echo "Failed: " . mysqli_error($connect);
}