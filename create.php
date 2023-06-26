
<?php

include("connection.php");

function generateUniqueAccountID($conn) {
    $accountID = 'ACC' . str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
    
    $checkQuery = "SELECT 1 FROM Users WHERE AccountID = '$accountID'";
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if (mysqli_num_rows($checkResult) === 0) {
        return $accountID;
    } else {
        return generateUniqueAccountID($conn); // Regenerate if AccountID already exists
    }
}
$accountID = generateUniqueAccountID($conn);
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$birthday = $_POST['DOB'];
$cnic = $_POST['cnic'];
$accountType = $_POST['accountType'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$securityQuestion = $_POST['security-question'];
$securityAnswer = $_POST['security-answer'];
$sourceOfIncome = $_POST['source-of-income'];
$employmentStatus = $_POST['employement-status'];
$incomeRange = $_POST['annual-income-range'];


$sql = "INSERT INTO `Users` (`AccountId`, `firstname`, `lastname`, `DOB`, `gender`, `email`, `address`, `phone`, `CNIC`, `accountType`, `password`, `securityQuestion`, `securityAnswer`, `sourceOfIncome`, `employmentStatus`, `incomeRange`) VALUES 
('$accountID', '$firstname', '$lastname', '$birthday', '$gender', '$email', '$address', '$phone', '$cnic', '$accountType', '$hashed_password', '$securityQuestion', '$securityAnswer', '$sourceOfIncome', '$employmentStatus', '$incomeRange')";



if (mysqli_query($conn, $sql)) {
    // Registration successful
    mysqli_close($conn);
    header('Location: success.html');
} else {
    // Handle any error scenarios
    echo "Error: " . mysqli_error($conn);
    mysqli_close($conn);
}


?>

