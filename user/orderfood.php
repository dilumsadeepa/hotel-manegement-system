<?php 

    session_start();
    include "../database/database.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $uid = $_POST['uid'];
        $fid = $_POST['fid'];
        $location = $_POST['location'];
        $nofood = $_POST['nofood'];
        $ordate = $_POST['ordate'];
        $ortime = $_POST['ortime'];

        
    
       $sql = "INSERT INTO orderfoods (uid,fid,location,nofood,ordate,ortime) VALUES ('$rid','$uid','$numof','$day','$ardate','$ortime')";

        $result = mysqli_query($conn,$sql);

        if($result){
            $_SESSION['message'] = "You place order successfully";
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