<?php
    require("database.php");

    $email = base64_decode($_POST['email']);
    $pass = md5(base64_decode($_POST['pass']));

    $check_email = "SELECT email FROM customer WHERE email='$email'";

    // $name = "SELECT name FROM customer WHERE email='$email'";
    // $res_name = $db->query($name);


    $res = $db->query($check_email);
    if($res->num_rows != 0){
        $check_pass = "SELECT email,password FROM customer WHERE email='$email' AND password='$pass'";
        $res_pass = $db->query($check_pass);
        if($res_pass->num_rows != 0){
            echo "login success";
            session_start();
            $_SESSION['name'] = $email;
        }
        else{
            echo "wrong password";
        }

    }
    else{
        echo "user not found";
    }




?>