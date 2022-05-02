<?php 

if (isset($_POST['id'])) {

    include "../database/database.php";
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dis = $_POST['dis'];
    $price = $_POST['price'];
    $hall = $_POST['hall'];
    
    
    
    $sql = "UPDATE pac SET pname = '$name', pdis = '$dis', pprice = '$price', phall = '$hall' WHERE id = '$id'";

    $result = mysqli_query($conn,$sql);

    if ($result) {
            header("Location: wedding.php");
       
    }else{
        echo "error";
    }





}




?>