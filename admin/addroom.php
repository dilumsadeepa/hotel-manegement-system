<?php 

if (isset($_POST['rtype'])) {

    include "../database/database.php";
    
    $rnum = $_POST['rnum'];
    $rtype = $_POST['rtype'];
    $ac = $_POST['ac'];
    $price = $_POST['price'];
    $dis = $_POST['dis'];
    $nofroom = $_POST['nofroom'];
    
    
    $sql = "INSERT INTO rooms (rnum,rtype, ac,price, dis, nofroom) Values ('$rnum','$rtype','$ac','$price','$dis','$nofroom')";

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