<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The paradise Inn</title>

    <!-- style sheet -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">

    <!-- javascript -->
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,700;1,
600;1,700&family=Libre+Bodoni:ital,wght@0,400;0,500;1,400;1,500;1,600&family=M+PLUS+Rounded+1c:
wght@300;400;500;700&family=Monoton&family=Pacifico&family=Tapestry&display=swap" rel="stylesheet">
</head>
<body>
        
    

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <?php 
                    require "layout/nav.php";
                ?>
            </div>
        </div>

        <!-- image slider -->
        <div class="row">
            <div class="col-sm-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active slid-box">
                            <img src="public/img/para9.jpg" class="d-block w-100" alt="...">
                            <div class="hotelname">
                                <h1>The Paradise Inn</h1>
                                <p>Your Home Away From Home</p>
                            </div>
                        </div>
                        <div class="carousel-item slid-box">
                            <img src="public/img/para1.jpg" class="d-block w-100" alt="...">
                            <div class="hotelname">
                                <h1>The Paradise Inn</h1>
                                <p>Your Home Away From Home</p>
                            </div>
                        </div>
                        <div class="carousel-item slid-box">
                            <img src="public/img/4.jpg" class="d-block w-100" alt="...">
                            <div class="hotelname">
                               <h1>The Paradise Inn</h1>
                                <p>Your Home Away From Home</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
        </div>
        
    </div>

    <br>
    <div class="deluxe">
        <ul type="none">
            <li><a href="">DELUXE ROOM</a></li>
            <li><a href="">LUXURY ROOM</a></li>
            <li><a href="">FAMILY ROOM</a></li>
            <li><a href="">JUNIOR SUITE</a></li>
            <li><a href="">LUXURY SUITE</a></li>
            <li><a href="">MOUNTBATTEN SUITE</a></li>
    </div>
        
    </ul>
    <h1>DELUXE ROOM</h1>
    <p>Unwind and experience everything Kandy has to offer from the spacious Deluxe Room at the Earl’s Regency,
         a popular luxury hotel among Sri Lanka Kandy hotels. Come back to a relaxing environment after a long day of 
         exploring the beautiful land. An ideal choice for its exceptional value, the Deluxe Room has more space and more 
         amenities to make your stay in a luxury hotel in Kandy a memorable one.

Location : Main building and South Wing</p>

    <h3>prices</h3>
    <p>All rates are per room, for bed and breakfast, including tax and service.</p>

    <img src="public/img/deluxe.jpg">
    <img src="public/img/TV2.jpg">
    <img src="public/img/bathroom3.jpg">
    <img src="public/img/balconi2.jpg">

    <h3>FACILITIES</h3>
    <ul type="sqaure">
        <li>King-sized Bed or Twin Beds</li>
        <li>Divided Living Area</li>
        <li> Private Balcony</li>
        <li>Fully Air-conditioned</li>
        <li>TV with Satellite and Local Channels</li>
        <li>Writing Desk</li>
        <li>Bathtub with Free Toiletries</li>
        <li>Hairdryer</li>
        <li>Tea and Coffee Making Facilities</li>
        <li>Bottled Water</li>
        <li>Telephone with International Direct Dialling Facilities</li>
        <li>In-Room Digital Safe</li>
        <li>Stocked Mini-Fridge at Cost</li>
        <li>24 Hour Room Service</li>   
        <li>Laundry and Dry Cleaning Service at Cost</li>
</ul>






    <style>

        .slid-box{
            height: 90vh;
        }

        .chbox{
            background: #16BFFD;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #CB3066, #16BFFD);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #CB3066, #16BFFD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            padding: 20px;
        }

    </style>

        <br><br><br>
</body>
</html>