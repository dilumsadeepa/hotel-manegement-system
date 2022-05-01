<?php 

    include "../database/database.php";

    $day = date("Y-m-d");

    $roomsql = "SELECT * FROM rooms";
    $room = mysqli_query($conn,$roomsql);

    $usersql = "SELECT * FROM users";
    $cuser = mysqli_query($conn,$usersql);

    $rordersql = "SELECT * FROM bookrooms WHERE dedate >= $day";
    $rorder = mysqli_query($conn,$rordersql);

    
    $foodsql = "SELECT * FROM foods";
    $food = mysqli_query($conn,$foodsql);

    $orfoodsql = "SELECT * FROM orderfoods";
    $orfood = mysqli_query($conn,$orfoodsql);


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
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Admin Dashbord</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 bg-info">
                    <h3>The Rooms</h3>
                    <?php $count = 0; foreach($room as $r){ $count = $count+1; }?>
                    <h5><?php echo $count; ?></h5>
                    <a href="room.php" class="btn btn-primary">View Rooms</a>
                    <br>
                   
                </div>
                <div class="col-sm-4 bg-primary">
                    <h3>The User</h3>
                    <?php $count = 0; foreach($cuser as $c){ $count = $count+1; }?>
                    <h5><?php echo $count; ?></h5>
                    <a href="user.php" class="btn btn-info">View users</a>
                    <br>
                    
                </div>
                <div class="col-sm-4 bg-secondary">
                    <h3>The Booking Rooms</h3>
                    <?php $count = 0; foreach($rorder as $ro){ $count = $count+1; }?>
                    <h5><?php echo $count; ?></h5>
                    <br><br>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4 bg-success">
                    <h3>The Food Items</h3>
                    <?php $count = 0; foreach($food as $f){ $count = $count+1; }?>
                    <h5><?php echo $count; ?></h5>
                    <a href="food.php" class="btn btn-primary">View Food items</a>
                    <br>
                    
                </div>
                <div class="col-sm-4 bg-warning">
                    <h3>The Food Orders</h3>
                    <?php $count = 0; foreach($orfood as $of){ $count = $count+1; }?>
                    <h5><?php echo $count; ?></h5>
                    <a href="vieworders.php" class="btn btn-primary">View Food Orders</a>
                    <br>
                    
                </div>
            </div>
        </div>
    </section>



    
</body>
</html>