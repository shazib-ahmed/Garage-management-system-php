<?php
// DB credentials.
$localhost = "localhost";
$username = "phpGrarageManagement";
$password = "phpGrarageManagement";
$dbname = "phpGrarageManagement";
//$store_url = "http://localhost/'Folder Name'/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if ($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}
