<?php

$host = 'db';                               // HOSTNAME
$user = getenv('DB_USER');                  // USERNAME FROM ENV
$password = getenv('DB_PASS');              // PASSWORD FROM ENV
$db = 'test_db';                            // DATABASE NAME

$conn = new mysqli($host,$user,$password,$db);      // CONNECTION TO DATABASE
if($conn->connect_error){
 echo 'connection failed'. $conn->connect_error;
}
echo 'successfully connected to MYSQL';


?> 
