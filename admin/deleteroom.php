<?php 

include "../database/database.php";

$id = $_POST['id'];


$sql = "DELETE FROM rooms WHERE id = '$id'";

$result = mysqli_query($conn,$sql);

if ($result) {
    header("Location: room.php");

}else{
echo "error";
}






?>