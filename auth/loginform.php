<?php
    include "../database/database.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from users where email = '$email'";
        
        $result = mysqli_query($conn,$sql);

        foreach ($result as $value) {
    
            if ($value['email'] == $email && $value['password'] == $password) {
                echo "Success";
            }

        }
        

    }



?>