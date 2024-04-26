<?php
include 'dbcon.php';

// Check if the submit button is clicked
if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $location = $_POST['location'];
    $device = $_POST['device'];
    $phone_number = $_POST['phonenumber'];
    $id = $_POST['name'];

    // Sanitize inputs to prevent SQL injection
    $email = mysqli_real_escape_string($con, $email);
    $location = mysqli_real_escape_string($con, $location);
    $device = mysqli_real_escape_string($con, $device);
    $phone_number = mysqli_real_escape_string($con, $phone_number);
    $id = mysqli_real_escape_string($con, $id);

    // Update query
    $qry = "UPDATE customer SET Email='$email', CustomerLocation='$location', Device='$device', Phone_Number='$phone_number' WHERE CustomerName='$id'";
    $result = mysqli_query($con, $qry);                                                 
    if (!$result) {
        echo "ERROR: " . mysqli_error($con); // Output error message
    } else {
        header("Location: editview.php"); // Redirect upon successful update
        exit();
    }
}
?>
