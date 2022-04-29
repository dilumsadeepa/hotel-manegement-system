<?php 

if (isset($_POST['name'])) {

    include "../database/database.php";

    $target_dir = "../public/uploads/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $fileName = basename($_FILES["img"]["name"]);

    // Check if image file is a actual image or fake image
    if(isset($_POST["img"])) {
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["img"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    $name = $_POST['name'];
    $fact = $_POST['fcat'];
    $price = $_POST['price'];
    $dis = $_POST['dis'];
    $img = $fileName;
    
    
    
    $sql = "INSERT INTO foods (name, fcat, price, dis, img) Values ('$name','$fcat','$price','$dis','$img')";

    $result = mysqli_query($conn,$sql);

    if ($result) {
        
        if (isset($_SERVER["HTTP_REFERER"])) {
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }else{
        echo "error";
    }





}




?>