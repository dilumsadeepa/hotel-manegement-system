<?php include "../database/database.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <!-- style sheet -->
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">

    <!-- javascript -->
    <script src="public/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    
    <br><br>

    <div class="container-fluid">
        <h2 class="auhead">LOGIN</h2>
        <div class="row">

            <div class="col-sm-1"></div>

            <div class="col-sm-6">
                <a href="register.php" class="btn btn-info"> If you haven't account, Plase Regiser</a>
                <img class="img-fluid" src="../public/img/regi.png" alt="regiser image">
            </div>

            <div class="col-sm-4">

                <form action="loginform.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Enter Email:</label>
                        <input type="email" class="form-control" id="mail" placeholder="Enter Email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>

            <div class="col-sm-1"></div>

        </div>
    </div>

    <style>
        .auhead{
            text-align: center;
        }
    </style>
    
</body>
</html>