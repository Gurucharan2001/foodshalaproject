<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
    <link rel="stylesheet" href="../../common_files/css/bootstrap.min.css" />
    <script src="../../common_files/js/jquery-3.6.0.min.js"></script>
    <script src="../../common_files/js/popper.min.js"></script>
    <script src="../../common_files/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../common_files/css/animate.css" />
    <link rel="stylesheet" href="css/index.css" />
    <script src="js/index.js"></script>
    <script src="js/wow.min.js"></script>
</head>
<body>
        <!--nav bar of home page-->
        <nav class="navbar navbar-expand-lg bg-light navbar-light mt-0 sticky-top" id="nav-bar">
        <a href="../index.php" class="navbar-brand">
            <img src="../../common_files/img/logo.png" alt="logo" id="logo" />
                Foodshala
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-slider">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-slider">
            <ul class="navbar-nav text-dark float-left ml-3">
                <li class="nav-item"><a href="../index.php" class="nav-link" id="home">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Popular Restaurants</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Order</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Order History</a></li>
            </ul>
            <ul class="navbar-nav text-light ml-auto">
                <li class="nav-item"><a href="../index.php" class="nav-link"><i class="fa fa-sign-out" style="font-size:18px"></i>Logout</a></li>
            </ul>
        </div>
    </nav>
    <br />
    <!--end navbar for home page-->
    <!--start jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center" id="search">
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

    <!--start food list-->
    <div class="container-fluid text-center" style="overflow:hidden">
        <h3 class="letter-space mb-5">Available Today for you</h3>
        <div class="row mb-3">
            <div class="col-md-3">
                <div class="card shadow-lg wow fadeIn slower">
                    <div class="card-body">
                        <h4 class="header-font">Rajma Clawal</h4>
                        <img src="img/rajma-chawal.jpg" alt="rajam-chawal" class="" />
                        <p>Price:100/ per plate</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger text-light">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card shadow-lg wow fadeIn slower">
                    <div class="card-body">
                        <h4 class="header-font">Kadhi Chawal</h4>
                        <img src="img/kadhi-chawal.jpg" alt="kadhi-chawal" />
                        <p>Price:70/ per plate </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger text-light">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card shadow-lg wow fadeIn slower">
                    <div class="card-body">
                        <h4 class="header-font">Dalmakhani</h4>
                        <img src="img/dalmakhani.jpg" alt="dalmakhni" />
                        <p>Price:50/ per plate</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger text-light">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card shadow-lg wow fadeIn slower">
                    <div class="card-body">
                        <h4 class="header-font">Matar Paneer</h4>
                        <img src="img/matar-paneer.jpg" alt="matar-paneer" />
                        <p>Price:100/ per plate</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger text-light">Order Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">
            <div class="card shadow-lg wow fadeIn slower">
                    <div class="card-body">
                        <h4 class="header-font">Veg Burger</h4>
                        <img src="img/burger.jpg" alt="veg-burger" />
                        <p>Price:40/ per piace</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger text-light">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card shadow-lg wow fadeIn slower">
                    <div class="card-body">
                        <h4 class="header-font">Veg Chaomin</h4>
                        <img src="img/chaomin.jpg" alt="veg-chaomin" />
                        <p>Price:50/ per plate</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger text-light">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card shadow-lg wow fadeIn slower">
                    <div class="card-body">
                        <h4 class="header-font">Pizza</h4>
                        <img src="img/pizza.jpg" alt="pizza" />
                        <p>Price:100/ per piace</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger text-light">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card shadow-lg wow fadeIn slower">
                    <div class="card-body">
                        <h4 class="header-font">Pasta</h4>
                        <img src="img/pasta.jpg" alt="pasta" />
                        <p>Price:80/ per plate</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger text-light">Order Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">
            <div class="card shadow-lg wow fadeIn slower">
                    <div class="card-body">
                        <h4 class="header-font">Curd</h4>
                        <img src="img/curd.png" alt="curd" />
                        <p>Price:120/ per kilo</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger text-light">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card shadow-lg wow fadeIn slower">
                    <div class="card-body">
                        <h4 class="header-font">Edli</h4>
                        <img src="img/edli.jpg" alt="edli" />
                        <p>Price:80/ per plate</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger text-light">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card shadow-lg wow fadeIn slower">
                    <div class="card-body">
                        <h4 class="header-font">Dhosha</h4>
                        <img src="img/dhosha.jpg" alt="dhosha" />
                        <p>Price:80/ per plate</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger text-light">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card shadow-lg wow fadeIn slower">
                    <div class="card-body">
                        <h4 class="header-font">Coca Cola</h4>
                        <img src="img/coca-cola.png" alt="coca" />
                        <p>Price:100/ per 2liter</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-danger text-light">Order Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--end food list-->
    
    <script>
            new WOW().init();
        </script>
    
</body>
</html>