<?php 

include("../connection.php");

// Selects all data from Users table

$sql = "SELECT * FROM Users";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    // Display the data
    // print_r($data) 
}

echo json_encode($data);

?>