<?php
$server="localhost";
$dbname="students";
$dbuser="root";
$dbpass="";


// Create connection
$conn = new mysqli($server, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 