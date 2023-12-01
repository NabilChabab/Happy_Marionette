<?php

include "../connect.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $co_passowrd = md5($_POST['co_password']);
    $roles = $_POST['role'];

    $select = "SELECT * FROM `user_role` WHERE `email` = '$email' && `password` = '$password'";
    $result = mysqli_query($connect , $select);

    
    if(mysqli_num_rows($result)>0){
        $error[] = "user already exist!";
    }
    else{
        if($password != $co_passowrd){
            $error[] = "password not matched!";
        }
        else{
            $insert = "INSERT INTO `user_role`(`name`, `email`, `password`, `role`) VALUES ('$name','$email','$password','$roles')";
            mysqli_query($connect,$insert);
            header("location:login.php");
        }
    }
}
?>
