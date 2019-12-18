<?php
session_start();
$servername = "lochnagar.abertay.ac.uk";
$username = "sql1806055";
$password = "3SjwV6FUwTPL";
$dbname = "sql1806055";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>