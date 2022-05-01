<!--nav class="navbar navbar-expand-lg navbar-dark navbox">
  <div class="container-fluid">
      
        <a class="navbar-brand" href="#">
            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Hottel
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>

        <div class="d-flex">
            <a href="auth/logout.php" class="btn btn-success" id="login">Logout</a>
            
        </div>

        <form class="d-flex">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

    </div>
  </div>
</nav-->


<!-- The sidebar -->
<div class="sidebar navbox">
  <br>
  <h5><?php 
  if (isset($_SESSION["name"])) {
    echo $_SESSION["name"];
  }else{
    header("Location: ../auth/login.php");
  }
  ?></h5>
  <img src="../public/img/menu.png" width="40px" class="menu-icon" id="micon" onclick="showmenu()">
  <a class="active" href="home.php" id="sidebar">Home</a>
  <a href="room.php" id="sidebar">Rooms</a>
  <a href="food.php" id="sidebar">Food</a>
  <a href="wedding.php" id="sidebar">Wedding</a>
  
</div>



<style>
    .navbox{
        background: #2c3e50;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #3498db, #2c3e50);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #3498db, #2c3e50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        color: white;
    }

    /* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  color: white;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

.menu-icon{
  visibility: hidden;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  
  .menu-icon{
    visibility: visible;
  }
  
  .sidebar a {
    display: none;
    text-align: center;
    float: none;
  }
}
</style>

<script>
  function showmenu() {
    var sidebar = document.getElementById('sidebar');
    
    if (sidebar.style.display === "none") {
      sidebar.style.display = "block";
    } else {
      sidebar.style.display = "none";
    }
  }
</script>