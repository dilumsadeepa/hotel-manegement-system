<?php 
include "../database/database.php";
$id = $_POST['id'];

$roomsql = "SELECT * FROM rooms WHERE id = '$id'";
$room = mysqli_query($conn,$roomsql);

$rtype = "SELECT * FROM roomtypes";
$types = mysqli_query($conn,$rtype);



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
            <h2>Edit Room Data</h2>
            <hr><br>
            <div class="row">
                <div class="col-sm-6">
                    <form action="updateroom.php" method="post">
                        <?php foreach($room as $r){ ?>

                        <div class="mb-3 mt-3">
                            <label for="id" class="form-label">Room id (don't change this fild)</label>
                            <input type="text" class="form-control" value="<?php echo $r['id'];?>" id="id" placeholder="ID" name="id">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="type" class="form-label">Room Type</label>
                            <select class="form-select" name="rtype">
                                <option value ='<?php echo $r['rtype'];?>'><?php echo $r['rtype'];?></option>
                                <?php
                                foreach ($types as $t)
                                    echo "<option value ='".$t['rtype']."'>".$t['rtype']."</option>";
                                ?>
                                
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="ac" class="form-label">AC/ NON AC</label>
                            <select class="form-select" name="ac">
                                <?php echo $r['ac'];?>
                                <option value="AC">AC</option>
                                <option value="Non AC">Non AC</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" value="<?php echo $r['price'];?>" id="price" placeholder="Enter price" name="price">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="dis" class="form-label">Discription</label>
                            <textarea class="form-control" rows="5" id="dis" name="dis"><?php echo $r['dis'];?></textarea>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="nofroom" class="form-label">Number of rooms</label>
                            <input type="number" class="form-control" value="<?php echo $r['nofroom'];?>" id="nofroom" placeholder="Enter number of rooms" name="nofroom">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
        
    </section>

        