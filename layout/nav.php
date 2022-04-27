<nav class="navbar navbar-expand-lg navbar-dark navbox">
  <div class="container-fluid">
      
        <a class="navbar-brand" href="#">
            <img src="public/img/logo.png" alt="" width="130px">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </li>
                 <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">LOCATION</a>
                </li>
                 <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">FACILITIES</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">DINING</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="wedding.php">WEDDING</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="accomodation.php" >
                    ACCOMODATION
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">DELUXE ROOM</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">LUXURY ROOM</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">FAMILY ROOMS</a></li>
                    <li><hr class="dropdown-divider"></li>
                     <li><a class="dropdown-item" href="#">LUXURY SUITE</a></li>
                    <li><hr class="dropdown-divider"></li>
                     <li><a class="dropdown-item" href="#">JUNIOR SUITE</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">MOUNTBATTEN SUITE</a></li>
                    <li><hr class="dropdown-divider"></li>

                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">OFFERS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">CONTACT US</a>
                </li>

            </ul>
        </div>

        <div class="d-flex">
            <a href="auth/login.php" class="btn btn-success" id="login">Login</a>
            <a href="auth/register.php" class="btn btn-success" id="register">Register</a>
        </div>

        <!--form class="d-flex">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form-->

    </div>
  </div>
</nav>



<style>
    .navbox{
        background: #2c3e50;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #3498db, #2c3e50);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #3498db, #2c3e50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        font-family: 'Josefin Sans', sans-serif;
        font-family: 'Libre Bodoni', serif;
       
    }
    .nav-item{
        padding: 8px 12px;
        position: relative;
        border-radius:10px  ;
    }

    .nav-item:hover{
    background: #0B5345;


}

.nav-item:hover::after{
    width: 100%;
}
    

    
</style>