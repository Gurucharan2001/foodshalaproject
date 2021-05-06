<?php
    require("database.php");

    $email = base64_decode($_POST['email']);
    $pass = md5(base64_decode($_POST['password']));

    $check_email = "SELECT email FROM restaurants WHERE email='$email'";

    $res = $db->query($check_email);
    if($res->num_rows != 0){
        $check_pass = "SELECT email,password FROM restaurants WHERE email='$email' AND password='$pass'";
        $res_pass = $db->query($check_pass);
        if($res_pass->num_rows != 0){
            echo "login success";
        }
        else{
            echo "wrong password";
        }
    }
    else{
        echo "user not found";
    }


?>