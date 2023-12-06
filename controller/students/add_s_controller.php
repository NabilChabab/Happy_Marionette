<?php


require __DIR__ ."/../../connect.php";
include "../../model/functions.php";


if (isset($_POST['submit'])) {
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $cin = $_POST['cin'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $image = $_FILES["image"]["name"];
    AddStudents($connect, $f_name, $l_name, $cin, $email, $gender, $image);
}

?>