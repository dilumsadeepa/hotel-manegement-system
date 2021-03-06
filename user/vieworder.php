<?php  

include "../database/database.php";

session_start();

$email = $_SESSION["email"];

$foodsql = "SELECT orderfoods.*, foods.*
FROM orderfoods
INNER JOIN foods ON orderfoods.fid=foods.id WHERE orderfoods.usid='$email'";
$food = mysqli_query($conn,$foodsql);






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
        <div class="containe">
            <div class="row">
                <br><br>
                <h2>View Orders</h2>
                <br>
                <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Number of foods</th>
                            <th>Price</th>
                            <th>Oder date</th>
                            <th>Oder time</th>
                            <th>Pay</th>
                            
                        </tr>
                        <?php 
                            foreach ($food as $f) {
                                echo "<tr>";
                                echo "<td>".$f['name']."</td>";
                                echo "<td>".$f['loca']."</td>";
                                echo "<td>".$f['nofood']."</td>";
                                echo "<td>".$f['price'] * $f['nofood']."</td>";
                                echo "<td>".$f['ordate']."</td>";
                                echo "<td>".$f['ortime']."</td>";
                                echo "<td><form action='pay.php' method='post'>
                                <input type='text' value='".$f['id']."' name='id' style='display:none;'>
                                <button class='btn btn-info' type='submit'>Pay Bill</button>
                                </form></td>";

                            }
                        
                        
                        ?>
                        
                    </table>
                </div>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>