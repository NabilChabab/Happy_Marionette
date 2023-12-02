<?php


require __DIR__ ."/../../connect.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $cin = $_POST['cin'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $requet = "UPDATE `students` SET `nom`='$f_name',`prenom`='$l_name',`cin`='$cin',`email`='$email',`gender`='$gender'  WHERE id = $id";
    $query = mysqli_query($connect , $requet);

    if($query){
        header("location:students.php?msg=student Informations Updated successfuly");
    }
    else{
        echo "failed :".mysqli_error();
    }
}

?>