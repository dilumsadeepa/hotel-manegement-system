<?php 

include "../database/database.php";

$psql = "SELECT * FROM pac";
$pac = mysqli_query($conn,$psql);


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
        <div class="container-fluid">
            <div class="row">
                <h2>Wedding</h2><br><hr>

                <div class="col-sm-3">
                    <!-- Button to Open the Add Packeges -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addpac">
                    Add Packages
                    </button>
                </div>


                <div class="col-sm-3">
                    <!-- view orders -->
                    <a href="viewbookwed.php" class="btn btn-info">View Booking</a>
                    
                </div>

            </div>
            <br><hr><br>
            <div class="row">
                <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Discription</th>
                            <th>Price</th>
                            <th>Hall</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php 
                            foreach ($pac as $value) {
                                echo "<tr>";
                                echo "<td>".$value['pname']."</td>";
                                echo "<td>".$value['pdis']."</td>";
                                echo "<td>".$value['pprice']."</td>";
                                echo "<td>".$value['phall']."</td>";
                                echo "<td><form action='editwedding.php' method='post'>
                                <input type='text' value='".$value['id']."' name='id' style='display:none;'>
                                <button class='btn btn-info' type='submit'>Edit</button>
                                </form></td>";
                                echo "<td><form action='deletewedding.php' method='post'>
                                    <input type='text' value='".$value['id']."' name='id' style='display:none;'>
                                    <button class='btn btn-info' type='submit'>Delete</button>
                                    </form></td>";
                                echo "</tr>";

                            }
                        
                        
                        ?>
                        
                    </table>
                </div>
                </div>
            </div>
        </div>
    </section>







    <!-- The Modal -->
    <div class="modal fade" id="addpac">
        <div class="modal-dialog">
            <div class="modal-content">

            
            <div class="modal-header">
                <h4 class="modal-title">Add Packages</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            
            <div class="modal-body">


                <form action="addpac.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter the name" name="name">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="dis" class="form-label">Discription</label>
                        <textarea class="form-control" rows="5" id="dis" name="dis"></textarea>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="hall" class="form-label">Discription</label>
                        <input type="text" class="form-control" id="hall" placeholder="Enter Hall Number" name="hall">
                    </div>


                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>

            
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>



    
    
    
</body>
</html>