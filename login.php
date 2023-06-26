<?php
    include ("connection.php");
    
    if(isset($_POST['email']) && isset($_POST['password'])){
    
    $email = $_POST['email'];
    $pwd = $_POST['password'];

$sql = "SELECT * FROM Users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['password'];

    // Verify the entered password with the stored hashed password
    if (password_verify($pwd, $hashed_password)) {
        // Start the session
        session_start();
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = $row['id'];
        $_SESSION["accountID"] = $row['accountID'];
        $_SESSION["firstname"] = $row['firstname'];
        $_SESSION["lastname"] = $row['lastname'];
        $_SESSION['DOB'] = $row['DOB'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["address"] = $row['address'];
        $_SESSION["phone"] = $row['phone'];
        $_SESSION["cnic"] = $row['CNIC'];
    }
} 
}
?>
<?php
    // CHeck if user is already logged in redirect to index.html 
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: index.php");
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
        <link rel="stylesheet" href="css/bulma.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="libraries/animate/animate.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
     <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">Peace</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <!-- Login Signup DropDown with Icons  -->
            <h5 class="m-0 pe-lg-5 d-none d-lg-block"><i class="fa fa-phone text-primary me-3"></i>+92 305 1678268
            </h5>
            <div class="dropdown">
                <a href="#" class="btn btn-primary text-center dropdown-toggle d-flex align-items-center"
                    data-bs-toggle="dropdown"><?php 
                        // check if user logged in or not 
                        session_start();
                        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                            echo $_SESSION['firstname'];
                        } else {
                            echo "Account";
                        }
                    ?> </a>
                <ul class="dropdown-menu dropdown-menu-end animated flipInX">
                    <?php 
                         
                        if(isset($_SESSION['loggedin']) && $_SESSION["loggedin"]===true){
                            echo '<li><a href="Dashboard.php" class="dropdown-item"><i class="bi bi-box-arrow-in-right me-2"></i>Dashboard</a>
                            </li>
                            <li><a href="logout.php" class="dropdown-item"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
                            </li>';
                        }
                        else{
                            echo '<li><a href="login.php" class="dropdown-item"><i class="bi bi-box-arrow-in-right me-2"></i>Login</a>
                            </li>
                            <li><a href="Registration.html" class="dropdown-item"><i
                                        class="bi bi-person-plus me-2"></i>Signup</a>
                            </li>';
                        }
                    ?>
                </ul>
            </div>
        </div>

    </nav>
    <!-- Navbar End -->


    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Login</h3>
                    <hr class="login-hr">
                    <p class="subtitle has-text-black">Please login to proceed.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="img/login.gif" alt="Login GIF" class="login-gif">
                        </figure>
                        <form  id="loginForm" action="#" method="POST">
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
                    <p>
                    <p class="has-text-grey">Don't have an account ?&nbsp; &nbsp; <a class="has-text-link"
                            href="Registration.html">Sign Up</a></p>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="js/Validate.js"></script>
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