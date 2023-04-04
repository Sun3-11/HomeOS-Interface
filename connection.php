<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'homeos';
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
    /*if($conn->connect_error){
        die("error");
    }
    echo "Ok good!";*/

?>