<?php
    include "../database/database.php";
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];

        $sql = "insert into users (name,email,tel,password,address,gender) values ('$name','$email','$tel','$password','$address','$gender')";
        
        if (mysqli_query($conn,$sql)) {
           
                    $_SESSION["name"] = $name;
                    $_SESSION["email"] = $email;

                   
                    header("Location: ../user/home.php");
                   
               
            


        }else{
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }

    }



?>