<?php
    require("database.php");

    $email = base64_decode($_POST['email']);
    $check = "SELECT email FROM customer WHERE email='$email'";

    $res = $db->query($check);
    if($res->num_rows != 0){
        echo "user found";
    }
    else{
        echo "user not found";
    }

?>