<?php
require __DIR__ ."/../../connect.php";
include  __DIR__ ."/../../model/functions.php";

$id = $_GET["id"];
DeleteStudents($connect,$id);