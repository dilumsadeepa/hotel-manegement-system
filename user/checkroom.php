<?php 

include "../database/database.php";

$ardate = $_POST['ardate'];
$dedate = $_POST['dedate'];


$roomsql = "SELECT * FROM rooms";
$booksql = "SELECT * FROM bookrooms WHERE bookrooms.ardate <= '$ardate' OR bookrooms.dedate <= '$ardate'";

$room = mysqli_query($conn,$roomsql);
$book = mysqli_query($conn,$booksql);

$count = 0;
$msg = "";
foreach($room as $r){
    foreach($book as $b){
        if($r['id'] == $b['rid']){
            $count = $count + 1;
        }
    }
    if($count <= $r['nofroom']){
        
    }
    

}











?>