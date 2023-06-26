<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Peace - Bank Management System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->

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

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid carousel-image" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Bank Management System
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Revolutionize Your Bank
                                    Operations</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Experience seamless management of your
                                    financial processes
                                    with our advanced bank management system. Maximize efficiency, minimize errors, and
                                    transform your
                                    banking operations like never before.</p>
                                <a href="contact.php" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">Get in
                                    Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid carousel-image" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Bank Management System
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Unlock the Power of Financial
                                    Management</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Take control of your bank's financial
                                    processes with our
                                    comprehensive management system. From transaction tracking to risk management,
                                    empower
                                    your institution
                                    with cutting-edge technology.</p>
                                <a href="about.php"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class=" container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                    <h1 class="mb-5">Empowering Financial Institutions</h1>
                    <p class="mb-5">At [Your Bank Management System Name], we are committed
                        to revolutionizing the
                        financial
                        industry through our comprehensive solutions. With our advanced
                        platform, you can optimize your
                        banking operations, enhance efficiency, and deliver exceptional
                        services to your customers.</p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                            <h5>Global Coverage</h5>
                            <p class="m-0">Our solutions cater to financial institutions
                                worldwide, ensuring
                                comprehensive
                                global coverage and support.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                            <h5>Optimized Operations</h5>
                            <p class="m-0">We help banks achieve on-time delivery of
                                services and streamline their
                                operations for maximum efficiency.</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary py-3 px-5">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Some Facts</h6>
                    <h1 class="mb-5">#1 Place To Manage All Your Banking Operations</h1>
                    <p class="mb-5">At [Your Bank Management System Name], we provide you with
                        the tools and
                        capabilities to
                        efficiently manage all your banking operations. Whether it's account
                        management, transaction
                        processing, or customer support, we have got you covered.</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Have any questions?</h6>
                            <h3 class="text-primary m-0">Call us at +012 345 6789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="bg-primary p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-users fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Satisfied Clients</p>
                            </div>
                            <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-tasks fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">5678</h2>
                                <p class="text-white mb-0">Successful Transactions</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-success p-4 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-star fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">4.9</h2>
                                <p class="text-white mb-0">Customer Satisfaction Rating</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->



    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Services</h6>
                <h1 class="mb-5">Discover Our Banking Solutions</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Account Management</h4>
                        <p>Effortlessly manage your accounts with our advanced banking tools and
                            secure online platform.
                        </p>
                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Transaction Processing</h4>
                        <p>Experience fast and secure transaction processing for seamless
                            financial operations.</p>
                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Customer Support</h4>
                        <p>Our dedicated team is available 24/7 to provide you with exceptional
                            customer support and
                            assistance.</p>
                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-4.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Investment Services</h4>
                        <p>Explore our range of investment services to grow your wealth and
                            achieve your financial
                            goals.
                        </p>
                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-5.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Online Banking</h4>
                        <p>Access your accounts anytime, anywhere with our secure and
                            user-friendly online banking
                            platform.
                        </p>
                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/service-6.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Data Security</h4>
                        <p>We prioritize the security of your personal and financial data with
                            advanced encryption and
                            protection measures.</p>
                        <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Our Features</h6>
                    <h1 class="mb-5">We Are a Trusted Banking Solution Provider Since 1990</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Global Banking Services</h5>
                            <p class="mb-0">We offer comprehensive banking services to clients
                                around the world,
                                ensuring
                                easy and efficient financial management.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Secure Transactions</h5>
                            <p class="mb-0">We prioritize the security of your transactions,
                                providing encrypted
                                channels
                                and advanced fraud detection systems.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-headphones text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>24/7 Customer Support</h5>
                            <p class="mb-0">Our dedicated customer support team is available
                                24/7 to assist you with any
                                banking inquiries or issues you may have.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/feature.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Request Information</h6>
                    <h1 class="mb-5">Contact Us</h1>
                    <p class="mb-5">Do you have any questions or inquiries? Feel free to get in
                        touch with us. Our team
                        will
                        be happy to assist you.</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-phone fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Contact our Support</h6>
                            <h3 class="text-primary m-0">+012 345 6789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control border-0" placeholder="Subject"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->




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
                    <p class="mb-0">I have been a customer of this bank for many years, and I
                        must say their services
                        are
                        exceptional. The staff is friendly, professional, and always willing to
                        help. I highly recommend
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
                    <p class="mb-0">I've had a great experience with this bank. Their investment
                        options are diverse and
                        have helped me grow my wealth significantly. The financial advisors are
                        knowledgeable and
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
                    <p class="mb-0">The bank's business banking services have been a
                        game-changer for my company. From
                        tailored financing options to seamless transaction processing, they have
                        provided the support my
                        business needed to thrive. I highly recommend their business banking
                        solutions.</p>
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
                    <p class="mb-0">I've been a loyal customer of this bank since my early
                        working days. Their
                        retirement
                        planning services have been invaluable in ensuring financial security
                        during my retirement
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
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New
                        York, USA</p>
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
                    &copy; <a class="border-bottom" href="#">thepeacedevelopers</a>, All Rights
                    Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="libraries/wow/wow.min.js"></script>
    <script src="libraries/easing/easing.min.js"></script>
    <script src="libraries/waypoints/waypoints.min.js"></script>
    <script src="libraries/counterup/counterup.min.js"></script>
    <script src="libraries/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>