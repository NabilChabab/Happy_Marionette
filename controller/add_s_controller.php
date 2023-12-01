<?php


require __DIR__ ."/../connect.php";


if(isset($_POST['submit'])){
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $cin = $_POST['cin'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./image/" . $image;
    $requet = "INSERT INTO `students`(`nom`, `prenom`, `cin`, `email`, `gender` , `image`) VALUES ('$f_name','$l_name','$cin','$email','$gender' , '$image')";
    $query = mysqli_query($connect , $requet);

    if($query){
        if(move_uploaded_file($tempname, "$image")){
            echo "<h3>  Image uploaded successfully!</h3>";
        }
        else{
            echo "<h3> Fail!</h3>";
        }
        header("location:../view/admin/students/students.php?msg=new student added successfuly");
    }
    else{
        echo "failed :".mysqli_error();
    }
}

?>