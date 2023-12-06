<?php

function UpdateStudents($connect, $f_name, $l_name, $cin, $email, $gender, $id){
        $request = "UPDATE `students` SET `nom`=?, `prenom`=?, `cin`=?, `email`=?, `gender`=? WHERE `id`=?";
        $query = $connect->prepare($request);
    
        if ($query) {
            $query->bind_param("sssssi", $f_name, $l_name, $cin, $email, $gender, $id);
    
            if ($query->execute()) {
                header("location:students.php?msg=student Informations Updated successfully");
            }
        } else {
            echo "failed: " . mysqli_error();
        }
    
}
function DeleteStudents($connect, $id){
    $request = "DELETE FROM `students` WHERE id=?";
    $result = $connect->prepare($request);

    if ($result) {
        $result->bind_param("i", $id);

        if ($result->execute()) {
            header("Location: ../../view/admin/students/students.php?msg=Student deleted successfully");
        }
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
}

function ShowStudents(){
    return "SELECT * FROM `students` ORDER BY `nom` ASC";
}

function AddStudents($connect, $f_name, $l_name, $cin, $email, $gender, $image){
        $folder = "./image/" . $image;
        $sql = "INSERT INTO `students`(`nom`, `prenom`, `cin`, `email`, `gender`, `image`) VALUES (?,?,?,?,?,?)";
        $stmt = $connect->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("ssssss", $f_name, $l_name, $cin, $email, $gender, $image);
    
            if ($stmt->execute()) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $folder)) {
                    echo "<h3>Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>Fail!</h3>";
                }
                header("location:../../view/admin/students/students.php?msg=new student added successfully");
            }
        } else {
            echo "failed: " . mysqli_error();
        }
}


//Teachers
function ShowTeachers(){
    $query = "SELECT * FROM `teachers` ORDER BY `nom` ASC";
    $result = mysqli_query($connect , $query);
}

function AddTeachers(){
    return "INSERT INTO `students`(`nom`, `prenom`, `cin`, `email`, `gender` , `image`) VALUES (?,?,?,?,?,?)";
}

function UpdateTeachers(){
    return "INSERT INTO `students`(`nom`, `prenom`, `cin`, `email`, `gender` , `image`) VALUES (?,?,?,?,?,?)";
}

function DeleteTeachers(){
    return "INSERT INTO `students`(`nom`, `prenom`, `cin`, `email`, `gender` , `image`) VALUES (?,?,?,?,?,?)";
}
  



?>