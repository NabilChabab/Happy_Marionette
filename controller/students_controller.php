<?php
    include "../constant/connect.php";
    // require'../../../constant/database/connect.php';

    $query = "SELECT * FROM `students` ORDER BY `nom` ASC";
    $result = mysqli_query($connect , $query);
?>