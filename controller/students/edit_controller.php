<?php


require __DIR__ ."/../../connect.php";
include  __DIR__ ."/../../model/functions.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $cin = $_POST['cin'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $requet = UpdateStudents();
    $query = $connect->prepare($requet);

    if($query){
        $query->bind_param("sssssi",$f_name,$l_name,$cin,$email,$gender,$id);
        if($query->execute()){

            header("location:students.php?msg=student Informations Updated successfuly");
        }
    }
    else{
        echo "failed :".mysqli_error();
    }
}

?>