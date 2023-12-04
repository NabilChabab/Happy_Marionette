<?php

require "../../connect.php";

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $select = "SELECT * FROM `user_role` WHERE `email` = '$email' && `password` = '$password'";
    $result = mysqli_query($connect , $select);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        if($row['role']=='admin'){
            $_SESSION['admin_name'] = $row['name'];
            header("location:../admin/admin.php?welcomeadmin?");
        }
        elseif($row['role']=='teacher'){
            $_SESSION['teacher_name'] = $row['name'];
            header("location:../teacher/teacher_admin.php?welcometeacher");
        }
        elseif($row['role']=='student'){
            $_SESSION['student_name'] = $row['name'];
            header("location:../student/index.php");
        }
    }
    elseif(empty($email)||empty($password)){
        $error[] = "Fill all inputs!";
    }
    else{
        $error[] = "incorrect email or password!"; 
    }
}
?>