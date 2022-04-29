<?php  

include "../database/database.php";

session_start();

$email = $_SESSION["email"];

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $foodsql = "SELECT * FROM foods WHERE id ='$id'";
}else{
    $foodsql = "SELECT * FROM foods";
}


$food = mysqli_query($conn,$foodsql);



if (isset($_SESSION['message'])) {
    $ms = $_SESSION['message'];
}else{
    $ms = "";
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
        <br>
        <div class="alert alert-primary" role="alert">
            <?php echo $ms; ?>
        </div>
        <br>

        <br><hr><br>

        <div class="container-fluid">
            <h2>Food ordering</h2>
            <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid" src="../public/img/regi.png" alt="regiser image">
            </div>

            <div class="col-sm-4">

                <form action="bookroom.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="uid" class="form-label">Your email:</label>
                        <input type="email" class="form-control" placeholder="email" name="uid" value="<?php echo $email; ?>">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="ordate" class="form-label">Date of order:</label>
                        <input type="date" class="form-control" placeholder="Date of order" name="ordate">
                    </div>

                    <div class="mb-3">
                        <label for="dedate" class="form-label">Location or room number:</label>
                        <input type="text" class="form-control" placeholder="Enter the address or room number" name="location">
                    </div>

                    <div class="mb-3">
                        <label for="food" class="form-label">food:</label>
                        
                        <select class="form-select" name="fid">
                            <?php foreach ($food as $f) {
                                echo "<option value = ".$f['id'].">".$f['name']."</option>";
                            } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nop" class="form-label">Number of foods:</label>
                        <input type="number" class="form-control" placeholder="Number of foods" name="nofood">
                    </div>

                    <div class="mb-3">
                        <label for="time" class="form-label">Time of order:</label>
                        
                        <select class="form-select" name="ortime">
                            <option value = "Breckfirst">Breckfirs</option>
                            <option value = "Lunch">Lunch</option>
                            <option value = "Dinner">Dinner</option>
                            <option value = "Morning">Morning</option>
                            <option value = "Tea time 10">Tea time 10</option>
                            <option value = "Tea time 4">Tea time 4</option>
                           
                        </select>
                    </div>

                    


                    
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>
            </div>
        </div>











    </section>

    </body>
</html>