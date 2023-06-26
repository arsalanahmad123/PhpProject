<?php
include("connection.php");

session_start();
// show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$cnic = $_POST['cnic'];

$id = $_SESSION['id'];

$sql = "UPDATE Users SET firstname='$firstname', lastname='$lastname', email='$email', dob='$dob', address='$address', phone='$phone', CNIC='$cnic' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    $_SESSION["firstname"] = $firstname;
    $_SESSION["lastname"] = $lastname;
    $_SESSION['DOB'] = $dob;
    $_SESSION["email"] = $email;
    $_SESSION["address"] = $address;
    $_SESSION["phone"] = $phone;
    $_SESSION["cnic"] = $cnic;
    echo "Data updated Successfully!!!";
} else {
    echo "Error Occurred: " . mysqli_error($conn);
}
?>
