


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

    <?php  

include "../database/database.php";

$da = date("Y-m-d");



$bsql = "SELECT wedbook.*, pac.*, users.*
FROM ((wedbook
INNER JOIN pac ON wedbook.pid=pac.id)
INNER JOIN users ON wedbook.uid = users.email) WHERE wedbook.bdate >= '$da'";
$wed = mysqli_query($conn,$bsql);








?>

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
                            <th>Package Name</th>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Price</th>
                            <th>Booking Date</th>
                            <th>Hall Number</th>
                            
                            
                        </tr>
                        <?php 

                            foreach ($wed as $value) {
                                echo "<tr>";
                                echo "<td>".$value['pname']."</td>";
                                echo "<td>".$value['fullname']."</td>";
                                echo "<td>".$value['address']."</td>";
                                echo "<td>".$value['pprice']."</td>";
                                echo "<td>".$value['bdate']."</td>";
                                echo "<td>".$value['phall']."</td>";
                               

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