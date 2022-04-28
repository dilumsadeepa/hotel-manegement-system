<?php 

if (isset($_POST['id'])) {

    include "../database/database.php";
    
    $id = $_POST['id'];
    $rtype = $_POST['rtype'];
    $ac = $_POST['ac'];
    $price = $_POST['price'];
    $dis = $_POST['dis'];
    $nofroom = $_POST['nofroom'];
    
    
    $sql = "UPDATE rooms SET rtype = '$rtype', ac = '$ac', price = '$price', dis = '$dis', nofroom = '$nofroom' WHERE id = '$id'";

    $result = mysqli_query($conn,$sql);

    if ($result) {
            header("Location: room.php");
       
    }else{
        echo "error";
    }





}




?>