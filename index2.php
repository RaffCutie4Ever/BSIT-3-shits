<?php

include("val.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="js/bootstrap-4.3.1.css">
	<script src="js/bootstrap-4.3.1.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>

	
<title>Kalasag Shoe Corp</title>
	
	
	
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1020;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px auto;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
	<link rel="stylesheet" href="css/carousel.css">
</head>

<body>

	<!---NAVBAR---->
	<nav>
<header style="position: relative; background: black;">
 
    
       <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">Home</a>
  <a href="products.php">Products</a>
  <a href="#">About Us</a>
 <a href="shoppingcart.php">Cart</a>
 <a href="logout.php">Log out</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
  

      
		 
    </div>
  </nav>
</header>
	
		<!----------Carousel----------->
		<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
    </div>
    <div class="carousel-inner" >
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <img src="image/background/1.jpg">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
           <img src="image/background/2.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption ">
            <img src="image/background/3.jpg">
          </div>
        </div>
      </div>
		<div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption ">
           <img src="image/background/4.jpg">
          </div>
        </div>
      </div>
		<div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <img src="image/background/5.jpg">
          </div>
        </div>
      </div>
		<div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption ">
            <img src="image/background/6.jpg">
          </div>
        </div>
      </div>
		<div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption ">
            <img src="image/background/7.jpg">
          </div>
        </div>
      </div>
		<div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption ">
           <img src="image/background/8.jpg">
          </div>
        </div>
      </div>
		<div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption ">
           <img src="image/background/9.jpg">
          </div>
        </div>
      </div>
		<div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption ">
           <img src="image/background/10.jpg">
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
	
  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Qoutes for the Day</h1>
      <p class="col-md-8 fs-4" id="q"></p>
    </div>
  </div>
	
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="m-4">
			<ul class="pagination justify-content-center">
				<li class="page-item"><a href="../index.html" class="page-link">Home</a></li>
				<li class="page-item"><a href="../products.html" class="page-link">Products</a></li>
				<li class="page-item"><a href="../products.html" class="page-link">About</a></li>
				<li class="page-item"><a href="#" class="page-link">Cart</a></li>
			</ul>
		
	</div>
	
  <footer class="p-5 bg-dark text-white text-center
position-relative">
  <div class="container">
    <p class="lead">
      Copyright &copy; 2022. All rights reserved
    </p>
    <a href="adlog.html">Admin Page</a>
    <a href="#" class="position-absolute bottom-0 end-0 p-5">
      <i class="bi bi-arrow-up-circle h1"></i>
    </a>
  </div>
</footer>


	<script src="js/bootstrap.bundle.min.js"></script>
	<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

var category = 'happiness'
    $.ajax({
        method: 'GET',
        url: 'https://api.api-ninjas.com/v1/quotes?category=' + category,
        headers: { 'X-Api-Key': 'ToCfG0A/2Y9rS7AiwSj0BA==5YvMUReDisFAtJ0P'},
        contentType: 'application/json',
        success: function(result) {
            console.log(result);

            var q=result;
            var quote=result[0].quote;
            console.log(quote);

            let q1 = document.getElementById("q")
            q1.textContent =quote 
        },
        error: function ajaxError(jqXHR) {
            console.error('Error: ', jqXHR.responseText);
        }
    });
</script>
</body>
</html>