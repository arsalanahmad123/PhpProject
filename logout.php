<?php


    session_start();
    
    // Check if the user is logged in
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        // Unset all session variables
        $_SESSION = array();
        
        // Destroy the session
        session_destroy();
    }
    else{
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Registration Successful</title>
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .innerSuccess {
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .logout-gif {
            width: 300px;
            margin-bottom: 20px;
            border-radius: 90%;
        }
    </style>
</head>

<body>
    <div class="center">
        <div class="innerSuccess">
            <img src="img/logout.gif" class="logout-gif" alt="logout GIF">
            <h1>Logged Out Successfully</h1>
            <p>You will be redirected to index page in 3 seconds.</p>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script>
        // Delay the redirect after 5 seconds
        setTimeout(function () {
            window.location.href = "index.php";
        }, 3000);
    </script>
</body>

</html>