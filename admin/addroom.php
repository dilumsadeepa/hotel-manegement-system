<?php 

if (isset($_POST['rtype'])) {

    include "../database/database.php";
    
    $rtype = $_POST['rtype'];
    $ac = $_POST['ac'];
    $price = $_POST['price'];
    $dis = $_POST['dis'];
    
    
    $sql = "INSERT INTO rooms (rtype, ac,price, dis) Values ('$rtype','$ac','$price','$dis')";

    $result = mysqli_query($conn,$sql);

    if ($result) {
        
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }else{
        echo "error";
    }





}




?>