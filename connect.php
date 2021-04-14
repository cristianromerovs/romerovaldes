<?php

$db_host = "localhost";
$db_username = "romerova_root";
$db_password = "Deadmau5+";
$db_name = "romerova_romerovaldes";

$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check Connection

if (mysqli_connect_error()){
    echo "Failed Connection: " .mysqli_connect_error();
}else{
    echo "Connection Successful";
}

?>
