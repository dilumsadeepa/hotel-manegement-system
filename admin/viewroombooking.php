


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

$email = $_SESSION["email"];

$foodsql = "SELECT bookrooms.*, rooms.*, users.*
FROM ((bookrooms
INNER JOIN rooms ON bookrooms.rid=rooms.id) INNER JOIN users ON bookrooms.uid = users.email)";
$food = mysqli_query($conn,$foodsql);






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
                            <th>Room Name</th>
                            <th>Custermer Name</th>
                            <th>Custermer email</th>
                            <th>Days</th>
                            <th>Number of rooms</th>
                            <th>Price</th>
                            <th>Order date</th>
                            <th>Order time</th>
                            <th>conferm</th>
                            
                        </tr>
                        <?php 
                            foreach ($food as $f) {
                                echo "<tr>";
                                echo "<td>".$f['rnum']."</td>";
                                echo "<td>".$f['fullname']."</td>";
                                echo "<td>".$f['email']."</td>";
                                echo "<td>".$f['day']."</td>";
                                echo "<td>".$f['numof']."</td>";
                                echo "<td>".$f['price']."</td>";
                                echo "<td>".$f['ardate']."</td>";
                                echo "<td>".$f['dedate']."</td>";
                                echo "<td><form action='finishroom.php' method='post'>
                                <input type='text' value='".$f['id']."' name='id' style='display:none;'>
                                <button class='btn btn-info' type='submit'>Finish</button>
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