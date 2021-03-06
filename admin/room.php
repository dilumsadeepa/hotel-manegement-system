<?php 

include "../database/database.php";

$rtype = "SELECT * FROM roomtypes";
$types = mysqli_query($conn,$rtype);

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
        <div class="container-fluid">
            <div class="row">
                <h2>Hotel Rooms</h2><br><hr>

                <div class="col-sm-3">
                    <!-- Button to Open the Add Room -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addroom">
                    Add Room
                    </button>
                </div>

                <div class="col-sm-3">
                    <!-- Button to Open the Types -->
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addtype">
                    Add Room Types
                    </button>
                </div>

                <div class="col-sm-3">
                    <!-- view orders -->
                    <a href="viewroombooking.php" class="btn btn-info">View Booked rooms</a>
                    
                </div>

            </div>
            <br><hr><br>
            <div class="row">
                <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <tr>
                            <th>Room Number</th>
                            <th>Room Type</th>
                            <th>AC/NON AC</th>
                            <th>Price</th>
                            <th>Number of Rooms</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php 
                            foreach ($room as $r) {
                                echo "<tr>";
                                echo "<td>".$r['rnum']."</td>";
                                echo "<td>".$r['rtype']."</td>";
                                echo "<td>".$r['ac']."</td>";
                                echo "<td>".$r['price']."</td>";
                                echo "<td>".$r['nofroom']."</td>";
                                echo "<td><form action='editroom.php' method='post'>
                                <input type='text' value='".$r['id']."' name='id' style='display:none;'>
                                <button class='btn btn-info' type='submit'>Edit</button>
                                </form></td>";
                                echo "<td><form action='deleteroom.php' method='post'>
                                    <input type='text' value='".$r['id']."' name='id' style='display:none;'>
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
    <div class="modal fade" id="addroom">
        <div class="modal-dialog">
            <div class="modal-content">

            
            <div class="modal-header">
                <h4 class="modal-title">Add Rooms</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            
            <div class="modal-body">


                <form action="addroom.php" method="post">

                    <div class="mb-3 mt-3">
                        <label for="rnum" class="form-label">Enter the room number</label>
                        <input type="text" class="form-control" id="rnum" placeholder="Enter the room number" name="rnum">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="type" class="form-label">Room Type</label>
                        <select class="form-select" name="rtype">
                            <?php
                            foreach ($types as $t)
                                echo "<option value ='".$t['rtype']."'>".$t['rtype']."</option>";
                            ?>
                            
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="ac" class="form-label">AC/ NON AC</label>
                        <select class="form-select" name="ac">
                            <option value="AC">AC</option>
                            <option value="Non AC">Non AC</option>
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
                        <label for="nofroom" class="form-label">Number of rooms</label>
                        <input type="number" class="form-control" id="nofroom" placeholder="Enter number of rooms" name="nofroom">
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



    <!-- The Modal for types -->
    <div class="modal fade" id="addtype">
        <div class="modal-dialog">
            <div class="modal-content">

            
            <div class="modal-header">
                <h4 class="modal-title">Add Types</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            
            <div class="modal-body">


                <form action="addroomtype.php" method="post">

                    <div class="mb-3 mt-3">
                        <label for="rtype" class="form-label">Enter the type name</label>
                        <input type="rtype" class="form-control" id="rtype" placeholder="Enter Room type name" name="rtype">
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