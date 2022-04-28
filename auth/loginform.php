<?php
    include "../database/database.php";

    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from users where email = '$email'";
        
        $result = mysqli_query($conn,$sql);

        foreach ($result as $value) {
    
            if ($value['email'] == $email && $value['password'] == $password) {
                $name = $value['name'];
                $email = $value['email'];
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $email;

                if ($value['level'] == 1) {
                    header("Location: ../admin/home.php");
                }elseif ($value['level'] == 3) {
                    header("Location: ../user/home.php");
                }

            }else{

                if (isset($_SERVER["HTTP_REFERER"])) {
                    header("Location: " . $_SERVER["HTTP_REFERER"]);
                }

            }

        }
        

    }



?>