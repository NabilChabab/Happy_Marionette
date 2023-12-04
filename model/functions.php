<?php

function UpdateStudents(){
  return "UPDATE `students` SET `nom`=?,`prenom`=?,`cin`=?,`email`=?,`gender`=?  WHERE `id` = ?";
}
function DeleteStudents(){
    return "DELETE FROM `students` WHERE id = ?";
}

function ShowStudents(){
    return "SELECT * FROM `students` ORDER BY `nom` ASC";
}

function AddStudents(){
    return "INSERT INTO `students`(`nom`, `prenom`, `cin`, `email`, `gender` , `image`) VALUES (?,?,?,?,?,?)";
}

//Teachers
function ShowTeachers(){
    return "SELECT * FROM `students` ORDER BY `nom` ASC";
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