<?php

$host = '127.0.0.1';                               // HOSTNAME
$user = getenv('DB_USER');                  // USERNAME FROM ENV
$password = getenv('DB_PASS');              // PASSWORD FROM ENV

$conn = new mysqli($host,$user,$password);      // CONNECTION TO DATABASE
if($conn->connect_error){
 echo 'connection failed'. $conn->connect_error;
}
echo 'successfully connected to MYSQL';


?> 
