<?php
    $db = new mysqli("localhost","root","","foodshala");
    if($db->connect_error)
    {
        die("Database not Connected");
    }

    // echo "connect"

?>