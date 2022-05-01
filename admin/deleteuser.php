<?php 

include "../database/database.php";

$id = $_POST['id'];


$sql = "DELETE FROM users WHERE id = '$id'";

$result = mysqli_query($conn,$sql);

if ($result) {
    header("Location: users.php");

}else{
echo "error";
}






?>