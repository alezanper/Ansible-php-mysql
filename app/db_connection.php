<?php
$servername = "mysql-ansible-php.mysql.database.azure.com:3306";
$username = "newuser@mysql-ansible-php";
$password = "passwordComplex2019*";
$db_name = "crud_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>