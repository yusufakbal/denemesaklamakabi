<?php

print("Deneme");

$servername = "projectsaklamakabi.mysql.database.azure.com";
$username = "saklamakabi";
$password = "Project-3434";
$database_name = "saklamakabi";

// Create MySQL connection fom PHP to MySQL server
$connection = new mysqli($servername, $username, $password, $database_name);
// Check connection
if ($connection->connect_error) {
   die("MySQL connection failed: " . $connection->connect_error);
}

$sql = "INSERT INTO saklamakabi.mesafe (kartid) VALUES (2)";

if ($connection->query($sql) === TRUE) {
   echo "New record created successfully";
} else {
   echo "Error: " . $sql . " => " . $connection->error;
}

$connection->close();
