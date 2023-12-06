<?php


require __DIR__ ."/../../connect.php";
include  __DIR__ ."/../../model/functions.php";
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $cin = $_POST['cin'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    UpdateStudents($connect, $f_name, $l_name, $cin, $email, $gender, $id);
}

?>