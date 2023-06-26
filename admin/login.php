<?php
    include ("../connection.php");
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    
    if(isset($_POST['email']) && isset($_POST['password'])){
    
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "SELECT * FROM Admin WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $password = $row['password'];

        // Verify the entered password with the stored password
        if ($pwd === $password) {
            // Start the session
            session_start();
            // Store data in session variables
            $_SESSION["adminloggedin"] = true;
            $_SESSION["username"] = $row['username'];

            // Redirect to admin panel or display success message
            header("location: admin.php");
            exit;
        } else {
            echo "Wrong Password";
        }
    } else {
        echo "User not found";
    }
}
?>

<?php
    // CHeck if user is already logged in redirect to index.html 
    session_start();
    if(isset($_SESSION["adminloggedin"]) && $_SESSION["adminloggedin"] === true){
        header("location: admin.php");
        exit;
    }
    ?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - Peace Bank</title>
        
        <!-- Bulma Version 0.9.x-->
        <link rel="stylesheet" href="../css/bulma.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="../libraries/animate/animate.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>


    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Login</h3>
                    <hr class="login-hr">
                    <p class="subtitle has-text-black">Please login to proceed.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="../img/login.gif" alt="Login GIF" class="login-gif">
                        </figure>
                        <form  id="loginForm" action="" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="email" placeholder="Your Email" autofocus="true" autocomplete="off"
                                        name="email" id="email">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password" placeholder="Your Password" autocomplete="off"
                                        name="password" id="password">
                                </div>
                            </div>

                            <button class="button is-block is-info is-large is-fullwidth" id="submitBtn"
                                type="submit">Login <i class="fas fa-sign-in has-text-white"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="../js/Validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        $(document).ready(function () {
            $("#loginForm").validate({
                errorClass: "has-text-danger", // CSS class for error messages
                errorElement: "p", // Wrap error messages in <p> tags
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: "required",
                },
                messages: {
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email address",
                    },
                    password: "Please enter a password",
                },
                errorPlacement: function (error, element) {
                    // Place error message below the corresponding input field
                    error.insertAfter(element);
                },
                submitHandler: function (form) {
                    form.submit();
                },
            })

        });
    </script>

</body>

</html>