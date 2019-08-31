<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// if connection is successfull, then display ALL records from the database
$sql = "SELECT * FROM student_registration";
$result = $conn->query($sql);

$conn->close();

?>