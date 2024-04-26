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

    <title>Announcement</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor\metisMenu\metisMenu.cssw" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist\css\sb-admin-2.css" rel="stylesheet">
    <link href="assets\css\marc.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor\morrisjs\morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor\font-awesome\css\font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="admin\icofont\icofont.min.css">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <?php include 'includes\nav.php'?>
        <?php include 'dbcon.php'?>


        <div id="page-wrapper">
            <div class="row">
                <div class=".col-lg-12 text-center">
                       <?php
                        $qry = "SELECT * FROM useraccount";
                        $result = mysqli_query($con, $qry);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<h3 class='page-header'>" .$row['UserName'] . "</h3>";
                            }
                        } else {
                            echo "No data found.";
                        }
                        ?> 
                </div>

                <!-- /.col-lg-12 -->


                
            </div>
            

                <div class="card-container">

                    <h3 class="main-title">Announcement</h3>
                    <div class="card-wrapper">

                      <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Content</th>
                                    <th>Date Issued</th>
                                    <th>Ogernized By</th>       
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "dbcon.php";
                                $qry = "select * from announce";
                                $result = mysqli_query($con, $qry);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "
                                        <tr>
                                        <td>".$row['AnnouncementID']."</td>
                                            <td>".$row['announcement']."</td>
                                            <td>".$row['dat']."</td>
                                            <td>".$row['organizer']."</td>
                                            
                                        </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                 </div>





            </div>










        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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

</body>

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By Group 4</p>
    </footer>
	
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



</html>
