<?php 

if (isset($_POST['cat'])) {
    
    include "../database/database.php";

    $cat = $_POST['cat'];

    $sql = "INSERT INTO foodcat (cat) VALUES ('".$cat."')";

    $result = mysqli_query($conn,$sql);

    if($result){
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }else{
        echo "error..";
    }



}else{
    echo "There are no name";
}





?>