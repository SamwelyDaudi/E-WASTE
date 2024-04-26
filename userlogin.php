<?php
session_start(); // Start session
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>User Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="C:\xampp\htdocs\E-WASTE\icofont\icofont.min.css">
</head>
<body class="bg-light">
     <div class="log-in">
        <div class="container-fluid bg-success p-4">
            <div class="row">
            <div class="col-sm-11 text-center text-white" >

                    <h1 >E-Waste Collection Sytem</h1>
                </div>
            <div class="col-sm-1">
                   icon here 
            </div>
            </div>       
        </div>
        
    </div> 

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                <h3 class="text-center">User Login</h3>
                </div>
                <div class="card-body">
                <!-- Login Form -->
                <form action="userloginhandler.php" method="POST">
                    <div class="form-group">
                    <label for="userid">UserID</label>
                    <input type="text" class="form-control" id="userID" placeholder="Enter your ID" name="UserID"required>
                    </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                    </div>
                
                <div class="container">
                    
                    <div class="col-sm-12">
                        <button type="Submit" class="btn btn-sm btn-success mx-auto d-block col-md-6 col-lg-6 p-1 rounded-pill" name="login">Login</button>
                    </div>
                    <div class="register text-center mt-2">
                       <p>Don't have account? <a href="userregistration.php">Register</a></p> 
                    </div>
                </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>

       


</div>
<div class="container-fluid bg-success p-4  fixed-bottom text-center text-white">
        <p>&copy; <?php echo date("Y"); ?>: Developed By 4</p>
        </div>

        <!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
