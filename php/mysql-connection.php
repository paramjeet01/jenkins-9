<?php

$host = 'db';                               // HOSTNAME
$user = getenv('DB_USER');                  // USERNAME FROM ENV
$password = getenv('DB_PASS');              // PASSWORD FROM ENV
echo $user;
echo $password;
$conn = new mysqli($host,$user,$password);      // CONNECTION TO DATABASE
if($conn->connect_error){
 echo 'connection failed'. $conn->connect_error;
}
else{
  echo 'successfully connected to MYSQL';
}

?> 
