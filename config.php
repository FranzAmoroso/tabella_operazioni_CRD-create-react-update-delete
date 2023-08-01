<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "db_esercitazione";

$connessione = new mysqli($hostname, $username, $password, $db_name);
if(mysqli_connect_error()){
    echo "ERRORRE CONNESSIONE, ". mysqli_connect_error();
}

?>