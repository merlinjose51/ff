<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "tc"; // Replace with your database name
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
    echo"you are connected!";
}
else{
    echo"could not connect!";
}
   
// Email configuration
$to_email = "merlinjose51@gmail.com"; // Your email address
$subject_prefix = "Techie Crew - ";
?>