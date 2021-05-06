<?php 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../common_files/css/bootstrap.min.css" />
    <script src="../../common_files/js/jquery-3.6.0.min.js"></script>
    <script src="../../common_files/js/popper.min.js"></script>
    <script src="../../common_files/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../common_files/css/animate.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <script src="../js/index.js"></script>
    <script src="../js/customer_login.js"></script>
    <script src="../js/owner_login.js"></script>
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
    <!--start login form coding-->
    <div class="container mt-5 w-50">
        <ul class="nav nav-tabs" id="tabs">
		    <li class="nav-item">
			    <a href="#login-customer" class="nav-link text-light active text-bold" data-toggle="tab">Login As Customer</a>
		    </li>
		    <li class="nav-item">
			    <a href="#login-owner" class="nav-link text-light text-bold active" data-toggle="tab">Login As Owner</a>
		    </li>
	    </ul>

    <div class="tab-content mt-3" style="overflow-x:hidden;overflow-y: hidden;">
    <!--start login as customer-->
        <div id="login-customer" class="tab-pane active mt-5 mx-auto mb-1 animated fadeIn" >
            <form action="" class="mt-3 mb-3" id="login-customer-form">
                <div id="user-box" class="text-bold"> 
                    <label for="customer-email">Email Id </label>
                    <input type="text" name="username" id="customer-email" placeholder="Email Id" class="form-control mb-3" required="required" />
                </div>
                <div id="password-box" class="text-bold">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="customer-password" placeholder="Password" class="form-control mb-4" required="required" />
                    <i class="fa fa-eye show-icon" style="font-size:18px"></i>
                </div>
                <span id="alert-err" style="color:red"></span>

            </form>
                <input type="submit" value="Login" id="customer-login-btn" class="form-control bg-success text-light" />
                <span id="customer-err" style="color:red"></span>
            <p>Don't have an account?<a href="register.php">Create Account</a></p>
        </div>
<!--end login as customer-->
<!--start login as owner-->
        <div id="login-owner" class="tab-pane mt-5 mx-auto mb-1 animated fadeIn bg-danger text-light border border-danger" >
            <form action="" class="mt-3 mb-3" id="login-owner-form">
                <div id="user-box" class="text-bold"> 
                    <label for="email">Email</label>
                    <input type="email" name="email" id="owner-email" placeholder="Email Id" class="form-control mb-3"  required="required" />
                </div>
                <div id="password-box" class="text-bold">
                    <label for="password" >Password</label>
                    <input type="password" name="password" id="owner-password" placeholder="Password" class="form-control mb-2"  required="required" />
                    <i class="fa fa-eye show-icon" style="font-size:18px"></i>
                </div>
                <span id="login-error" style="color:white"></span>

            </form>
                <input type="submit" value="Login" class="form-control bg-warning text-light" id="login-owner-btn" />
            <p>Don't have an account? <a href="register.php">Create Account</a></p>
        </div>
<!--end login as owner-->
    </div>

</div>


    <!--end login form coding-->
    
</body>
</html>