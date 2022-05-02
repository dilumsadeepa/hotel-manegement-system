<?php 

include "../database/database.php";


$name = $_POST['name'];
$dis = $_POST['dis'];
$price = $_POST['price'];
$hall = $_POST['hall'];

$sql = "INSERT INTO pac (pname,pdis,pprice,phall) VALUES ('$name','$dis','$price','$hall')";


$result = mysqli_query($conn,$sql);

if ($result) {
    header("Location: wedding.php");
}else{
    echo mysqli_errno($conn);
}

























?>