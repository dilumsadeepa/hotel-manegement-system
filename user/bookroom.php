<?php 

    session_start();
    include "../database/database.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $rid = $_POST['rid'];
        $uid = $_POST['uid'];
        $numof = $_POST['nperson'];
        $ardate = $_POST['ardate'];
        $dedate = $_POST['dedate'];

        $ad = strtotime($ardate);
        $dd = strtotime($dedate);
        $day = ($dd - $ad)/60/60/24;
    
       $sql = "INSERT INTO bookrooms (rid,uid,numof,day,ardate,dedate) VALUES ('$rid','$uid','$numof','$day','$ardate','$dedate')";

        $result = mysqli_query($conn,$sql);

        if($result){
            $_SESSION['message'] = "You Book a room successfully";
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }else {
            $_SESSION['message'] = "We are sorry. we can not book a room. something went wrong";
            if (isset($_SERVER["HTTP_REFERER"])) {
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }


    }











?>