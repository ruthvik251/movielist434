<?php

$host = "sql112.epizy.com";
$dbname = "epiz_32917750_login_db";
$username = "epiz_32917750";
$password = "gcLBPDeGVTbuN";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;