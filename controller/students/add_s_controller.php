<?php


require __DIR__ ."/../../connect.php";
include "../../model/functions.php";


if(isset($_POST['submit'])){
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $cin = $_POST['cin'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./image/" . $image;
    $sql = AddStudents();
    $stmt = $connect->prepare($sql);

    if($stmt){
        $stmt->bind_param("ssssss", $f_name, $l_name, $cin, $email, $gender , $image);
        if($stmt->execute()){
            if(move_uploaded_file($tempname, "$image")){
                echo "<h3>  Image uploaded successfully!</h3>";
            }
            else{
                echo "<h3> Fail!</h3>";
            }
            header("location:../../view/admin/students/students.php?msg=new student added successfuly");
        }
        
    }
    else{
        echo "failed :".mysqli_error();
    }
}

?>