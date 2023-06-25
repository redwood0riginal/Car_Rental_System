<?php

// connect to database

$servername = "localhost";
$username = "root";
$password = "";
$DB_name = "car_rental_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $DB_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}