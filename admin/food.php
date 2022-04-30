<?php 

include "../database/database.php";

$catsql = "SELECT * FROM foodcat";
$cat = mysqli_query($conn,$catsql);

$foodsql = "SELECT * FROM foods";
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
        <div class="container-fluid">
            <div class="row">
                <h2>Foods</h2><br><hr>

                <div class="col-sm-3">
                    <!-- Button to Open the Add Room -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addfood">
                    Add Foods
                    </button>
                </div>

                <div class="col-sm-3">
                    <!-- Button to Open the Types -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addcat">
                    Add Food's Catagary
                    </button>
                </div>

                <div class="col-sm-3">
                    <!-- view orders -->
                    <a href="vieworders.php" class="btn btn-info">View Orders</a>
                    
                </div>

            </div>
            <br><hr><br>
            <div class="row">
                <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php 
                            foreach ($food as $f) {
                                echo "<tr>";
                                echo "<td>".$f['name']."</td>";
                                echo "<td>".$f['fcat']."</td>";
                                echo "<td>".$f['price']."</td>";
                                echo "<td><img src='../public/uploads/".$f['img']."' width = '40px'></td>";
                                echo "<td><form action='editfood.php' method='post'>
                                <input type='text' value='".$f['id']."' name='id' style='display:none;'>
                                <button class='btn btn-info' type='submit'>Edit</button>
                                </form></td>";
                                echo "<td><form action='deletefood.php' method='post'>
                                    <input type='text' value='".$f['id']."' name='id' style='display:none;'>
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
    <div class="modal fade" id="addfood">
        <div class="modal-dialog">
            <div class="modal-content">

            
            <div class="modal-header">
                <h4 class="modal-title">Add food</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            
            <div class="modal-body">


                <form action="addfood.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter the name" name="name">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="type" class="form-label">Food Catagary</label>
                        <select class="form-select" name="fcat">
                            <?php
                            foreach ($cat as $c)
                                echo "<option value ='".$c['cat']."'>".$c['cat']."</option>";
                            ?>
                            
                        </select>
                    </div>


                    <div class="mb-3 mt-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="dis" class="form-label">Discription</label>
                        <textarea class="form-control" rows="5" id="dis" name="dis"></textarea>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="img" class="form-label">select the image</label>
                        <input type="file" class="form-control" id="img" placeholder="image" name="img">
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



    <!-- The Modal for food cat -->
    <div class="modal fade" id="addcat">
        <div class="modal-dialog">
            <div class="modal-content">

            
            <div class="modal-header">
                <h4 class="modal-title">Add Food Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            
            <div class="modal-body">


                <form action="addfoodcat.php" method="post">

                    <div class="mb-3 mt-3">
                        <label for="fcat" class="form-label">Enter the category Name</label>
                        <input type="text" class="form-control" id="fcat" placeholder="Enter the catagary name" name="cat">
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