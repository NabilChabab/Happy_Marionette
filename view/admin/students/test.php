<?php
    include "../../../constant/database/connect.php";


    $response = array();
    if($connect){
        $sql = "SELECT * FROM `students` ORDER BY `nom` ASC";
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
