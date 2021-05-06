<?php
    require("database.php");
    $name = base64_decode($_POST['name']);
    $email = base64_decode($_POST['email']);
    $pass = md5(base64_decode($_POST['password']));
    $mob = base64_decode($_POST['mobile']);
    $prefer = base64_decode($_POST['prefer']);

    $store_user = "INSERT INTO customer(name,email,password,mobile_no,preferences) VALUES('$name','$email','$pass','$mob','$prefer')";

    if($db->query($store_user)){
        echo "registration successful";
    }else{
        echo "registration failed";
    }

?>