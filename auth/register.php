<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <!-- style sheet -->
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">

    <!-- javascript -->
    <script src="public/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <!--div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php include "../layout/nav.php"; ?>
            </div>
        </div>
    </div-->
    <br><br>

    <div class="container-fluid">
    <h2 class="auhead">REGISTER</h2>
        <div class="row">

            <div class="col-sm-1"></div>

            <div class="col-sm-6">
                <a href="login.php" class="btn btn-info"> Alredy have an account? Please login</a>

                <img class="img-fluid" src="../public/img/regi.png" alt="regiser image">
            </div>

            <div class="col-sm-4">

                <form action="registerform.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Enter Full Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter full Name" name="name">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Enter Email:</label>
                        <input type="email" class="form-control" id="mail" placeholder="Enter Email" name="email">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="tel" class="form-label">Enter Contact Number:</label>
                        <input type="tel" class="form-control" id="tel" placeholder="Enter Contact Number" name="tel">
                    </div>

                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="pwd" class="form-label">Confirm Password:</label>
                        <input type="password" class="form-control" id="cpwd" placeholder="Enter password again" name="password">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="address" class="form-label">Enter Address:</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="gender" class="form-label">Select Gender:</label>
                        <select class="form-select" id="gender" name="gender">
                            <option value="">Select One</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            
                        </select>
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