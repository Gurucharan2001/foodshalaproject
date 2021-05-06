<?php
    require("database.php");
    $restaurant_name = base64_decode($_POST['restaurant_name']);
    $email = base64_decode($_POST['email']);
    $password = md5(base64_decode($_POST['password']));
    $mobile = base64_decode($_POST['mobile_no']);

    $register_owner = "INSERT INTO restaurants(restaurant_name,email,password,mobile_no) VALUES('$restaurant_name','$email','$password','$mobile')";

    if($db->query($register_owner)){
        echo "success";
    }
    else{
        echo "failed";
    }


?>