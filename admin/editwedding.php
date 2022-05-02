<?php 
include "../database/database.php";
$id = $_POST['id'];

$wsql = "SELECT * FROM pac WHERE id = '$id'";
$wed = mysqli_query($conn,$wsql);





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
            <h2>Edit Wedding Data</h2>
            <hr><br>
            <div class="row">
                <div class="col-sm-6">
                    <form action="updatewedding.php" method="post" enctype="multipart/form-data">
                        <?php foreach($wed as $value){ ?>
                    
                    <div class="mb-3 mt-3">
                        <label for="id" class="form-label">Package id (don't change this fild)</label>
                        <input type="text" class="form-control" value="<?php echo $value['id'];?>" id="id" placeholder="ID" name="id">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" value="<?php echo $value['pname'];?>" id="name" placeholder="Enter the name" name="name">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="dis" class="form-label">Discription</label>
                        <textarea class="form-control" rows="5" id="dis" name="dis"><?php echo $value['pdis'];?></textarea>
                    </div>


                    <div class="mb-3 mt-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" value="<?php echo $value['pprice'];?>" id="price" placeholder="Enter price" name="price">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="hall" class="form-label">Hall</label>
                        <input type="text" class="form-control" value="<?php echo $value['phall'];?>" id="hall" placeholder="Enter price" name="hall">
                    </div>

                   

                   

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
        
    </section>

        