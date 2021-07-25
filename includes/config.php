<?php
ob_start(); // Turns on output buffering
session_start();

date_default_timezone_set("America/Toronto");

try {
    $con = new PDO("mysql:dbname=heroku_d3874fdcac4c4be;host=us-cdbr-east-04.cleardb.com", "ba9ca457c0c28d", "ee79c8ec");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}
?>