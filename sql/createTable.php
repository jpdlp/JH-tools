<?php
$servername = "localhost";
$username = "root";
$password = "abc123";
$dbname = "cadastro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE usuarios (
  id mediumint NOT NULL AUTO_INCREMENT,
  login varchar(20),
  senha varchar(32),
  email varchar(60),
  PRIMARY KEY (id)
)";

if ($conn->query($sql) === TRUE) {
   echo "Table usuarios created successfully";
} else {
   echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
