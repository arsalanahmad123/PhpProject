<?php
// delete account by id from session and unset session 
include("connection.php");
session_start();
$id = $_SESSION['id'];
$sql = "DELETE FROM Users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    session_unset();
    session_destroy();
    header("location: index.php");
    exit;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

?>