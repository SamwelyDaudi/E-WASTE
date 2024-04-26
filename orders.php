<?php
session_start(); // Start session
// Check if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: userlogin.php"); // Redirect to login page
    exit(); // Stop further execution
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>WCMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="assets/css/marc.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="admin/icofont/icofont.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS for footer -->
    <style>
        footer{
            background-color: #424558;
            bottom: 0;
            left: 0;
            right: 0;
            height: 35px;
            text-align: center;
            color: #CCC;
        }
        footer p {
            padding: 10.5px;
            margin: 0px;
            line-height: 100%;
        }
    </style>


</head>
<body>
    <div id="wrapper">
        <?php include 'includes/nav.php'?>
        <?php include 'dbcon.php'?>
        <div id="page-wrapper">
            <div class="row">
                <div class=".col-lg-12 text-center">
                    <h3>Admin Panel</h3>
                       <hr>
                </div>
            </div>
            <div class="main-content"> 
                <div class="card-container">
                    <h3 class="main-title">Your Transactions</h3>
                    <!-- Finance data table -->
                    <div class="tabular-wrapper">
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Items</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include "dbcon.php";
                                    $qry = "select * from orders";
                                    $result = mysqli_query($con, $qry);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "
                                            <tr>
                                                <td>".$row['OrderID']."</td>
                                                <td>".$row['item_name']."</td>
                                                <td>".$row['quantity']."</td>
                                                <td>".$row['OrderDate']."</td>
                                                <td>".$row['Status']."</td> 
                                                <td><a href='#' class='approve-link' data-orderid='".$row['OrderID']."'><span>Approve</span></a></td>
                                            </tr>";
                                    }

                                    ?>
                                </tbody>
                            </table>                           
                        </div>
                    </div>
                    <!-- End Finance data table -->
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Event listener for clicking on the "Approve" link
    document.querySelectorAll('.approve-link').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default link behavior

            const orderId = e.target.dataset.orderid; // Get the order ID from the data attribute

            // Display the SweetAlert confirmation dialog
            Swal.fire({
                title: "Do you want to approve this order?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Approve",
                denyButtonText: "Cancel",
            }).then((result) => {
                if (result.isConfirmed) {
                    // If "Approve" is clicked, redirect to the approve.php script with the order ID
                    window.location.href = `approve.php?id=orderid&status=approved`;
                } else if (result.isDenied) {
                    Swal.fire("Order not approved", "", "info");
                }
            });
        });
    });
</script>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="admin/data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By Group 4</p>
    </footer>
</body>
</html>
