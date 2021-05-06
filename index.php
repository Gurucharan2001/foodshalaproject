<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
    <link rel="stylesheet" href="common_files/css/bootstrap.min.css" />
    <script src="common_files/js/jquery-3.6.0.min.js"></script>
    <script src="common_files/js/popper.min.js"></script>
    <script src="common_files/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../common_files/css/animate.css" />
    <link rel="stylesheet" href="Restaurants/css/index.css" />
    <script src="Restaurants/js/index.js"></script>
    <script src="Restaurants/js/wow.min.js"></script>
</head>
<body>
        <!--nav bar of home page-->
        <nav class="navbar navbar-expand-lg bg-light navbar-light mt-0 sticky-top" id="nav-bar">
        <a href="index.php" class="navbar-brand header-font">
            <img src="../common_files/img/logo.png" alt="logo" id="logo" />
                Foodshala    
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-slider">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-slider">
            <ul class="navbar-nav text-dark float-left ml-3">
                <li class="nav-item"><a href="index.php" class="nav-link" id="home">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Popular Restaurants</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
            <ul class="navbar-nav text-light ml-auto">
                <li class="nav-item"><a href="Restaurants/php/register.php" class="nav-link">Register</a></li>
                <li class="nav-item"><a href="Restaurants/php/login.php" class="nav-link">Login</a></li>
            </ul>
        </div>
    </nav>
    <!--end navbar for home page-->

    
    <!--start jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center mt-3 text-light wow fadeIn slower" id="search-food">
        <div class="container">
        <h1 class="header-font">FOODSHALA</h1>
        <p class="inner-font letter-space">Good food makes good health</p>
        <form>
		    <div class="input-group mx-auto">
				<input type="search" name="search" class="form-control border border-danger border-right-0" placeholder="Search for restaurants or Dish" id="search-input" />
				<div class="input-group-append" style="width:200px;">
					<button type="button" class="btn btn-danger text-light">Search</button>
				</div>
			</div>
		</form>

        </div>

    </div>
    <!--end jumbotron-->
 
    <div class="container-fluid text-center" style="overflow:hidden">
        <h1 class="header-font">Food List</h1>
        <div class="container mt-3">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="card wow fadeInLeft slower">
                        <div class="card-body">
                            <h4 class="inner-font">Chicken Momo</h4>
                            <div class="food-img">
                                <img src="Restaurants/img/momo.jpg" alt="momo" />
                            </div>
                            <p class="letter-space">Made with  Chicken,vegetables,sauce</p>
                            <p class="letter-space">Price: 100/</p>
                            <button class="btn btn-primary">Order now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card wow fadeInRight slower">
                        <div class="card-body">
                            <h4 class="inner-font">Veg Burger</h4>
                            <div class="food-img">
                                <img src="Restaurants/img/burger.jpg" alt="burger" />
                            </div>
                            <p class="letter-space">Made with  Chicken,vegetables,sauce</p>
                            <p class="letter-space">Price: 100/</p>
                            <button class="btn btn-primary">Order now</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="card wow fadeInLeft slower">
                        <div class="card-body">
                            <h4 class="inner-font">Chicken Chaomin</h4>
                            <div class="food-img">
                                <img src="Restaurants/img/chaomin.jpg" alt="momo" />
                            </div>
                            <p class="letter-space">Made with  Chicken,vegetables,sauce</p>
                            <p class="letter-space">Price: 100/</p>
                            <button class="btn btn-primary">Order now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card wow fadeInRight slower">
                        <div class="card-body">
                            <h4 class="inner-font">Matar Panner</h4>
                            <div class="food-img">
                                <img src="Restaurants/img/matar-paneer.jpg" alt="matar-panner" />
                            </div>
                            <p class="letter-space">Made with  Chicken,vegetables,sauce</p>
                            <p class="letter-space">Price: 100/</p>
                            <button class="btn btn-primary">Order now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="card wow fadeInLeft slower">
                        <div class="card-body">
                            <h4 class="inner-font">Pizza</h4>
                            <div class="food-img">
                                <img src="Restaurants/img/pizza.jpg" alt="pizza" />
                            </div>
                            <p class="letter-space">Made with  Extra cheese,Chicken,vegetables,sauce</p>
                            <p class="letter-space">Price: 100/</p>
                            <button class="btn btn-primary">Order now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card wow fadeInRight slower">
                        <div class="card-body">
                            <h4 class="inner-font">Edli</h4>
                            <div class="food-img">
                                <img src="Restaurants/img/edli.jpg" alt="edli" />
                            </div>
                            <p class="letter-space">Made with  Chicken,vegetables,sauce</p>
                            <p class="letter-space">Price: 100/</p>
                            <button class="btn btn-primary">Order now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-center">
    <h4 class="float-right mr-5 header-font">Developed by <span style='font-size:20px;color:red'>&#9829;</span> Gurucharan</h4>
    </div>

    <script>
        new WOW().init();
    </script>
    
</body>
</html>