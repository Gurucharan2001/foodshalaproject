<?php
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
    <link rel="stylesheet" href="css/profile.css" />
    <script src="js/profile.js"></script>
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
            <ul class="navbar-nav text-light ml-auto">
                <li class="nav-item"><a href="../index.php" class="nav-link"><i class="fa fa-sign-out" style="font-size:18px"></i>Logout</a></li>
            </ul>
        </div>
    </nav>
    <!--end navbar for home page-->
    <!--start body -->
    <div class="container mt-5">
        <div class="page text-center">
            <div class="row ">
                <div class="col-md-4 mt-3 bg-white shadow-lg py-2 rounded-lg">
                    <h3 class="header-font">Create Dish</h3>
                    <form id="dish-form">
                        <input type="text" placeholder="Dish Name" class="form-control mb-3 float-left" id="dish-name" />
                        <input type="text" placeholder="Dish rate" class="form-control mb-3 float-left" id="dish-rate"  />
                    </form>
                    <span id="form-err" style="color:red"></span>
                    <button class="btn btn-danger mb-3" id="create-btn">
                        Create
                    </button>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-6 mt-3 py-2 bg-white shadow-lg rounded-lg" id="dish-details">
                    <h3 class="header-font">Your Dish</h3>
                </div>
            </div>
        </div>
    </div>

    <!--end body-->
    
</body>
</html>