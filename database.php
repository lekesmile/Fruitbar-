<?php

$servername = 'localhost';
$username = 'omobaba';
$password = 'omobaba';
$dbnimi= 'testfruitbar';


// Create connection
$connection = mysqli_connect( $servername, $username, $password, $dbnimi);

// Check connection if fail/error
if (mysqli_connect_error()) {
    echo "Fail to connect to my Sql". " ". mysqli_connect_error() ;
}
mysqli_set_charset($connection, 'utf8');
echo "Connected successfully";
?>
