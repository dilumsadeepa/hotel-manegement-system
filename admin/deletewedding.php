<?php 

include "../database/database.php";

$id = $_POST['id'];


$sql = "DELETE FROM pac WHERE id = '$id'";

$result = mysqli_query($conn,$sql);

if ($result) {
    header("Location: wedding.php");

}else{
echo "error";
}






?>