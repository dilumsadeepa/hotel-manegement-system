<?php 

include "../database/database.php";

$id = $_POST['id'];


$sql = "DELETE FROM foods WHERE id = '$id'";

$result = mysqli_query($conn,$sql);

if ($result) {
    header("Location: food.php");

}else{
echo "error";
}






?>