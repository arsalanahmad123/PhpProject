<?php

include("../connection.php");

$id  = $_POST['uid'];

$sql = "DELETE FROM Users WHERE id='$id'";

if(mysqli_query($conn, $sql)){
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

?>