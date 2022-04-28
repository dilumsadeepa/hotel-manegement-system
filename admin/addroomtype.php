<?php 

if (isset($_POST['rtype'])) {
    
    include "../database/database.php";

    $rtype = $_POST['rtype'];

    $sql = "INSERT INTO roomtypes (rtype) VALUES ('".$rtype."')";

    $result = mysqli_query($conn,$sql);

    if($result){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }else{
        echo "error..";
    }



}





?>