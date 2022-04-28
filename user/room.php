<?php  

include "../database/database.php";

session_start();

$email = $_SESSION["email"];

$roomsql = "SELECT * FROM rooms";
$room = mysqli_query($conn,$roomsql);


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

        <br><hr><br>

        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid" src="../public/img/regi.png" alt="regiser image">
            </div>

            <div class="col-sm-4">

                <form action="loginform.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="uid" class="form-label">Your email:</label>
                        <input type="email" class="form-control" placeholder="email" name="uid" value="<?php echo $email; ?>">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="ardate" class="form-label">Date Arrivel:</label>
                        <input type="date" class="form-control" placeholder="Date Arrivel" name="ardate">
                    </div>

                    <div class="mb-3">
                        <label for="dedate" class="form-label">Date Departure:</label>
                        <input type="date" class="form-control" placeholder="Date Departure" name="dedate">
                    </div>

                    <div class="mb-3">
                        <label for="nop" class="form-label"># of person:</label>
                        <input type="number" class="form-control" placeholder="# of person" name="nperson">
                    </div>

                    <div class="mb-3">
                        <label for="Room" class="form-label">Room Type:</label>
                        
                        <select class="form-select" name="rid">
                            <?php foreach ($room as $r) {
                                echo "<option value = ".$r['id'].">".$r['rtype']."</option>";
                            } ?>
                        </select>
                    </div>

                    


                    
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>
            </div>
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