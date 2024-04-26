<?php
include "dbcon.php";
// Starting session
session_start();s
 
// Storing session data
$_SESSION["userID"] =;
?>
<!doctype html>
<html lang="en">
<head>
  <title>E-WASTE</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/register.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<script>
  function validate(){
    if(document.form.Fname.value=="" || document.form.Fname.value==null){
      window.alert("Please enter Fisrt name");
      document.form.Fname.focus();
      return false;
     }

if(document.form.Mname.value==""|| document.form.Mname.value==null){
      window.alert("Please enter your Middle name");
      document.form.Mname.focus();
      return false;
     }
     if(document.form.Lname.value=="" || document.form.Lname.value==null){
      window.alert("Please enter Last name");
      document.form.Lname.focus();
      return false;
     }

if(document.form.number.value==""|| document.form.number.value==null){
      window.alert("Please enter your Registration number");
      document.form.number.focus();
      return false;
     }
     if(document.form.Year.value=="" || document.form.Year.value==null){
      window.alert("Please enter Year of study");
      document.form.Year.focus();
      return false;
     }

if(document.form.Mnane.value==""|| document.form.email.value==null){
      window.alert("Please enter your Email");
      document.form.email.focus();
      return false;
     }
     return true;
  }
</script>


<body>
  <div class="header bg-primary p-4">
    <h2 class="card-title text-center" >E-WASTE</h2>
  </div>
  <div class="form mt-2 bg-light">
  <form  name="form" action="addedcustomer.php" onsubmit=" return validate()" method="POST">
        <div class="container register">
            <div class="card-body">
                 <div class="mb-2">
                  <p class=" para card-title text-center">Message us </p>
                   <div class="mb-2">
                    <label for="" class="form-label">Customer ID</label>
                    <input type="text" name="CustomerID"  class="form-control mb-2" placeholder="Enter Your ID " aria-describedby="helpId" autocomplete="off ">
                  <div class="mb-2">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control mb-2" placeholder="Enter Your name " aria-describedby="helpId" autocomplete="off ">
                    <div class="mb-2">
                      <label for="" class="form-label">Email</label>
                      <input type="text" name="email" id="" class="form-control mb-2" placeholder="Enter Your Email " aria-describedby="helpId" autocomplete="off ">
                      <div class="mb-2">
                          <label for="" class="form-label">Location</label>
                          <input type="text" name="location" id="" class="form-control mb-2" placeholder="Enter Your Location " aria-describedby="helpId" autocomplete="off ">
                          <div class="mb-2">
                              <label for="" class="form-label">Name of Electronic device</label>
                              <input type="text" name="device" id="" placeholder="Eg Computer, MobilePhone etc" class="form-control mb-2"  aria-describedby="helpId" autocomplete="off ">
                              <div class="mb-2">
                                  <label for="" class="form-label">Phone number</label>
                                <input type="text" name="phonenumber" id="" class="form-control mb-2" placeholder="0700000000" aria-describedby="helpId" autocomplete="off ">
                      
                  	    <input class=" button  btn btn-danger" type="submit" name="send" > 
                 	   </div>
                	 </div>
         	    </form>
                </div>
             </div> 
          </form>
</div>
</div>
  <div class="footer fixed-bottom">
        <section>
          <!-- Footer -->
          <footer class="text-center text-white" style="background-color: #0a4275;">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: CTA -->
          <section class="">
            <p class="d-flex justify-content-center align-items-center">
              <span class="me-3"> </span>
              <a data-mdb-ripple-init href="logout.php" class="btn btn-outline-light btn-rounded" >
                Log Out
              </a>
            </p>
          </section>
          <!-- Section: CTA -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2024 Copyright:
          <a class="text-white" href="#">E-waste.com</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </section>
  </div>
  
  </div>
  </div>
    

    
    
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>