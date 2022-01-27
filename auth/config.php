<?php
//  $servername = "localhost";
//  $username = "root";
//  $password = "Geosentric2021__";
//  $dbname = "geosentric";

$servername = "103.27.206.196";
$username = "geosentr_root";
$password = "geosentric2021";
$dbname = "geosentr_21";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
