<?php 

include "../database/database.php";

session_start();
$email = $_SESSION["email"];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['ardate']) {
        $date = $_POST['ardate'];
    }
}
else{
    $date = date("Y-m-d");
}

$checkroomsql = "SELECT bookrooms.*, rooms.* FROM bookrooms INNER JOIN rooms ON bookrooms.rid=rooms.id WHERE bookrooms.uid = '$email' AND bookrooms.ardate = '$date'";
$checkroom = mysqli_query($conn,$checkroomsql);
$count = 0;
$payment = 0;
foreach ($checkroom as $value) {
    $count = $count + $value['numof'];
    $payment = $payment + (($value['price'] * $value['numof']) * $value['day']);
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
    <br><br><br>

        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-3 chbox">
                    <form action="" method="post">
                        <label for="ardate" class="form-label">Date Arrivel:</label>
                        <input type="date" class="form-control" placeholder="Date Arrivel" name="ardate">
                        <button type="submit" class="btn btn-info">Check from date</button>
                    </form>
                </div>

                <div class="col-sm-1"></div>

                <div class="col-sm-3 bg-info">
                    <h3>Number of rooms you Booked</h3>
                    <h4><?php echo $count; ?></h4>
                </div>

                <div class="col-sm-1"></div>

                <div class="col-sm-3 bg-primary">
                    <h3>Your Payment is</h3>
                    <h4>RS. <?php echo $payment; ?></h4>
                </div>

            </div>
        </div>
    <br><br>
        <div class="container chbox">
            <!-- form to check rooms -->
            <form>
                <div class="row">
                    <div class="col">
                    <label for="ardate" class="form-label">Date Arrivel:</label>
                        <input type="date" class="form-control" placeholder="Date Arrivel" name="ardate">
                    </div>
                    <div class="col">
                    <label for="dedate" class="form-label">Date Departure:</label>
                        <input type="date" class="form-control" placeholder="Date Departure" name="dedate">
                    </div>
                    <div class="col">
                    <label for="nop" class="form-label"># of person:</label>
                        <input type="number" class="form-control" placeholder="# of person" name="nperson">
                    </div>
                    <div class="col">
                        <input type="submit" class="btn btn-primary" value="Find Now">
                    </div>
                </div>
            </form>
        </div>
    </section>



<style>
    .chbox{
            background: #16BFFD;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #CB3066, #16BFFD);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #CB3066, #16BFFD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            padding: 20px;
        }
</style>

    
</body>
</html>