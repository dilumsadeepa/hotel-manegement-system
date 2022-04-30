<?php 

    session_start();
    include "../database/database.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $wid = $_POST['wid'];
        $uid = $_POST['uid'];
        $hid = $_POST['hid'];
        $numof = $_POST['nperson'];
        $ardate = $_POST['ardate'];
        $package = $_POST['packid'];

        $ad = strtotime($ardate);
        $day = ($ad)/60/60/24;
    
       $sql = "INSERT INTO bookwedding (wid,uid,hid,nperson,ardate,packid) VALUES ('$rid','$uid','$hid','$nperson','$ardate','$packid')";

        $result = mysqli_query($conn,$sql);

        if($result){
            $_SESSION['message'] = "You Book a date for wedding successfully";
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }else {
            $_SESSION['message'] = "We are sorry. we can not book a date. something went wrong";
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }


    }
