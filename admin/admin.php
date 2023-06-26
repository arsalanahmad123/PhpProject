<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Template</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        

        body{
            overflow-x: hidden;
        }
        .content{
            overflow: scroll;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
        }

        .sidebar .nav-link {
            color: #f8f9fa;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php 
    session_start();
    if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin']===true ){
        echo '
        <div class="row">
            <!-- Sidebar -->    
          <!-- Main Content -->
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand">Hello Admin 👋</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="content">
                    <h3>All Users</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Account Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>CNIC</th>
                                <th>Account Type</th>
                                <th>Source of Income</th>
                                <th>Employment Status</th>
                                <th>Annual Income</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ';
        }
        else{
            echo '<div class="alert alert-danger" role="alert">
            You are not logged in!
          </div>';
          header("location: login.php");
        }
        ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {

            function getData(){
                output = "";
                $.ajax({
                    url: "getData.php",
                    method: "get",
                    dataType: "json",
                    success: function(data){
                        if(data){
                            x=data;
                        }
                        else{
                            x="";
                        }
                        for(i=0;i<x.length;i++){
                            output+=
                            "<tr><td>"+
                            x[i].id + 
                            "</td><td>" + 
                            x[i].AccountId + 
                            "</td><td>" + 
                            x[i].firstname + 
                            "</td><td>" + 
                            x[i].lastname + 
                            "</td><td>" + 
                            x[i].DOB + 
                            "</td><td>" + 
                            x[i].gender + 
                            "</td><td>" + 
                            x[i].email + 
                            "</td><td>" + 
                            x[i].address + 
                            "</td><td>" + 
                            x[i].phone + 
                            "</td><td>" + 
                            x[i].CNIC + 
                            "</td><td>" + 
                            x[i].accountType + 
                            "</td><td>" + 
                            x[i].sourceOfIncome + 
                            "</td><td>" + 
                            x[i].employmentStatus + 
                            "</td><td>" + 
                            x[i].incomeRange + 
                            "</td><td> <button class='btn btn-danger btn-sm btn-del'" +
                            "data-uid=" + x[i].id + ">Delete User</button> </td></tr>";

                        }
                        $("#table-body").html(output);
                    }
                })
            }
            getData();
            $("#table-body").on("click",".btn-del",function(){
                let id = $(this).attr("data-uid");
                $.ajax({
                    url: "delete.php",
                    method: "POST",
                    data: { 
                        uid: id,
                    },
                    success: function(data){
                        getData();
                    }
                })
            })
        })
    </script>
</body>

</html>