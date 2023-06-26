<?php

$conn = mysqli_connect("localhost", "root", "Arsalan@123", "Trial");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>