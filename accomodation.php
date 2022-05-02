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

    <br><br><br>

        <div class="After">
            <h1>Accomodation</h1>
            <br>

            <p>Adore your accommodation in Kandy with your very own view of flowing river, lush hills, lake and looming mountains.
                 Each of our rooms extend out to a balcony with a stunning vista of your surroundings. Spacious and stylish, the
                  116 rooms at the Paradise Inn are uniquely designed to portray the city of Kandy – from the wooden floors to the 
                  furniture – each piece displays the local influence which was created in giving you the most unique holiday experience 
                  among Sri Lanka’s luxury resorts.<br><br>
                Basic amenities such as tea and coffee percolators, hairdryers, telephones, and safes can be found in all of our
                 accommodation options. Further facilities include interconnecting rooms, additional cots or beds, 24-hour room service, 
                 laundry service, and dry cleaning.<br><br>
                Check-in and check-out is at 12 noon, and if required, can be extended upon availability. Furthermore, driver’s
                 accommodation and meals can be arranged.</p>
        
        <div class="row1">
            <div class="course-col">
                <img src="public/img/deluxe.jpg" alt="">
                <h3>
                    Deluxe Room
                </h3>
                <p>
                Our luxury hotel in Kandy offers deluxe rooms that are spacious and well laid out, with a writing desk, 
                couch and tub chairs, as well as a private balcony.
                </p>
                <a href="deluxe.php"><button onclick="">Learn more</button></a>
                 
            </div>
            <div class="course-col">
                <img src="public/img/luxury.jpg" alt="">
                <h3>
                    Luxury Room
                </h3>
                <p>
                Enjoy a peaceful holiday retreat, away from the bustle of the city, in the beautiful up-country of Sri Lanka. Luxury hotels
                </p>
                <a href="luxury.php"><button onclick="">Learn more</button></a>
            </div>
            <div class="course-col">
            <img src="public/img/family.jpg" alt="">
                <h3>
                    Family Room
                </h3>
                <p>
                For those of you seeking modern facilities and gracious hospitality distinguishes in Sri Lanka will find a winner with Earl’s Regency.
                </p>
                <a href="family.php"><button onclick="">Learn more</button></a>
            </div>
        </div>
        <div class="row2">
            <div class="course-col">
            <img src="public/img/junior.jpg" alt="">
                <h3>
                    Junior Suit
                </h3>
                <p>
                Enjoy the comforts of a 5 star hotel in Kandy as you and your partner honeymoon in the paradise island of Sri Lanka.
                </p>
                <a href="junior.php"><button onclick="">Learn more</button></a>
                 
            </div>
            <div class="course-col">
            <img src="public/img/luxury_suite.jpg" alt="">
                <h3>
                    Luxury Suite
                </h3>
                <p>
                Mountain view with outdoor and indoor private Jacuzzi, with separate bedroom, living/dining area and private terrace overlooking the river
                </p>
                <a href="luxury_suite.php"><button onclick="">Learn more</button></a>
                 
            </div>
            <div class="course-col">
            <img src="public/img/mountbatten.jpg" alt="">
                <h3>
                    Mountbatten Suite
                </h3>
                <p>
                Enjoy a peaceful holiday retreat, away from the bustle of the city, in the beautiful upcountry of Sri Lanka
                </p>
                <a href="mountbatten.php"><button onclick="">Learn more</button></a>
                 
            </div>

        </div>
    <br><br>





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

    
</body>
</html>