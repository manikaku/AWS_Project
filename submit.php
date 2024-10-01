<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$mysqli = new mysqli('db.cegsujor6xa6.ap-south-1.rds.amazonaws.com', 'webappuser', 'mani1234', 'mywebapp');
if ($mysqli->connect_errno) {
    die('Failed to connect to MySQL: ' . $mysqli->connect_error);
}

$query = "INSERT INTO customers (name, email, phone) VALUES ('$name', '$email', '$phone')";
if (!$result = $mysqli->query($query)) {
    die('Error executing query: ' . $mysqli->error);
}

$mysqli->close();

echo 'Customer information saved successfully!';
?>