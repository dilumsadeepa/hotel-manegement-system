<?php 
include "../database/database.php";
$id = $_POST['id'];

$foodsql = "SELECT * FROM foods WHERE id = '$id'";
$food = mysqli_query($conn,$foodsql);

$fcat = "SELECT * FROM foodcat";
$cat = mysqli_query($conn,$fcat);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Paradise Inn</title>

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
            <h2>Edit Food Data</h2>
            <hr><br>
            <div class="row">
                <div class="col-sm-6">
                    <form action="updatefood.php" method="post" enctype="multipart/form-data">
                        <?php foreach($food as $f){ ?>
                    
                    <div class="mb-3 mt-3">
                        <label for="id" class="form-label">Food id (don't change this fild)</label>
                        <input type="text" class="form-control" value="<?php echo $f['id'];?>" id="id" placeholder="ID" name="id">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" value="<?php echo $f['name'];?>" id="name" placeholder="Enter the name" name="name">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="type" class="form-label">Food Catagary</label>
                        <select class="form-select" name="fcat">
                        <option value ='<?php echo $f['cat'];?>'><?php echo $f['cat'];?></option>
                            <?php
                            foreach ($cat as $c)
                                echo "<option value ='".$c['cat']."'>".$c['cat']."</option>";
                            ?>
                            
                        </select>
                    </div>


                    <div class="mb-3 mt-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" value="<?php echo $f['price'];?>" id="price" placeholder="Enter price" name="price">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="dis" class="form-label">Discription</label>
                        <textarea class="form-control" rows="5" id="dis" name="dis"><?php echo $f['dis'];?></textarea>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="img" class="form-label">select the image</label>
                        <input type="text" class="form-control" id="img" value="<?php echo $f['img'];?>" placeholder="image" name="img">
                    </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
        
    </section>

        