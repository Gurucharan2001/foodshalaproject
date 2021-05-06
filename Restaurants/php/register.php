<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../../common_files/css/bootstrap.min.css" />
    <script src="../../common_files/js/jquery-3.6.0.min.js"></script>
    <script src="../../common_files/js/popper.min.js"></script>
    <script src="../../common_files/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../common_files/css/animate.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <script src="../js/index.js"></script>
    <script src="../js/check_customer.js"></script>
    <script src="../js/register_customer.js"></script>
    <script src="../js/restaurants_register.js"></script>
</head>
<body>
        <!--nav bar of home page-->
        <nav class="navbar navbar-expand-lg bg-light navbar-light mt-0 sticky-top" id="nav-bar">
        <a href="../index.php" class="navbar-brand header-font">
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
                <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!--end navbar for home page-->
    <!--start register form coding-->
    <div class="container mt-5 w-50">
        <ul class="nav nav-tabs" id="register-tabs">
		    <li class="nav-item">
			    <a href="#register-customer" class="nav-link text-light active text-bold" data-toggle="tab">Register As Customer</a>
		    </li>
		    <li class="nav-item">
			    <a href="#register-owner" class="nav-link text-light active text-bold" data-toggle="tab" >Register As Owner</a>
		    </li>
	    </ul>

    <div class="tab-content mt-3" style="overflow-x:hidden;overflow-y: hidden;">
    <!--register customer-->
    <div id="register-customer" class="tab-pane active mx-auto animated fadeIn" >
        <form action="" class="mt-3 mb-3" id="customer-form">
            <label for="customer-name" class="text-bold">Name</label>
            <input type="text" name="name" id="new-customer-name" placeholder="Name" class="form-control mb-2" required="required" />
            <label for="customer-email" class="text-bold">Email</label>
            <input type="email" name="email" id="new-customer-email" placeholder="Email" class="form-control mb-2" required="required" />
            <span id="check-customer" style="color:red"></span>
            <div id="pass-box">
                <label for="new-customer-password" class="text-bold">Password</label>
                <input type="password" name="password" id="new-customer-password" placeholder="Password" class="form-control mb-2" required="required" />
                <i class="fa fa-eye register-show-icon" style="font-size:18px"></i>
            </div>
            <label for="customer-mobile" class="text-bold">Mobile No</label>
            <input type="text" name="mobile" id="new-customer-mobile" placeholder="Mobile No" class="form-control mb-2" required="required" />
            <label for="preferences">Preferences</label>
            <select id="preferences" class="form-control mb-3" required="required">
                <option>Veg</option>
                <option>Non-Veg</option>
            </select>

            <input type="submit" value="Register Now" id="customer-register-btn" class="form-control bg-success text-light" />
            <span id="empty-err" style="color:red"></span>
        </form>
        <p class="text-center">Have an Account <a href="login.php">Login now!</a></p>
    </div>

    <!--register customer-->
    <!--register owner-->
        <div id="register-owner" class="tab-pane mx-auto animated fadeIn" >
            <form action="" class="mt-3 mb-3" id="owner-form">
                <label for="new-restaurant-name" class="text-bold">Restaurant Name</label>
                <input type="text" name="name" id="new-restaurant-name" placeholder="Name" class="form-control mb-2" required="required" />
                <label for="new-email" class="text-bold">Email</label>
                <input type="email" name="email" id="new-email" placeholder="Email" class="form-control mb-2" required="required" />
                <span id="check-owner"></span>
                <div id="pass-box">
                    <label for="new-owner-password" class="text-bold">Password</label>
                    <input type="password" name="username" id="new-owner-password" placeholder="Password" class="form-control mb-2" required="required" />
                    <i class="fa fa-eye register-show-icon" style="font-size:18px"></i>
                </div>
                <label for="new-mobile" class="text-bold">Mobile No</label>
                <input type="text" name="mobile" id="new-mobile" placeholder="Mobile No" class="form-control mb-2" required="required" />
                <span id="check-owner-err"></span>

                <input type="submit" id="register-owner-btn" value="Register Now" class="form-control bg-success text-light" />
            </form>
            <span id="owner-err" style="color:red"></span>
            <p class="text-center">Have an Account <a href="login.php">Login now!</a></p>
        </div>
    </div>
    <!--end register owner-->
    </div>
</div>

</body>
</html>