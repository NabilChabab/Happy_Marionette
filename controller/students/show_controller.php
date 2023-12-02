<?php
require __DIR__ ."/../../connect.php";
require "../../model/functions.php";
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");


    $response = array();
    if($connect){
        $sql = ShowStudents();
        $result = mysqli_query($connect , $sql);
        if($result){
            header("Content-Type: JSON");
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                $response[$i]['id'] = $row['id']; 
                $response[$i]['nom'] = $row['nom']; 
                $response[$i]['prenom'] = $row['prenom'];
                $response[$i]['email'] = $row['email'];
                $response[$i]['gender'] = $row['gender']; 
                $response[$i]['image'] = $row['image']; 
                $i++;
            }
            echo json_encode($response , JSON_PRETTY_PRINT);
        }
    }
    else{
        echo "error";
    }
?>