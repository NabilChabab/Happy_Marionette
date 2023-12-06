<?php

require "../../connect.php";

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['rememberMe']);
    if (empty($email) || empty($password)) {
        $error[] = "Fill in all inputs!";
    }else{
        $select = "SELECT * FROM `user_role` WHERE `email` = ?";
        $stmt = $connect->prepare($select);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                if ($row['role'] == 'admin') {
                    $_SESSION['user_id'] = $row['id'];
                    setcookie('user_role', $row['role'], time() + (24 * 3600), '/');
                    setcookie('user_name', $row['name'], time() + (24 * 3600), '/');
                    if ($remember_me) {                    
                        setcookie('user_email', $email, time() + (24 * 3600), '/'); 
                        setcookie('user_password', $hashedPassword, time() + (24 * 3600), '/'); 
                    }

                    header("location:../admin/admin.php?welcomeadmin?");
                } elseif ($row['role'] == 'teacher') {
                    $_SESSION['user_id'] = $row['id'];
                    setcookie('user_role', $row['role'], time() + (24 * 3600), '/');
                    setcookie('user_name', $row['name'], time() + (24 * 3600), '/');

                    if ($remember_me) {
                        setcookie('user_email', $email, time() + (24 * 3600), '/'); 
                        setcookie('user_password', $hashedPassword, time() + (24 * 3600), '/'); 
                    }

                    header("location:../teacher/teacher_admin.php?welcometeacher");
                } elseif ($row['role'] == 'student') {
                     $_SESSION['user_id'] = $row['id'];
                    setcookie('user_role', $row['role'], time() + (24 * 3600), '/');
                    setcookie('user_name', $row['name'], time() + (24 * 3600), '/');

                    if ($remember_me) {
                        setcookie('user_email', $email, time() + (24 * 3600), '/'); 
                        setcookie('user_password', $hashedPassword, time() + (24 * 3600), '/'); 
                    }

                    header("location:../student/index.php");
                }
            } else {
                $error[] = "Incorrect email or password!";
            }
        }else {
            $error[] = "Incorrect email or password!";
        }
        $stmt->close();
    }  
}

?>
