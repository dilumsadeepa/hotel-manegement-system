<?php 

if (isset($_POST['id'])) {

    include "../database/database.php";
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $fcat = $_POST['fcat'];
    $price = $_POST['price'];
    $dis = $_POST['dis'];
    
    
    
    $sql = "UPDATE foods SET name = '$name', fcat = '$fcat', price = '$price', dis = '$dis' WHERE id = '$id'";

    $result = mysqli_query($conn,$sql);

    if ($result) {
            header("Location: food.php");
       
    }else{
        echo "error";
    }





}




?>