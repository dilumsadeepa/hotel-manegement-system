<?php  

include "../database/database.php";

session_start();

$email = $_SESSION["email"];

$foodsql = "SELECT * FROM foods";
$food = mysqli_query($conn,$foodsql);



if (isset($_SESSION['message'])) {
    $ms = $_SESSION['message'];
}else{
    $ms = "";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- style sheet -->
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">

    <!-- javascript -->
    <script src="../public/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <?php include "dashbord.php"; ?>

    <section class="content">
        <div class="container">
            <br><br>
            <div class="row">
                <div class="col-sm-3">
                    <a href="foodform.php" class="btn btn-info">Oredr form</a>
                </div>
                <div class="col-sm-3">
                    <a href="vieworder.php" class="btn btn-info">View order</a>
                </div>
            </div>
            <br><hr><br>
            <h3>Foods in our kitchen</h3>
            <br>
            <!-- food view -->
            <?php foreach($food as $f){ ?>
                <div class="row">
                    <div class="col-sm-3 box">
                        <img src="../public/uploads/<?php echo $f['img']; ?>" alt="<?php echo $f['name']; ?>" class="img-fluid">
                        <hr>
                        <h4><?php echo $f['name']; ?></h4>
                        <h5><?php echo $f['fcat']; ?>  - Rs. <?php echo $f['price']; ?></h5>
                        <p><?php echo $f['dis']; ?></p>
                        <form action="foodform.php" method="post">
                            <input type="text" value="<?php echo $f['id']; ?>" name="id" style="display:none;">
                            <button type="submit" class="btn btn-primary">order</button>
                        </form>
                    </div>
                </div>
            <?php } ?>

        </div>
    </section>

    



    <style>
        .box{
            background: #16BFFD;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #CB3066, #16BFFD);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #CB3066, #16BFFD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            border: 2px solid black;
            border-radius: 14px;
            padding: 3px;
            text-align: center;
            color: white;
        }
</style>



    
</body>
</html>