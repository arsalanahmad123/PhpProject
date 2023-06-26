<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Peace - Bank Management System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="libraries/animate/animate.min.css" rel="stylesheet">
    <link href="libraries/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


     <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.php" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
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
                        
                        // <li><a href="Registration.html" class="dropdown-item"><i
                        //             class="bi bi-person-plus me-2"></i>Signup</a>
                        // </li>
                        // check if user is logged in then show dropdown dashboard.php otherwise show login and signup 
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <p class="animated slideInDown text-white">
                Welcome to our innovative banking platform, where your financial goals become a reality!
            </p>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Services</h6>
                <h1 class="mb-5">Explore Our Banking Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Personal Banking</h4>
                        <p>Manage your personal finances with our comprehensive range of banking products and services
                            tailored to meet your needs.</p>
                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Business Banking</h4>
                        <p>Unlock growth opportunities and streamline your business finances with our comprehensive
                            range of
                            business banking solutions.</p>
                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Loans and Mortgages</h4>
                        <p>Turn your dreams into reality with our flexible loan and mortgage options that suit your
                            financial requirements.</p>
                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-4.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Investment Solutions</h4>
                        <p>Grow your wealth and achieve your financial goals with our diverse range of investment
                            products
                            and services.</p>
                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-5.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Digital Banking</h4>
                        <p>Experience convenient and secure banking anytime, anywhere with our user-friendly digital
                            banking
                            platforms.</p>
                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-6.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Customer Support</h4>
                        <p>Our dedicated customer support team is available to assist you with any inquiries or issues
                            you
                            may have.</p>
                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Client Testimonials</h6>
                <h1 class="mb-0">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg"
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">John Doe</h5>
                            <p class="m-0">Business Owner</p>
                        </div>
                    </div>
                    <p class="mb-0">I have been a customer of this bank for many years, and I must say their services
                        are
                        exceptional. The staff is friendly, professional, and always willing to help. I highly recommend
                        this bank to anyone looking for reliable financial solutions.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg"
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Jane Smith</h5>
                            <p class="m-0">Investor</p>
                        </div>
                    </div>
                    <p class="mb-0">I've had a great experience with this bank. Their investment options are diverse and
                        have helped me grow my wealth significantly. The financial advisors are knowledgeable and
                        provide
                        valuable insights. I highly recommend their investment services.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg"
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">David Johnson</h5>
                            <p class="m-0">Entrepreneur</p>
                        </div>
                    </div>
                    <p class="mb-0">The bank's business banking services have been a game-changer for my company. From
                        tailored financing options to seamless transaction processing, they have provided the support my
                        business needed to thrive. I highly recommend their business banking solutions.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-4.jpg"
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Sarah Williams</h5>
                            <p class="m-0">Retiree</p>
                        </div>
                    </div>
                    <p class="mb-0">I've been a loyal customer of this bank since my early working days. Their
                        retirement
                        planning services have been invaluable in ensuring financial security during my retirement
                        years. I
                        highly recommend their retirement planning expertise.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s"
        style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="service.html">Account Management</a>
                    <a class="btn btn-link" href="service.html">Loan Services</a>
                    <a class="btn btn-link" href="service.html">Investment Options</a>
                    <a class="btn btn-link" href="service.html">Online Banking</a>
                    <a class="btn btn-link" href="service.html">Customer Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Conditions</a>
                    <a class="btn btn-link" href="">FAQs</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Stay updated with our latest news and offers.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Sign
                            Up</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">thepeacedevelopers</a>, All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="libraries/wow/wow.min.js"></script>
    <script src="libraries/easing/easing.min.js"></script>
    <script src="libraries/waypoints/waypoints.min.js"></script>
    <script src="libraries/counterup/counterup.min.js"></script>
    <script src="libraries/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>