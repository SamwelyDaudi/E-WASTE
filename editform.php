<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit staff</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../icofont/icofont.min.css">
</head>
<body>
    <div id="wrapper">
        <?php include 'includes/nav.php'; ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit waste Detail</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Please make your changes by updating the form below:</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form name="form" action="edit.php" method="POST">
                                        <div class="container register">
                                            <div class="card-body">
                                                <div class="mb-2">
                                                    <p class="para card-title text-center">Message us</p>
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" name="name" id="name" class="form-control mb-2" placeholder="Enter Your name" autocomplete="off">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="text" name="email" id="email" class="form-control mb-2" placeholder="Enter Your Email" autocomplete="off">
                                                    <label for="location" class="form-label">Location</label>
                                                    <input type="text" name="location" id="location" class="form-control mb-2" placeholder="Enter Your Location" autocomplete="off">
                                                    <label for="device" class="form-label">Name of Electronic device</label>
                                                    <input type="text" name="device" id="device" placeholder="Eg Computer, MobilePhone etc" class="form-control mb-2" aria-describedby="helpId" autocomplete="off">
                                                    <label for="phonenumber" class="form-label">Phone number</label>
                                                    <input type="text" name="phonenumber" id="phonenumber" class="form-control mb-2" placeholder="0700000000" aria-describedby="helpId" autocomplete="off">
                                                    <input class="button btn btn-danger" type="submit"  name="send">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    <footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By DeadLinerz</p>
    </footer>
    <style>
        footer {
            background-color: #424558;
            bottom: 0;
            left: 0;
            right: 0;
            height: 35px;
            text-align: center;
            color: #CCC;
            position: fixed;
            width: 100%;
            z-index: 9999;
        }
        footer p {
            padding: 10.5px;
            margin: 0px;
            line-height: 100%;
        }
    </style>
</body>
</html>
