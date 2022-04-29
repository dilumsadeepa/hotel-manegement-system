<?php 

    session_start();
    include "../database/database.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $uid = $_POST['uid'];
        $fid = $_POST['fid'];
        $location = $_POST['address'];
        $nofood = $_POST['nofood'];
        $ordate = $_POST['ordate'];
        $ortime = $_POST['ortime'];

       /* echo $uid;
        echo $fid;
        echo $location;
        echo $nofood;
        echo $ordate;
        echo $ortime;*/

        
    
       $sql = "INSERT INTO orderfoods (usid,fid,loca,nofood,ordate,ortime) VALUES ('$uid','$fid','$location','$nofood','$ordate','$ortime')";

        //$result = mysqli_query($conn,$sql);

        if(mysqli_query($conn,$sql)){
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