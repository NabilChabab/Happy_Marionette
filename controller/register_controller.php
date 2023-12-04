<?php

require __DIR__ . "../../connect.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $co_password = $_POST['co_password'];
    $roles = $_POST['role'];
    $error = [];

    if (empty($name) || empty($email) || empty($password) || empty($co_password) || empty($roles)) {
        $error[] = "Fill in all inputs!";
    }

    elseif ($password != $co_password) {
        $error[] = "Passwords do not match!";
    }

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Invalid email format!";
    }

    elseif (empty($error)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $select = "SELECT * FROM `user_role` WHERE `email` = ?";
        $stmt = $connect->prepare($select);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error[] = "User already exists!";
        } else {
            $insert = "INSERT INTO `user_role`(`name`, `email`, `password`, `role`) VALUES (?, ?, ?, ?)";
            $stmt = $connect->prepare($insert);
            $stmt->bind_param("ssss", $name, $email, $hashedPassword, $roles);
            $stmt->execute();
            header("location:roles.php");
            exit(); 
        }
    }
}


?>
