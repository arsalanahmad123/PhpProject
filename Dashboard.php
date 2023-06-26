<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="libraries/animate/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="libraries/animate/animate.css">
    <title>User Dashboard</title>
</head>

<body>
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
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem; height: 60vh;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Hello
                <?php 
                if(isset($_SESSION['loggedin']) && isset($_SESSION['loggedin'])===true){
                    echo $_SESSION['firstname'];
                }
                ?>
            </h1>
            <p class="animated slideInDown text-white">
                Welcome to your personalized Bank Management Profile! Manage your financial activities with ease and security.
            </p>
        </div>
    </div>
    <!-- Page Header End -->

<section class="container dashboard-section" style="position: absolute;top:60%;left:10%;background-color:white;border-radius:10px; height:80vh;"> 
  <ul class="nav nav-tabs" id="myTabs">
    <li class="nav-item">
      <a class="nav-link active" id="personal-tab" data-bs-toggle="tab" href="#personal">Personal Information</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact">Contact Information</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="identification-tab" data-bs-toggle="tab" href="#identification">Identification</a>
    </li>
  </ul>
  <div class="tab-content mt-4" id="myTabContent" style="padding: 20px;">
    <div class="tab-pane animated fadeIn show active" id="personal">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Personal Information</h5>
            <!-- Add your personal information inputs here -->
                <div class="form-group">
                   <strong> <label for="firstname">First Name</label></strong>
                    <input type="text" name="firstname" value="<?php echo $_SESSION['firstname']; ?>" class="form-control" id="firstname">
                </div>
                <div class="form-group">
                    <strong><label for="lastname">Last Name</label></strong>
                    <input type="text" name="lastname" value="<?php echo $_SESSION['lastname']; ?>" class="form-control" id="lastname">
                </div>
                <div class="form-group">
                    <strong><label for="dob">Date of Birth</label></strong>
                    <input type="text" name="dob" value="<?php echo trim($_SESSION['DOB']); ?>" class="form-control" id="dob" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                </div>
                
        </div>
      </div>
    </div>
    <div class="tab-pane fade animated fadeIn" id="contact">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Contact Information</h5>
          <div class="form-group">
            <strong><label for="email">Email</label></strong>
            <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" class="form-control" id="email">
         </div>
         <div class="form-group">
            <strong><label for="address">Address</label></strong>
            <input type="text" name="address" value="<?php echo $_SESSION['address']; ?>" class="form-control" id="address">
         </div>
         <div class="form-group">
            <strong><label for="phone">Phone</label></strong>
            <input type="tel" name="phone" value="<?php echo $_SESSION['phone']; ?>" class="form-control" id="phone">
         </div>
        </div>
      </div>
  </div>
  <div class="tab-pane fade animated fadeIn" id="identification">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Identification</h5>
          <div class="form-group">
           <strong> <label for="cnic">CNIC</label></strong>
            <input type="number" name="cnic" value="<?php echo $_SESSION['cnic']; ?>" class="form-control" id="cnic">
          </div>
        </div>
      </div>
    </div>
    
</div>
    <button class="btn btn-primary mt-4" id="submitButton">
      Update Profile
    </button>
    <div class="d-flex justify-content-end">
        <button class="btn btn-danger" id="delAccount">Delete Account</button>
    </div>
  </section>





    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // change tabs on click 
        $(document).ready(function(){
            $('#myTabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            })

            $("#submitButton").click(function(){
              var firstname = $("#firstname").val();
              var lastname  = $("#lastname").val();
              var dob = $("#dob").val();
              var email = $("#email").val();
              var address = $("#address").val();
              var phone = $("#phone").val();
              var cnic = $("#cnic").val();

              $.ajax({
                url: 'edit.php',
                method: 'post',
                data:{
                  firstname: firstname,
                  lastname: lastname ,
                  email: email,
                  dob: dob,
                  address: address,
                  phone: phone,
                  cnic: cnic
                },
                success: function(data){
                  location.reload();
                  alert("Updated Successfulyy!!");
                }
              })
            })
            $("#delAccount").click(function(){
              var cr = confirm("Are you sure you want to delete your account?");
              if(cr){
              $.ajax({
                url: 'deleteAccount.php',
                method: 'post',
                success: function(data){
                  window.location.href="index.php";
                  alert("Account Deleted Successfully!!");
                }
              })
              }
              
            })
        });
    </script>
</body>

</html>